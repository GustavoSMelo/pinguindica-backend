<?php

namespace Tests\Feature;

use App\Models\Distro;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class DistroControllerTest extends TestCase
{
    use RefreshDatabase;
    protected const SECURITY_PASSWORD = 'test-security-pass';

    protected array $validDistroData = [
        'difficult' => 'easy',
        'old_hardware' => true,
        'appearance' => ['windows-like', 'terminal'],
        'focus' => ['general use', 'entry point'],
        'logo_url' => 'http://example.com/logo.png',
        'recommended' => false,
        'name' => 'Test Distro',
        'download_page' => 'http://example.com/download',
        'difficulty' => 'http://example.com/difficulty',
        'description' => 'A test description.',
        'security_password' => self::SECURITY_PASSWORD,
    ];

    protected function setUp(): void
    {
        parent::setUp();
        config(['app.security_password' => self::SECURITY_PASSWORD]);
    }

    public function test_index_returns_all_distros(): void
    {
        $distros = Distro::factory()->count(3)->create();
        $response = $this->getJson('/api/distros');
        $response->assertStatus(200)
            ->assertJsonCount(3)
            ->assertJsonStructure([
                '*' => [
                    'id',
                    'name',
                    'difficulty',
                    'old_hardware',
                ]
            ]);
    }
    public function test_store_creates_distro_with_valid_data(): void
    {
        $response = $this->postJson('/api/distros', $this->validDistroData);
        $response->assertStatus(200)
            ->assertJson([
                'message' => 'distro created with success',
            ]);

        $this->assertDatabaseHas('distro', [
            'name' => 'Test Distro',
            'difficulty' => 'easy',
            'old_hardware' => 1,
            'recommended' => 0,
            'appearance' => json_encode(['windows-like', 'terminal']),
            'focus' => json_encode(['general use', 'entry point']),
        ]);
    }

    public function test_store_returns_400_with_invalid_security_password(): void
    {
        $invalidData = array_merge($this->validDistroData, ['security_password' => 'wrong-pass']);
        $response = $this->postJson('/api/distros', $invalidData);
        $response->assertStatus(400)
            ->assertJson(['message' => 'security password is invalid']);

        $this->assertDatabaseCount('distro', 0);
    }


    public function test_show_filters_distros_by_criteria(): void
    {
        $matchingDistro = Distro::factory()->create([
            'difficulty' => 'easy',
            'old_hardware' => true,
            'appearance' => json_encode(['windows-like', 'terminal']),
            'focus' => json_encode(['general use']),
        ]);
        Distro::factory()->create(['difficulty' => 'hard']); // Non-matching

        $filterData = [
            'difficult' => 'easy',
            'old_hardware' => true,
            'appearance' => ['windows-like'],
            'focus' => ['general use'],
        ];
        $response = $this->postJson('/api/distros/filter', $filterData);

        $response->assertStatus(200)
            ->assertJsonCount(1) // Expect only the matching distro
            ->assertJsonFragment(['name' => $matchingDistro->name]);
    }


    public function test_update_modifies_distro_with_valid_data(): void
    {
        $distro = Distro::factory()->create(['name' => 'Original Name']);

        $updateData = array_merge($this->validDistroData, ['name' => 'Updated Name']);
        $response = $this->putJson("/api/distros/{$distro->id}", $updateData);
        $response->assertStatus(200)
            ->assertJson(['message' => 'Distro updated with success']);

        $this->assertDatabaseHas('distro', [
            'id' => $distro->id,
            'name' => 'Updated Name',
            'difficulty' => 'easy',
        ]);
    }

    public function test_update_returns_400_with_invalid_security_password(): void
    {
        $distro = Distro::factory()->create(['name' => 'Original Name']);
        $updateData = array_merge($this->validDistroData, [
            'name' => 'Updated Name Attempt',
            'security_password' => 'wrong-pass'
        ]);
        $response = $this->putJson("/api/distros/{$distro->id}", $updateData);

        $response->assertStatus(400)
            ->assertJson(['message' => 'security password is invalid']);
        $this->assertDatabaseHas('distro', [
            'id' => $distro->id,
            'name' => 'Original Name',
        ]);
        $this->assertDatabaseMissing('distro', [
            'name' => 'Updated Name Attempt',
        ]);
    }

    public function test_destroy_deletes_the_distro(): void
    {
        $distro = Distro::factory()->create();
        $response = $this->deleteJson("/api/distros/{$distro->id}");
        $response->assertStatus(200)
            ->assertJson(['message' => 'Distro deleted with success']);

        $this->assertDatabaseMissing('distro', ['id' => $distro->id]);
    }

    public function test_destroy_handles_non_existent_distro(): void
    {
        $nonExistentId = 999;
        $response = $this->deleteJson("/api/distros/{$nonExistentId}");
        $response->assertStatus(400);
    }
}

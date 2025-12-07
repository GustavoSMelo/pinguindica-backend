<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Distro>
 */
class DistroFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'difficulty' => 'easy',
            'old_hardware' => false,
            'appearance' => json_encode(['windows-like']),
            'focus' => json_encode(['general use']),
            'logo_url' => $this->faker->imageUrl(),
            'description' => $this->faker->sentence(),
            'download_page' => $this->faker->url(),
            'name' => $this->faker->word(),
            'recommended' => false,
        ];
    }
}

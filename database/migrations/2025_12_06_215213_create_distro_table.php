<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('distro', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('difficulty');
            $table->boolean('old_hardware')->default(false);
            $table->boolean('recommended')->default(false);
            $table->string('appearance');
            $table->string('focus');
            $table->text('description');
            $table->string('download_page');
            $table->text('logo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('distro');
    }
};

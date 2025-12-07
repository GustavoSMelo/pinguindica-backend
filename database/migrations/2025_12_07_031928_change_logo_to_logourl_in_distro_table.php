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
        Schema::table('distro', function (Blueprint $table) {
            $table->renameColumn('logo', 'logo_url');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('distro', function (Blueprint $table) {
            $table->renameColumn('logo_url', 'logo');
        });
    }
};

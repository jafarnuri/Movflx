<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('socials', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('facebook')->nullable(); // Facebook linki
            $table->string('twitter')->nullable(); // Twitter linki
            $table->string('instagram')->nullable(); // Instagram linki
            $table->string('linkedin')->nullable(); // LinkedIn linki
            $table->string('youtube')->nullable(); // YouTube linki
            $table->timestamps(); // Yaradılma və yenilənmə tarixləri
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('socials');
    }
};

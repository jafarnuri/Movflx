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
        Schema::create('communications', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('email'); // E-poçt
            $table->string('phone')->nullable(); // Telefon nömrəsi
            $table->string('address')->nullable(); // Ünvan
            $table->timestamps(); // Yaradılma və yenilənmə tarixləri
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('communications');
    }
};

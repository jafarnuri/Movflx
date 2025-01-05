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
        Schema::create('movies', function (Blueprint $table) {
         
            $table->id(); // Primary key
            $table->string('title'); // Film başlığı
            $table->string('subtitle')->nullable(); // Film alt başlığı
            $table->foreignId('category_id')->constrained('movie_categories'); // Film kateqoriyası (xarici açar)
            $table->string('release_year'); // Buraxılış ili
            $table->string('quality')->nullable(); // Keyfiyyət (HD, 4K vs.)
            $table->integer('duration')->nullable(); // Film müddəti (dəqiqə ilə)
            $table->text('description')->nullable(); // Film haqqında izah
            $table->string('poster_image')->nullable(); // Film poster şəkli
            $table->string('trailer_url')->nullable(); // Film trailer URL-si
            $table->string('movie_url')->nullable(); // Filmin öz URL-si
            $table->boolean('status'); // status
            $table->timestamps(); // Yaradılma və yenilənmə tarixləri
         
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movies');
    }
};

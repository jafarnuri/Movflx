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
        Schema::create('abouts', function (Blueprint $table) {
            $table->id(); // Unikal ID
            $table->string('title'); // Başlıq
            $table->string('video_link'); // Video linki
            $table->unsignedBigInteger('category_id'); // Kategoriya ilə əlaqə
            $table->date('release_date'); // Yayım tarixi
            $table->time('duration'); // Video müddəti
            $table->timestamps(); // Yaradılma və yenilənmə tarixləri

            // Xarici açar əlaqəsi
            $table->foreign('category_id')->references('id')->on('movie_categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abouts');
    }
};

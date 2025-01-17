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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id(); // Unikal ID
            $table->string('title'); // Başlıq
            $table->string('slug')->unique(); // Blog üçün unikal slug (URL-də istifadə olunur)
            $table->string('image'); // Blogun şəkil faylının yolu
            $table->text('content'); // Blogun qısa təsviri və ya məzmunu
            $table->text('description'); 
            $table->boolean('status'); 
            $table->string('author')->default('admin'); // Müəllifin adı
            $table->integer('likes')->default(0); // Like sayı
            $table->integer('comments_count')->default(0); // Şərh sayı  
            $table->foreignId('category_id')->constrained('blog_categories')->cascadeOnDelete(); 
            $table->timestamps(); // Yaradılma və yenilənmə tarixləri
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};

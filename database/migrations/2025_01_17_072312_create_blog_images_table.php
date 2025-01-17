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
        Schema::create('blog_images', function (Blueprint $table) {
            $table->id(); // Unikal ID
            $table->unsignedBigInteger('blog_id'); // Şəkilin aid olduğu blog ID
            $table->string('image_path'); // Şəkil faylının yolu
            $table->timestamps();
        
            // Xarici açar əlaqələri
            $table->foreign('blog_id')->references('id')->on('blogs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blog_images');
    }
};

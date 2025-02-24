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
        Schema::create('post_descriptions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('post_id'); // Post tablosuyla ilişki
            $table->text('description'); // Açıklama metni
            $table->timestamps();
            $table->softDeletes(); // Soft delete ekleniyor

            // Foreign Key (Post tablosuna bağlanıyor)
            $table->foreign('post_id')->references('id')->on('posts')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('post_descriptions');
    }
};

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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Kullanıcı ile ilişkilendir
            $table->foreignId('category_id')->nullable()->constrained()->onDelete('set null'); // Kategori ile ilişkilendir
            $table->string('title'); // Yazı başlığı
            $table->text('content'); // Yazı içeriği
            $table->string('slug')->unique(); // URL dostu başlık
            $table->boolean('is_published')->default(false); // Yayın durumu
            $table->softDeletes();
            $table->timestamps(); // created_at ve updated_at

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};

<?php

use App\Models\Post;
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
            $table->string('name');
            $table->string('slug')->unique();
            $table->text('extract');
            $table->longText('body');
            $table->enum('status',[Post::BORRADOR,Post::PUBLICADO])->default(Post::BORRADOR);

            /* $table->unsignedBigInteger('categoy_id');
            $table->foreign('category_id')->references('id')->on('categories'); */
            
            $table->foreignId('category_id')->constrained()->onDelete('cascade');
            
            $table->foreignId('user_id')->constrained()->onDelete('cascade');

            $table->timestamps();
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

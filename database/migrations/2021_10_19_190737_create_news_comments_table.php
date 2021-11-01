<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news_comments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('post_id')->nullable(false)->constrained('news')->onDelete('cascade');
            $table->foreignId('user_id')->nullable()->constrained('users')->nullOnDelete();
            $table->foreignId('published_by')->nullable()->constrained('users')->nullOnDelete();
            $table->string('content', 500)->nullable(false);
            $table->timestamps();
        });

        // $table->unsignedBigInteger('post_id')->nullable(false);
        // $table->unsignedBigInteger('user_id')->nullable();
        // $table->unsignedBigInteger('published_by')->nullable();
        
            // внешний ключ, ссылается на поле id таблицы posts
            // $table->foreign('post_id')
            //     ->references('id')
            //     ->on('posts')
            //     ->onDelete('cascade');
            // // внешний ключ, ссылается на поле id таблицы users
            // $table->foreign('user_id')
            //     ->references('id')
            //     ->on('users')
            //     ->nullOnDelete();
            // // внешний ключ, ссылается на поле id таблицы users
            // $table->foreign('published_by')
            //     ->references('id')
            //     ->on('users')
            //     ->nullOnDelete();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('news_comments');
    }
}

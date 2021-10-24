<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained('users')->nullOnDelete();
            $table->foreignId('published_by')->nullable()->constrained('users')->nullOnDelete();
            $table->foreignId('category_id')->nullable()->constrained('news_categories')->nullOnDelete();
            $table->string('name', 100);
            $table->string('slug', 100)->unique();
            $table->string('image', 50)->nullable();
            $table->string('excerpt', 500)->nullable(false);
            $table->text('content')->nullable(false);
            $table->timestamps();

            /**
             * published_at
             * created_at
             * 
             * 
             */


/*
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('published_by')->nullable();
            $table->unsignedBigInteger('category_id')->nullable();
            // внешний ключ, ссылается на поле id таблицы users
            $table->foreign('user_id')
                ->references('id')
                ->on('brands')
                ->nullOnDelete();
            // внешний ключ, ссылается на поле id таблицы users
            $table->foreign('published_by')
                ->references('id')
                ->on('users')
                ->nullOnDelete();
            // внешний ключ, ссылается на поле id таблицы categories
            $table->foreign('category_id')
                ->references('id')
                ->on('categories')
                ->nullOnDelete();
*/
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('news');
    }
}

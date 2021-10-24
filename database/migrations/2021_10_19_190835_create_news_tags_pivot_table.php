<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsTagsPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news_news_tag', function (Blueprint $table) {
            
            $table->foreignId('news_id')->constrained('news')->onDelete('cascade');
            $table->foreignId('news_tag_id')->constrained('news_tags')->onDelete('cascade');
            $table->primary(['news_id', 'news_tag_id']);
            
            
            // $table->id();
            // $table->timestamps();
            // $table->foreignId('user_id')->nullable()->constrained('users')->nullOnDelete()
            // $table->unsignedBigInteger('post_id');
            // $table->unsignedBigInteger('tag_id');
            // $table->timestamps();
            // внешний ключ, ссылается на поле id таблицы posts
            // $table->foreign('post_id')
            //     ->references('id')
            //     ->on('posts')
            //     ->onDelete('cascade');
            // внешний ключ, ссылается на поле id таблицы tags
            // $table->foreign('tag_id')
            //     ->references('id')
            //     ->on('tags')
            //     ->onDelete('cascade');
            // // составной первичный ключ
            // $table->primary(['post_id', 'tag_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('news_news_tag');
    }
}

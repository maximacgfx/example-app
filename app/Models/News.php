<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\NewsTag;

class News extends Model
{
    use HasFactory;

    protected  $table ='news';

    protected $dates = ['published_at'];



    /**
     * Связь модели News с моделью Tag, позволяет получить
     * все теги поста
     */
    public function tags() {
        return $this->belongsToMany(NewsTag::class);
    }



    /**
     * Связь модели News с моделью Category, позволяет получить
     * родительскую категорию поста
     */
    public function category() {
        return $this->belongsTo(Category::class);
    }

    /**
     * Связь модели News с моделью User, позволяет получить
     * автора поста
     */
    public function user() {
        return $this->belongsTo(User::class);
    }
    
    
}

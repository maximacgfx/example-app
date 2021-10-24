<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class NewsCategory extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function tags() {
        return $this->belongsToMany(Tag::class);
    }


    /**
     * Связь модели Category с моделью News, позволяет получить
     * все посты, размещенные в текущей категории
     */
    public function news() {
        return $this->hasMany(Post::class);
    }

    /**
     * Возвращает список корневых категорий блога
     */
    public static function roots() {
        return self::where('parent_id', 0)->get();
    }
}

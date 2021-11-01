<?php

namespace App\Models;

use App\Models\NewsCategory;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\NewsTag;
use App\Models\Author;
use Rennokki\QueryCache\Traits\QueryCacheable;

/**
 *  id (unsignedBigInteger)
 *  user_id (bigInteger)
 *  published_by (bigInteger)
 *  category_id (bigInteger)
 *  title   (string 100)
 *  slug    (string 100)
 *  image   (string 50)
 *  excerpt (string 500)
 *  content (text)
 *  published_at (timestamp)
 */

class News extends Model
{
    use HasFactory;


//    use QueryCacheable;
//    protected $cacheFor = 180; // 3 минуты

    protected  $table ='news';

    protected $dates = ['published_at'];

    protected $fillable = ['user_id',
        'published_by' ,
        'category_id' ,
        'title' ,
        'slug' ,'image','excerpt','content','published_at'];

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
        return $this->hasOne(NewsCategory::class);
    }

    /**
     * Связь модели News с моделью User, позволяет получить
     * автора поста
     */
    public function user() {
        return $this->belongsTo(User::class);
    }


    public function Author() {
        return $this->belongsTo(User::class,'user_id');
    }


    /**
     * @param  int  $count
     * @return mixed
     */
    public static function latest()
    {
        return self::where('published_at', '<=', Carbon::now())
            ->orderBy('published_at', 'desc')
            ->take(4)
            ->get();
    }

}

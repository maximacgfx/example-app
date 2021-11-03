<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\News;
use Rennokki\QueryCache\Traits\QueryCacheable;
use Debugbar;


class NewsTag extends Model
{
    use HasFactory;

// use QueryCacheable;
//    protected $cacheFor = 180; // 3 минуты
//    protected $fillable = ['name','slug'];




    public $timestamps = false;

    protected  $table ='news_tags';

    public function news() {
        return $this->belongsToMany(News::class);
    }


    /**
     * Возвращает 10 самых популярных тегов, то есть тегов, которые
     * связаны с наибольшим количеством постов
     */
    public static function popular() {
        
        $res = self::withCount('news')->orderByDesc('posts_count')->limit(10)->get();

        // Debugbar::info($res);
        // dd($res);
        return $res;
        

    }
}

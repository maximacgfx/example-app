<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\News;
use Rennokki\QueryCache\Traits\QueryCacheable;


class NewsTag extends Model
{
    use HasFactory;
    use QueryCacheable;
//    protected $cacheFor = 180; // 3 минуты
//    protected $fillable = ['name','slug'];



    public $timestamps = false;

    protected  $table ='news_tags';

    public function news() {
        return $this->belongsToMany(News::class);
    }
}

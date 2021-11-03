<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\News;
use App\Models\NewsTag;
use Rennokki\QueryCache\Traits\QueryCacheable;

class NewsCategory extends Model
{
    use HasFactory;

    
//    use QueryCacheable;
//    protected $cacheFor = 180; // 3 минуты

    public $timestamps = false;

    protected $table ='news_categories';

   protected $fillable = [
       'parent_id',
       'name' ,
       'slug' ,
       'image' ,
       'content' ];

//    public function tags() {
//        return $this->belongsToMany(NewsTag::class);
//    }


    /**
     * Связь модели Category с моделью News, позволяет получить
     * все посты, размещенные в текущей категории
     */
    public function news() {
        return $this->hasMany(News::class ,'category_id');
    }

    /**
     * Возвращает список корневых категорий блога
     */
    public static function roots() {
        return self::where('parent_id', 0)->get();
    }


    /**
     * Связь модели Category с моделью Category, позволяет получить
     * родителя текущей категории
     */
    public function parent() {
        return $this->belongsTo(NewsCategory::class, 'parent_id');
    }

    /**
     * Связь модели Category с моделью Category, позволяет получить все
     * дочерние категории текущей категории
     */
    public function children() {
        return $this->hasMany(NewsCategory::class, 'parent_id');
    }

    /**
     * Возвращает массив идентификаторов всех потомков категории
     */
    public static function descendants($id) {
        // получаем прямых потомков категории с идентификатором $id
        $children = self::where('parent_id', $id)->get();
        $ids = [];
        foreach ($children as $child) {
            $ids[] = $child->id;
            // для каждого прямого потомка получаем его прямых потомков
            if ($child->children->count()) {
                $ids = array_merge($ids, self::descendants($child->id));
            }
        }
        return $ids;
    }

    public function ScopePublished($query)
    {
        return $query->where('published_at', '<=', Carbon::now());
    }

}

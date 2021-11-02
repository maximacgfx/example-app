<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\NewsTag;
use App\Models\NewsComment;
use App\Models\NewsCategory;
use App\Models\User;
use Debugbar;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Cache;
use View;

class NewsController extends Controller
{


    protected $expires;

    public function __construct()
    {

        // $this->view = view('Template::pages.blog');
        // $this->title = __()
        $this->expires = 120;

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $posts = News::select('image', 'user_id', 'excerpt', 'slug', 'published_at', 'title')
            // ->where('published_at', '<=', Carbon::now())
            ->orderBy('published_at', 'desc')
            // ->paginate(config('blog.posts_per_page'));
            ->paginate(6);

        // dd($posts);
        // $data=[
        //    'title' => 'Новости Hasyl Cesmesi',
        //    'posts' => $posts,
        // ];
        return view('Template::pages.blog', [
            'title' => 'Новости Hasyl Cesmesi',
            'posts' => $posts,
            'content' => ''
        ]);

        // template.pages.blog
    }

    public function newsPage(Request $request)
    {
        $posts = News::Published()->paginate(6);

        return view('Template::pages.blog', [
            'title' => 'Новости Hasyl Cesmesi',
            'posts' => $posts,
            'content' => ''
        ]);

        // template.pages.blog
    }


    /**
     * Список постов блога с выбранным тегом
     * "@param  NewsTag  $tag
     */
    public function tags(NewsTag $tag)
    {
        $posts = $tag->news()->where('published_at', '<=', Carbon::now())
            ->orderBy('published_at', 'desc')
            ->paginate(3);

        $title = 'Тег: '.$tag->name;
        $content = 'Посты с тегом:'.$tag->description;

        return view('Template::pages.blog-category', compact( 'posts', 'title', 'content'));
    }


    /**
     * Вывод отдельной страницы новостей
     * @param $slug
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function slug($slug)
    {

//        dd($slug);

        $post = news::whereSlug($slug)->firstOrFail();
//            ->remember();


        // $image = 'assets/img/blog/'.$post->image;
        //$image = asset('assets/img/blog/'.$post->image);
        $title = '';
//        dd($tags);
        return view('Template::pages.single', compact('post', 'title',));
        // return view('blog.post')->withPost($post);
    }


    /**
     * Список постов блога выбранной категории
     */
    public function category(NewsCategory $category)
    {

        $posts = $category->news()
            ->where('published_at', '<=', Carbon::now())
            ->orderBy('published_at', 'desc')->paginate(5);

        if ($posts->isNotEmpty()) {
            $title = 'Категория '.$category->name;
            $content = $category->content;
        } else {
            $title = 'Нет постов в категории  '.$category->name;
            $content = $category->content;
        }

        return view('Template::pages.blog-category', compact('category', 'posts', 'title', 'content'));
    }

    /**
     * Список постов блога выбранного автора
     */
    public function author(User $user)
    {

        $posts = $user->posts()
            ->orderBy('created_at', 'desc')
            ->paginate(5);

        $title = 'Посты автора '.$user->name;
        $content = '';

        return view('Template::pages.blog-category', compact('user', 'posts', 'title', 'content'));
    }




    /*
     * Кеш Функции здесь
     *
     *
     * */


    /**
     * @param $key
     * @return mixed
     */
    protected function get($key)
    {
        Debugbar::info(' Get '.$key);
        return Cache::get($key);
    }

    /**
     * @param $key
     * @param $value
     */
    protected function set($key, $value)
    {
        if (!$this->isCached($key)) {
            Cache::put($key, $value, $this->expires);
            Debugbar::info(' Set '.$key.', Expires '.$this->expires.' сек.');
        }
    }

    /**
     * @param $key
     * @return bool
     */
    protected function isCached($key)
    {
        return (bool)Cache::has($key);
    }

    /**
     * Страница просмотра отдельного поста блога
     */
    public function slug2($slug)
    {

//        dd($slug);

//        $post = news::whereSlug($slug)->firstOrFail();

        // Проверяем, нет ли такой страницы в кэше
        if (!$this->isCached($slug)) {
            $post = news::whereSlug($slug)->firstOrFail();


            Cache::put($slug, $post, $this->expires);
            Debugbar::info(' Set '.$slug.', Expires '.$this->expires.' сек.');
        } else {

            $post = Cache::get($slug);
            Debugbar::info(' Get '.$slug.', Expires '.$this->expires.' сек.');
//            dd($post->tags);
        }

        if ($post->tags->count()) {

            if (!$this->isCached($slug.'_tags')) {

                $tags = $post->tags;
                Cache::put($slug.'_tags', $post->tags, $this->expires);

                Debugbar::info(' Set '.$slug.'_tags  , Expires '.$this->expires.' сек.');
                dd($tags);
            } else {

                $tags = Cache::get($slug.'_tags');
                Debugbar::info(' Get '.$slug.'_tags , Expires '.$this->expires.' сек.');
                //            dd($tags);
            }
        }
        // $image = 'assets/img/blog/'.$post->image;
        //$image = asset('assets/img/blog/'.$post->image);
        $title = '';
//        dd($tags);
        return view('Template::pages.single', compact('post', 'title', 'tags'));
        // return view('blog.post')->withPost($post);
    }
}

/*
General error: 1 no such column: news.news_category_id (SQL: select count(*) as
aggregate from "news" where "news"."news_category_id" = 2 and "news"."news_category_id" is not null)
*/

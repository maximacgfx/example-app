<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\NewsTag;
use App\Models\NewsComment;
use App\Models\NewsCategory;
use Illuminate\Http\Request;
use Carbon\Carbon;
use View;

class NewsController extends Controller
{   

    public function __construct (){

        // $this->view = view('Template::pages.blog');
        // $this->title = __()

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {  


        // $posts = News::orderBy('created_at', 'desc')->paginate(5);

        $posts = News::where('published_at', '<=', Carbon::now())
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
        ]);

        // template.pages.blog
    }





    /**
     * Список постов блога с выбранным тегом
     */
    public function tags( NewsTag $tag ) {
        // dd($tag->news());



        $posts = $tag->news()->where('published_at', '<=', Carbon::now())
            ->orderBy('published_at', 'desc')
            ->paginate(3);

        // dd($posts);


        $title='Посты с тегом:'.$tag->name;

        return view('Template::pages.blog-category', compact('tag', 'posts','title'));
    }
  
    


    /**
     * Страница просмотра отдельного поста блога
     */
    public function slug($slug) {
        
        $post = news::whereSlug($slug)->firstOrFail();

        // dd($post);   
        // $image = 'assets/img/blog/'.$post->image;
        $image = asset('assets/img/blog/'.$post->image);

        return view('Template::pages.single', compact('post' , 'image'));
        // return view('blog.post')->withPost($post);
    }


    /**
     * Список постов блога выбранной категории
     */
    public function category(Category $category) {
        $posts = $category->posts()
            ->orderBy('created_at', 'desc')
            ->paginate(5);
        return view('blog.category', compact('category', 'posts'));
    }

    /**
     * Список постов блога выбранного автора
     */
    public function author(User $user) {
        $posts = $user->posts()
            ->orderBy('created_at', 'desc')
            ->paginate(5);
        return view('blog.author', compact('user', 'posts'));
    }
}

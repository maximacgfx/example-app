<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;
use Auth;
use Gate;
use Str;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('news.parts.add_news',['title' => 'Новый материал']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $article = new News;

        /*if(Gate::denies('add',$article)) {
            return redirect()->back()->with(['message'=>'У Вас нет прав']);
        }*/

//        if($request->user()->cannot('add',$article)) {
//            return redirect()->back()->with(['message'=>'У Вас нет прав']);
//        }


        $this->validate($request,[
            'title'=>'required',
            'content' =>'required'
        ]);

        $user = Auth::user();
        $data = $request->all();

        $res = $user->posts()->create([
            'title' => $data['title'],
            'slug' => Str::slug(substr($data['title'],0,30)),
            'image' => $data['image'],
            'content' => $data['content'],
            'excerpt' => $data['excerpt'],
            'published_at' => now('Europe/London'),
            'published_by' => rand(1, 10),
            'category_id' => rand(1, 10),
        ]);


        return redirect()->back()->with('message','Материал добавлен');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {
        $posts = $news::select( 'id','user_id', 'created_at', 'title','published_by')
        // // ->where('published_at', '<=', Carbon::now())
        // ->orderBy('published_at', 'desc')
        // // ->paginate(config('blog.posts_per_page'));
        ->paginate(10);
        // $posts = $news::all();
        // dd($posts);

        return view('news.parts.show_news' ,['title' => 'Все посты блога', 'posts' => $posts]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = News::whereId($id)->firstOrFail();

        return view('news.parts.edit_news', ['title' => 'Редактирование материала', 'post' => $post]);
    
              
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //        dd($request);
        $this->validate($request, [
            'title' => 'required'
        ]);

        $user = Auth::user();

        $data = $request->except('_token');

        //        dd($data);

        $post = News::find($data['id']);

        //        $post = news::whereSlug($slug)->firstOrFail();

        //
        //        if(Gate::allows('update-article',$post)) {
        //            $post->title = $data['title'];
        //            $post->image = $data['image'];
        //            $post->content = $data['content'];
        //
        //            $res = $user->posts()->save($post);
        //
        //            return redirect()->back()->with('message','Материал обновлен');
        //        }

        $post->title = $data['title'];
        $post->image = $data['image'];
        $post->content = $data['content'];
        $post->excerpt = $data['excerpt'];
        $post->slug = Str::slug(substr($data['title'], 0, 50));

        //        dd(Str::slug(substr($data['title'], 0, 50)));

        $res = $user->posts()->save($post);

        return redirect()->route('news.edit_post', ['id' => $post->id])->with('message', 'Материал обновлен');
      
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * Разрешить публикацию поста блога
     */
    public function enable(News $id) {
        $id->enable();
        $title = $id->title;
        return back()->with('message', 'Пост "' .$title .'"  опубликован.');
    }

    /**
     * Запретить публикацию поста блога
     */
    public function disable(News $id) {

        $title = $id->title;
        $id->disable();
        return back()->with('message', 'Пост "' .$title .'"  снят с публикации.');
    }
}

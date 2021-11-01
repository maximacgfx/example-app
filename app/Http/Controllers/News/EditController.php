<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;
use Auth;
use Gate;
use Str;

class EditController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function edit(Request $request, $id)
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

//        return redirect()->back()->with(['message'=>'У Вас нет прав']);


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */

    public function showPost($id)
    {
        $post = News::whereId($id)->firstOrFail();

        return view('news.edit', ['title' => 'Редактирование материала', 'post' => $post]);
    }


    public function show(Request $request, $id)
    {
        $data = $request->except('_token');
        dd($data);

        $post = News::find($data['id']);
//        dd($id);
//        dd(\request()->route()->action['controller']);
        $post = News::whereId($id);

        dd($post);
//        $post = news::whereSlug($slug)->firstOrFail();

        return view('news.edit', ['title' => 'Редактирование материала', 'post' => $post]);
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
        //
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
}

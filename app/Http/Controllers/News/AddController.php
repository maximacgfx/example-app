<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;
use Auth;
use Str;

class AddController extends Controller
{

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    //new post
    public function create(Request $request) {

        $article = new News;


//        dd($request);
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
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function show(   )
    {
        return view('news.add',['title' => 'Новый материал']);
    }

    public function destroy($id)
    {
        //
    }
}

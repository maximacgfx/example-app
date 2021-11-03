<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\NewsCategory;
use Str;
use DB;

class CategoryController extends Controller
{

    /**
     * Показывает список всех категорий
     * 
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $items = NewsCategory::all();

        // $catpostsnum = DB::table('news_categories')->join('news', 'category_id', '=', 'news_categories.id')->groupBy('news_categories.id')->select(DB::raw('count(1) AS count'))->get();
        // dd($catpostsnum);
        return view('news.parts.show_category',['title' => 'Все Категории.', 'items' => $items]);
    }

    /**
     * Показывает форму для создания категории
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('news.parts.create_category',['title' => 'Добавление новой категории.'] );
    }

    /**
     * Сохранение только что созданной категории.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // dd($request);


        $category = new NewsCategory;

        $this->validate($request,[
            'name'=>'required',
            // 'content' =>'required'
        ]);


        $data = $request->all();

        $res = $category->create([
            'name' => $data['name'],
            'slug' => Str::slug(substr($data['name'],0,30)),
            'parent_id' =>$data['parent_id'],
            // 'image' => $data['image'],
            'content' => $data['content'],
            
            // 'title' => $data['title'],
            // 'slug' => Str::slug(substr($data['title'],0,30)),
            // 'excerpt' => $data['excerpt'],
            // 'published_at' => now('Europe/London'),
            // 'published_by' => rand(1, 10),
            // 'category_id' => rand(1, 10),
        ]);
        ////////////////////////////
        // dd($res);
        // NewsCategory::create($request->all());
        return redirect()
            ->route('news.cat.show')
            ->with('message', 'Новая категория успешно создана');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Показывает форму для редактирования категории
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(NewsCategory $category)
    {
        // dd($category);
        
        return view('news.parts.edit_category',
        ['title' => 'Редактирование категории.' , 'category' => $category] );
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /**
     * Обновляет категорию блога в базе данных
     */
    public function update(Request $request, NewsCategory $category) {

        // dd($request->session('slug'));
        // dd($category);
        $data = $request->all();

        // 'name' => $data['name'],
        // 'slug' => Str::slug(substr($data['name'],0,30)),
        // 'parent_id' =>$data['parent_id'],
        // // 'image' => $data['image'],
        // 'content' => $data['content'],

        $category->content =$data['content'];
        $category->parent_id =$data['parent_id'];
        $category->name =$data['name'];
        $category->slug = Str::slug(substr($data['name'],0,30));
        $category->update();
        // $category->update($request->all());
        
        return redirect()
            ->route('news.cat.show')
            ->with('message', 'Категория была оновлена.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /**
     * Удаляет категорию блога
     */
    public function destroy(NewsCategory $category) {
        if ($category->children->count()) {
            $errors[] = 'Нельзя удалить категорию с дочерними категориями';
        }
        if ($category->news->count()) {
            $errors[] = 'Нельзя удалить категорию, которая содержит посты';
        }
        if (!empty($errors)) {
            return back()->withErrors($errors);
        }
        $category->delete();
        return redirect()
            ->route('news.cat.show')
            ->with('message', 'Категория "' .$category->name .'" успешно удалена');
    }
}

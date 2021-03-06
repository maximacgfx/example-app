<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\News\NewsController;
use \App\Http\Controllers\News\PostController;

use \App\Http\Controllers\News\AddController;

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\User\IndexController;
use App\Http\Controllers\QrCodeController;
use App\Http\Controllers\Memcached\MemcachedController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



Route::get('/start', function () {
    return view('layouts.start');
});

//Route::get('/login', function () {
//    return view('layouts.start')->name('login')->middleware('guest');
//});
Route::get('/register', function () {
    return view('layouts.start')->name('register');
});
Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::namespace('News')->group( function(){
    // Главная страница новостей
        Route::get('news', [NewsController::class,'index'])->name('news');
    // Страница Тегов Новостей
        Route::get('news/tag/{tag:slug}', [NewsController::class,'tags'])->name('news.tags');
    // Страница Категории Новостей
        Route::get('news/cat/{category:slug}', [NewsController::class,'category'])->name('news.cat');
    // Страница автора блога
        Route::get('news/author/{user}', [NewsController::class,'author'])->name('news.author');
    // Страница Одной новости
        Route::get('news/{slug:slug}', [NewsController::class,'slug'])->name('news.slug');


     Route::group(['middleware' =>'auth'], function() {
        // Главная страница новостей
         Route::get('news/edit/{id}', [PostController::class,'edit'])->name('news.edit');
         Route::post('news/edit/{id:id}', [PostController::class,'update'])->name('news.edit_post');

         Route::get('add/news', [PostController::class,'create'])->name('news.add');
         Route::post('add/news', [PostController::class,'store'])->name('news.add_post');

    });


});


// Как сгенерировать pdf в Laravel
//https://maxyc.ru/programming/laravel-pdf-generation/
Route::get('admin/customers',[CustomerController::class, 'index']);


/*
 * Личный кабинет пользователя
 */
Route::group([
    'as' => 'user.', // имя маршрута, например user.index
    'prefix' => 'user', // префикс маршрута, например user/index
    'namespace' => 'App\Http\Controllers\User', // пространство имен контроллеров
    'middleware' => ['auth'] // один или несколько посредников
], function () {
    // главная страница
    Route::get('index', 'IndexController')->name('index');
});


/*
 * Маршрут для Локализации приложения
 */
Route::get('locale/{locale}', function ($locale) {
    Session::put('locale', $locale);

    return redirect()->back();
})->name('locale');

/*
 * Группа маршрутов  для Статических Страниц
 */
Route::group([],function () {


    Route::get('/home', function () {
        return view('template.pages.home');})->name('home');
//        ->middleware('cache');

    Route::get('/about', function () {
        return view('template.pages.about');})->name('about');

    Route::get('/services', function () {
        return view('template.pages.services');})->name('services');

    Route::get('/pricing', function () {
        return view('template.pages.pricing');})->name('pricing');

    Route::get('/portfolio', function () {
        return view('template.pages.portfolio');})->name('portfolio');

    Route::get('/error', function () {
        return view('template.pages.error'); })->name('error');

    // Route::get('/blog', function () {
    //     return view('template.pages.blog');})->name('blog');

    Route::get('/single', function () {
        return view('template.pages.single');})->name('single');

    Route::get('/contacts', function () {
        return view('template.pages.contacts');})->name('contacts');
}

);

Route::get('/phpinfo', function () {
    return view('default.phpinfo');
    ;});

Route::get('/generate-qrcode', [QrCodeController::class, 'index']);


Route::get('/clear',[MemcachedController::class, 'clear']);

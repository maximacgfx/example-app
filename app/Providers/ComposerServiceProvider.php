<?php

namespace App\Providers;

use App\Models\News;
use Illuminate\Support\ServiceProvider;
use App\Models\NewsCategory;
use App\Models\NewsTag;
use View;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $views = [

            'news.parts.show_category',
            'news.parts.all-ctgs',
            'news.parts.parents',
            // 'news.parts.edit_news',
            // 'layout.part.categories', // меню в левой колонке в публичной части
            // 'admin.part.categories', // выбор категории поста при редактировании
            // 'admin.part.parents', // выбор родителя категории при редактировании
            // 'admin.part.all-ctgs', // все категории в административной части
        ];

        View::composer($views, function($view) {
            static $items = null;
            if (is_null($items)) {
                $items = NewsCategory::all();
            }
            $view->with(['items' => $items]);
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {

        //  view()->share('items',NewsCategory::roots());

        // dd(NewsCategory::roots());
        View::composer('template.widgets.categories', function($view) {

            $view->with('items', NewsCategory::roots() );

        });
        View::composer('template.widgets.latest-post', function($view) {

//            dd(News::latest());

            $view->with('items', News::latest() );

        });

        View::composer('template.widgets.popular-tags', function($view) {
            $view->with(['items' => NewsTag::popular()]);
        });

        // View::composer('admin.part.all-tags', function($view) {
        //     $view->with(['items' => Tag::all()]);
        // });

        // View::composer('layout.part.popular-tags', function($view) {
        //     $view->with(['items' => NewsTag::popular()]);
        // });
    }
}

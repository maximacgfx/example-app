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
        //
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

        // View::composer('layout.part.popular-tags', function($view) {
        //     $view->with(['items' => NewsTag::popular()]);
        // });
    }
}

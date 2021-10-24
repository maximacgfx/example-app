<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use DB;
use Response;
use Blade;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        
        $this->app['view']->addNamespace('Template',base_path().'/resources/views/template');
        
        
        //  Response::macro('myRes', function($value){
        //     return Response::make($value);
        // });

        // DB:listen( function($queru){
        //     dump($queru->sql);
        // });

        Blade::directive('linkactive', function ($route) {
            return "<?php echo request()->is($route) ? 'class =\"active\"' : null; ?>";
            /**
             * 
             * Определение активных ссылок в меню
             * https://laravel.demiart.ru/detecting-active-links-in-menu/
             * 
             * @linkactive('home')
             * <?php echo request()->is('home') ? 'class ="active"' : null; ?>
             * 
             *  Поиск по запросу Laravel menu на GitHub выдает вполне удобоваримые решения:
             *  https://github.com/witooh/laravel-menu-builder
             *  https://github.com/ferleonardo/laravel-menu
             *  https://github.com/overturelabs/menu
             */

            // Paginator::useBootstrap();

        });


    }
}

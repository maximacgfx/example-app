<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Но опять же, поля, в которые мы хотим записать данные могут быть защищены 
        // и не быть прописаны в  Model->filable. Тогда перез засевом их информацией 
        // надо с моделей снять защиту Model::unguard() ,
        //  а по завершению вернуть защиту обратно Model::reguard()
    //для версии 5.1:
    //Model::unguard();





        // \App\Models\User::factory(10)->create();
        // $this->call(UserSeeder::class);
        // $this->command->info('Таблица пользователей загружена данными!');

        // $this->call(CategorySeeder::class);
        // $this->command->info('Таблица категорий загружена данными!');

        // $this->call(TagSeeder::class);
        // $this->command->info('Таблица тегов загружена данными!');

        // $this->call(NewsSeeder::class);
        // $this->command->info('Таблица постов загружена данными!');

        $this->call(NewsTagPivotSeeder::class);
        $this->command->info('Таблица пост-тег загружена данными!');

        // $this->call(CommentTableSeeder::class);
        // $this->command->info('Таблица комментариев загружена данными!');

        // $this->call(CustomerSeeder::class);
        // $this->command->info('Таблица Клиентов Customer загружена данными!');

        

        //для версии 5.1:
        //Model::reguard();
    }
}

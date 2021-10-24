<?php

use App\Http\Admin\Login;
use App\Http\Admin\CustomersList;
use App\Http\Admin\Dashboard;

/*
| Admin routes examples 
|Route::group(['middleware' => 'guest:admin'], function () {
|    Route::get('login', Login::class)->name('login');
| });

Route::group(['middleware' => 'auth:admin'], function () {
    Route::get('/', Dashboard::class)->name('dashboard');
    Route::get('customers', CustomersList::class)->name('customers.index');

});

*/
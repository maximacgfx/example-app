<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Str;
use Rennokki\QueryCache\Traits\QueryCacheable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;
//    use QueryCacheable;
//    protected $cacheFor = 180; // 3 минуты

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    protected $appends = ['slug_name'];

//    protected $attributes = [
//        'email' => '@gmail.com',
//    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Связь модели User с моделью News, позволяет получить все
     * посты пользователя
     */
    public function posts() {
        return $this->hasMany(News::class);
    }

    public function getSlugNameAttribute() {
//        return   Str::slug ($this->name);
        return  Str::snake($this->name);
    }


}

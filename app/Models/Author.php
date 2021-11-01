<?php

namespace App\Models;

use App\Models\News;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Author extends Model
{
    use HasFactory;

    protected $table = 'users';

    public $timestamps = false;

//    protected $connection = 'connection-name';

    protected $fillable = [
        'name',
        'email',
    ];
    protected $hidden = [
        'password',
        'remember_token',
    ];
//    protected $guarded = ['password','email_verified_at','password'];

    /**
     * Связь модели User с моделью News, позволяет получить все
     * посты пользователя
     */
//    public function posts() {
//        return $this->hasMany(News::class);
//    }
    public function news() {
        return $this->hasMany(News::class,'user_id');
    }
    public function posts() {
        return $this->hasMany(News::class);
    }
}

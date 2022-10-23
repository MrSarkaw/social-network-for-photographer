<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;


    protected $fillable = [
        'name',
        'email',
        'password',
        'location',
        'bio',
        'avatar',
        'cover'
    ];


    protected $hidden = [
        'password',
    ];

    protected $appends = ['count_post'];

    public function getCountPostAttribute(){
        return count($this->posts);
    }

  //relation
    public function categories(){
        return $this->hasMany(Category::class, 'user_id');
    }

    public function posts(){
        return $this->hasMany(Post::class, 'user_id');
    }


    public function following(){
        return $this->hasMany(Follow::class, 'sender_id');
    }

    public function followers(){
        return $this->hasMany(Follow::class, 'receiver_id');
    }
}

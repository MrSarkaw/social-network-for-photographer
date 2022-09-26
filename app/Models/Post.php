<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['category_id', 'img', 'caption', 'user_id'];

    protected $appends = ['image'];

    public function getImageAttribute(){
        return json_decode($this->img);
    }
}

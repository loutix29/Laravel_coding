<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{
    use HasFactory;
    const LIMIT = 40;

    protected $fillable = [
        'title',
        'description',
        'price',
        'picture',
        'user_id',
        'categorie_id'
    ];

    public function limit()
    {
        return Str::limit($this->description, Post::LIMIT );
    }
}

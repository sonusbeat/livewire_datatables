<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'image',
    ];

    public static function search($search)
    {
        if ( empty($search) ) return static::query();

        return static::where('title', 'like', '%'.$search.'%')
            ->orWhere('content', 'like', '%'.$search.'%')
            ->orWhere('image', 'like', '%'.$search.'%');
    }
}

<?php

namespace App\Models;

use App\Models\Post;
use App\Models\Comment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Filmghibli extends Model
{
    use HasFactory;

    public function posts(): HasMany
    {
        return $this->hasMany(Post::class);
    }
    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }
}

<?php

namespace App\Models;


use App\Http\Controllers\PostController;
use App\Models\Film_Ghibli;
use Illuminate\Support\Str;
use Illuminate\Foundation\Auth\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    protected $guarded = [];

    public static function boot()
    {
        parent::boot();

        self::creating(function ($post) {
            if (request()->category && !request()->routeIs('categories.*'))
                $post->category()->associate(Category::find(request()->category));
            $post->user()->associate(auth()->user()->id);
        });
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function getTitleAttribute($attribute)
    {
        return Str::title($attribute);
    }
}
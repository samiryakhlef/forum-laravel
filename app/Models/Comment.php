<?php

namespace App\Models;

use App\Models\Film_Ghibli;
use Illuminate\Foundation\Auth\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Comment extends Model
{
    use HasFactory;

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function film(): BelongsTo
    {
        return $this->belongsTo(Film_Ghibli::class);
    }
}
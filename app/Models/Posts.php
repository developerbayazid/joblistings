<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Posts extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'body'];

    public function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Message extends Model
{
    use HasFactory;

    protected $fillable = [
        'body',
    ];


    /**
     * Get all of the achievement's likes.
     */
    public function likes(): MorphMany {
        return $this->morphMany(Like::class, 'likeable');
    }

    /**
     * Get the user that owns the Message
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}

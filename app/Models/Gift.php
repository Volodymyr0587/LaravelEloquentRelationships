<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Gift extends Model
{
    use HasFactory;

    protected $fillable = ['type'];

     /**
     * The stuffs that belong to the Gifts
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    // public function stuffs(): BelongsToMany
    // {
    //     return $this->belongsToMany(Stuff::class)->withTimestamps();
    // }

    /**
     * Get all of the stuffs for the Gift
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function stuffs(): HasMany
    {
        return $this->hasMany(Stuff::class);
    }

    /**
     * Get the user that owns the Gift
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}

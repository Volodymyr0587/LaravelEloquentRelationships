<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
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
    public function stuffs(): BelongsToMany
    {
        return $this->belongsToMany(Stuff::class)->withTimestamps();
    }
}

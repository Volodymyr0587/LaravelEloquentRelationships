<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function character(): HasOne
    {
        return $this->hasOne(Character::class);
    }

   /**
    * Get all of the messages for the User
    *
    * @return \Illuminate\Database\Eloquent\Relations\HasMany
    */
   public function messages(): HasMany
   {
       return $this->hasMany(Message::class);
   }

   /**
    * Get all of the gifts for the User
    *
    * @return \Illuminate\Database\Eloquent\Relations\HasMany
    */
   public function gifts(): HasMany
   {
       return $this->hasMany(Gift::class);
   }

   /**
    * Get all of the stuffs for the User
    *
    * @return \Illuminate\Database\Eloquent\Relations\HasManyThrough
    */
   public function stuffs(): HasManyThrough
   {
       return $this->hasManyThrough(Stuff::class, Gift::class);
   }

   /**
    * Get all of the achievements for the User
    *
    * @return \Illuminate\Database\Eloquent\Relations\HasMany
    */
    public function achievements(): HasMany
    {
        return $this->hasMany(Achievement::class);
    }
}

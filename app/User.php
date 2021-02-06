<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'NIM','username','name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function book_returns()
    {
        return $this->hasMany(book_return::class);
    }
    public function book_return()
    {
        return $this->hasManyThrough(book_return::class,book::class, 'book_returns_id','book_id');
    }
    public function book()
    {
        return $this->hasOneThrough(book::class,book_return::class,'book_id','book_returns_id');
    }
}

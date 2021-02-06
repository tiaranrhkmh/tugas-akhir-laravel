<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class book extends Model
{
    //
    protected $table = 'books';
    protected $primaryKey = 'id';
    protected $fillable = ['book_returns_id'];
    public function book_returns()
    {
        return $this->belongsTo(book_return::class);
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class book_return extends Model
{
    //
    public function product(){
        return $this->belongsTo('App\book_return');
    }
}

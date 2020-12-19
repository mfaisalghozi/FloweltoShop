<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function joinCategory(){
        return $this->belongsTo('App\Category', 'id', 'id');
    }

    public $table = 'product';
}

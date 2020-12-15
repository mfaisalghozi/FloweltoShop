<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function joinCategory(){
        return $this->belongsTo('App\Category', 'categoryid', 'id');
    }

    public $table = 'product';
}

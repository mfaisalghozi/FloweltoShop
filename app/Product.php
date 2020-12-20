<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function joinCategory(){
        return $this->belongsTo('App\Category', 'id', 'id');
    }

    protected $table = 'product';

    protected $fillable = [
        'catid', 'productname', 'productdesc', 'productprice', 'productimg'
    ];
}

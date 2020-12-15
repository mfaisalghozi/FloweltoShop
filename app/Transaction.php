<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    public function joinProduct(){
        return $this->hasMany(Products::class, 'movie_id', 'id');
    }
}

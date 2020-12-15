<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index($id){
        $prod = Category::find($id)->joinProduct;
        return view('products', ['prod'=>$prod]);
    }

    
}

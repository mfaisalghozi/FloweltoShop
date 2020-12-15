<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index($id){
        $cat = Category::find($id);
        return view('products', ['cat'=>$cat]);
    }
}

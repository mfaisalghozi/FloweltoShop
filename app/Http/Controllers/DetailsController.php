<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class DetailsController extends Controller
{
    public function index($id)
    {
        $id = Product::find($id);
        return view('details', ['prod'=>$id]);
    }
    
}

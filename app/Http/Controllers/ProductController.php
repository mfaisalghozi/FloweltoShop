<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index($id){
        $prod = Category::find($id);
        $cat = Category::all();
        $flower = DB::table("product")->simplePaginate(8);
        return view('products', ['prod'=>$prod, 'cat'=>$cat, 'flower'=>$flower]);
    }

    public function search(Request $request)
	{
		$search = $request->search;
 
		$flower = DB::table('product')
		->where('productname','like',"%".$search."%")
        ->simplePaginate(8);
        $prod = Category::all()->first();
 
		return view('products',['flower' => $flower, 'prod'=>$prod]);
 
    }
    
    public function searchharga(Request $request)
	{
		$searchharga = $request->search;
 
		$flower = DB::table('product')
		->where('productprice','like', $searchharga)
        ->simplePaginate(8);
        $prod = Category::all()->first();
 
		return view('products',['flower' => $flower, 'prod'=>$prod]);
 
	}
}

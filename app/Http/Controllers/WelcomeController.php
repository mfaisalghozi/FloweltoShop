<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function welcome(){
        $cat = Category::All();
        return view('welcome', ['cat'=>$cat]);
    }
}

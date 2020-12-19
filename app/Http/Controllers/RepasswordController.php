<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RepasswordController extends Controller
{
    public function index(Request $req, User $user){
        if($req->newpassword == $req->confnewpassword){
            $user = User::where('id', $user->id)->update([
                'password' => Hash::make($req->newpassword),
                ]);

        return view('welcome');
           }
        else return redirect("/repassword");
    }
}

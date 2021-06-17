<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserController extends Controller
{
    //
    function login(Request $req){
       $user= User::Where(['email'=>$req->email])->first();
       if(!$user || !Hash::check($req->password,$user->password))
       {
            return "Username Or Password is Not Matched"; 
       }else
       {
          $req->session()->put('user',$user); 
          return redirect('/');
       }
    } 
}

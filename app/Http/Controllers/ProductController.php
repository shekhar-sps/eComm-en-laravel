<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    //
    function login(){ 

      //  echo 'This is product page';
       $value = Session::get('user');
      echo $value['email'];
    }
}

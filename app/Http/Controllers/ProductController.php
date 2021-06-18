<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Product; 
use App\Models\Cart;

class ProductController extends Controller
{
    //
    function index(){ 

      // echo 'This is product page';
     //  $value = Session::get('user');
     // echo $value['email'];
      $data= Product::all(); 
      return view('product',['products'=>$data]); 
    }
    function details($id){
        $data= Product::find($id);
       // print_r($id);
       return view('detail',['product'=>$data]);

    }

    function search(Request $req){
       // return $req->input();
       $data=Product::where('name','like','%'.$req->input('query').'%')->get();
       return view('search',['products'=>$data]);

    }

    function addToCart(Request $req){
       
        if($req->session()->has('user')){
          $cart=new Cart;
          $cart->product_id=$req->input('product_id');
          $cart->user_id=$req->session()->get('user')['id'];
          $cart->save();
          return redirect('/');
        }else{
            return redirect('/login ');
        }
    }

    static function cartItem(){
      $user_id=Session::get('user')['id'];
      return Cart::where('user_id',$user_id)->count();
    }
}

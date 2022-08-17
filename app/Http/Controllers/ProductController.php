<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    function index(){
        $data = Slider::all();
        $products = Product::all();
        return view('user.index', ['sliders'=> $data, 'products'=>$products]);
    }

    function detail($id){
        $data = Product::find($id);
        return view('user.detail', ['detail'=> $data]);
    }

    function addToCart(Request $req){
        if($req->session()->has('user')){
            $cart = new Cart;
            $cart->user_id = $req->session()->get('user')['id'];
            $cart->product_id = $req->product_id;
            $cart->save();
            return redirect('/');

        }else{
            return redirect('/login');
        }
    }

    static function cartItem(){
        $userId = Session::get('user')['id'];
        return Cart::where('user_id', $userId)->count();
    }

    function cart(){
        $userId = Session::get('user')['id'];
        return Cart::where('user_id', $userId)->count();
        
    }
}

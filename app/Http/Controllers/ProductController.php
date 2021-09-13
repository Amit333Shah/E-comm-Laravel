<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use Session;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    function index(){
        $data= Product::all();
        return view('product',['products'=>$data]);
    }
    function detail($id){
        $product_detail= Product::find($id);
        return view('productDetail',['pro_detail'=>$product_detail]);
    }
    function search(Request $req){
        $serach_item=Product::where('name', 'like','%'.$req->input('query').'%')->get();
        return view('serachProduct',['products'=>$serach_item]);
    }
    function addToCart(Request $req){
        
        if ($req->session()->has('user'))
        { 
            $cart=New Cart;
            $cart->user_id=$req->session()->get('user')['id'];
            $cart->product_id=$req->product_id;
            $cart->save();
            return redirect('/');
        }
        else{
            return redirect('login');
        }
    }
    static function cartItem(){
        $userId=Session::get('user')['id'];
        return Cart::where('user_id',$userId)->count();
    }
    function cartList(){
        $userId=Session::get('user')['id'];
        $data=DB::table('cart')
        ->join('product','cart.product_id','product.id')
        ->select('product.*','cart.id as cart_id')
        ->where('cart.user_id',$userId)
        ->get();
        return view('cartlist',['products'=>$data]);
    }
    function removeCart($id){
        Cart::destroy($id);
        return redirect('cartlist');
    }
    function orderNow(){
        $userId=Session::get('user')['id'];
        $total=DB::table('cart')
        ->join('product','cart.product_id','product.id')
        ->where('cart.user_id',$userId)
        ->sum('product.price');
        return view('ordernow',['total'=>$total]);
    }
    function orderPlace(Request $req){
        // $userId=Session::get('user')['id'];
        // $orderitem=Cart::get('product_id','user_id')
        return $req->input();
    }
}

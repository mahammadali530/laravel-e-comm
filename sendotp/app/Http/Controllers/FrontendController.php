<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\icon;
use App\Models\cart;
use App\Models\order;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class FrontendController extends Controller
{
    public function index(){
       
       $data= icon::all();
        return view('frontend.pages.home',['products'=>$data]);
    }
    
    function addToCart(Request $requeste){
        if($requeste->session()->has('user'))
        {
       
        $cart= new cart;
        $cart->user_id=$requeste->session()->get('user')['id'];
        $cart->product_id = $requeste->input('product_id');
        $cart->save();
        return redirect('/');
        
    }
    else{
        return redirect('/login');
    }
}
    static function cartitems(){

       $userId=Session::get('user')['id'];
       return cart::where('user_id',$userId)->count();
        //return cart::all()->count();
    
    }
    function cartlist(){
        $userId=Session::get('user')['id'];
       $products= DB::table('cart')
       ->join('products','cart.product_id','=','products.u_id')
       ->where('cart.user_id',$userId)
       ->select('products.*','cart.id as cart_id')
       ->get();
       return view('frontend.pages.cartlist',['products'=>$products]);
    }
    function removeCart($id){
        cart::destroy($id);
        return redirect('/cartlist');
    }
    function ordernow(){
        $userId=Session::get('user')['id'];
       $total=  $products= DB::table('cart')
        ->join('products','cart.product_id','=','products.u_id')
        ->where('cart.user_id',$userId)
        // ->select('products.*','cart.id as cart_id')
        ->sum('products.price');
        return view('frontend.pages.ordernow',['total'=>$total]);
     
    }
    function orderplace(Request $requests){
        $userId=Session::get('user')['id'];
        $allcart= cart::where('user_id',$userId)->get();

        foreach($allcart as $request){
        $order=new order;
        $order->product_id= $request['product_id'];
        $order->user_id= $request['user_id']; 
       
        $order->status = "pending";
        $order->payment_method = $requests->payment;
        $order->payment_status = "pending";
        $order->name = $requests->name;
        $order->number = $requests->number;
        $order->address = $requests->address;
        $order->pincode = $requests->pincode;
       
        $order->save();
       
        cart::where('user_id',$userId)->delete();

        } 
        $requests->input();
        return redirect('/');
    }
    function myorders(){
        $userId=Session::get('user')['id'];
        $orders= DB::table('orders')
        
        ->join('products', 'orders.product_id', '=', 'products.u_id')
        ->where('orders.user_id', $userId)
        ->get();
      
    //    $orders=  DB::table('orders')
       
        //->get();
        return view('frontend.pages.myorders',['orders'=>$orders]);
     
    }
    
}

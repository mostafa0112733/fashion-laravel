<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;



class HomeController extends Controller
{
    public function redirect()
    {
$usertype=Auth::user()->usertype;
if($usertype=='1')
{
    return view('admin.product');
}
else{

    $data=product::paginate(3);
    $user=auth()->user();
    $count=cart::where('phone',$user->phone)->count();
        return view('user.product',compact('data','count'));
    }
    }
    public function index()
    {
if(Auth::id())
{
    return redirect('redirect');
}
else{

    $data=product::paginate(3);
    return view('user.product',compact('data'));
}
        
    }
    public function addcart($id)
    {
        if(Auth::id())
        {
            $user=auth()->user();
            $product=Product::find($id);
            $cart= new cart;
            $cart->name=$user->name;
            $cart->phone=$user->phone;
            $cart->address=$user->address;
            $cart->product_title=$product->title;
            $cart->price=$product->price;
            $cart->save();
            return redirect()->back();
        }
        else{
            return redirect('login');
        }
    }
    public function showcart()
    {
        $user=auth()->user();
        $cart=cart::where('phone',$user->phone)->get();
        $count=cart::where('phone',$user->phone)->count();
        return view('user.showcart',compact('count','cart'));
    }
    public function search(Request $request)
    {
$search=$request->search;

$data=product::where('title','Like','%'.$search.'%')->get();
return view('user.home',compact('data'));
    }
}

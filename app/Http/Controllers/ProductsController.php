<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\Products;
use Illuminate\Support\Facades\Validator;
use Session;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{
    //
    function index()
    {
        $products = Products::orderBy('name', 'asc')->limit('5')->get();;
        $product = Products::all();

        return view('Product', compact('products', 'product'));
    }


    function details($id)
    {
        $product = Products::find($id);
        return view('Details', compact('product'));
    }
    function search(Request $req)
    {

        $product = Products::where('name', 'LIKE', '%' . $req->input('query') . '%')->get();
        return view('search', compact('product'));
    }
    function item($cat)
    {

        $product = Products::where('category', 'LIKE', '%' . $cat . '%')->get();
        return view('AllProduct', compact('product'));
    }
    function add_to_cart(Request $req)
    {
        if (Auth::check()) {
            $cart = new Cart();
            $cart->user_id = Auth::id();
            $cart->product_id = $req->product_id;
            $cart->save();
            return redirect(route('cart'));
        } else {
            return redirect(route('login'));
        }
    }
    static function cartItem()
    {

        $userId = Auth::id();
        return Cart::where('user_id', $userId)->count();
    }
    function cart()
    {
        $userId = Auth::id();
        $products = DB::table('carts')->join('products', 'carts.product_id', '=', 'products.id')->where('carts.user_id', $userId)->select('products.*', 'carts.id as cart_id')->get();
        return view('Cart', compact('products'));
    }
    function removeCart($id)
    {

        Cart::destroy($id);
        return redirect('cart');
    }
    function orderNow()
    {

        $userId = Auth::id();
        $total = DB::table('carts')->join('products', 'carts.product_id', '=', 'products.id')->where('carts.user_id', $userId)->sum('products.price');
        return view('orderNow', compact('total'));
    }
    function orderPlace(Request $req)
    {
        $validator = Validator::make($req->all(), [

            'address' => 'required',



        ]);
        if ($validator->fails()) {
            return back()->with('status', 'Something went wrong');
        } else {
            $userId = Auth::id();
            $allCart = Cart::where('user_id', $userId)->get();
            foreach ($allCart as $cart) {

                $order = new Order;
                $order->product_id = $cart['product_id'];
                $order->user_id = $cart['user_id'];
                $order->status = "pending";
                $order->payment_method = $req->payment;
                $order->payment_status = "pending";
                $order->address = $req->address;
                $order->save();
                Cart::where('user_id', $userId)->delete();
            }
            $req->input();
            return redirect('/');
        }
    }
    function myOrders()
    {
        $userId = Auth::id();
        $products = DB::table('orders')->join('products', 'orders.product_id', '=', 'products.id')->where('orders.user_id', $userId)->get();
        return view('myorders', compact('products'));
    }
}

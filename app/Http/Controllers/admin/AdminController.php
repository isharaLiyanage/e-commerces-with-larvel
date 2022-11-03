<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Products;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{

    function dashboard()
    {
        $users = User::all();
        $orders = Order::all();
        $products = Products::all();
        return view('Admin.Dashbord', compact('users', 'orders', 'products'));
    }

    function upload()
    {

        return view('Admin.ProductUpload');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'description' => 'required',
            'category' => 'required',
            'price' => 'required',
            'gallery' => 'required|image'
        ]);
        if ($validator->fails()) {
            return back()->with('status', 'Something went wrong');
        } else {
            $imageName = time() . "." . $request->gallery->extension();
            $request->gallery->move(public_path(path: 'storage'), $imageName);
            Products::create([

                'name' => $request->name,
                'description' => $request->description,
                'category' => $request->category,
                'price' => $request->price,
                'gallery' => $imageName,

            ]);
        }
        return redirect('upload')->with('status', 'Post create successfully');
    }
}

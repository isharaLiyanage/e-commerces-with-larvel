<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class imageController extends Controller
{
    public function userImage(Request $request)
    {



        $validator = Validator::make($request->all(), [

            'image' => 'required|image'
        ]);
        if ($validator->fails()) {
            return back()->with('status', 'Something went wrong');
        } else {
            $imageName = time() . "." . $request['image']->extension();
            $request['image']->move(public_path(path: 'img/users'), $imageName);
            $data = User::find(Auth::user()->id);
            $data->image = $imageName;
            $data->save();
        }
        return redirect('home')->with('status', 'Post create successfully');
    }

    public function uploadImage()
    {
        return view('userImage');
    }
}

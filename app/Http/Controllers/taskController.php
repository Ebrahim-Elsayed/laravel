<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class taskController extends Controller
{
    //
    public function create(){
        return view("task");
    }

    public function store(Request $request){

        $data = $this->validate($request , [
                "name"     => "required|string|min:5|regex:/(^([a-zA-Z]+))/u",
                "email"    => "required|email",
                "password" => "required|min:6",
                "Address"  => "required|min:10|max:10",
                "gender"   => "required",
                "linkedIn" => "required|url",
                "image"    => "required|image|mimes:jpg,bmp,png,jpeg",
        ]);


        $image = $request->file('image');
        $rename = time().'.'.$image->getClientOriginalExtension();
        $image->move(public_path("images"),$rename);

        
        // return view('profile' , compact('data'));
        return view('profile' , ['userdata' , $data]);
    }
    
}

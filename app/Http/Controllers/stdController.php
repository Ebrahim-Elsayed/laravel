<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;

class stdController extends Controller
{
    
    //

    public function index(){

        $data = student::get();
        // dd($data);
        return view("student/index" , ['data' => $data]);


    }


    public function create(){
        return view("student/create");

    }

    public function store(Request $request){

    $data = $this->validate($request , [
            "name"     => "required|string",
            "email"    => "required|email" , 
            "password" => "required|min:6",
            "address"  => "required|string",
            "gender"   => "required",
            "linkedIn" => "required",
            "image"    => "required|image|mimes:jpg,png,jpeg,gif,svg|max:2048",
        ]);


        // $request->file('images')->store('public/images');
        // $photo = new student();
        // $photo->name = $name;
        // $photo->save();
        
        
        // $name = $request->file('images')->getClientOriginalName();
        $newimage = time().'.'.$request->image->extension();
        $request->image->move(public_path('images'), $newimage);


        $request->image = $request->file('images')->getClientOriginalName();
        // dd($newimage);

        $op = student::create($data);
        // dd($op);
        // if($op){
        //     echo "raw iserted";
        // }else{
        //     "error";
        // }

        // return view("student/index" , ['data' => $data]);
    }

}

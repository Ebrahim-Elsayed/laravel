<?php

namespace App\Http\Controllers;

use App\Models\blog;
use Illuminate\Http\Request;

class blogController extends Controller
{
    //

    public function index(){

        $data = blog::get();
        // dd($data);
        return view('storeblog' , ['data' => $data]);
    }


    public function edit($id){
        $data = blog::find($id);
        return view('edit' ,['data' => $data]);
    }




    public function create(){
        return view("blog");
    }

    public function store(Request $request){
        $data = $this->validate($request , [

            "title"  => "required|string",
            "content"=> "required|string|min:20",
            "code"   => "required|numeric",
        ]);

        $op = blog::create($data);

        if($op){
            echo "raw iserted";
        }else{
            "error";
        }
    }
}

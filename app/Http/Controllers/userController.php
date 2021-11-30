<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class userController extends Controller
{
    //

    // public function userInfo($name , $email){
       

    //     echo "my name is " . $name . " my email is " . $email ; 
    // }
    
    public function create(){

        return view('create');
        
    }

    public function store(Request $request){
        // dd($request);
        // echo 'hello rom store page';
        // echo $request->name;
        // echo $request->input('name');

        // dd($request->all()) ;
        // dd($request->only('name' , 'email'));
        // dd($request->except('_token' , 'password'));
        // dd($request->has('namee'));
        // dd($request->hasAny('names' ,' emaill'));
        // dd($request->method());
        // dd($request->isMethod('get'));
        // dd($request->ip());
        // dd($request->path());
        // dd($request->url());
        // dd($request->fullUrl());

        // dd(request());
        $userData = $this->validate($request , [
            "name"     => "required|min:6",
            "email"    => "required|email",
            "password" => "required|min:8",
            "linkedIn" => "required|url",
        ]);

        // dd($request);
    }




}

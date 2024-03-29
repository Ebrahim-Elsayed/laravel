<?php

use App\Http\Controllers\blogController;
use App\Http\Controllers\stdController;
use App\Http\Controllers\taskController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


// Route::get('user/{name}/{email}', "userController@userInfo");
// Route::get('user/{name}/{email}', [userController::class , 'userInfo']);

// Route::get('create/', [userController::class , 'create']);
// Route::post('store/', [userController::class , 'store']);

Route::get('taskCreate/', [taskController::class , 'create']);
Route::post('profile/', [taskController::class , 'store']);

Route::get('blog', [blogController::class ,'create' ]);
Route::post('blog/store', [blogController::class ,'store' ]);
Route::get('myblogs' , [blogController::class , "index"]);
Route::get('edit{id}',[blogController::class , "edit" ]);

// student routes

Route::get('student/create' , [stdController::class , 'create']);
Route::post('student/store' , [stdController::class , 'store']);
Route::get('student/index' , [stdController::class , 'index']);
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController ;
use App\Http\Controllers\StudentController;


Route::get("/", function () {
    return view('welcome');

}) ;
Route::get("users",[UserController::class,'querues']) ;


// Route::view("/about", 'aboutes');
// Route::view("/contact", 'home');
// Route::controller(StudentController::class)->group(function(){
//     Route::get('show'::class,'show');
// Route::get('add'::class,'add');
// Route::get('delete'::class,'delete');

// });




// Route::view("/user-form","form-input");
//  Route::post("/adduser",[UserController::class,'addUser']);

// Route::get('/home', function () {
//     return view('home');
// });



// Route::get('userhome',[userController::class,userHome]);

// Route::get('user-about',[userController::class,userAbout]);


//  Route::get("user",[UserController::class,'getUser']);

//  Route::get("userhome",[UserController::class,'userHome']);

//  Route::get("useraboute",[UserController::class,'getUser']);

 // Route::get("aboutuser",[UserController::class,'aboutUser']);

// Route::get("user/{name}",[UserController::class,'getName']);
//  Route::get("admin",[UserController::class,'adminLogin']);


// route:redirect('/home','/');

// Route::get('/about/{name}',function($name)
// {
//     // echo $name;
//     return view('about',['name' =>$name]);

// });

// Route::view("/about", 'aboutes');

// Route::view("/contact", 'home');



<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Facades\View;
use  Illuminate\Support\Facades\DB;
class UserController extends Controller
{

    // function addUser(Request $request){

    //     echo "user name $request->name " ;
    //     echo "<br>";
    //     echo " user City is $request->city ";
    //     echo "<br>";
    //     echo "User email $request->email";


    // }


// function addUser(Request $request){
//     return $request ;
// }

// function Users(){
//     $users= DB::select('select * from users');

//     return view('users',['users'=>$users] );


// }


function querues(){

    // return "queries";
    $request=DB::table('users')->get();
    return view('users',['users'=>$request] );
    

}


    // function getUser()
    // {
    //     return view("/welcome");
    // }

    // function userHome()
    // {

    //     $name = "raja";
    //     $users = ['anil', 'sam', 'raja'];
    //     return view('home', ["name" => $name, "users" => $users]);
    // }


    // function userAbout(){
    //     return view("aboutes");
    // }

    // function aboutUser(){
    //     // return "this is About  Pages" ;
    //     return view('about');
    // }
    // function getName($name){
    //     return "Hello  my name is " .$name;
    // }
    // function adminLogin(){
    //     if(View::exists('admin.sign')){
    //         return view('admin.sign');
    //     }
    //     else{
    //         echo "Page Not Found";
    //     }
    //     // return view('admin.login');
    // }

}







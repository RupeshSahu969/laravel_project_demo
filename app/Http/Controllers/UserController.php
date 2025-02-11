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


     // insert in database

    // $result=DB::table('users')->insert([
    //     'name'=>'baja',
    //     'email'=>'baja@gmail.com',
    //     'password'=>'1234321'
    // ]);
    // if($result){
    //     return "data inserted";
    // }
    // else{
    //     return "data not inserted";
    // }


    // update in any filed here ;

    // $result=DB::table('users')->where('name','raja')
    // ->update(['password'=>'121212']);
    // if($result){
    //     return "data inserted";
    // }
    // else{
    //     return "data not inserted";
    // }


// data delete

$result=DB::table('users')->where('name','baja')
->delete();
if($result){
    return "data deleted";
}
else{
    return "data not deleted";
}


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







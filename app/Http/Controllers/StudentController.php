<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{

    // function show(){
    //     return "list of student";
    // }
    // function add(){
    //     return "list of add student";
    // }
    // function delete(){
    //     return "list of delete student";
    // }

    function getStudent(){
        $student= \App\Models\Student::all();
        return view('users',['users'=>$student]);
    }

}

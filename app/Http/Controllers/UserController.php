<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function show(){
        $data=User::all();
        return view('student_profile',['student_profile'=>$data]);
        
            }
}

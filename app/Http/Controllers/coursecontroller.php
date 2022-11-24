<?php

namespace App\Http\Controllers;
use App\Models\Course;
use Illuminate\Http\Request;

class coursecontroller extends Controller
{
    //

    function show(){
$data=Course::all();
return view('list',['course'=>$data]);

    }
}

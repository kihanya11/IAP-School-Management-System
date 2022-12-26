<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class crudcontroller extends Controller
{


  function save(Request $req){

    $req->validate([
'username'=>'required',
'coursename'=>'required',
'cid'=>'required',
'sid'=>'required'

    ]);


$query = DB::table('crud')->insert([
    'username'=>$req->input('username'),
'coursename'=>$req->input('coursename'),
'cid'=>$req->input('cid'),
'sid'=>$req->input('sid'),



]);
return redirect('reg');
}

function show(){


  
    $data=Course::all();
    return view('course',['course'=>$data]);
    
        }






}

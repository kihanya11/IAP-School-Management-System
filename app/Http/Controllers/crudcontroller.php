<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class crudcontroller extends Controller
{


  function save(Request $req){

    $req->validate([

'coursename'=>'required',
'cid'=>'required',
'sid'=>'required'

    ]);


$query = DB::table('crud')->insert([

'coursename'=>$req->input('coursename'),
'cid'=>$req->input('cid'),
'sid'=>$req->input('sid'),


]);
/*$course = new Course;
$course = $req->coursename;
$course = $req->cid;
$course = $req->sid;
 echo $course->save();
*/
}

function show(){
    $data=Course::all();
    return view('course',['course'=>$data]);
    
        }






}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagecontroller extends Controller
{
   public function dashboard(){

return view("auth.dashboard");

   }
}

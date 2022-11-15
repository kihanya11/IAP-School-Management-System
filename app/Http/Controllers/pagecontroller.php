<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagecontroller extends Controller
{
   public function dashboard(){

return view("auth.dashboard");

   }

  public function student_profile(){

return view("auth.student_profile");

   }

   public function course(){

      return view("auth.course");
      
         }

         public function reg(){

            return view("auth.reg");
            
               }

       
}



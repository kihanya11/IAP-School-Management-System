<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class removeController extends Controller
{
  
function delete($username, $id, $name){

        $data =User::find($username);
        $data->delete($data);
        return redirect('remove');

}

}

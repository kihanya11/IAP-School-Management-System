<?php

namespace App\Http\Controllers;

use App\Models\admin;
use Illuminate\Http\Request;
use App\Models\faculty;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Hash;

class AuthController extends Controller
{
    public function log()
    {

        return view('log');

    }


    public function registration()
    {

        return view('registration');

    }

    function registeruser(Request $req)
    {

        $req->validate([
            'name' => 'required',
            'email' => 'required',
            'username' => 'required',
            'password' => 'required'

        ]);


        $query = DB::table('faculty')->insert([
            'name' => $req->input('name'),
            'email' => $req->input('email'),
            'username' => $req->input('username'),
            'password' => $req->input('password'),


        ]);

    }


    function loginprocess(Request $req)
    {
        $data = $req->input();
        $user = faculty::where('username', $req->input('username'))->get();
        if (($user[0]->password) == $req->input('password')) {

            $req->session()->put('username', $data['username']);

            return redirect('faculty');


        }
    }


    function adminlogprocess(Request $req)
    {
        $data = $req->input();
        $user = admin::where('username', $req->input('username'))->get();
        if (($user[0]->password) == $req->input('password')) {

            $req->session()->put('username', $data['username']);

            return redirect('admin');


        }

    }

    public function admin()
    {

        return view('admin');
    }


    public function faculty()
    {

        return view('faculty');
    }




}
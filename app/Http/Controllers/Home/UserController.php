<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    //
    public function register(Request $request)
    {
        if($request->isMethod('post')){
//            var_dump($_POST);
        }
        return view('home.register');
    }

    public function home()
    {
        return view('home.home');
    }
}

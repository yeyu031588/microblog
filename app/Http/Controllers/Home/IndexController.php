<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class IndexController extends BaseController
{
    //
    public function index(Request $request)
    {
        if($request->session()->get('user_id')){
            return redirect('/home');
        }
        return view('home.welcome');
    }
}

<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    //
    public function login(Request $request)
    {
        if($request->isMethod('post')){
            $name = $request->input('name');
            $password = $request->input('password');
            return redirect('/AdminLogin')->withErrors(array('name'=>'格式错误'))->withInput();
        }
        return view('admin.login');
    }
}

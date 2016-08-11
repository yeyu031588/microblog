<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;

class UserController extends Controller
{
    //用户列表
    public function index(Request $request)
    {
        return View('admin.user');
    }

    public function newuser(Request $request)
    {
        if($request->isMethod('post')){

        }
        return View('admin.newuser');
    }
}

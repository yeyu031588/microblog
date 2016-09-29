<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
use Validator;
use DB;

class GrantController extends Controller
{
    public function role()
    {
        return View('admin.role');
    }

    /*
     * 添加
     * **/
    public function add()
    {

    }

    /*
     * 删除
     * **/
    public function drop()
    {

    }

}

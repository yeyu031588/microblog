<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
use Validator;
use DB;

class RouteController extends Controller
{
  public function routeList(){
    return View('admin.route',['data'=>array()]);
  }

    public function addRoute(){

    }

    public function dropRoute(){

    }

}

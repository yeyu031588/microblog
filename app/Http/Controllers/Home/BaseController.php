<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Validator;
use DB;

class BaseController extends Controller
{
    protected $userid;
    public function __construct(){
        if($this->getUserid()){
            $this->userid = $this->getUserid();
        }
    }

    public function getUserid()
    {
        $userid = Session()->get('user_id');
        if($userid){
            return $userid;
        }
        return null;
    }

}

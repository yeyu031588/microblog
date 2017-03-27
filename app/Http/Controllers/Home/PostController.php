<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Validator;

class PostController extends BaseController
{
    public function sendPost(Request $request){
        $v = Validator::make($request->all(), [
            'content' => 'required',
        ]);
        $data['content'] = trim($request->input('content'));
        $messages = $v->messages();
        var_dump(json_decode($messages,true));

        echo 1;exit;
    }
}

<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    //
    public function login(Request $request)
    {
        if($request->session()->get('admin_id')){
            return redirect('/Admin');
        }
        if($request->isMethod('post')){
            $name = $request->input('name');
            $password = $request->input('password');
            $user = DB::table('Admin')
                        ->where(array('username'=>$name))
                        ->select('username', 'admin_id','password')
                        ->get();
            if(!$user){
                return redirect('/AdminLogin')->withErrors(array('用户不存在'))->withInput();
            }else{
                if($user[0]['password'] == md5($password)){
                    $request->session()->set('admin_id',$user[0]['admin_id']);
                    $request->session()->set('admin_name',$user[0]['username']);
                    return redirect('/Admin');
                }else{
                    return redirect('/AdminLogin')->withErrors(array('密码错误'))->withInput();
                }
            }
        }

        return view('admin.login');
    }

    public function layout(Request $request)
    {
        $request->session()->set('admin_id','');
        $request->session()->set('admin_name','');
        return redirect('/AdminLogin');
    }
}

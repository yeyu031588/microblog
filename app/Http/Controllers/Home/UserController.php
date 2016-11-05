<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Validator;
use DB;
use App\Model\User;
use App\Model\UserLogin;

class UserController extends BaseController
{

    public function home()
    {
        $login = UserLogin::getLoginInfo($this->userid);
        return view('home.home');
    }
    /*
     * 注册
     * ***/
    public function register(Request $request)
    {
        if($request->isMethod('post')){
            $username = $request->input('username');
            $password = $request->input('password');;
            $validator = Validator::make($request->all(), [
                'username' => 'required|unique:user,username|min:6|max:18|regex:/^[a-zA-Z0-9_]+$/',
                'password' => 'required',
            ]);
            if ($validator->fails()) {
                return redirect('/register')->withErrors($validator)->withInput();
            }
            $data = array(
                'username' => $username,
                'password' => md5($password),
            );
            $result = DB::table('user')->insert($data);
            if($result){
                return redirect('/')->with('status', '用户添加成功！');
            }
        }
        return view('home.register');
    }

    /*
     * 登录
     * **/
    public function login(Request $request)
    {
        if($request->isMethod('post')){
            $username = $request->input('username');
            $password = $request->input('password');
            $info = DB::table('user')->where('username',$username)->select('userid','username','password')->get();
            if(!$info || md5($password) != $info[0]['password']){
                return response()->json(array(
                    'status' => 0,
                    'msg' => '账号或密码错误',
                ));
            }
//            $login = User::find($info[0]['userid'])->login->where('login','1')->where('is_login',1)->first();
//            if($login && $login->is_login){
//                return response()->json(array(
//                    'status' => 0,
//                    'msg' => '该账户已在别处登录',
//                ));
//            }
            Session()->set('user_id',$info[0]['userid']);
            Session()->set('username',$info[0]['username']);
            return response()->json(array(
                'status' => 1,
                'msg' => 'ok',
            ));

        }
    }

    /*
     * 退出
     * **/
    public function signOut(Request $request)
    {
        Session()->set('user_id',null);
        Session()->set('username',null);
        return redirect('/');
    }




}

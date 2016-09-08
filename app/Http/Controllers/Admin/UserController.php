<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
use Validator;
use DB;

class UserController extends Controller
{
    //用户列表
    public function index(Request $request)
    {
        $user = DB::table('user')->orderBy('add_time')->select()->paginate(5);
        return View('admin.user',['user'=>$user]);
    }

    public function newuser(Request $request)
    {
        if($request->isMethod('post')){
            $username = $request->input('username');
            $mobile = $request->input('mobile');
            $email = $request->input('email');
            $job = $request->input('job');
            $commpany = $request->input('company');
            $status = $request->input('status',1);
            $prov = $request->input('prov','');
            $city = $request->input('city','');
            $area = $request->input('area','');
            $address = $request->input('address');
            $validator = Validator::make($request->all(), [
                'username' => 'required|min:6|max:18|regex:/^[a-zA-Z0-9_]+$/',
                'mobile' => 'required|unique:user,mobile',
                'email' => 'required|unique:user,email',
            ]);
            if ($validator->fails()) {
                return redirect('/Admin/newuser')->withErrors($validator)->withInput();
            }
            $data = array(
                'username' => $username,
                'mobile' => $mobile,
                'status' => 1,
                'email' => $email,
                'job' => $job,
                'company' => $commpany,
                'province' => $prov,
                'city' => $city,
                'area' => $area,
                'address' => $address,
            );
            $result = DB::table('user')->insert($data);
            if($result){
                return redirect('/Admin/newuser')->with('status', '用户添加成功！');
            }
        }
        return View('admin.newuser');
    }

    public function modify(Request $request){
        if($request->isMethod('post')){
            $userid = $request->input('userid');
            $username = $request->input('username');
            $mobile = $request->input('mobile');
            $email = $request->input('email');
            $job = $request->input('job');
            $commpany = $request->input('company');
            $status = $request->input('status',1);
            $prov = $request->input('prov','');
            $city = $request->input('city','');
            $area = $request->input('area','');
            $address = $request->input('address');
            $validator = Validator::make($request->all(), [
                'username' => 'required|min:6|max:18|regex:/^[a-zA-Z0-9_]+$/',
                'mobile' => 'required',
                'email' => 'required',
            ]);
            if ($validator->fails()) {
                return redirect('/Admin/modify')->withErrors($validator)->withInput();
            }
            $data = array(
                'username' => $username,
                'mobile' => $mobile,
                'status' => 1,
                'email' => $email,
                'job' => $job,
                'company' => $commpany,
                'province' => $prov,
                'city' => $city,
                'area' => $area,
                'address' => $address,
            );
            $result = DB::table('user')->where('userid',$userid)->update($data);
            if($result !== false){
                return back()->with('status', '用户编辑成功！');
            }

        }
        $userid = $request->input('id');
        $data = DB::table('user')->where(array('userid'=>$userid))->select()->get();
        return View('admin.newuser',['data'=>$data[0]]);
        var_dump($data);
    }

    public function profile(Request $request){
        $userid = $request->input('id');
        $info = DB::table('user')->where(array('userid'=>$userid))->select()->get();
        return View('admin.user_profile',['data'=>$info[0]]);
    }

    public function drop(Request $request){
        $userid = $request->input('id');
    }
}

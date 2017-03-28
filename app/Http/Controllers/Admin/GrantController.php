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
        $role = DB::table('role')->select()->get();
        var_dump($role);
        return View('admin.role',['data'=>$role]);
    }

    /*
     * 添加角色
     * **/
    public function addRole(Request $request)
    {
        $role = $request->input('role');
        if(DB::table('role')->where(array('role_name'=>$role))->select()->get()){
            return response()->json(array(
                'status' => 0,
                'msg' => '角色已存在',
            ));
        }
        $res = DB::table('role')->insert(['role_name'=>$role]);
        $id = DB::table('role')->insertGetId(array());
        return response()->json(array(
            'status' => 1,
            'msg' => 'ok',
        ));
    }

    /*
     * 删除角色
     * **/
    public function dropRole(Request $request)
    {
        $role_id = $request->input('role_id');
        DB::table('role')
            ->where('role_id', $role_id)
            ->delete();

    }

}

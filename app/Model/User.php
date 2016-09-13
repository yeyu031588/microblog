<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'user';
    protected $primaryKey = 'userid';
    public $timestamps = false;

    /*
     * 更新登录信息
     * **/
    public function updateLogin($userid,$type=1)
    {
        $where = array('userid'=>$userid,'type'=>$type);


    }

    /*
     * 获取登录信息
     * **/
    public function loginInfo(){
        return $this->hasMany('App\Model\UserLogin','userid');
    }



}
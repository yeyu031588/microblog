<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class UserLogin extends Model
{
    protected $table = 'user_login';
    protected $primaryKey = 'id';
    public $timestamps = false;

    public static function getLoginInfo($userid,$type=0)
    {
        return self::select('*')->where(array())->get()->toArray();
    }


}
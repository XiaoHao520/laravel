<?php
/**
 * Created by PhpStorm.
 * User: xiaohao
 * Date: 17-11-23
 * Time: 下午3:38
 */

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class UserModel extends Model
{
//每个model需要使用成员变量属性$table指定的表名
    protected $table = "user";
    public $timestamps = false;
    protected $fillable = ["username", "age", "sex"];//fill函数可允许操作的字段

    public static function checkUser()
    {


    }

}

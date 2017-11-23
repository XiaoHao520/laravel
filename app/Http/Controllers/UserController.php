<?php

namespace App\Http\Controllers;

/**
 * Created by PhpStorm.
 * User: xiaohao
 * Date: 17-11-23
 * Time: 上午9:08
 */
use App\Http\Models\UserModel;
use DB;
use Illuminate\Support\Facades\Hash;

class  UserController extends Controller
{

    public function getId()
    {
        return "id";

    }

    public function getName()
    {

        return "name";
    }

    public function index()
    {



        $sql = "select * from user";
        $rows = DB::select($sql);
        //dd($rows);  //laravel 的输出函数  输出数组


        return view('list', ['rows' => $rows]);
    }

    public function query()
    {
        //$rows = UserModel::all();//查询数据库中的全部信息
        //$rows=UserModel::get()->toArray();
        // $user = UserModel::where("username", "xiaohao")->first()->id;
        //$user = UserModel::where("username", "xiaohao")->value("id");//取出成员

        $user = UserModel::where("username", "xiaohao")->select("id", "age")->get();//选择需要的字段


        dd($user->toArray());

    }


    public function insert()
    {
        $user = new UserModel();
        $user->username = "shixin";
        $user->age = "23";
        $user->sex = "女";
        $user->save();
        dd($user->id);
    }


}

?>
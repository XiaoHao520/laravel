<?php
/**
 * Created by PhpStorm.
 * User: xiaohao
 * Date: 17-11-23
 * Time: 上午10:18
 */
namespace App\Http\Controllers;  //laravel 必须是命名空间首字母大写
use App\Http\Controllers\Controller;
class StudentController extends Controller{
    public function index(){




        return "student";
    }

    public function display(){
        return view("welcome");
    }

    public function red()
    {
        return redirect("/user"); //重定向到指定的路由  还可以跳转到控制器的具体方法
    }
    public function  redToAction(){

        return redirect()->action("StudentController@index"); //调到指定的action  这个action 一定要在路由注册
    }

    //单参数的路由
    public function show($id)
    {
        return "id is:".$id; // TODO: Change the autogenerated stub
    }

    public function redWithParams(){

        //带上参数的调参
        return redirect()->action("StudentController@show",["id"=>'xioahao']);
    }

}


?>
<?php
/**
 * Created by PhpStorm.
 * User: xiaohao
 * Date: 17-11-23
 * Time: 上午10:52
 */

namespace App\Http\Controllers;


class ResponseController extends Controller
{
    public function jsonResult()
    {  //返回json

        $data = ["name" => "xiaohao", "age" => 23];

        return response()->json($data);
    }

    public function download()
    {
        //response()下载
        //storage 一般用于放置文件上传下载的
        return response()->download("/home/xiaohao/development/phpstorm/laravel/storage/app/download.txt");//这里是下载的绝对路径

    }

}


?>
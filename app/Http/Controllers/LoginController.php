<?php
/**
 * Created by PhpStorm.
 * User: xiaohao
 * Date: 17-11-23
 * Time: 下午4:41
 */

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function login(){

        return view("login.login");
    }
}
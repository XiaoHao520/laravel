<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('welcome');

                                 // return "hello world";
});

Route::get('/user', "UserController@index");//请求、user  访问USerController下的index

Route::group(['prefix' => 'user'], function () {//独立路由太多就放进路由群组  、、一般相同控制器的放入同一个组
                                                 //Route::get("/user/id","UserController@getId");
    Route::get("/id", "UserController@getId");   //可以删掉/user
    Route::get("/name", "UserController@getName");
});

//指定命名空间的路由

Route::group(["namespace"=>'NpT'],function (){  // 按命名空间来存放路由
     Route::get("/test","TController@index");
});
Route::get("/student","StudentController@index");
Route::get("/student/display","StudentController@display");
Route::get("/red","StudentController@red");
Route::get('/redto',"StudentController@redToAction");
Route::get('/show/{id}',"StudentController@show");     //带参数的路由
Route::get('/show',"StudentController@redWithParams");     //带参数的路由
Route::get('/json',"ResponseController@jsonResult");     //带参数的路由
Route::get('/down',"ResponseController@download");
Route::get('/req',"RequestController@req");
Route::post('/add',"RequestController@add");
Route::get('/form',function (){
    return view('form');
});

Route::resource("photo","PhotoController");
Route::get("/view","ViewController@show");
Route::get("/view/template","ViewController@template");
Route::get("view/blade","ViewController@blade");

Route::get("/model/select","UserController@query");
Route::get("/model/insert","UserController@insert");
Route::get("/login","LoginController@login");
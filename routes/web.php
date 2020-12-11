<?php

use Illuminate\Support\Facades\Route;

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
Route::redirect("/google", "https://www.google.com/", 301);

Route::get('/', function () {
    return view('welcome');
});
Route::get("/hello", function() {
    return "<h1>Hello World!</h1>";
});
Route::get("/whoAreYou/{name}", function($name) {
    return "<h1>こんにちわ".$name."さん</h1>";
});
Route::get("/helloBlade", function() {
    return view("hello");
});
Route::get("/helloBladeWithData", function() {
    $data["name"] = "武者小路";
    return view("helloWithData", $data);
});
Route::get("/chap3/helloToSomeone", function() {
    $data["name"] = "中野";
    return view("chap3.hello", $data);
});
Route::get("/chap3/if", function() {
    $data["rand"] = rand(1, 3);
    return view("chap3.ifStatement", $data);
});
Route::get("/chap3/for", function() {
    $data["resultList"] = ["A"=>"田中", "B"=>"中野", "C"=>"野村", "D"=>"村井", "E"=>"井田"];
    return view("chap3.loopVariables", $data);
});
Route::get("/chap4/helloBladeWithData", "HelloBladeWithDataController");
Route::get("/chap4/helloToSomeone", "Chap4\HelloToSomeoneController");
Route::get("/chap4/helloMusha", "Chap4Controller@helloMusha");
Route::get("/chap4/helloNakano", "Chap4Controller@helloNakano");
Route::get("/chap4/whoAreYou/{name}", "Chap4Controller@whoAreYou");
Route::get("/chap4/whoAreYouFull/{nameFirst}/{nameLast}", "Chap4Controller@whoAreYouFull");
Route::get("/chap5/middlewareTest", function() {
    return "<p>ミドルウェアのテスト。こちらはリクエスト処理。</p>";
})->middleware('recordipaddress:中,通常管理者');
Route::get("/chap6/newBook", "Chap6Controller@newBook");
Route::get("/chap6/newBook2", "Chap6Controller@newBook2");
Route::get("/chap6/newBook3", "Chap6Controller@newBook3");
Route::get("/chap6/newNote", "Chap6Controller@newNote");
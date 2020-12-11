<?php
namespace App\Http\Controllers\Chap4;

use App\Http\Controllers\Controller;

class HelloToSomeoneController extends Controller
{
    public function __invoke()
    {
        $data["name"] = "中野";
        return view("chap3.hello", $data);
    }
}
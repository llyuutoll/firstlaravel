<?php
namespace App\Http\Controllers;

use app\Http\Controllers\Controller;

class Chap4Controller extends Controller
{
    public function helloMusha()
    {
        $data["name"] = "武者小路";
        return view("helloWithData", $data);
    }

    public function helloNakano()
    {
        $data["name"] = "中野";
        return view("chap3.hello", $data);
    }

    public function whoAreYou($name)
    {
        $data["name"] = $name;
        return view("chap3.hello", $data);
    }

    public function whoAreYouFull($nameFirst, $nameLast)
    {
        $data["name"] = $nameFirst." ".$nameLast;
        return view("chap3.hello", $data);
    }
}
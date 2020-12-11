<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class HelloBladeWithDataController extends Controller
{
    public function __invoke()
    {
        $data["name"] = "武者小路";
        return view("helloWithData", $data);
    }
}
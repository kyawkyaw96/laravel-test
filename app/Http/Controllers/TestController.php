<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function run()
    {
        return "i am run function";
    }
    public function mySelf()
    {

        return view("index", [
            "firstName" => "win",
            "lastName" => "kyaw kyaw"
        ]);
    }
    public function age()
    {
        return view("about", ["age" => 27]);
    }
    public function phone()
    {
        return view("contact", ["phoneNumber" => "09789799629"]);
    }
    public function area($w,$b){
        return "Area is ". ($w * $b). " sqft";
    }
}

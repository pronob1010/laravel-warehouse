<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index(){
        return "<h1>Hello World!</h1>";
    }

    public function testData($name,$id){
        echo "My name is $name. My id is $id.";
    }

    public function extTestData(Request $request){
        // echo $request;
        echo "My name is $request->name. My id is $request->id.";
    }
}

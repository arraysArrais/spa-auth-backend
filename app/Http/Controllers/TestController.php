<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function teste()
    {
        return view('teste');
    }

    public function apiTest(){
        return response()->json('oie');
    }
}

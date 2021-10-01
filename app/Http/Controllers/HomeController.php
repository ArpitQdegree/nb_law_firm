<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    //

    public function data(Request $request){
        return view('welcome');

    }
}

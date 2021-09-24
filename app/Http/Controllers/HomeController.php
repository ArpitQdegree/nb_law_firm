<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    //

    public function data(Request $request){
        
        $data = DB::table('home')->where('id','1')->first();

        // print_r($data);
        // echo " ";
        // die();

        // foreach ($data as $datas ) {
        //     echo $datas->heading;
        // }

        return view('welcome');
        
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AdminHomeController extends Controller
{
    public function dashboard(){


        $total_post = DB::table('posts')
                        ->select('id')
                        ->count();

        // dd($total_post);

        return view("admin.views.dashboard", compact(['total_post']));
    }
}

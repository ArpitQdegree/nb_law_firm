<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function addpost(){
        // echo "hello";
        return view('admin.views.addpost');
    }

    public function allpost(){
        return view('admin.views.allpost');
    }


    // public function adminheader(){
    //     return view('admin.layouts.header');
    // }
}

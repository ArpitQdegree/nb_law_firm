<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function addpost(){
        // echo "hello";
        return view('admin.views.addpost');
    }
}

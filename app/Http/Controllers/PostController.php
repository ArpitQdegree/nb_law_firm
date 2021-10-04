<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;
use Illuminate\Support\Facades\Validator;

// use Illuminate\Support\Str;

class PostController extends Controller
{
    // public function addpost(){
    //     return view('admin.views.addpost');
    // }

    public function allpost(){
        return view('admin.views.allpost');
    }


    public function addpostData(Request $request) {

        $validator = Validator::make($request->all(), [
            'title' => 'required|unique:posts|max:255',
            // 'body' => 'required',
        ]);

        if($validator->fails()) {
            return redirect('add-post')
                        ->withErrors($validator)
                        ->withInput();
        }

        $post = new Post;
        $post->title = $request->title;
        $post->slug ="Put  the slug value here";
        $post->body ="Put  the body value here";
        $post->save();

        return redirect('all-post')->withStatus(__('new post added successfully!'));
    }


    #below functionality added by me
    public function addpost(Request $request){

         return view('admin.views.addpost');


        // echo "hello";
        // die(); #comming under this


    }








    // public function adminheader(){
    //     return view('admin.layouts.header');
    // }

        // https://stackoverflow.com/questions/58381808/sqlstate23000-integrity-constraint-violation-1048-column-title-cannot-be-n


    #slug functionality added here
    // public function check_slug(Request $request){
    //     $slug = Str::slug($request->title);
    //     return response()->json(['slug' => $slug]);
    // }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;
use Illuminate\Support\Facades\Validator;

// use Illuminate\Support\Str;

class PostController extends Controller
{
    public function addpost(){
        // echo "hello";
        return view('admin.views.addpost');
    }

    public function allpost(){
        return view('admin.views.allpost');
    }


    #below functionality added by me
    public function save(Request $request){

        // echo "hello";
        // die(); #comming under this

        // $post = new Post();
        // $post->title = $request->get('title');

        // $request->validate([
        //     'title' => 'required',
        // ]);

        $validator = Validator::make($request->all(),[
             'title' => '$request->title',

        ]);

        if($validator->fails()){
            return redirect('add-post')->withErrors($validator)->withInput();
            // return redirect('add-post')->withStatus(_('Please Enter Title'));
        } else{
            $save_post = new post;
            $save_post->title = $request->title;

            $save_post->save();

            $request->session()->flash("message","message saved successfully");

            return redirect('add-post');
        }

        // else{
        //     return redirect('add-post')->withStatus(__('Please Enter the iamge'));
        // }

        // if ($request->hasFile('image')) {
        //     $imageName = $request->image->store('public');
        // }else{
        //     return redirect('add-post')->withStatus(__('Please Enter the iamge'));
        // }

        // $post = new post;
        // $post->title = $request->title;
        // $post->content = $request->content;
        // $post->save();


        return redirect('all-post');
    }


    // public function adminheader(){
    //     return view('admin.layouts.header');
    // }


    #slug functionality added here
    // public function check_slug(Request $request){
    //     $slug = Str::slug($request->title);
    //     return response()->json(['slug' => $slug]);
    // }

}

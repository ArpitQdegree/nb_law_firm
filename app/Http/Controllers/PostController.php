<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;
use Illuminate\Support\Facades\Validator;
use DB;

// use Illuminate\Support\Str;

class PostController extends Controller
{
    // public function addpost(){
    //     return view('admin.views.addpost');
    // }

    public function allpost(){

        $posts = DB::table('posts')
                    ->select('id','title','body', 'status')
                    ->get();

        return view('admin.views.allpost',['posts' => $posts]);
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

    public function addpost(Request $request){

         return view('admin.views.addpost');
    }

    public function postedit(Post $post){

        return view('admin.views.edit', compact('post'));
    }

    public function updatepost(Request $request, $id)
    {
        $post = Post::findOrFail($id);

        $post->title = $request->title;
        $post->body = $request->body;

        $post->update();
        
         return redirect('all-post')->withStatus(__('Post updated successfully!'));

    }

    #work on below function
    Public function postdelete(Request $request, $id){

        // $id = $request->delete_id;
        // $id = $request->id;

        $post_data = Post::findorFail($id);

        if(isset($post_data->id)){
            $post_data->delete();

            echo json_encode(array("status" => 1, "message" => "post deleted successfully"));
        } else{
            echo json_encode(array("status" => 0, "message" => "Section error"));
        }

        return view('all-post');
    }

}

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


    public function postdelete($id){

        $post_data = Post::find($id);

        if($post_data->id){
            $post_data->delete();

           return redirect('/all-post')->with('success', 'Post Deleted Successfully');
        } else{

            return redirect::back()->withErrors(['msg' => 'Error while deleting the post']);
        }

        return view('all-post');
    }


    public function index(){

        // $posts = Post::Orderby('id', 'desc')->get();

        $posts = Post::Orderby('id', 'desc')->paginate(5);

        return view('blog', compact(['posts']));
    }

}

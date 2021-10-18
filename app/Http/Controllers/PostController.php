<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;
use Illuminate\Support\Facades\Validator;
use DB;
use Illuminate\Support\Str;

// use Illuminate\Support\Str;

class PostController extends Controller
{
    // public function addpost(){
    //     return view('admin.views.addpost');
    // }

    public function allpost(){

        $posts = DB::table('posts')
                    ->select('id','title','body', 'status', 'image')
                    ->get();

        return view('admin.views.allpost',['posts' => $posts]);
    }

    public function addpost(Request $request){

        return view('admin.views.addpost');
    }

    public function addpostData(Request $request) {

        $validator = Validator::make($request->all(), [
            'title' => 'required|unique:posts|max:60',

            'content' => 'required'
        ]);

        if($validator->fails()) {
            return redirect('add-post')
                        ->withErrors($validator)
                        ->withInput();
        }

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $file_name ="image/".Str::random(5).'-'.time().".".$file->getClientOriginalExtension();
            $destinationPath = public_path('image');
            $file->move($destinationPath, $file_name);
            $data['image'] = $file_name;
        }else{
            return response("Please insert the image");
        }

        $post = new Post;
        $post->title = ucfirst($request->title);
        $post->body = $request->content;


        $post->slug = Str::slug($post->title,'-');

        $post->image = $file_name;

        $post->save();

        return redirect('all-post')->withStatus(__('new post added successfully!'));
    }


    public function postedit(Post $post){

        return view('admin.views.edit', compact('post'));
    }

    public function updatepost(Request $request, $id)
    {
        $post = Post::findOrFail($id);

        $post->title = $request->title;
        $post->body = $request->body;

        if($image = $request->file('image')){
                $file = $request->file('image');
                $file_name = $request->file('image')->getClientOriginalName();
                $destinationPath = 'image';
                $file->move($destinationPath, $file_name);
                $input['image'] = $file_name;
                // $post->image = $file_name;
        }


        // $post->image_url = $file_name;
        #till here added by

        $post->update();

        // Post::image = $image_url;



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

    public function detailblog(){
        return view('blog_detailed');
    }

    #search functionality starts from here

    public function search(Request $request){

        $search = $request->input('search');

        $posts = Post::where('title','LIKE','%'.$search.'%')->paginate(5);

        if(count($posts) > 0){
            return view('blog', compact(['posts', 'search']));
        }
        else{
            // return view ('blog')->withMessage('No Details found. Try to search again !');

            return redirect::back()->withErrors(['msg' => 'No post found']);
        }

    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;
use App\Models\Admin;
use Illuminate\Support\Facades\Validator;
use DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Http\Controllers\redirect;
use Session;

// use Illuminate\Support\Str;

class PostController extends Controller
{


    public function allpost(){

        $posts = DB::table('posts') ->get();

        //return json_encode($posts);
        return view('admin.views.allpost',compact('posts'));
    }

    public function addpost(Request $request){

        return view('admin.views.addpost');
    }

    public function addpostData(Request $request) {

        $validator = Validator::make($request->all(), [
            // 'title' => 'required|unique:posts|max:60',
            'title' => 'required|unique:posts',
            // 'image' => 'required | image | max:100',  //size 100 means 100kb
            'image' => 'required | image | max:20',
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

        // if($image = $request->file('image')){
           if($request->hasfile('image')){
            $file = $request->file('image');
            $file_name ="image/".Str::random(5).'-'.time().".".$file->getClientOriginalExtension();
            $destinationPath = 'image';
            $request->file('image')->move($destinationPath, $file_name);
            $post->image = $file_name;
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


        $posts = Post::Orderby('id', 'desc')->paginate(5);

        return view('blog', compact(['posts']));
    }

    public function detailblog($slug){
        $post = Post::where('slug', $slug)->firstOrFail();

        return view('blog_detailed', compact(['post']));
    }

    #search functionality starts from here

    public function search(Request $request){

        $search = $request->input('search');

        $posts = Post::where('title','LIKE','%'.$search.'%')->paginate(5);

        if(count($posts) > 0){
            return view('blog', compact(['posts', 'search']));
        }
        else{
            // return redirect::back()->withErrors(['msg' => 'No post found']);

            // return back()->withInput();
            // return back()->withInput()->withErrors(['msg' => 'No post found']);

            return redirect('/blog')->with('danger','No post found');

            // echo "hello";
            // die;
        }

    }

    public function formValidation()
    {
    	return view('form-validation');
    }


    public function formsubmit(Request $request){
        // dd($request->all());
        if($request->all() != ''){
            return redirect()->back()->with('success','Your Comment has gone to the admin for approval');
        }

    }

    // public function formValidationPost(Request $request)
    // {
    // 	$this->validate($request,[
    // 			'name' => 'required',
    // 			'email' => 'required',
    // 			'subject' => 'required',
    //             'message' => 'required',
    // 		],[
    // 			'name.required' => ' The name field is required.',
    // 			'email' => ' The email field is required.',
    // 			'subject' => ' The subject field is required.',
    // 			'message' => ' The messagefield is required.',
    // 		]);


    // 	dd('You are successfully added all fields.');
    // }


    // public function getpost(Request $request){
    //     $latest_post = DB::table('posts')
    //                         ->select('title')
    //                         ->latest()
    //                         ->get();

    //   return view('blog_detailed')->with('latestpost', $latest_post);
    // }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Nette\Utils\Validators;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    //

    public function data(Request $request){
        return view('welcome');

    }

    public function login (){
        return view('auth.login');
    }

    public function index(Request $request){
        $validator = Validator::make($request->all(),[
            'email' => 'required | email | string',
            'password' => 'required|string',
        ]);

        if($validator->fails()){
            return response()->json(['status' => False, 'message' => $validator->errors()->first()]);
        }
         $credential = [
            'email' => $request['email'],
            'password' => $request['password'],
        ];

        if(Auth::attempt($credential)){
            $user = $request->user();
            
           
            // dd($user);
            return view("admin.views.dashboard",compact('user'));

        }

        else{
          return view("auth.login");
        }
    }

    public function dashboard(Request $request){

    }
    
    // public function login(Request $request){

    // }
}

<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('', [HomeController::class,'data']);

Route::get('about-us/', function(){
    return view('about');
});

Route::get('our-services/', function(){
    return view('service');
});

Route::get('media', function(){
    return view('media');
});

Route::get('disclamier', function(){
    return view('disclaimer');
});
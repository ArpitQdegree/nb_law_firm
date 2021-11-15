<?php

use App\Http\Controllers\AdminHomeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
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


Route::get('', [HomeController::class,'data']);

Route::get('about-us/', function(){
    return view('about');
})->name('about-us');

Route::get('our-services/', function(){
    return view('service');
})->name('our-services');

Route::get('services/maintenance-alimony/', function(){
    return view('services.MaintenanceandAlimony');
})->name('services/maintenance-alimony/');

Route::get('services/domestic-violence-cases/', function(){
    return view('services.DomesticViolence');
})->name('services/domestic-violence-cases/');

Route::get('services/child-custody/', function(){
    return view('services.ChildCustodyandVisitation');
})->name('services/child-custody/');

Route::get('services/nri-legal-services/', function(){
    return view('services.NRIDivorceLegalSupport');
});

Route::get('services/498a-allied-criminal-proceedings/', function(){
    return view('services.AlliedCriminalProceedings');
});

Route::get('services/mutual-consent-divorce-procedure/', function(){
    return view('services.mutualconsentdivorce');
});

Route::get('services/civil-suits-in-property/', function(){
    return view('services.civilsuitsproperty');
})->name('services/civil-suits-in-property/');

Route::get('services/counseling-mediation/', function(){
    return view('services.counsellingmeditation');
});

Route::get('services/transfer-petition/', function(){
    return view('services.transferpetition');
});

Route::get('services/civil-suits-for-partition/', function(){
    return view('services.civilsuitspartition');
});

Route::get('services/will-probation-cases/', function(){
    return view('services.willprobationcases');
});

Route::get('services/annulment-of-marriage/', function(){
    return view('services.annulmentmarriage');
})->name('services/annulment-of-marriage/');


Route::get('services/judicial-separation/', function(){
    return view('services.judicialseparation');
})->name('services/judicial-separation/');

Route::get('services/restitution-of-conjugal-rights/', function(){
    return view('services.restitutionconjugalrights');
});

Route::get('services/cyber-stalking/', function(){
    return view('services.cyberstalking');
});

Route::get('services/solemnization-of-marriages/', function(){
    return view('services.solemnizationofmarriage');
});

Route::get('media', function(){
    return view('media');
})->name('media');

Route::get('disclamier', function(){
    return view('disclaimer');
})->name('disclamier');

Route::get('contact-us', function(){
    return view('contact');
})->name('contact-us');

Route::get('our-team', function(){
    return view('ourteam');
})->name('our-team');;

Route::get('blog', [PostController::class, 'index'])->name('blog');


Route::get('header', function(){
    return view('header');
});

Route::any('search', [PostController::class, 'search'])->name('search');

Route::get('blog/{slug}', [PostController::class, 'detailblog'])->name('blog.show');


// Route::get('getpost', [PostController::class, 'getpost']);

// Route::get('form-validation', [PostController::class, 'formvalidation']);
// Route::post('form-validation', [PostController::class, 'formvalidation']);


#admin panel routes starts from here

#below route is added for the admin login
// Route::get('admin/login', [AdminAuthController::class, 'getlogin'])->name('adminLogin');
// Route::get('admin/login', [AdminAuthController::class, 'postlogin'])->name('adminLoginPost');
// Route::get('admin/logout', [AdminAuthController::class, 'logout'])->name('adminLogout');
#till here added by me

// Route::middleware([ 'AdminAuthenitcated'])->prefix('admin')->group(function () { #this line is added by me


    // Route::get('admin/', [AdminHomeController::class,'dashboard'])->middleware('auth');
    Route::get('admin/', [AdminHomeController::class,'dashboard'])->name('admin')->middleware('auth');

    Route::get('/add-post',[PostController::class,'addpost'])->name('addpost')->middleware('auth');
    Route::post('/add-post-data',[PostController::class,'addpostData'])->name('addpostData')->middleware('auth');

    Route::get('/all-post', [PostController::class,'allpost'])->name('allpost')->middleware('auth');

    Route::get('/save', [PostController::class, 'save'])->middleware('auth');

    Route::get('/admin-header', [PostController::class,'adminheader'])->name('adminheader')->middleware('auth');

    Route::get('/post-edit/{post}',[PostController::class,'postedit'])->name('postedit')->middleware('auth');
    Route::post('/post-update/{id}',[PostController::class,'updatepost'])->name('updatepost')->middleware('auth');

    Route::delete('/post-delete/{id}', [PostController::class, 'postdelete'])->name('postdelete')->middleware('auth');
// });



// Route::get('/login', [PostController::class,'admninLoginForm'])->name('admninLoginForm');
// Route::post('/check-login', [PostController::class,'checklogin'])->name('checklogin');


Auth::routes();

// Route::get('/',[HomeController::class, 'login']);

Route::post('/admin/login', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin/login', [App\Http\Controllers\HomeController::class, 'login'])->name('admin.home');

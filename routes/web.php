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


Route::get('services/maintenance-alimony/', function(){
    return view('services.MaintenanceandAlimony');
});

Route::get('services/domestic-violence-cases/', function(){
    return view('services.DomesticViolence');
});

Route::get('services/child-custody/', function(){
    return view('services.ChildCustodyandVisitation');
});

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
});

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
});

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
});

Route::get('disclamier', function(){
    return view('disclaimer');
});

Route::get('contact-us', function(){
    return view('contact');
});

Route::get('header', function(){
    return view('header');
});

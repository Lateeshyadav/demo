<?php

use App\Http\Controllers\RefmetController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('home');
// });

Route::controller(RefmetController::class)->group(function(){
    Route::get('/','home');
    Route::get('/home','home');
    Route::get('/about','about');
    Route::get('/product','product');
    Route::get('/contact','contact');
    Route::get('/suppliers','suppliers');

    Route::get('/whatwebuy','whatwebuy');
    Route::get('/whatwesell','whatwesell');
    Route::get('/serviceweoffer','serviceweoffer');
    Route::get('/listapprovel','listapprovel');

    Route::get('/zslagcan','zslagcan');
    Route::get('/zslagcaal50','zslagcaal50');
    Route::get('/zslagcaal20','zslagcaal20');
    Route::get('/slagkills','slagkills');
    Route::get('/ferronickel','ferronickel');
    Route::get('/ferronickelmoly','ferronickelmoly');
    Route::get('/calciummolybdatecm','calciummolybdatecm');
    Route::get('/ferrovanadium','ferrovanadium');
    Route::get('/nickleoxidecobaltoxide','nickleoxidecobaltoxide');
    Route::get('/tungstenvanaduimpent','tungstenvanaduimpent');    
});
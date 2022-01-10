<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\OffersController;
use App\Http\Controllers\BusinessController;
use App\Http\Controllers\UsersController;

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

Route::get('/', function () {
    return view('home');
})->name('home');
Route::get('dashboard', [CustomAuthController::class, 'dashboard']); 
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom'); 
Route::get('register', [CustomAuthController::class, 'registration'])->name('signup');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom'); 
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');

Route::get('/oferty', [OffersController::class,'index'])->name('offers');
Route::get('/oferty/dodaj', [OffersController::class,'index'])->name('offer.add');




    Route::get('/login/business',[CustomAuthController::class, 'showBusinessLoginForm'] )->name('business.login');
    Route::get('/login/user', [CustomAuthController::class, 'showUserLoginForm'] )->name('user.login');
    Route::get('/register/business',[CustomAuthController::class, 'showBusinessRegisterForm']);
    Route::get('/register/user', [CustomAuthController::class, 'showUserRegisterForm']);

    Route::post('/login/business',[CustomAuthController::class, 'businessLogin'] );
    Route::post('/login/user', [CustomAuthController::class, 'userLogin'] );
    Route::post('/register/business', [CustomAuthController::class, 'createBusiness']);
    Route::post('/register/user',[CustomAuthController::class, 'createUser']);

    Route::get('/user',[UsersController::class, 'dashboard']);
        Route::get('/business', [BusinessController::class, 'dashboard']);
    Route::group(['middleware' => ['auth']], function () {


    });

  
    Route::get('/lokalizacje', 'LocationController@index')->name('locations');
  Route::get('/oferty/{offerUuid}', 'OfferController@show')->name('offer.show');


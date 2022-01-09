<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;

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
Route::get('registration', [CustomAuthController::class, 'registration'])->name('signup');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom'); 
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');

Auth::routes();

    Route::get('/login/business',[CustomAuthController::class, 'showBusinessLoginForm'] );
    Route::get('/login/user', [CustomAuthController::class, 'showUserLoginForm'] );
    Route::get('/register/business',[CustomAuthController::class, 'showBusinessRegisterForm']);
    Route::get('/register/user', [CustomAuthController::class, 'showUserRegisterForm']);

    Route::post('/login/business',[CustomAuthController::class, 'businessLogin'] );
    Route::post('/login/user', [CustomAuthController::class, 'userLogin'] );
    Route::post('/register/business', [CustomAuthController::class, 'createBusiness']);
    Route::post('/register/user',[CustomAuthController::class, 'createUser']);

    Route::view('/home', 'home')->middleware('auth');
    Route::view('/business', 'business');
    Route::view('/user', 'user');

Route::group(['middleware' => ['app.check']], function () {


  Route::get('/business/login', 'Auth\LoginCompanyController@showLoginForm')->name('business.login');
  Route::get('/business/signup', 'Auth\SignupCompanyController@businessSignup')->name('business.signup');
  Route::post('/business/signup/post', 'Auth\SignupCompanyController@signupPost')->name('business.signup.post');
  Route::get('/business/payment', 'CompanyController@payment')->name('company.payment');
  Route::get('/business/activate/{hash}', 'Auth\SignupCompanyController@activate')->name('business.activate');
  Route::get('/activate/{hash}', 'Auth\SignupController@activate')->name('activate');
  Route::get('/oferty', 'OfferController@index')->name('offers');
    Route::get('/lokalizacje', 'LocationController@index')->name('locations');
  Route::get('/oferty/{offerUuid}', 'OfferController@show')->name('offer.show');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

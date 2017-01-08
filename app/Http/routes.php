<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('home');
/* /signup je ono sto se vidi u url-u! */
Route::post('/signup', [
    //dodajemo kontroler i postSignUp je funkcija koja se izvrsava kada udjemo na /signup post request
    'uses' => 'UserController@postSignUp',
    'as'=>'signup'
]);
Route::get('/dashboard',[
    'uses'=> 'UserController@getDashboard',
    'as'=> 'dashboard',
    //hocemo da ova stranica bude vidljiva samo onima koji su logovani!
    //auth a ne Authenticate kako je u App/Http/Middleware jer  u Kernel.php tako pise da treba da se naziva
    'middleware' => 'auth'
]);
Route::post('/signin',[
    'uses'=>'UserController@postSignIn',
    'as'=>'signin'
]);

Route::get('/logout', [
    'uses'=>'UserController@getLogOut',
    'as'=>'logout',
    'middleware' => 'auth'
]);

Route::get('/getsignin', [
    'uses'=>'UserController@getSignIn',
    'as'=>'signinform'
]);

Route::get('/dash', [
    'uses'=>'DashboardController@index',
    'as'=>'dash',
    'middleware' => 'roles'
]);




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


Route::get('/aboutUs', [
    'uses'=>'DashboardController@getAboutUs',
    'as'=>'aboutUs',
    'middleware' => 'auth'
]);

Route::get('/reservation', [
    'uses'=>'DashboardController@getReservation',
    'as'=>'reservation',
    'middleware' => 'auth'
]);

Route::get('/rating', [
    'uses'=>'DashboardController@getRating',
    'as'=>'rating',
    'middleware' => 'auth'
]);

Route::get('/contact', [
    'uses'=>'DashboardController@getContact',
    'as'=>'contact',
    'middleware' => 'auth'
]);

Route::post('contact/send', 'ContactController@send');

Route::get('/repertoar', [
    'uses'=>'DashboardController@getRepertoar',
    'as'=>'repertoar',
    'middleware' => 'auth'
]);



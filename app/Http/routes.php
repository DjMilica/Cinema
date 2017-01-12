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

/* USER rute!!!!!! */

Route::get('/dashboard',[
    'uses'=> 'UserController@getDashboard',
    'as'=> 'dashboard',
    //hocemo da ova stranica bude vidljiva samo onima koji su logovani!
    //auth a ne Authenticate kako je u App/Http/Middleware jer  u Kernel.php tako pise da treba da se naziva
    'middleware' => 'auth'
]);

Route::get('/dashboard/aboutUs', [
    'uses'=>'DashboardController@getAboutUs',
    'as'=>'aboutUs',
    'middleware' => 'auth'
]);

Route::get('/dashboard/reservation', [
    'uses'=>'DashboardController@getReservation',
    'as'=>'reservation',
    'middleware' => 'auth'
]);

Route::get('/dashboard/rating', [
    'uses'=>'DashboardController@getRating',
    'as'=>'rating',
    'middleware' => 'auth'
]);

Route::get('/dashboard/contact', [
    'uses'=>'DashboardController@getContact',
    'as'=>'contact',
    'middleware' => 'auth'
]);

Route::post('/dashboard/contact/send', 'ContactController@send');

Route::get('/dashboard/repertoar', [
    'uses'=>'Repertoar@index',
    'as'=>'repertoar',
    'middleware' => 'auth'
]);

Route::get('/dashboard/movies', [
    'uses'=>'MovieController@index',
    'as'=>'movies',
    'middleware' => 'auth'
]);

/* ADMIN RUTE */

Route::get('/admin', [
    'uses'=>'AdminController@index',
    'as'=>'dash',
    'middleware' => 'roles'
]);

Route::get('/admin/addMovie',[
  'uses' => 'AdminController@addMovie',
    'as' => 'addmovie',
    'middleware' => 'roles'
]);

Route::get('/admin/deleteMovie',[
    'uses' => 'AdminController@deleteMovie',
    'as' => 'deletemovie',
    'middleware' => 'roles'
]);

Route::post('/admin/addMovie/storeMovie',[
    'uses'=>'AdminController@postStoreMovie',
    'as'=>'storemovie',
    'middleware' => 'roles'
]);

Route::post('/admin/deleteMovie/eraseMovie',[
    'uses'=>'AdminController@postEraseMovie',
    'as'=>'erasemovie',
    'middleware' => 'roles'
]);

Route::get('/admin/addProjection',[
    'uses' => 'AdminController@getAddProjection',
    'as' => 'addprojection',
    'middleware' => 'roles'
]);

Route::post('/admin/addProjection/addShow',[
    'uses' => 'AdminController@postAddProjection',
    'as' => 'addshow',
    'middleware' => 'roles'
]);

Route::get('/admin/deleteProjection',[
    'uses' => 'AdminController@getDeleteProjection',
    'as' => 'deleteprojection',
    'middleware' => 'roles'
]);

Route::post('/admin/addProjection/deleteShow',[
    'uses' => 'AdminController@postDeleteProjection',
    'as' => 'deleteshow',
    'middleware' => 'roles'
]);
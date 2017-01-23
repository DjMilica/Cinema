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


Route::get('/dashboard', [
    'uses'=>'DashboardController@getAboutUs',
    'as'=>'aboutUs',
    'middleware' => 'auth'
]);

//Route::get('/dashboard/reservation', [
//    'uses'=>'DashboardController@getReservation',
//    'as'=>'reservation',
//    'middleware' => 'auth'
//]);

Route::resource('/dashboard/reservation', 'ReservationController');


Route::get('/dashboard/rating', [
    'uses'=>'DashboardController@getRating',
    'as'=>'rating',
    'middleware' => 'auth'
]);

Route::post('/dashboard/rating/addRating',[
    'uses' => 'DashboardController@postStoreRating',
    'as' => 'addRating',
    'middleware' => 'auth'
]);

Route::get('/dashboard/rating/viewRating', [
    'uses'=>'DashboardController@viewRating',
    'as'=>'viewRating',
    'middleware' => 'auth'
]);

Route::get('/dashboard/contact', [
    'uses'=>'DashboardController@getContact',
    'as'=>'contact',
    'middleware' => 'auth'
]);

Route::post('/dashboard/contact/send', 'ContactController@send');
//
//Route::get('/dashboard/repertoar', [
//    'uses'=>'RepertoarController@index',
//    'as'=>'repertoar',
//    'middleware' => 'auth'
//]);
//zna da odmah treba da udje u repertoar kontroler i u edit i u update funkcije
Route::resource('/dashboard/repertoar', 'RepertoarController', ['as'=>'repertoar', 'middleware' => 'auth']);


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

Route::get('/admin/customers',[
    'uses' => 'AdminController@getCustomers',
    'as' => 'customers',
    'middleware' => 'roles'
]);

Route::get('/admin/customers/{id}',[
    'uses' => 'AdminController@postViewReservations',
    'as' => 'reservcustom',
    'middleware' => 'roles'
]);

Route::get('/admin/projections',[
    'uses' => 'AdminController@getProjections',
    'as' => 'projections',
    'middleware' => 'roles'
]);
Route::get('/admin/movies',[
    'uses' => 'AdminController@getMovies',
    'as' => 'moviesadmin',
    'middleware' => 'roles'
]);

Route::get('/admin/emailAll',[
    'uses' => 'AdminController@getEmailAll',
    'as' => 'emailall',
    'middleware' => 'roles'
]);
Route::get('/admin/email',[
    'uses' => 'AdminController@getEmail',
    'as' => 'email',
    'middleware' => 'roles'
]);

Route::post('/admin/emailAll/send',[
    'uses' => 'AdminController@postEmailAll',
    'as' => 'sendemailall',
    'middleware' => 'roles'
]);
Route::post('/admin/email/send',[
    'uses' => 'AdminController@postEmail',
    'as' => 'sendemail',
    'middleware' => 'roles'
]);

Route::get('/admin/movies/{id}',[
    'uses' => 'AdminController@postRating',
    'as' => 'ratingadmin',
    'middleware' => 'roles'
]);

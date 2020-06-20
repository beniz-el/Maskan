<?php

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



Route::get('/membre', function () {
    return view('auth.login');
});

Route::get('/signup', function () {
    return view('signup');
});

Route::get('/louer', function(){
		return view('location');
	});





Route::get('/search', 'locationController@search');
Route::get('/seaarch', 'locationController@seaarch');
Route::get('/seearch', 'achatController@seearch');
Route::get('/searchvente', 'achatController@search');

Route::get('/maison', 'locationController@maison');
Route::get('/villa', 'locationController@villa');
Route::get('/terrain', 'locationController@terrain');
Route::get('/restaurant', 'locationController@restaurant');
Route::get('/garage', 'locationController@garage');
Route::get('/usine', 'locationController@usine');
Route::get('/magasin', 'locationController@magasin');
Route::get('/bureau', 'locationController@bureau');

Route::get('/maisons', 'achatController@maison');
Route::get('/villas', 'achatController@villa');
Route::get('/terrains', 'achatController@terrain');
Route::get('/restaurants', 'achatController@restaurant');
Route::get('/garages', 'achatController@garage');
Route::get('/usines', 'achatController@usine');
Route::get('/magasins', 'achatController@magasin');
Route::get('/bureaux', 'achatController@bureau');

Route::get('/toutmaison', 'locationController@toutmaison');
Route::get('/toutvilla', 'locationController@toutvilla');
Route::get('/toutterrain', 'locationController@toutterrain');
Route::get('/toutrestaurant', 'locationController@toutrestaurant');
Route::get('/toutgarage', 'locationController@toutgarage');
Route::get('/toutusine', 'locationController@toutusine');
Route::get('/toutmagasin', 'locationController@toutmagasin');
Route::get('/toutbureau', 'locationController@toutbureau');

Route::get('/nonvalid', 'HomeController@nonvalid');


Auth::routes();

Route::put('/postlogin', 'AuthController@login');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('home/{id}',[
	'uses' => 'HomeController@profil',
'as' => 'home']);


Route::get('/form', function(){
	return view('form');
});



Route::put('/addimage', [
'uses' => 'achatController@store',
'as' => 'addimage']);

Route::get('profil/{id}',[
	'uses' => 'achatController@profil',
'as' => 'profil']);

Route::get('valider/{id}',[
	'uses' => 'achatController@valider',
'as' => 'valider']);

Route::get('supprimer/{id}',[
	'uses' => 'achatController@supprimer',
'as' => 'supprimer']);


Route::get('/show/{id}','locationController@show');

Route::get('showw/{id}/{a}',[
	'uses' => 'achatController@showw',
'as' => 'showw']);

Route::get('showv/{id}',[
	'uses' => 'achatController@showv',
'as' => 'showv']);


Route::get('/location', function(){
	return view('location');
});



Route::get('/contact', function(){
	return view('contact');
});

Route::get('/vente', [
'uses' => 'achatController@index',
'as' => 'vente']);


Route::get('/location', [
	'uses' => 'locationController@index',
	'as' => 'location'
]);

Route::get('/', [
	'uses' => 'locationController@indexw',
	'as' => '/'
]);



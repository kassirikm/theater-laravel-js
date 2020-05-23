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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/testHome', function () {
    return view('testHome');
});
/*
Route::get('hello', function() {
    return 'Hello World';
});
*/
Route::resource('artists', 'ArtistController');

Route::resource('types', 'TypeController');

// Route::resource('roles', 'RoleController');

Route::resource('localities', 'LocalityController');

Route::resource('locations', 'LocationController');

Route::resource('shows', 'ShowController');

Route::resource('representations', 'RepresentationController');

Auth::routes();

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/contact', 'PagesController@contact');
Route::get('/program', 'PagesController@program');




Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/shows/{feed}', 'ShowController@feed')
    ->name('show.feed');

Route::feeds();
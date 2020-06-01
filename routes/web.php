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
//route for user update


/*Route::resource('users', 'UserController@edit');
Route::get('users/{user}', function (App\User $user) {
    return $user->id;
});*/
Route::get('users/{user}/edit',  ['as' => 'users.edit', 'uses' => 'UserController@edit']);
Route::patch('users/{user}/update',  ['as' => 'users.update', 'uses' => 'UserController@update']);

Route::get('hello', function() {
    return 'Hello World';
});

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

// Navbar pages
Route::get('/', 'PagesController@index');
Route::get('/acceuil', 'PagesController@index');
Route::get('/shows', 'ShowController@index');
Route::get('/contact', 'PagesController@contact');




Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/shows/{feed}', 'ShowController@feed')
    ->name('show.feed');

Route::feeds();

// Checkout routes
Route::get('/paiement', 'CheckoutController@index')->name('checkout.index');

/*
 *  Route test pour paymentForm
 * 
Route::get('/paymentForm/index', function () {
    return view('/paymentForm/index');
});
*/

/*Cart Routes*/
Route::post('/panier/ajouter','CartController@store')->name('cart.store');
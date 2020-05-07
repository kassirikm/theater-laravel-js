<?php

use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Require user authentication to access api resources
Route::middleware('auth:api')->group(function() {
    Route::apiResource('representations', 'Api\RepresentationController');
});

Route::middleware('auth:api')->group(function() {
    Route::apiResource('shows', 'Api\ShowsController');
});

/*
Route::namespace('Api')->group(function() {
    Route::apiResource('representations', 'RepresentationController');
});

Route::namespace('Api')->group(function() {
    Route::apiResource('shows', 'ShowsController');
});
 */
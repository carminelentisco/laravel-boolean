<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

/**
 * Creazione di una rotta per Api
 * 
 * Assegno aggiungo il nome della catella tramite namespace('Api') ed gli assegno un gruppo ->group()
 * 
 * Al suo interno vi inserisco la rotta dell api in post
 */

Route::namespace('Api')->group(function () {
    Route::post('students/genders', 'StudentController@gender');
});
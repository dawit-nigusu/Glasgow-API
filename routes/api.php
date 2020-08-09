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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('eye_openings', 'EyeOpeningController@index');
Route::get('eye_opening/{id}', 'EyeOpeningController@show');
Route::post('eye_opening', 'EyeOpeningController@store');
Route::put('eye_opening/{id}', 'EyeOpeningController@update');
Route::delete('eye_opening/{id}', 'EyeOpeningController@destroy');


Route::get('verbal_responses', 'VerbalResponseController@index');
Route::get('verbal_response/{id}', 'VerbalResponseController@show');
Route::post('verbal_response', 'VerbalResponseController@store');
Route::put('verbal_response/{id}', 'VerbalResponseController@update');
Route::delete('verbal_response/{id}', 'VerbalResponseController@destroy');


Route::get('motor_responses', 'MotorResponseController@index');
Route::get('motor_response/{id}', 'MotorResponseController@show');
Route::post('motor_response', 'MotorResponseController@store');
Route::put('motor_response/{id}', 'MotorResponseController@update');
Route::delete('motor_response/{id}', 'MotorResponseController@destroy');

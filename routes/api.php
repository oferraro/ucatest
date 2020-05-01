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

// courses
Route::get('/course', 'CourseController@index')->name('course.list');
Route::post('/course', 'CourseController@add')->name('course.add');
Route::put('/course', 'CourseController@update')->name('course.update');
Route::delete('/course', 'CourseController@delete')->name('course.delete');

<?php

use Illuminate\Http\Request;
// use Illuminate\Routing\Route;

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

Route::get('students', 'Api\StudentsController@index');
Route::get('students\{student}', 'Api\StudentsController@show');




Route::get('kursus', 'API\CourseController@index');

Route::get('kursus/{data}', 'API\CourseController@show');

// Route Hapus Data
Route::delete('kursus/{data}', 'API\CourseController@destroy');

// Route Tambah Data
Route::post('kursus', 'API\CourseController@store');

// Route Update Data
Route::patch('kursus/{id}', 'API\CourseController@update');
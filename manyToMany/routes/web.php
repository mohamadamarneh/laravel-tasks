<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
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


Route::get('product/create', 'App\Http\Controllers\ProductController@create')->name('product.create');
Route::get('product/{product}', 'App\Http\Controllers\ProductController@show')->name('product.show');

// Route::get('student/create', 'App\Http\Controllers\StudentController@create')->name('student.create');
// Route::get('student/{student}', 'App\Http\Controllers\StudentController@show')->name('student.show');

<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('master');
// });
Route::get('/', 'Admin\CategoryController@create')
        ->name('admin.category.create');

Route::post('/category/store', 'Admin\CategoryController@store')
        ->name('admin.category.store');
        
Route::get('/category/index', 'Admin\CategoryController@index')
        ->name('admin.category.index');


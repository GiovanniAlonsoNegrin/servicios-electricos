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

//Route::get('/', function () {
//    return view('welcome');
//});

//Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//    return view('dashboard');
//})->name('dashboard');

Route::group(['as' => 'frontend.', 'namespace' => 'Frontend'], function() {
   Route::get('/', 'GeneralController@index')->name('index');
   Route::get('/sobre-nosotros', 'GeneralController@about')->name('about');
   Route::get('/servicios', 'GeneralController@services')->name('services');
   Route::get('/contacto', 'GeneralController@contact')->name('contact');
});

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function() {
    Route::get('/', function() {
       return "Hola administrador";
    });
});

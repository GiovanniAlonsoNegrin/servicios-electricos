<?php

use Illuminate\Support\Facades\Route;

Route::localized(function ($locale) {
//    dd($locale);
    Route::group(['as' => 'frontend.', 'namespace' => 'Frontend'], function() {
        Route::get('/', 'GeneralController@index')->name('index');
        Route::get('/sobre-nosotros', 'GeneralController@about')->name('about');
        Route::get('/servicios', 'GeneralController@services')->name('services');
        Route::get('/contacto', 'GeneralController@contact')->name('contact');
        Route::get('/politica-privacidad', 'GeneralController@policy')->name('policy');
    });
});

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function() {
    Route::get('/', 'HomeController@index')->name('index');
    Route::resource('users', 'UserController')->except('show')->names('users');
    Route::resource('roles', 'RoleController')->except('show')->names('roles');
});

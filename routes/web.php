<?php

/* Routes */

Route::get('/', 'StaticpageController@getHomepage')->name('index');
Route::get('/felhasznalasi-feltetelek', 'StaticpageController@getTermsOfUse')->middleware('auth');

Route::get('/user/login', 'UserController@getLogin')->name('user.login');
Route::post('/user/login', 'UserController@postAuth')->name('user.auth');
Route::get('/user/registration','UserController@getReg')->name('user.registration');
Route::post('/user/save','UserController@postRegData')->name('user.reg-save');



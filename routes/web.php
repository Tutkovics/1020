<?php

/* Routes */

Route::get('/', 'StaticpageController@getHomepage')->name('index');
Route::get('/felhasznalasi-feltetelek', 'StaticpageController@getTermsOfUse')->middleware('auth');

Route::get('/user/login', 'UserController@getLogin')->name('user.login');
Route::post('/user/auth', 'UserController@postAuth')->name('user.auth');
Route::get('/user/reg','UserController@getReg')->name('user.registration');
Route::post('/user/save','UserController@postRegData')->name('user.reg-save');
Route::get('/user/logout', 'UserController@getLogout')->name('user.logout');

// for loged in users
Route::get('/user/mypage', 'UserController@getMyPage')->name('user.mypage')->middleware('auth');
Route::get('/hookah/new', 'HookahController@getNewHookah')->name('hookah.new')->middleware('auth');
Route::post('/hookah/new/save', 'HookahController@postNewHookahData')->name('hookah.save')->middleware('auth');
Route::get('/hookah/history', 'HookahController@getHookahHistory')->name('hookah.history')->middleware('auth');

// for admins
Route::get('/admin/users', 'AdminController@getListUsers')->name('admin.edit-users')->middleware('admin');
Route::get('/admin/users/kill/{id}', 'AdminController@getUserDelete')->name('admin.user-delete')->middleware('admin');
Route::get('/admin/users/adminpermission/{id}', 'AdminController@getUserAdmin')->name('admin.user-admin')->middleware('admin');
Route::get('/admin/users/{id}', 'AdminController@getUserData')->name('admin.user-data')->middleware('admin');
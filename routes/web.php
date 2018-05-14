<?php

Route::get('/', 'PagesController@homePage');

Route::get('/login', ['as' => 'login', 'uses' => 'PagesController@loginPage']);

Route::post('/login', 'AuthController@doLogin');

Route::get('/logout', 'AuthController@doLogout');

Route::group(['middleware' => 'auth'], function(){

  Route::get('/admin', 'PagesController@dashboard');

});

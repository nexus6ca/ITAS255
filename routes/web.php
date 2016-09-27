<?php

// Define all routes for the l5_blog project
Route::get('/', 'BlogController@index');
Route::get('/blog/add', 'BlogController@add');
Route::get('/blog/delete/{id}', 'BlogController@delete');
Route::get('/blog/display', 'BlogController@display');
Route::get('/blog/edit/{id}', 'BlogController@edit');
Route::get('/blog/save', 'BlogController@save');
Route::get('/blog/save/{id}', 'BlogController@save');

// Define a route to match all other requests
// This should be the last rule in your routing file(s)
Route::any('{all}', 'BlogController@index')->where('all', '.*');
<?php


Route::get('/', 'PostsController@index');

Route::get('/post/{slug}', 'PostsController@show');


Route::get('/about', function () {
    return view('about');
});


Route::post('/post/{id}/comments', 'CommentsController@store');

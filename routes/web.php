<?php

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

Route::get('/', function () {
    return '<h3>Hotel California</h3>';
    // return view('welcome');
});

Route::get('/about', function () {
    $response_arr = [];
    $response_arr['author'] = 'JB';
    $response_arr['version'] = '0.1.1';
    return $response_arr;
    // return '<h3>About</h3>';
});

Route::get('/home', function () {
    $data = [];
    $data['version'] = '0.1.1';
    return view('welcome', $data);
});

Route::get('/di', 'ClientController@di');

Route::get('/facades/db', function () {
    return DB::select('SELECT * from table');
});

Route::get('/facades/encrypt', function () {
    return Crypt::encrypt('12345678');
});

Route::get('/facades/decrypt', function () {
    return Crypt::decrypt('eyJpdiI6IkN0SURlS0lLcE10S1ExQ1JLdUNHV1E9PSIsInZhbHVlIjoiN1p0UjZSSG9QbUFyblFSTHNGaFoydz09IiwibWFjIjoiMzU3MDdlMmM0Yzg5MTZiNzUxMDQzMGRjNzEzMWNiYjQyYzM4N2Q0MWQ3MWQ5OTRhNDc2MDJmNWE2ODIxZDc4NCJ9');
});
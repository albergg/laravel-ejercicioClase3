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
    return view('welcome');
});
Route::get('/movies', 'MoviesController@index');

Route::get('/genres', function () {
    return view('genres');
});
Route::get('actors', 'ActorsController@index');


Route::get('/movies/detail/{id}', 'MoviesController@show');

Route::get('/actors/search', 'ActorsController@search');

Route::get('/addmovies', function () {
    return view('AddMovies');
});
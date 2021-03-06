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

Route::get('/welcome', function () {
   
    $name = 'Sabolc';
    $age = '27';
    
    return view('welcome',compact('name','age'));
});

Route::get('/', function () {

    return view('layouts.master');
})->name('layouts.master');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/cars', 'CarsController@index')->name('cars.cars');

Route::get('/cars/{id}', 'CarsController@show')->name('cars.show');
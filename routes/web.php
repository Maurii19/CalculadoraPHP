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


Route::get('/', 'calculadoraController@getInicio');
Route::post('/calculadora', 'calculadoraController@setName');
Route::get('/calculadora' , 'calculadoraController@getCalculator');
Route::post('/resultado', 'calculadoraController@postCalculator');




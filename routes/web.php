<?php

use Illuminate\Support\Facades\Route;

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



Route::view('/','home')->name('home');

Route::view('/quienes-somos','about')->name('about');

// Route::view('/portfolio','portfolio', compact('portfolio'))->name('portfolio');

// Route::get('/portfolio', 'App\Http\Controllers\PortfolioController')->name('portafolio');

Route::get('/portafolio', 'App\Http\Controllers\ProjectController@index')->name('projects.index');

Route::get('/portafolio/crear', 'App\Http\Controllers\ProjectController@create')->name('projects.create');

Route::post('/portafolio', 'App\Http\Controllers\ProjectController@store')->name('projects.store');

Route::get('/portafolio/{project}', 'App\Http\Controllers\ProjectController@show')->name('projects.show');

Route::view('/contacto','contact')->name('contact');

// Route::resource('projects', 'App\Http\Controllers\PortfolioController')->only(['index','show']);

// Route::apiResource('projects', 'App\Http\Controllers\PortfolioController');


//* Se crea para el formulario una ruta con POST
Route::post('contact','App\Http\Controllers\MessageController@store')->name('messages.store');

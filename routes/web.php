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

Route::view('/about','about')->name('about');

// Route::view('/portfolio','portfolio', compact('portfolio'))->name('portfolio');

// Route::get('/portfolio', 'App\Http\Controllers\PortfolioController')->name('portafolio');

Route::get('/portfolio', 'App\Http\Controllers\PortfolioController@index')->name('portfolio');

Route::view('/contact','contact')->name('contact');

// Route::resource('projects', 'App\Http\Controllers\PortfolioController')->only(['index','show']);

// Route::apiResource('projects', 'App\Http\Controllers\PortfolioController');

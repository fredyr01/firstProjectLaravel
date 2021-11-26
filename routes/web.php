<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

// Route::get('/portafolio', 'App\Http\Controllers\ProjectController@index')->name('projects.index');

// Route::get('/portafolio/crear', 'App\Http\Controllers\ProjectController@create')->name('projects.create');

// Route::get('/portafolio/{project}/editar', 'App\Http\Controllers\ProjectController@edit')->name('projects.edit');

// Route::patch('/portafolio/{project}', 'App\Http\Controllers\ProjectController@update')->name('projects.update');

// Route::post('/portafolio', 'App\Http\Controllers\ProjectController@store')->name('projects.store');

// Route::get('/portafolio/{project}', 'App\Http\Controllers\ProjectController@show')->name('projects.show');

// Route::delete('/portafolio/{project}', 'App\Http\Controllers\ProjectController@destroy')->name('projects.destroy');

//* Agrupando las rutas de project
//* Recibe el nombre del recurso: projects
//* Recibe el nombre del controlador encargado: ProjectController

Route::resource('portafolio','App\Http\Controllers\ProjectController')
    ->names('projects')
    ->parameters(['portafolio' => 'project']);


Route::view('/contacto','contact')->name('contact');

// Route::resource('projects', 'App\Http\Controllers\PortfolioController')->only(['index','show']);

// Route::apiResource('projects', 'App\Http\Controllers\PortfolioController');


//* Se crea para el formulario una ruta con POST
Route::post('contact','App\Http\Controllers\MessageController@store')->name('messages.store');

Auth::routes(['register' => false]);





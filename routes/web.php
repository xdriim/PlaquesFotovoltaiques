<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\PlaquesFotovoltaiques;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\WeatherController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PlaquesFotovoltaiques::Class,'index'])->name('plaques.index');
Route::get('/plaques', [PlaquesFotovoltaiques::Class,'create']);
Route::post('/plaques', [PlaquesFotovoltaiques::Class,'store'])->name('plaques.store');

Route::get('plaques/read/{id}', [PlaquesFotovoltaiques::Class,'read'])->name('plaques.read');
Route::get('plaques/ver/{id}', [PlaquesFotovoltaiques::Class,'ver'])->name('plaques.vista');

Route::post('/plaques/update/', [PlaquesFotovoltaiques::Class,'update'])->name('plaques.update');
Route::get('/plaques/delete/{id}', [PlaquesFotovoltaiques::Class,'destroy']);

// SEARCH BY EMISSIONS
Route::get('/plaques/search/', [PlaquesFotovoltaiques::Class,'search'])->name('plaques.search');

//LOGOUT SESION
Route::get('/cerrarsesion', [LogoutController::class, 'logout']);

// ASIDE
Route::get('/search', [WeatherController::class, 'search'])->name('search');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

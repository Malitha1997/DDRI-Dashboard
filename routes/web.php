<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IndexesController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/navbar', function () {
    return view('layouts.navbar');
});

Route::get('/home', [HomeController::class, 'home'])->name('home');

Route::get('/BusinessEnviroment', [IndexesController::class, 'BusinessEnviroment'])->name('BusinessEnviroment');
Route::get('/TechnologyInfrastructure', [IndexesController::class, 'TechnologyInfrastructure'])->name('TechnologyInfrastructure');
Route::get('/SocioEconomic', [IndexesController::class, 'SocioEconomic'])->name('SocioEconomic');
Route::get('/CapacityGrowth', [IndexesController::class, 'CapacityGrowth'])->name('CapacityGrowth');
Route::get('/DigitalAdoption', [IndexesController::class, 'DigitalAdoption'])->name('DigitalAdoption');

Route::get('/ampara', [IndexesController::class, 'Ampara'])->name('Ampara');

Route::get('/comparison', [HomeController::class, 'comparison'])->name('comparison');


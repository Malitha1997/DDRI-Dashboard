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

Route::get('/Ampara', [IndexesController::class, 'Ampara'])->name('Ampara');
Route::get('/anuradhapura', [IndexesController::class, 'Anuradhapura'])->name('Anuradhapura');
Route::get('/Badulla', [IndexesController::class, 'Badulla'])->name('Badulla');
Route::get('/Batticaloa', [IndexesController::class, 'Batticaloa'])->name('Batticaloa');
Route::get('/Colombo', [IndexesController::class, 'Colombo'])->name('Colombo');
Route::get('/Galle', [IndexesController::class, 'Galle'])->name('Galle');
Route::get('/Gampaha', [IndexesController::class, 'Gampaha'])->name('Gampaha');
Route::get('/Hambantota', [IndexesController::class, 'Hambantota'])->name('Hambantota');
Route::get('/Jaffna', [IndexesController::class, 'Jaffna'])->name('Jaffna');
Route::get('/Kalutara', [IndexesController::class, 'Kaluthara'])->name('Kalutara');
Route::get('/Kandy', [IndexesController::class, 'Kandy'])->name('Kandy');
Route::get('/Kegalle', [IndexesController::class, 'Kegalle'])->name('Kegalle');
Route::get('/Kilinochchi', [IndexesController::class, 'Kilinochchi'])->name('Kilinochchi');
Route::get('/Kurunegala', [IndexesController::class, 'Kurunegala'])->name('Kurunegala');
Route::get('/Mannar', [IndexesController::class, 'Mannar'])->name('Mannar');
Route::get('/Matale', [IndexesController::class, 'Matale'])->name('Matale');
Route::get('/Matara', [IndexesController::class, 'Matara'])->name('Matara');
Route::get('/Monaragala', [IndexesController::class, 'Monaragala'])->name('Monaragala');
Route::get('/Mulativu', [IndexesController::class, 'Mulativu'])->name('Mulativu');
Route::get('/NuwaraEliya', [IndexesController::class, 'NuwaraEliya'])->name('NuwaraEliya');
Route::get('/Polonnaruwa', [IndexesController::class, 'Polonnaruwa'])->name('Polonnaruwa');
Route::get('/Puttalam', [IndexesController::class, 'Puttalam'])->name('Puttalam');
Route::get('/Ratnapura', [IndexesController::class, 'Ratnapura'])->name('Ratnapura');
Route::get('/Trincomalee', [IndexesController::class, 'Trincomalee'])->name('Trincomalee');
Route::get('/Vavuniya', [IndexesController::class, 'Vavuniya'])->name('Vavuniya');

Route::get('/comparison', [HomeController::class, 'comparison'])->name('comparison');

Route::post('/comparisonDistricts', [HomeController::class, 'compare'])->name('compare');

Route::get('download', [HomeController::class,'download'])->name('download');


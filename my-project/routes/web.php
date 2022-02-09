<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SingletonController;
use App\Http\Controllers\FactoryController;
use App\Http\Controllers\FacadeController;
use App\Http\Controllers\IteratorController;
use App\Http\Controllers\ObserveurController;
use App\Http\Controllers\StrategieController;
use App\Http\Controllers\TemplateController;
use App\Http\Controllers\CompositeController;
use App\Http\Controllers\ChainOfResponsabilityController;
use App\Http\Controllers\StateController;


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

Route::get('/', [SingletonController::class, 'index']);
Route::get('/facade', [FacadeController::class, 'commander']);
Route::get('/iterator', [IteratorController::class, 'index']);
Route::get('/observeur', [ObserveurController::class, 'index']);
Route::get('/strategie', [StrategieController::class, 'index']);
Route::get('/template', [TemplateController::class, 'index']);
Route::get('/composite', [CompositeController::class, 'index']);
Route::get('/state', [StateController::class, 'index']);
Route::get('/chain', [ChainOfResponsabilityController::class, 'index']);
Route::get('/voiture/{model}', [FactoryController::class, 'index']);

// Route::get('/voiture/{model}', ['as' => 'voiture.model', 'uses' => 'FactoryController@index']);

##Calling Route:##
// route('voiture.model',[$model]);
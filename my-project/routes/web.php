<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SingletonController;
use App\Http\Controllers\FactoryController;
use App\Http\Controllers\FacadeController;

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
Route::get('/voiture/{model}', [FactoryController::class, 'index']);

// Route::get('/voiture/{model}', ['as' => 'voiture.model', 'uses' => 'FactoryController@index']);

##Calling Route:##
// route('voiture.model',[$model]);
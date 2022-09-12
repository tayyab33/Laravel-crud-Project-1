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

Route::get('/save', [App\Http\controllers\SalesBooksController::class, 'save']);
Route::get('/delete/{id}', [App\Http\controllers\SalesBooksController::class, 'delete']);
Route::get('/updateNow/{id}', [App\Http\controllers\SalesBooksController::class, 'update']);
Route::get('/updater/{id}', [App\Http\controllers\SalesBooksController::class, 'updateshow']);
Route::get('/', [App\Http\controllers\SalesBooksController::class, 'index']);


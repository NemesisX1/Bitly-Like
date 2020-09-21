<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\GlobalController;
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

Route::get('/', [GlobalController::class, 'index']);
Route::post('/link', [GlobalController::class, 'link']);
Route::get('/ly/{url_id}', [GlobalController::class, 'redirect']);
Route::get('/check', [GlobalController::class, 'check']);
Route::get('/bitly/{id}', [GlobalController::class, 'bitly']);

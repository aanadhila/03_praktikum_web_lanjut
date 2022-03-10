<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [PageController::class, 'home']);
Route::get('/Catalogs', [PageController::class, 'catalogs']);
Route::get('/Contact', [PageController::class, 'contact']);
Route::get('/Team', [PageController::class, 'team']);
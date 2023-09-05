<?php

use App\Http\Controllers\FindPositions;
use Illuminate\Support\Facades\Route;

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


Route::get('/', [FindPositions::class, 'index'])->name('index');

Route::post('/createSearchQuery', [FindPositions::class, 'createSearchQuery'])->name('createSearchQuery');

Route::post('/getSearchQueries', [FindPositions::class, 'getSearchQueries'])->name('getSearchQueries');

Route::post('/deactivateQuery', [FindPositions::class, 'deactivateQuery'])->name('deactivateQuery');


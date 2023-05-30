<?php

use App\Http\Controllers\BejegyzesController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/bejegyzesek', [BejegyzesController::class, 'index']);
Route::get('/bejegyzesek/{osztaly_id}', [BejegyzesController::class, 'show']);
Route::post('/bejegyzes', [BejegyzesController::class, 'store']);


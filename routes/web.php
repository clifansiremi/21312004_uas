<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\UasController;

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


Route::get('/master', function () {
    return view('layout.master');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    echo "<h1>Hello laravel</h1>";
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/forminput', [PagesController::class,'FormInput']);
Route::post('/welcome', [PagesController::class,'Welcome']);

Route::get('/datatable', function () {
    return view('datatable.index');
});

// UAS CAST
Route::get('/uas', [UasController::class,'index']);
Route::get('/uas/create', [UasController::class,'create']);
Route::post('/uas', [UasController::class,'store']);
Route::get('/uas/{uas_id}/edit', [CastController::class,'edit']);
Route::put('/uas/{uas_id}', [CastController::class,'update']);
Route::delete('/uas/{uas_id}', [CastController::class,'destroy']);

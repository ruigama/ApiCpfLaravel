<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DigitalController;
use App\Http\Middleware\VerifyToken;

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

//Route::middleware('verifyToken')->get('/digital/{cpf}', 'DigitalController@buscaDados');
//Route::get('/digital/{cpf}', 'DigitalController@buscaDados');
Route::get('/digital/{cpf}', [DigitalController::class, 'buscaDados']);
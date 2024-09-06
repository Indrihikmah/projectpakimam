<?php

use App\Http\Controllers\UserController;
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
Route::get('/home', function () {
    return view('welcome');
});
Route::get('/menu', function () {
    return view('user');
});

Route::post('/auth',[UserController::class,'auth']);
Route::get('/user',[UserController::class,'user']);
Route::post('/user/pesanan',[UserController::class,'pesanan']);
Route::get('/user/kiriman',[UserController::class,'kiriman']);




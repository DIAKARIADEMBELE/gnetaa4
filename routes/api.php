<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

//register

Route::post('/register',[UserController::class, 'register']);
Route::post('/register/admin',[AdminiController::class, 'register']);

//login

Route::post('/login',[AdminiController::class, 'login']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    //user
 Route::get('/user',[AdminiController::class, 'user']);
 Route::put('/user',[AdminiController::class, 'update']);
 Route::post('/logout',[AdminiController::class, 'logout']);
});

//suppresion



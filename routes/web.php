<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
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
Route::get('/', [HomeController::class,'home'])->name('app_home');

/**Route::get('/sous_administrateur', [HomeController::class,'sous_administrateur'])->name('app_sous_administrateur');
**/
Route::get('/super_administrateur', [HomeController::class,'super_administrateur']
)->name('app_super_administrateur');

route::match(['get','post'],'/login',[LoginController::class,'login'])
 ->name('app_login');

 route::match(['get','post'],'/register',[LoginController::class,'register'])
 ->name('app_register');

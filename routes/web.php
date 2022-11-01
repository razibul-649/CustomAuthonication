<?php

use App\Http\Controllers\CustomeAuthController;
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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/login',[CustomeAuthController::class,'login'])->middleware('alreadyLoggedIn');
Route::get('/registration',[CustomeAuthController::class,'registration'])->middleware('alreadyLoggedIn');
Route::post('/register-user',[CustomeAuthController::class,'registerUser'])->name('register-user');

Route::post('login-user',[CustomeAuthController::class,'loginUser'])->name('login-user');

Route::get('/dashboard',[CustomeAuthController::class,'dashboard'])->middleware('isLoggedIn');
Route::get('/logout',[CustomeAuthController::class,'logout']);

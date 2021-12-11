<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\cityController;
use App\Http\Controllers\userController;
use App\Http\Controllers\tableInfoController;
use App\Http\Controllers\Api\Auth\LoginController;
use App\Http\Controllers\Api\Auth\LogoutController;
use App\Http\Controllers\Api\Auth\RegisterController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/user',[userController::class,'getUserDetails']);
Route::post('/register',[RegisterController::class,'createAccount']);
Route::post('/login',[LoginController::class,'loginIntoAccount']);
Route::post('/logout',[LogoutController::class,'logout']);


Route::post('/add',[userController::class,'add']);
Route::post('/multiple',[userController::class,'multiple']);
Route::post('/division',[userController::class,'division']);

Route::get('/info',[tableInfoController::class,'info']);

Route::post('/addData',[cityController::class,'addData']);
Route::get('/getData',[cityController::class,'getData']);
Route::delete('/deleteData/{id}',[cityController::class,'deleteData']);
Route::put('/updateData',[cityController::class,'updateData']);
Route::get('/search/{name}',[cityController::class,'searchData']);
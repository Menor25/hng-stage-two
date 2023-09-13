<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::name('users')->group(function () {
    Route::get('/', [UserController::class, 'index']);
    Route::get('/{user_id}', [UserController::class, 'show'])->whereNumber('user_id');
    Route::post('/', [UserController::class, 'store']);
    Route::patch('/{user_id}', [UserController::class, 'update'])->whereNumber('user_id');
    Route::delete('/{user_id}', [UserController::class, 'destroy'])->whereNumber('user_id');
});

<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\UserSettingsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/user', [UserController::class, 'store']);

Route::get('/user_settings', [UserSettingsController::class, 'index'])->middleware('auth:sanctum');
Route::post('/user_settings', [UserSettingsController::class, 'store'])->middleware('auth:sanctum');
Route::get('/user_settings/{id}', [UserSettingsController::class, 'show'])->middleware('auth:sanctum');
Route::patch('/user_settings/{id}', [UserSettingsController::class, 'update'])->middleware('auth:sanctum');

// Route::resource('user_settings', UserSettingsController::class)
//     ->only(['index', 'store'])->middleware('auth:sanctum');

Route::post('/tokens/create', function (Request $request) {
    $token = $request->user()->createToken($request->token_name);
    
    return ['token' => $token->plainTextToken];
});
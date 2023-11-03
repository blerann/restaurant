<?php

use App\Http\Controllers\Api\CapabilitiesController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\RoleController;

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
Route::get('/role', [RoleController::class, 'index']);
Route::post('/role', [RoleController::class, 'store']);
Route::get('/role/{id}', [RoleController::class, 'show']);
Route::patch('/role/{id}', [RoleController::class, 'update']);
Route::delete('/role/{id}', [RoleController::class, 'destroy']);

Route::get('/capability', [CapabilitiesController::class, 'index']);
Route::post('/capability', [CapabilitiesController::class, 'store']);
Route::get('/capability/{id}', [CapabilitiesController::class, 'show']);
Route::patch('/capability/{id}', [CapabilitiesController::class, 'update']);
Route::delete('/capability/{id}', [CapabilitiesController::class, 'destroy']);

Route::post('/login', \App\Http\Controllers\Api\Auth\LoginController::class);
Route::post('/register', \App\Http\Controllers\Api\Auth\RegisterController::class);

Route::middleware('auth:sanctum')->get('/users', function (Request $request) {
    return $request->users();
});

Route::middleware('auth:sanctum')->group(function(){
    Route::get('test', function(){
return response()->json('inside route');
    });
});
<?php

use App\Http\Controllers\Api\CapabilityController;
use App\Http\Controllers\Api\RoleController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
//RoleController
Route::get("/roles", [RoleController::class, 'index']);
Route::post("/role", [RoleController::class, 'store']);
Route::get("/role/{id}", [RoleController::class, 'show']);
Route::patch("/role/{id}", [RoleController::class, 'update']);
Route::delete("/role/{id}", [RoleController::class, 'destroy']);

//CapabilityController

Route::get('/capabilities',[CapabilityController::class,'index']);
Route::post('/capability',[CapabilityController::class,'store']);
Route::get('/capability/{id}',[CapabilityController::class,'show']);
Route::patch('/capability/{id}',[CapabilityController::class,'update']);
Route::delete('/capability/{id}',[CapabilityController::class,'destroy']);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

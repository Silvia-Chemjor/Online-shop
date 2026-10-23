<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\RoleController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//public routes
Route::post('/register_user', [AuthController::class, 'register']);
Route::post('/login_user', [AuthController::class, 'login']);

//Protected Routes
Route::middleware('auth:sanctum')->group(function () {

    Route::post('/logout_user', [AuthController::class, 'logout']);

    Route::post('/create-role',[RoleController::class,'createRole']);
    Route::get('/read-roles',[RoleController::class,'readAll']);
    Route::get('/read-role/{id}',[RoleController::class, 'readRole']);
    Route::post('/update-role/{id}',[RoleController::class, 'updateRole']);
    Route::delete('/delete-role/{id}',[RoleController::class, 'deleteRole']);

    Route::post('/create-category',[CategoryController::class,'createCategory']);
    Route::get('/read-category',[CategoryController::class,'readAll']);
    Route::get('/read-category/{id}',[CategoryController::class, 'readcategory']);
    Route::post('/update-category/{id}',[CategoryController::class, 'updateCategory']);
    Route::delete('/delete-category/{id}',[CategoryController::class, 'deleteCategory']);
});



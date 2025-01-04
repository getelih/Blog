<?php

use App\Controllers\AuthController;
use App\Controllers\PostController;
use App\Controllers\PublicController;
use App\Controllers\UserController;
use App\Route;

Route::get('/', [PublicController::class, 'index']);

Route::get('/us', [PublicController::class, 'us']);

Route::get('/tech', [PublicController::class, 'tech']);

Route::get('/form', [PublicController::class, 'form']);
Route::post('/answer', [PublicController::class, 'answer']);

Route::get('/admin/posts', [PostController::class, 'index']);
Route::get('/admin/posts/create', [PostController::class, 'create']);
Route::post('/admin/posts', [PostController::class, 'store']);
Route::get('/admin/posts/show', [PostController::class, 'show']);
Route::get('/admin/posts/edit', [PostController::class, 'edit']);
Route::post('/admin/posts/edit', [PostController::class, 'update']);
Route::get('/admin/posts/delete', [PostController::class, 'destroy']);

Route::get('/login', [AuthController::class, 'loginForm']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'registerForm']);
Route::post('/register', [AuthController::class, 'register']);
Route::get('/logout', [AuthController::class, 'logout']);


Route::get('/user/posts', [UserController::class, 'index']);
Route::get('/user/posts/create', [UserController::class, 'create']);
Route::post('/user/posts', [UserController::class, 'store']);
Route::get('/user/posts/show', [UserController::class, 'show']);
Route::get('/user/posts/edit', [UserController::class, 'edit']);
Route::post('/user/posts/edit', [UserController::class, 'update']);
Route::get('/user/posts/delete', [UserController::class, 'destroy']);
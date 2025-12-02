<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BoardController;
use App\Http\Controllers\IssueController;
use App\Http\Controllers\IssueCommentController;

Route::get('/users', [UserController::class, 'index']);
Route::get('/users/{id}', [UserController::class, 'show']);
Route::post('/users', [UserController::class, 'store']);
Route::get('/board', [BoardController::class, 'index']);
Route::get('/board/{id}', [BoardController::class, 'show']);
Route::post('/board', [BoardController::class, 'store'])->middleware('auth:sanctum');
Route::get('/issues', [IssueController::class, 'index']);
Route::get('/issues/{id}', [IssueController::class, 'show']);
Route::post('/issues', [IssueController::class, 'store'])->middleware('auth:sanctum');
Route::put('/issues/{id}', [IssueController::class, 'update'])->middleware('auth:sanctum');
Route::patch('/issues/{id}/status', [IssueController::class, 'updateStatus'])->middleware('auth:sanctum');
Route::post('/issues/{id}/comments', [IssueCommentController::class, 'store'])->middleware('auth:sanctum');
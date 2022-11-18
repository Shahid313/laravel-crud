<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\CategoryController;

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

Route::get('/', [CategoryController::class, 'index']);
Route::get('/create-category', [CategoryController::class, 'create']);
Route::post('/store-category', [CategoryController::class, 'store']);
Route::get('/edit-category/{id}', [CategoryController::class, 'edit']);
Route::post('/update-category/{id}', [CategoryController::class, 'update']);
Route::get('/delete-category/{id}', [CategoryController::class, 'delete']);

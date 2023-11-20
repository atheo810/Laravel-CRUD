<?php

use App\Http\Controllers\Api\BookCategoryController;
use App\Http\Controllers\BookController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('book', [BookController::class, 'index']);
Route::get('bookCategory', [BookCategoryController::class, 'index']);
Route::post('book/create', [BookController::class, 'create']);

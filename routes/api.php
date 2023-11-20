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

Route::post('book/create', [BookController::class, 'create']);

Route::prefix('bookCategory')
    ->name('bookCategory')
    ->group(function () {
        Route::get('/', [BookCategoryController::class, 'index'])->name('index');
        Route::post('/', [BookCategoryController::class, 'store'])->name('store');
        Route::get('/{bookCategory}', [BookCategoryController::class, 'show'])->name('show');
        Route::put('/{bookCategory}', [BookCategoryController::class, 'update'])->name('update');
        Route::delete('/{bookCategory}', [BookCategoryController::class, 'destroy'])->name('destroy');
    });

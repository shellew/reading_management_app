<?php

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

Route::get('/book_master/', [ ApiController::class, 'getAllBooks'] );
Route::get('/book_master/{id}', [ ApiController::class, 'getBook'] );
Route::post('/book_master/', [ ApiController::class, 'createBook'] );
Route::put('/book_master/{id}', [ ApiController::class, 'updateBook'] );
Route::delete('/book_master/{id}', [ ApiController::class, 'deleteBook'] );

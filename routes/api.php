<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\ReadTimeController;
use App\Http\Controllers\UserMasterController;

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

// ApiController
Route::get('/book_masters/', [ ApiController::class, 'getAllBooks'] );
Route::get('/book_masters/{id}', [ ApiController::class, 'getBook'] );
Route::post('/book_masters/', [ ApiController::class, 'createBook'] );
Route::put('/book_masters/{id}', [ ApiController::class, 'updateBook'] );
Route::delete('/book_masters/{id}', [ ApiController::class, 'deleteBook'] );

// ReadTimeController
Route::get('/read_times/{id}', [ ReadTimeController::class, 'getReadTime']);
Route::post('/read_times/', [ ReadTimeController::class, 'createReadTime']);

//UserMasterController
Route::get('/user_masters/', [ UserMasterController::class, 'getAllUsers'] );
Route::get('/user_masters/{id}', [ UserMasterController::class, 'getUser'] );
Route::post('/user_masters/', [ UserMasterController::class, 'createUser'] );
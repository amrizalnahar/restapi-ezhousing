<?php

use App\Http\Controllers\API\TanahController;
use App\Http\Controllers\API\FasilitasController;
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

Route::get('tanah', [TanahController::class, 'index']);
Route::post('tanah/store', [TanahController::class, 'store']);
Route::get('tanah/show/{id}', [TanahController::class, 'show']);
Route::post('tanah/update/{id}', [TanahController::class, 'update']);
Route::get('tanah/destroy/{id}', [TanahController::class, 'destroy']);

Route::get('fasilitas', [FasilitasController::class, 'index']);
Route::post('fasilitas/store', [FasilitasController::class, 'store']);
Route::get('fasilitas/show/{id}', [FasilitasController::class, 'show']);
Route::post('fasilitas/update/{id}', [FasilitasController::class, 'update']);
Route::get('fasilitas/destroy/{id}', [FasilitasController::class, 'destroy']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

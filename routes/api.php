<?php

use App\Http\Controllers\Api\TareaController;
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

Route::group(['prefix' => 'tarea', 'as' => 'tarea.'], function () {
    Route::get('finalizar-tarea/{id}', [TareaController::class,'finalizarTarea'])->name('finalizar-tarea');
});

Route::resources([
    'tarea' => TareaController::class
]);

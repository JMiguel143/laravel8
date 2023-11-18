<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;


Route::get('item', [ItemController::class, 'index']);
Route::post('item', [ItemController::class, 'store']);
Route::get('item/{id}', [ItemController::class, 'show']);
Route::get('item/{id}/edit', [ItemController::class, 'edit']);
Route::put('item/{id}/edit', [ItemController::class, 'update']);
Route::delete('item/{id}/delete', [ItemController::class, 'destroy']);



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
   return $request->user();
});
Route::apiResource('items', ItemController::class);
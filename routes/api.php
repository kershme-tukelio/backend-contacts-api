<?php

use Illuminate\Http\Request;
use App\Http\Controllers\ContactsController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/test', function (Request $request) {
    return 'test prosao';
});
Route::get('/contacts', [ContactsController::class, 'index']);
Route::post('/contacts', [ContactsController::class, 'store']);
Route::get('/contacts/{id}', [ContactsController::class, 'show']);
Route::put('/contacts/{id}', [ContactsController::class, 'update']);
Route::delete('/contacts/{id}', [ContactsController::class, 'destroy']);
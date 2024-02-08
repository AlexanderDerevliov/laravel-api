<?php

use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\PostController as ApiPostController;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/test', function() {
    return response()->json([
        'name' => 'Alex',
        'state' => 'Italy',
    ]);
});

Route::get('/posts', [ApiPostController::class, 'index']);
Route::get('/categories', [CategoryController::class, 'index']);
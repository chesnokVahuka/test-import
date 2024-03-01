<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\ResourceController;
use Illuminate\Support\Facades\Route;

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

Route::get('/',[\App\Http\Controllers\ProductController::class, 'index']);




//Route::get('tasks-to-deal/patch',[\App\Http\Controllers\TaskToDealController::class, 'patch']);

//Route::prefix('resources')->group(function () {
//    Route::post('/store',[ResourceController::class, 'store']);
//    Route::get('/create',[ResourceController::class, 'create']);
//    Route::get('/',[ResourceController::class, 'index']);
//    Route::delete('/{uuid}',[ResourceController::class, 'destroy']);
////    Route::resource('resources', ResourceController::class);
//});





<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserDetailController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/userdetails/index', [UserDetailController::class, 'index']);
Route::get('/userdetails/create', [UserDetailController::class, 'create']);
Route::post('/userdetails/create', [UserDetailController::class, 'store']);
Route::get('/userdetails/{id}/edit', [UserDetailController::class, 'edit']);
Route::delete('/userdetails/delete', [UserDetailController::class, 'delete']);
Route::put('/userdetails/{id}/edit', [UserDetailController::class, 'update']);




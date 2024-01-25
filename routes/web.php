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
Route::get('/userdetails/destroy/{id}/', [UserDetailController::class, 'destroy']);

Route::get('/userdetails/edituser/{id}', [UserDetailController::class, 'edituser']);
Route::post('/userdetails/edit/{id}', [UserDetailController::class, 'edit']);


// Route::get('/userdetails/edituser/{id}/', [UserDetailController::class, 'edituser']);
// Route::get('/userdetails/edit/{id}/', [UserDetailController::class, 'edit']);


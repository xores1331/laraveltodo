<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TasksController;

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

Route::get('/', [TasksController::class, 'index']);
Route::delete('/{id}', [TasksController::class, 'destroy', 'id']);
Route::post('/', [TasksController::class, 'store']);
//Route::get('/destroy/{$id}', [TasksController::class, 'destroy'])->with('id', $id);

Auth::routes();

Route::get('/home', [TasksController::class, 'index']);

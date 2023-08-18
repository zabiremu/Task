<?php

use App\Http\Controllers\ToDoAppController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[ToDoAppController::class,'index'])->name('index');
Route::post('/store',[ToDoAppController::class,'store'])->name('store');
Route::get('/destroy/{id}',[ToDoAppController::class,'destroy'])->name('destroy');

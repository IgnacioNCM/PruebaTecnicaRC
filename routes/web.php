<?php

use App\Http\Controllers\TaskController;
use App\Http\Controllers\MenuController;
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

Route::get('/', MenuController::class)->name('menu');

Route::controller(TaskController::class)->group(function () {
    Route::get('fibonnaci', 'fibonacciIndex')->name('tasks.fibonacci');
    Route::post('fibonnaci', 'fibonacciOperation')->name('tasks.fibonacciOperation');
    Route::get('multiplicacion', 'multiplicacionIndex')->name('tasks.multiplicacion');
    Route::post('multiplicacion', 'multiplicacionOp')->name('tasks.multiplicacionOp');
    Route::get('cadena', 'cadenaIndex')->name('tasks.cadena');
    Route::post('cadena', 'cadenaOp')->name('tasks.cadenaOp');
    Route::get('primos', 'primosIndex')->name('tasks.primos');
    Route::post('primos', 'primosOp')->name('tasks.primosOp');
});

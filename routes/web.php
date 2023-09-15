<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\RVentaController;
use App\Http\Controllers\DetalleVentaController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('index');

Route::get('/rventa', [RVentaController::class, 'showRVenta'])->name('rventa');
Route::post('/rventa', [RVentaController::class, 'store'])->name('rventa.store');

Route::get('/detalleventa/{id}', [DetalleVentaController::class, 'show'])->name('detalleventa.show');

Route::get('/audifonos', function () {
    return view('audifonos');
})->name('audifonos');

Route::get('/carro', function () {
    return view('carro');
})->name('carro');

Route::get('/telefono', function () {
    return view('telefono');
})->name('telefono');
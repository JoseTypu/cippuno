<?php

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/tramites', function () {
    return view('tramites.index');
})->name('tramites.index');

Route::get('/certificados', function () {
    return view('certificados.index');
})->name('certificados.index');

Route::get('/ventas', function () {
    return view('ventas.index');
})->name('ventas.index');

Route::get('/dashboard', function () {
    return view('dash.index');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

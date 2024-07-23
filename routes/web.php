<?php

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

//Route::any('/{any}', [\App\Http\Controllers\ProxyController::class, 'determineProxy'])->name('proxies.determineProxy');

Route::group(['prefix' => 'login'], function (){
    Route::get('/', [\App\Http\Controllers\UserController::class, 'showLogin']);
    Route::post('/', [\App\Http\Controllers\UserController::class, 'login'])->name('login');
});

Route::group(['prefix' => 'proxies'], function (){
   Route::get('/', [\App\Http\Controllers\ProxyController::class, 'index'])->name('proxies.index');
   Route::post('/', [\App\Http\Controllers\ProxyController::class, 'store'])->name('proxies.store');
   Route::get('delete', [\App\Http\Controllers\ProxyController::class, 'deleteProxy'])->name('proxies.delete');
});

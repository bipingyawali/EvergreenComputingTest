<?php

use App\Http\Controllers\CustomerController;
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
    return redirect('login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'customers','middleware'=>['web','auth']],function (){
    Route::get('/', [CustomerController::class, 'index'])->name('customers.index');
    Route::get('/fetch-ajax', [CustomerController::class, 'fetchDataAjax'])->name('customers.ajax');
    Route::get('/create', [CustomerController::class, 'create'])->name('customers.create');
    Route::post('/store', [CustomerController::class, 'store'])->name('customers.store');
    Route::get('/show/{id}', [CustomerController::class, 'show'])->name('customers.show');
    Route::get('/edit/{id}', [CustomerController::class, 'edit'])->name('customers.edit');
    Route::put('/{id}/update', [CustomerController::class, 'update'])->name('customers.update');
});

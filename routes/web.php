<?php

use App\Http\Controllers\OrderMedicationController;
use App\Http\Controllers\OrderTransfusionController;
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


// Doctor's Orders
Route::get('/doctorsOrders', function () {
    return view('doctorsOrders');
});




Route::get('/orders', [OrderMedicationController::class, 'index'])->name('orders');
Route::get('/create', [OrderMedicationController::class, 'create'])->name('create');
Route::post('/store', [OrderMedicationController::class, 'store'])->name('store');
Route::get('/show/{id}', [OrderMedicationController::class, 'show'])->name('show');
Route::get('/editMedication/{id}', [OrderMedicationController::class, 'edit'])->name('editMedication');
Route::post('/update', [OrderMedicationController::class, 'update'])->name('update');
Route::get('/destroy/{id}', [OrderMedicationController::class, 'destroy'])->name('destroy');


<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PatientsController;
use App\Http\Controllers\HomeController;

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

Route::get('/', function (){
    return redirect()->route('login');
});

Auth::routes();

// ------- Admin Panel ------- //
Route::get('/home', [HomeController::class, 'index'])->name('adminHome');

Route::get('/patients', [HomeController::class, 'patients'])->name('patientView');




// Route::get('/dashboard', function(){
//     return view('dashboard');
// });

Route::get('/dashboard', [PatientsController::class, 'displayAll'])->name('dashboard');

Route::post('/createpatient', [PatientsController::class, 'create'])->name('createpatient');

// Route::get('/patient', [App\Http\Controllers\PatientsController::class, 'patient'])->name('patient');

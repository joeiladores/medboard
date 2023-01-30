<?php
use Illuminate\Support\Facades\Route;
// Admin Controllers
use App\Http\Controllers\UserController;
use App\Http\Controllers\BedController;
use App\Http\Controllers\Auth\RegisterController;
// Doctor Order Controllers
use App\Http\Controllers\OrderMedicationController;
use App\Http\Controllers\OrderTransfusionController;
use App\Http\Controllers\OrderTreatmentController;

//Admission Form
use App\Http\Controllers\AdmissionController;




Route::get('/', function () {
    return redirect()->route('login');
});

Auth::routes();

Route::get('/dashboard', function(){
    return view('dashboard');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// *****************************************************************************
// Patient Routes
Route::get('/patient', [App\Http\Controllers\PatientsController::class, 'patient'])->name('patient');


// *****************************************************************************
// Admin routes
Route::get('/admin/users', [UserController::class, 'users'])->name('users');
Route::get('/admin/beds', [BedController::class, 'beds'])->name('beds');
// Create new user is under the Auth RegisterController


// *****************************************************************************
// Doctor's Orders Routes

// Doctor's Orders View
Route::get('/doctorsOrders', function () {
    return view('doctorsOrders');
});

// For Doctor's Order Display View
Route::get('/orders', [OrderMedicationController::class, 'index'])->name('orders');


// *****************************************************************************
// Routes for Medication
Route::post('/storeMedication', [OrderMedicationController::class, 'store'])->name('storeMedication');
Route::get('/editMedication/{id}', [OrderMedicationController::class, 'edit'])->name('editMedication');
Route::post('/updateMedication', [OrderMedicationController::class, 'update'])->name('updateMedication');
Route::get('/destroyMedication/{id}', [OrderMedicationController::class, 'destroy'])->name('destroyMedication');


// *****************************************************************************
// Routes for Transfusion
Route::post('/storeTransfusion', [OrderTransfusionController::class, 'store'])->name('storeTransfusion');
Route::get('/editTransfusion/{id}', [OrderTransfusionController::class, 'edit'])->name('editTransfusion');
Route::post('/updateTransfusion', [OrderTransfusionController::class, 'update'])->name('updateTransfusion');
Route::get('/destroyTransfusion/{id}', [OrderTransfusionController::class, 'destroy'])->name('destroyTransfusion');


// *****************************************************************************
// Routes for Treatment
Route::post('/storeTreatment', [OrderTreatmentController::class, 'store'])->name('storeTreatment');
Route::get('/editTreatment/{id}', [OrderTreatmentController::class, 'edit'])->name('editTreatment');
Route::post('/updateTreatment', [OrderTreatmentController::class, 'update'])->name('updateTreatment');
Route::get('/destroyTreatment/{id}', [OrderTreatmentController::class, 'destroy'])->name('destroyTreatment');


// *****************************************************************************
// Routes for Admission


Route::get('/admissionForm', function () {
    return view('admissionForm');
});


Route::resource('admission', ChirpController::class)
    ->only(['admissionForm', 'store'])
    ->middleware(['auth', 'verified']);

    // require __DIR__.'/auth.php';
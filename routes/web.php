<?php
use Illuminate\Support\Facades\Route;
// Admin Controllers
use App\Http\Controllers\UserController;
use App\Http\Controllers\BedController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\NurseAssignmentController;
// Doctor Order Controllers
use App\Http\Controllers\OrderMedicationController;
use App\Http\Controllers\OrderTransfusionController;
use App\Http\Controllers\OrderTreatmentController;
// Patient Controllers
use App\Http\Controllers\PatientsController;


Route::get('/', function (){
    return redirect()->route('login');
});

Auth::routes();


// *****************************************************************************
// Patient Routes
Route::get('/home', [PatientsController::class, 'index'])->name('adminHome');
Route::get('/patient', [PatientsController::class, 'patient'])->name('patientView');
Route::post('/storePatient', [PatientsController::class, 'store'])->name('storePatient');
Route::get('/destroyPatient/{id}', [PatientsController::class, 'destroy'])->name('destroyPatient');
Route::post('/updatePatient', [PatientsController::class, 'update'])->name('updatePatient');
Route::get('/editPatient/{id}', [PatientsController::class, 'edit'])->name('editPatient');



// *****************************************************************************
// Admin routes
Route::get('/admin/users', [UserController::class, 'users'])->name('users');
Route::get('/admin/registeruser', [UserController::class, 'registeruser'])->name('registeruser');
Route::post('/admin/storeuser', [UserController::class, 'storeUser'])->name('storeuser');
Route::get('/admin/edituser/{id}', [UserController::class, 'editUser'])->name('edituser');
Route::get('/admin/deleteuser/{id}', [UserController::class, 'deleteUser'])->name('deleteuser');

Route::get('/admin/nurseassignments', [NurseAssignmentController::class, 'nurseAssignments'])->name('nurseassignments');
Route::post('/admin/storenurseassignment', [NurseAssignmentController::class, 'storeNurseAssignment'])->name('storenurseassignment');

Route::get('/admin/generate-userlistpdf', [UserController::class, 'generatePDF'])->name('generate-userlistpdf');

Route::get('/admin/beds', [BedController::class, 'beds'])->name('beds');
Route::post('/admin/storebed', [BedController::class, 'storeBed'])->name('storebed');
// Route::get('/admin/editbed/{id}', [BedController::class, 'editBed'])->name('editBed');
Route::post('/admin/updatebed', [BedController::class, 'updateBed'])->name('updatebed');
Route::get('/admin/showbed/{id}', [BedController::class, 'showBed'])->name('showbed');
Route::get('/admin/deletebed/{id}', [BedController::class, 'deleteBed'])->name('deletebed');



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

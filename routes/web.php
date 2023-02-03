<?php
use Illuminate\Support\Facades\Route;
// Admin Controllers
use App\Http\Controllers\UserController;
use App\Http\Controllers\BedController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\NurseAssignmentController;

// Calendar Controller
use App\Http\Controllers\CalendarController;

// Calendar Controller
use App\Http\Controllers\FullCalendarController;

// Doctor Order Controllers
use App\Http\Controllers\OrderMedicationController;
use App\Http\Controllers\OrderTransfusionController;
use App\Http\Controllers\OrderTreatmentController;

Route::get('/', function () {
    return redirect()->route('login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// *****************************************************************************
// Patient Routes
Route::get('/patient', [App\Http\Controllers\PatientsController::class, 'patient'])->name('patient');


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
// Calendar Routes
Route::get('/calendar', [CalendarController::class, 'index'])->name('calendar');
Route::resource('calendar', CalendarController::class)->only(['index','edit','store']);
Route::controller(CalendarController::class)->group(function () {
    Route::get('getevents','getEvents')->name('calendar.getevents');
    Route::put('update/events','updateEvents')->name('calendar.updateevents');
    Route::post('resize/events','resizeEvents')->name('calendar.resizeevents');
    Route::post('drop/events','dropEvents')->name('calendar.dropevents');
});


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

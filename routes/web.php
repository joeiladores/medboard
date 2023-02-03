<?php
use Barryvdh\DomPDF\Facade\Pdf;
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
use App\Http\Controllers\ProgressNoteController;


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

// Routes for Progres Notes
Route::post('/storeProgressNote', [ProgressNoteController::class, 'store'])->name('storeProgressNote');
Route::get('/editProgressNote/{id}', [ProgressNoteController::class, 'edit'])->name('editProgressNote');
Route::post('/updateProgressNote', [ProgressNoteController::class, 'update'])->name('updateProgressNote');
Route::get('/destroyProgressNote/{id}', [ProgressNoteController::class, 'destroy'])->name('destroyProgressNote');

Route::get('/generate-pdf', function(){
    // get the data to display in the PDF
    $patients = App\Models\Patients::all();
    // store it in a data array
    $data = [
    'patients' => $patients,
    ];
    // generate the PDF view
    // Create the userlist blade
    $pdf = Pdf::loadView('userlist', $data);
    // display the PDF in the browser
    return $pdf->stream('patientlist.pdf');
    //alternatively, you may directly download it using the ff code.
    // $pdf->download('name_of_pdf.pdf');
    })->name('generate-pdf');



// *****************************************************************************
// Routes for Admission

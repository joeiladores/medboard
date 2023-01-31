<?php
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\OrderMedicationController;
use App\Http\Controllers\OrderTransfusionController;
use App\Http\Controllers\OrderTreatmentController;
use App\Http\Controllers\ProgressNoteController;


Route::get('/', function () {
    return redirect()->route('login');
});

Route::get('/dashboard', function(){
    return view('dashboard');
});

// Doctor's Orders Routes

// Doctor's Orders View
Route::get('/doctorsOrders', function () {
    return view('doctorsOrders');
});

// Patient Routes
Route::get('/patient', [App\Http\Controllers\PatientsController::class, 'patient'])->name('patient');

// Admin routes
Route::get('/user', [UserController::class, 'user'])->name('user');
// Create new user is under the Auth RegisterController
// For Doctor's Order Display View
Route::get('/orders', [OrderMedicationController::class, 'index'])->name('orders');

// Routes for Medication
Route::post('/storeMedication', [OrderMedicationController::class, 'store'])->name('storeMedication');
Route::get('/editMedication/{id}', [OrderMedicationController::class, 'edit'])->name('editMedication');
Route::post('/updateMedication', [OrderMedicationController::class, 'update'])->name('updateMedication');
Route::get('/destroyMedication/{id}', [OrderMedicationController::class, 'destroy'])->name('destroyMedication');

// Routes for Transfusion
Route::post('/storeTransfusion', [OrderTransfusionController::class, 'store'])->name('storeTransfusion');
Route::get('/editTransfusion/{id}', [OrderTransfusionController::class, 'edit'])->name('editTransfusion');
Route::post('/updateTransfusion', [OrderTransfusionController::class, 'update'])->name('updateTransfusion');
Route::get('/destroyTransfusion/{id}', [OrderTransfusionController::class, 'destroy'])->name('destroyTransfusion');

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





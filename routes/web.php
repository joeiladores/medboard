<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// Admin Controllers
use App\Http\Controllers\UserController;
use App\Http\Controllers\BedController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\SpecializationController;
use App\Http\Controllers\Auth\RegisterController;

use App\Http\Controllers\NurseAssignmentController;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\FullCalendarController;

// Doctor Order Controllers
use App\Http\Controllers\DoctorDashboard;
use App\Http\Controllers\DoctorOrdersController;
use App\Http\Controllers\OrderMedicationController;
use App\Http\Controllers\OrderTransfusionController;
use App\Http\Controllers\OrderTreatmentController;
use App\Http\Controllers\ProgressNoteController;

// Patient Controllers
use App\Http\Controllers\PatientController;
use App\Http\Controllers\MedicalHistoryController;

//Admission Form
use App\Http\Controllers\AdmissionAjaxController;

// PDF
use Barryvdh\DomPDF\Facade\Pdf;


Route::get('/', function (){
    return redirect()->route('login');
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/doctorHome', [DoctorDashboard::class, 'index'])->name('doctorHome');
Route::get('/nurseHome', [HomeController::class, 'nurseHome'])->name('nurseHome');

// *****************************************************************************
// Patient Routes

Route::get('/patient', [PatientController::class, 'patient'])->name('patientView');
Route::post('/storePatient', [PatientController::class, 'store'])->name('storePatient');
Route::get('/destroyPatient/{id}', [PatientController::class, 'destroy'])->name('destroyPatient');
Route::post('/updatePatient', [PatientController::class, 'update'])->name('updatePatient');
Route::get('/editPatient/{id}', [PatientController::class, 'edit'])->name('editPatient');
Route::get('/patients/{id}', [PatientController::class, 'showPatient'])->name('patients');
Route::get('/medhistory/{id}', [PatientController::class, 'showPatient'])->name('patientMedHistory');
Route::post('/storeMedHistory', [MedicalHistoryController::class, 'storeMedHistory'])->name('storeMedHistory');
Route::get('/showmedhistory/{id}', [MedicalHistoryController:: class, 'showMedHistory'])->name('showmedhistory');


// Route::middleware(['auth', 'user-access:doctor'])->group(function () {
// });
// Route::middleware(['auth', 'user-access:nurse'])->group(function () {   
// });
// Route::middleware(['auth', 'user-access:chiefnurse'])->group(function () {
// });

// *****************************************************************************
// All Admin Routes List
Route::middleware(['auth', 'user-access:admin'])->group(function () {

     // User Routes 
    Route::get('/home', [PatientController::class, 'index'])->name('adminHome');
    Route::get('/admin/users', [UserController::class, 'users'])->name('users');
    Route::get('/admin/registeruser', [UserController::class, 'registeruser'])->name('registeruser');
    Route::post('/admin/storeuser', [UserController::class, 'storeUser'])->name('storeuser');
    Route::get('/admin/edituser/{id}', [UserController::class, 'editUser'])->name('edituser');
    Route::post('/admin/updateuser', [UserController::class, 'updateUser'])->name('updateuser');
    Route::get('/admin/deleteuser/{id}', [UserController::class, 'deleteUser'])->name('deleteuser');

    // Bed Routes 
    Route::get('/admin/beds', [BedController::class, 'beds'])->name('beds');
    Route::post('/admin/storebed', [BedController::class, 'storeBed'])->name('storebed');
    Route::post('/admin/updatebed', [BedController::class, 'updateBed'])->name('updatebed');
    Route::get('/admin/showbed/{id}', [BedController::class, 'showBed'])->name('showbed');
    Route::get('/admin/deletebed/{id}', [BedController::class, 'deleteBed'])->name('deletebed');

    // Department Routes
    Route::get('/admin/departments', [DepartmentController::class, 'index'])->name('departments');
    Route::post('/admin/storedepartment', [DepartmentController::class, 'store'])->name('department.store');
    Route::post('/admin/updatedepartment', [DepartmentController::class, 'update'])->name('department.update');
    Route::get('/admin/showdepartment/{id}', [DepartmentController::class, 'show'])->name('department.show');
    Route::get('/admin/deletedepartment/{id}', [DepartmentController::class, 'delete'])->name('department.delete');

    // Specialization Routes
    Route::get('/admin/specialization', [SpecializationController::class, 'index'])->name('specialization');
    Route::post('/admin/storespecialization', [SpecializationController::class, 'store'])->name('specialization.store');
    Route::post('/admin/updatespecialization', [SpecializationController::class, 'update'])->name('specialization.update');
    Route::get('/admin/showspecialization/{id}', [SpecializationController::class, 'show'])->name('specialization.show');
    Route::get('/admin/deletespecialization/{id}', [SpecializationController::class, 'delete'])->name('specialization.delete');

    // PDF Route
    Route::get('/admin/generate-userlistpdf', [UserController::class, 'generatePDF'])->name('generate-userlistpdf');

});

// *****************************************************************************
// Calendar Routes
Route::get('/calendar', [CalendarController::class, 'index'])->name('calendar');
Route::resource('calendar', CalendarController::class)->only(['index', 'edit', 'store']);
Route::controller(CalendarController::class)->group(function () {
    Route::get('getevents', 'getEvents')->name('calendar.getevents');
    Route::put('update/events', 'updateEvents')->name('calendar.updateevents');
    Route::post('resize/events', 'resizeEvents')->name('calendar.resizeevents');
    Route::post('drop/events', 'dropEvents')->name('calendar.dropevents');
});


// *****************************************************************************
// All Doctor Routes List

// Doctor's Orders View
Route::get('/doctorsOrders', [DoctorOrdersController::class, 'index'])->name('doctorsOrders');
Route::get('/orders/{id}', [OrderMedicationController::class, 'index'])->name('orders');

// For Doctor's Order Display(Medication, Transfusion, Treatment & Progress Notes) View


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
// Routes for Progres Notes
Route::post('/storeProgressNote', [ProgressNoteController::class, 'store'])->name('storeProgressNote');
Route::get('/editProgressNote/{id}', [ProgressNoteController::class, 'edit'])->name('editProgressNote');
Route::post('/updateProgressNote', [ProgressNoteController::class, 'update'])->name('updateProgressNote');
Route::get('/destroyProgressNote/{id}', [ProgressNoteController::class, 'destroy'])->name('destroyProgressNote');



// *****************************************************************************
// All Nurse Routes List


// *****************************************************************************
// All Chief Nurse Routes List

Route::get('/admin/nurseassignments', [NurseAssignmentController::class, 'nurseAssignments'])->name('nurseassignments');
Route::post('/admin/storenurseassignment', [NurseAssignmentController::class, 'storeNurseAssignment'])->name('storenurseassignment');



// *****************************************************************************
// Doctor's Orders Routes

// Doctor's Orders View
Route::get('/doctorsOrders', function () {
    return view('doctorsOrders');
});


// *****************************************************************************
// Nurse's Dashboard View
// Route::get('/nurseHome', function () {
//     return view('nurseHome');
// });


// *****************************************************************************
Route::get('/generate-pdf', function(){
    // get the data to display in the PDF
    $patients = App\Models\Patient::all();
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

Route::resource('ajaxadmissions', AdmissionAjaxController::class);

Route::get('/admission', function () {
    return view('admission')->name('admissions');
});

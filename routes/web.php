<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// Admin Controllers
use App\Http\Controllers\UserController;
use App\Http\Controllers\BedController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DoctorDashboard;
use App\Http\Controllers\NurseAssignmentController;

// PDF
use Barryvdh\DomPDF\Facade\Pdf;

// Calendar Controller
use App\Http\Controllers\CalendarController;

// Calendar Controller
use App\Http\Controllers\FullCalendarController;

// Doctor Order Controllers
use App\Http\Controllers\DoctorOrdersController;
use App\Http\Controllers\OrderMedicationController;
use App\Http\Controllers\OrderTransfusionController;
use App\Http\Controllers\OrderTreatmentController;

// Patient Controllers
use App\Http\Controllers\PatientController;
use App\Http\Controllers\MedicalHistoryController;

use App\Http\Controllers\ProgressNoteController;


//Admission Form
use App\Http\Controllers\AdmissionAjaxController;


Route::get('/', function (){
    return redirect()->route('login');
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// *****************************************************************************
// Patient Routes
Route::get('/home', [PatientController::class, 'index'])->name('adminHome');
Route::get('/patient', [PatientController::class, 'patient'])->name('patientView');
Route::post('/storePatient', [PatientController::class, 'store'])->name('storePatient');
Route::get('/destroyPatient/{id}', [PatientController::class, 'destroy'])->name('destroyPatient');
Route::post('/updatePatient', [PatientController::class, 'update'])->name('updatePatient');
Route::get('/editPatient/{id}', [PatientController::class, 'edit'])->name('editPatient');
Route::get('/patients/{id}', [PatientController::class, 'showPatient'])->name('patients');
Route::get('/medhistory/{id}', [PatientController::class, 'showPatient'])->name('patientMedHistory');
Route::post('/storeMedHistory', [MedicalHistoryController::class, 'storeMedHistory'])->name('storeMedHistory');
Route::get('/showmedhistory/{id}', [MedicalHistoryController:: class, 'showMedHistory'])->name('showmedhistory');

Route::get('/doctorHome', [DoctorDashboard::class, 'index']);


// *****************************************************************************
// All Admin Routes List
Route::middleware(['auth', 'user-access:admin'])->group(function () {
});


Route::get('/admin/users', [UserController::class, 'users'])->name('users');
Route::get('/admin/registeruser', [UserController::class, 'registeruser'])->name('registeruser');
Route::post('/admin/storeuser', [UserController::class, 'storeUser'])->name('storeuser');
Route::get('/admin/edituser/{id}', [UserController::class, 'editUser'])->name('edituser');
Route::post('/admin/updateuser', [UserController::class, 'updateUser'])->name('updateuser');
Route::get('/admin/deleteuser/{id}', [UserController::class, 'deleteUser'])->name('deleteuser');

Route::get('/admin/generate-userlistpdf', [UserController::class, 'generatePDF'])->name('generate-userlistpdf');


// Bed Routes 
Route::get('/admin/beds', [BedController::class, 'beds'])->name('beds');
Route::post('/admin/storebed', [BedController::class, 'storeBed'])->name('storebed');
// Route::get('/admin/editbed/{id}', [BedController::class, 'editBed'])->name('editBed');
Route::post('/admin/updatebed', [BedController::class, 'updateBed'])->name('updatebed');
Route::get('/admin/showbed/{id}', [BedController::class, 'showBed'])->name('showbed');
Route::get('/admin/deletebed/{id}', [BedController::class, 'deleteBed'])->name('deletebed');


// Department Routes
Route::get('/admin/departments', [DepartmentController::class, 'index'])->name('departments');
Route::post('/admin/storedepartment', [DepartmentController::class, 'store'])->name('department.store');
Route::post('/admin/updatedepartment', [DepartmentController::class, 'update'])->name('department.update');
Route::get('/admin/showdepartment/{id}', [DepartmentController::class, 'show'])->name('department.show');
Route::get('/admin/deletedepartment/{id}', [DepartmentController::class, 'delete'])->name('department.delete');


// *****************************************************************************
// All Doctor Routes List
Route::middleware(['auth', 'user-access:doctor'])->group(function () {

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
});

// *****************************************************************************
// All Nurse Routes List
Route::middleware(['auth', 'user-access:nurse'])->group(function () {

    Route::get('/nurse/home', [HomeController::class, 'nurseHome'])->name('nurse.home');

    Route::get('/calendar', [CalendarController::class, 'index'])->name('calendar');
    Route::resource('calendar', CalendarController::class)->only(['index', 'edit', 'store']);
    Route::controller(CalendarController::class)->group(function () {
        Route::get('getevents', 'getEvents')->name('calendar.getevents');
        Route::put('update/events', 'updateEvents')->name('calendar.updateevents');
        Route::post('resize/events', 'resizeEvents')->name('calendar.resizeevents');
        Route::post('drop/events', 'dropEvents')->name('calendar.dropevents');
    });
});


// *****************************************************************************
// All Chief Nurse Routes List
Route::middleware(['auth', 'user-access:chiefnurse'])->group(function () {

    Route::get('/chiefnurse/home', [HomeController::class, 'chiefnurseHome'])->name('chiefnurse.home');

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

    Route::get('/admin/nurseassignments', [NurseAssignmentController::class, 'nurseAssignments'])->name('nurseassignments');
    Route::post('/admin/storenurseassignment', [NurseAssignmentController::class, 'storeNurseAssignment'])->name('storenurseassignment');
});


// *****************************************************************************
// Doctor's Orders Routes

// Doctor's Orders View
Route::get('/doctorsOrders', function () {
    return view('doctorsOrders');
});


// *****************************************************************************
// Nurse's Dashboard View
Route::get('/nurseHome', function () {
    return view('nurseHome');
});


// *****************************************************************************
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

Route::resource('ajaxadmissions', AdmissionAjaxController::class);

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
// use PDF;
use Barryvdh\DomPDF\Facade\Pdf;

class UserController extends Controller
{
    public function users()
    {
        return view('admin/users')->with('users', User::all());
    }

    public function generatePDF() {
        // get the data to display in the PDF
        $users = User::all();
        // store it in a data array
        $data = [
            'users' => $users,
        ];
        // generate the PDF view
        // Create the userlist blade
        $pdf = Pdf::loadView('admin/userlist', $data);
        
        // display the PDF in the browser
        return $pdf->stream('userlist.pdf');
        //alternatively, you may directly download it using the ff code.
        // $pdf->download('name_of_pdf.pdf');

        // Pdf::loadHTML($html)->setPaper('a4', 'landscape')->setWarnings(false)->save('myfile.pdf')
    }
}

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

    public function storeUser(Request $request)
    {
        $user = new User;

        $userexist = User::where('email', $request->email)->first();
        if($userexist != NULL) {
            return redirect()->route('users')
            ->with('error', 'User number already exists!');
        }

        $user->email = $request->email;
        $user->name = $request->name;
        // FILL IN OTHER COLUMNS
        // ...
        // ...
        // ...
        
        $user->save();

        return redirect()->route('users')->with('success', 'New user added successfully!');
    }

    // public function editUser($id) {
    //     $user = User::find($id);

    //     return view('admin/edituser')->with('user', $user);
    // }

    public function updateUser(Request $request) {        
        $user = User::find($request->id);
        $originalemail = $user->bednum;
        
        $user->email  = $request->email;
        $user->name = $request->name;        
        // FILL UP OTHER COLUMNS
        // ...
        // ...
        // ...
        
        // IF new email is already existing in the database
        if($user->email != $originalemail) {
            $userexist = User::where('email', $bed->email)->first();
            if($userexist != NULL) {
                return redirect()->route('users')
                ->with('error', 'User number already exists!');
            }
        }

        $user->save();
        return redirect()->route('users')->with('success', 'User is successfully updated!');
    }  

    public function deleteUser($id) {
        $user = User::find($id);
        $user->delete();

        return redirect()->route('users')->with('success', 'User is successfully deleted!');
    }

    // For modal display User Information for Edit
    public function showUser($id) {
        $user = User::find($id);
        return response()->json($user);
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
        $pdf = Pdf::loadView('admin/userlistpdf', $data);
        
        // display the PDF in the browser
        return $pdf->stream('userlist.pdf');
        //alternatively, you may directly download it using the ff code.
        // $pdf->download('name_of_pdf.pdf');

        // Pdf::loadHTML($html)->setPaper('a4', 'landscape')->setWarnings(false)->save('myfile.pdf')
    }
}

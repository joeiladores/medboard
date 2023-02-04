<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
// use PDF;
use Barryvdh\DomPDF\Facade\Pdf;

class UserController extends Controller
{

    protected function users()
    {
        return view('admin/users')->with('users', User::all());
    }

    protected function registeruser()
    {
        return view('admin/registeruser');
    }

    protected function storeUser(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'usertype' => ['required', 'not_in:0'],
            'gender' => ['required', 'not_in:0'],
            'department' => ['required', 'not_in:0'],
            'specialization' => ['required', 'not_in:0'],
        ], [
            'usertype.not_in' => 'User Type is required.',
            'gender.not_in' => 'Gender is required.',
            'department.not_in' => 'Department is required.',
            'specialization.not_in' => 'Specialization is required.',
        ]);

        if ($validator->fails()) {
            return redirect()->route('registeruser')
                ->withErrors($validator)
                ->withInput()
                ->with('error', 'Adding user is not successfull!');;
        }

        $user = new User;

        $user->email            = $request->email;
        $user->password         = $request->password;
        $user->usertype         = $request->usertype;
        $user->lastname         = $request->lastname;
        $user->firstname        = $request->firstname;
        $user->middlename       = $request->middlename;
        $user->birthdate        = $request->birthdate;
        $user->gender           = $request->gender;
        $user->address          = $request->address;
        $user->phone            = $request->phone;
        $user->department       = $request->department;
        $user->specialization   = $request->specialization;
        $user->imagepath        = $request->imagepath;
        $user->name             = $request->firstname . ' ' . $request->lastname;

        $user->save();

        return redirect()->route('users')->with('success', 'New user added successfully!');
    }

    public function editUser($id) {
        $user = User::find($id);

        return view('admin/edituser')->with('user', $user);
    }

    protected function updateUser(Request $request) {        
        $user = User::find($request->id);
        // $originalemail = $user->bednum;
        
        $user->usertype         = $request->usertype;
        $user->lastname         = $request->lastname;
        $user->firstname        = $request->firstname;
        $user->middlename       = $request->middlename;
        $user->birthdate        = $request->birthdate;
        $user->gender           = $request->gender;
        $user->address          = $request->address;
        $user->phone            = $request->phone;
        $user->department       = $request->department;
        $user->specialization   = $request->specialization;
        $user->imagepath        = $request->imagepath;
        $user->name             = $request->firstname . ' ' . $request->lastname;

        // $user->email  = $request->email;
        // $user->name = $request->name;        
        
        // IF new email is already existing in the database
        // if($user->email != $originalemail) {
        //     $userexist = User::where('email', $bed->email)->first();
        //     if($userexist != NULL) {
        //         return redirect()->route('users')
        //         ->with('error', 'User number already exists!');
        //     }
        // }

        $user->save();
        return redirect()->route('users')->with('success', 'User is successfully updated!');
    }  

    protected function deleteUser($id) {
        $user = User::find($id);
        $user->delete();

        return redirect()->route('users')->with('success', 'User is successfully deleted!');
    }

    // For modal display User Information for Edit
    protected function showUser($id) {
        $user = User::find($id);
        return response()->json($user);
    }

    protected function generatePDF() {
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

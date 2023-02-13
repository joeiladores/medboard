<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Department;
use App\Models\Specialization;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
// use PDF;
use Barryvdh\DomPDF\Facade\Pdf;

class UserController extends Controller
{

    protected function users()
    {
        return view('admin/users')
        ->with('users', User::all()->sortDesc())
        ->with('departments', Department::all())
        ->with('specializations', Specialization::all());
    }

    protected function registeruser()
    {
        return view('admin/registeruser')
        ->with('departments', Department::all())
        ->with('specializations', Specialization::all());
    }

    protected function storeUser(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'usertype' => ['required', 'not_in:0'],
            'gender' => ['required', 'not_in:0'],
            'department_id' => ['required', 'not_in:0'],
            'specialization_id' => ['required', 'not_in:0'],
        ], [
            'usertype.not_in' => 'User Type is required.',
            'gender.not_in' => 'Gender is required.',
            'department_id.not_in' => 'Department is required.',
            'specialization_id.not_in' => 'Specialization is required.',
        ]);

        if ($validator->fails()) {
            return redirect()->route('registeruser')
                ->withErrors($validator)
                ->withInput()
                ->with('error', 'Adding user is not successfull!');;
        }

        $user = new User;

        $user->email            = $request->email;
        $user->password         = Hash::make($request->password);
        $user->usertype         = $request->usertype;
        $user->lastname         = $request->lastname;
        $user->firstname        = $request->firstname;
        $user->middlename       = $request->middlename;
        $user->birthdate        = $request->birthdate;
        $user->gender           = $request->gender;
        $user->address          = $request->address;
        $user->phone            = $request->phone;
        $user->department_id    = $request->department_id;
        $user->specialization_id   = $request->specialization_id;
        $user->name             = $request->firstname . ' ' . $request->lastname;        


        // dd($request->hasFile('imagepath'));

        if($request->hasFile('imagepath')){
            $request->validate([
                'imagepath' => 'required|image|mimes:jpeg,jpg,png,gif,webp|max:2048',
            ]);

            $imagepath = $request->file('imagepath');
            $filename = time().".".$imagepath->getClientOriginalExtension();
            
            // Save image in storage
            Storage::putFileAs('public/images/profile', $imagepath, $filename);

            $user->imagepath = $filename;
            
        }else{
            $user->imagepath = null;
        }

        // dd($request->imagepath);
        

        $user->save();

        return redirect()->route('users')->with('success', 'New user added successfully!');
    }

    public function editUser($id) {
        $user = User::find($id);
    
        // $userdept = Department::with('user')->find($id);
        // In this case it is Many-To-One, this query returns null
        // This will only work if query is from One-To-Many        
        // dd($userdept);
   
        return view('admin/edituser')
        ->with('user', $user)
        ->with('userdept', $user->department)
        ->with('departments', Department::all())
        ->with('userspec', $user->specialization)
        ->with('specializations', Specialization::all());
    }

    protected function updateUser(Request $request) {   
        
        $validator = Validator::make($request->all(), 
        [
            'password' => ['required', 'string', 'min:8', 'confirmed'],            
        ]);

        if ($validator->fails()) {
            return redirect()->route('edituser')
                ->withErrors($validator)
                ->withInput()
                ->with('error', 'Update user is not successfull!');;
        }

        $user = User::find($request->id);
        $current_image = $user->imagepath;        
        
        $user->usertype         = $request->usertype;
        $user->lastname         = $request->lastname;
        $user->firstname        = $request->firstname;
        $user->middlename       = $request->middlename;
        $user->birthdate        = $request->birthdate;
        $user->password         = Hash::make($request->password);
        $user->gender           = $request->gender;
        $user->address          = $request->address;
        $user->phone            = $request->phone;
        $user->department_id    = $request->department_id;
        $user->specialization_id   = $request->specialization_id;
        $user->status           = $request->status; 
        $user->name             = $request->firstname . ' ' . $request->lastname;

        
        if($request->hasFile('imagepath')){
            $request->validate([
                'imagepath' => 'required|image|mimes:jpeg,jpg,png,gif,webp|max:2048',
            ]);

            $imagepath = $request->file('imagepath');
            $filename = time().".".$imagepath->getClientOriginalExtension();
            
            // Save image in storage
            Storage::putFileAs('public/images/profile/', $imagepath, $filename);

            // Check if the user image exists prior to updating to new image
            // Delete the old image
            // dd($user->imagepath);
            if($current_image != null){
                Storage::delete('/public/images/profile/'.$current_image);
            }

            $user->imagepath = $filename;           
            
        }else{
            if($current_image == null){
                $user->imagepath = null;
            }
            else {
                $user->imagepath = $current_image;
            }
        }        

        $user->save();
        return redirect()->route('users')->with('success', 'User is successfully updated!');
    }  

    protected function deleteUser($id) {
        $user = User::find($id);
        
        // dd($user->imagepath);
        if($user->imagepath != NULL){
            Storage::delete('/public/images/profile/'.$user->imagepath);
        }

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

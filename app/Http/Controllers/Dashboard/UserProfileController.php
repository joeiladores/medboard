<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Auth;
use App\Models\User;

class UserProfileController extends Controller
{
    public function index(User $user)
    {
        return view('dashboard.userprofile', [
            'current_user' => Auth::user()
        ]);
    }

    public function update(Request $request)
    {
        if ($request->isMethod('GET')) {
            return redirect()->route('profile');
        }

        $current_user = Auth::user();

        $request->validate([
            'name' => ['required', 'string', 'max:255', 'unique:users,name,' . $current_user->id],
            'firstname' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:100', 'unique:users,email,' . $current_user->id],
            'avatar' => ['sometimes', 'mimes:jpeg,jpg,png,gif', 'max:2048'],
            'bio' => ['sometimes', 'string', 'max:255'],
        ]);

        $current_user->name = $request->get('name');
        $current_user->firstname = $request->get('firstname');
        $current_user->lastname = $request->get('lastname');
        $current_user->email = $request->get('email');
        $current_user->bio = $request->get('bio');


        // Upload avatar
        if ($request->hasFile('avatar')) {
            $imageName = md5(time()) . $current_user->id . '.' . $request->avatar->extension();
            $request->avatar->move(public_path('images/avatars'), $imageName);
            $current_user->avatar = $imageName;
        }
        
        

        // Update user
        $current_user->update();

        return redirect('dashboard/profile')
            ->with('success', 'User data updated successfully');
    }

    public function deleteavatar(Request $request)
{
    $current_user = Auth::user();

    $fileName = $request->get('fileName');
    if (File::exists(public_path('images/avatars/' . $fileName))) {
        File::delete(public_path('images/avatars/' . $fileName));
    }

    if (!$current_user->avatar || $current_user->avatar == "default.png") {
        // Do not delete default avatar
        return redirect('dashboard/profile')->with('success', 'Avatar deleted successfully');
    } else {
        // Set user avatar to default if no new avatar is uploaded
        if (!$request->hasFile('avatar')) {
            $current_user->avatar = "avatar";
            $current_user->save();
        }

        return redirect('dashboard/profile')->with('success', 'Avatar deleted successfully');
    }
}

}
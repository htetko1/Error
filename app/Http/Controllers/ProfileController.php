<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Rules\MatchOldPassword;
//use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function profile()
    {
        return view('user-profile.profile');
    }
//    public function edit(){
//        return view('user-profile.password');
//    }
    public function password()
    {
        return view('user-profile.edit-password');
    }
    public function NameEmail()
    {
        return view('user-profile.name-email');
    }
    public function photo()
    {
        return view('user-profile.photo');
    }

    public function changePhoto(Request $request)
    {
        $request->validate([
            "photo" => "required|mimetypes:image/jpeg,image/png|file|max:2500"
        ]);
        $dir="/public/profile/";

        Storage::delete($dir.Auth::user()->photo);

        $newName = uniqid()."_photo.".$request->file("photo")->getClientOriginalExtension();
        $request->file("photo")->storeAs($dir, $newName);

        $user = User::find(Auth::id());
        $user->photo = $newName;
        $user->update();

        return redirect()->route("profile.edit.photo");
    }

    public function ChangePassword(Request $request)
    {
        $request->validate([
            'current_password' => ['required', new MatchOldPassword()],
            'new_password' => ['required','min:8'],
            'new_confirm_password' => ['same:new_password'],
        ]);

        User::find(auth()->user()->id)->update(['password'=> Hash::make($request->new_password)]);
        Auth::logout();
        return redirect()->route('login');
    }

    public function ChangeName(Request $request)
    {
        $request->validate([
            'name' => "required|min:3|max:50",
        ]);
        $user = User::find(Auth::id());
        $user->name = $request->name;
        $user->update();
        return redirect()->route("profile.edit.name.email");
    }

    public function ChangeEmail(Request $request)
    {
        $request->validate([
            'email' => "required|min:3|max:50",
        ]);
        $user = User::find(Auth::id());
        $user->email = $request->email;
        $user->update();
        return redirect()->route("profile.edit.name.email");
    }
}

<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class AccountController extends Controller
{
    public function update(Request $request, User $user)
    {
        //dd($request->all());
        $data = $request->except('avatar');
        // xử lí hình ảnh
        //update data
        $user->update($data);
        $old_image = $user->avatar;
        if ($request->avatar) {
            $data["avatar"] = Storage::put('users', $request->avatar);
        }
        $user->update($data);

        if ($request->avatar && $old_image && Storage::exists($old_image)) {
            Storage::delete($old_image);
        }
        return redirect()->back()->with('message', 'Cập nhật dữ liệu thành công');
    }

    public function change(User $user)
    {
        return view('user.change', compact('user'));
    }

    public function userChange(Request $request, User $user)
    {
        $request->validate([
            'old_password' => 'required',
            'password' => 'required|min:8',
            'confirmpassword' => 'required|same:password',
        ]);

        if (!Hash::check($request->old_password, $user->password)) {
            return back()->with(['old_password' => 'Mật khẩu cũ không đúng']);
        }

        $user->update([
            'password' => Hash::make($request->password)
        ]);

        return redirect()->route('login')->with('message', 'Đổi mật khẩu thành công!');
    }


    public function register()
    {
        return view('auth.register');
    }



    public function createAccount(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required|min:6|confirmed'
        ]);
        $user = new User();
        $user->username = $request->username;
        $user->email = $request->email;
        // $user->role_id = 1;
        $user->password = Hash::make($request->password);
        $userRole = Role::where('name', 'user')->first();
        if ($userRole) {
            $user->role_id = $userRole->id;
        } else {
            return redirect()->back()->withErrors(['role' => 'Role user not found.']);
        }
        $user->save();
        return redirect()->route('login')->with("success", "Register account success.");
    }



    public function dialogLogin()
    {
        return view('auth/login');
    }

    public function login(Request $request)
    {
        // dd($request->all());
        $remember = $request->remember;
        $requestInfo = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($requestInfo, $remember)) {
            $request->session()->regenerate();
            return redirect()->route('home')->with("success", "Login account success.");
        }
        return redirect()->back()->with("error", "Authentication failed.");
    }
    public function email()
    {
        return view('auth.password.email');
    }

    public function reset()
    {
        return view('auth.password.reset');
    }
}

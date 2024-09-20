<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function index()
    {
        return view('home.index');
    }

    public function gioithieu()
    {
        return view('home.stories');
    }

    public function chuong()
    {
        return view('home.reader');
    }

    public function danhsach()
    {
        return view('home.show');
    }

    public function vuadang()
    {
        return view('home.vuadang');
    }

    public function thaoluan()
    {
        return view('home.thaoluan');
    }

    public function sangtac()
    {
        return view('home.sangtac');
    }

    public function xuatban()
    {
        return view('home.xuatban');
    }

    public function huongdan_dangtruyen()
    {
        return view('home.hd_dangtruyen');
    }
    public function huongdan_gioithieu()
    {
        return view('home.gioithieu');
    }

    public function huongdan_gopy()
    {
        return view('home.gopy');
    }

    public function taikhoan()
    {
        return view('home.taikhoan');
    }


    public function update(Request $request, User $user)
    {
        //        dd($request->all());
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
        $user->password = Hash::make($request->password);

        $user->save();
        return redirect()->route('login')->with("success", "Register account success.");
    }

    public function dialogLogin()
    {
        return view('auth/login');
    }

    public function login(Request $request)
    {
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

    public function createTruyen()
    {
        return view('user.createTruyen');
    }

    public function truyenDaDang()
    {
        return view('user.truyenDaDang');
    }

    public function truyenThamGia()
    {
        return view('user.truyenThamGia');
    }

    public function conventThamGia()
    {
        return view('user.conventThamGia');
    }

    public function conventDaDang()
    {
        return view('user.conventDaDang');
    }

    public function OLNDaDang()
    {
        return view('user.OLNDaDang');
    }

    public function OLNThamGia()
    {
        return view('user.OLNThamGia');
    }

    public function themThaoLuan()
    {
        return view('user.themThaoLuan');
    }

    public function thaoLuanCuaBan()
    {
        return view('user.thaoLuanCuaBan');
    }

    public function theLoai()
    {
        return view('user.theLoai');
    }

    public function thuVien()
    {
        return view('user.truyenThamGia');
    }

    public function nhomSoHuu()
    {
        return view('user.nhomSoHuu');
    }

    public function nhomThamGia()
    {
        return view('user.nhomThamGia');
    }
}

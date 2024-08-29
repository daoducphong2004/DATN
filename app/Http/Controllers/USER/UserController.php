<?php

namespace App\Http\Controllers\USER;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view('home.index');
    }

    public function gioithieu(){
        return view('home.stories');
    }

    public function chuong(){
        return view('home.reader');
    }

    public function danhsach(){
        return view('home.show');
    }

    public function vuadang(){
        return view('home.vuadang');
    }

    public function thaoluan(){
        return view('home.thaoluan');
    }

    public function sangtac(){
        return view('home.sangtac');
    }

    public function xuatban(){
        return view('home.xuatban');
    }

    public function huongdan_dangtruyen(){
        return view('home.hd_dangtruyen');
    }
    public function huongdan_gioithieu(){
        return view('home.gioithieu');
    }

    public function huongdan_gopy(){
        return view('home.gopy');
    }

    public function taikhoan(){
        return view('home.taikhoan');
    }

    public function login(){
        return view('auth.login');
    }

    public function register(){
        return view('auth.register');
    }

    public function email(){
        return view('auth.password.email');
    }

    public function reset(){
        return view('auth.password.reset');
    }


//bên thêm truyện
    public function home(){
        return view('user.index');
    }

    public function createTruyen(){
        return view('user.createTruyen');
    }

    public function truyenDaDang(){
        return view('user.truyenDaDang');
    }

    public function truyenThamGia(){
        return view('user.truyenThamGia');
    }

    public function conventThamGia(){
        return view('user.conventThamGia');
    }

    public function conventDaDang(){
        return view('user.conventDaDang');
    }

    public function OLNDaDang(){
        return view('user.OLNDaDang');
    }

    public function OLNThamGia(){
        return view('user.OLNThamGia');
    }

    public function themThaoLuan(){
        return view('user.themThaoLuan');
    }

    public function thaoLuanCuaBan(){
        return view('user.thaoLuanCuaBan');
    }

    public function theLoai(){
        return view('user.theLoai');
    }

    public function thuVien(){
        return view('user.truyenThamGia');
    }

    public function nhomSoHuu(){
        return view('user.nhomSoHuu');
    }

    public function nhomThamGia(){
        return view('user.nhomThamGia');
    }
}

<?php

namespace App\Http\Controllers\USER;

use App\Http\Controllers\Controller;
use App\Models\book;
use App\Models\genre;
use App\Models\group;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $data = book::orderBy('like', 'desc')->take(5)->get();
        return view('home.index', compact('data'));
    }

    public function convert(){
        return view('home.convert');
    }

    // public function danhsach(){
    //     $genres = genre::pluck('slug', 'name');
    //     $groups = group::pluck('id', 'name');
    //     $data = book::query()->paginate(30);
    //     // dd($data);
    //     return view('home.show', compact('data', 'genres', 'groups'));

    // }

    public function show(String $slug)
    {
        $book = Book::with('genres', 'episodes', 'group')
        ->where('slug', $slug)
        ->firstOrFail();
        $episodes = $book->episodes;
        // dd($book,$episodes);
        return view('home.stories', compact('book', 'episodes'));
    }

    public function vuadang(){
        return view('home.vuadang');
    }

    public function thaoluan(){
        return view('home.thaoluan');
    }
    public function CDthaoluan(){
        return view('home.chudeThaoluan');
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

    public function kesach(){
        return view('home.kesach');
    }
    public function bookmark(){
        return view('home.bookmark');
    }
    public function lichsu(){
        return view('home.lichsu');
    }
    public function tinnhanmoi(){
        return view('home.tinnhanmoi');
    }
    public function tinnhan(){
        return view('home.hopthu');
    }
    public function guitinnhan(){
        return view('home.guitinnhan');
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
    public function Userhome(){
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
        return view('user.convertThamGia');
    }

    public function conventDaDang(){
        return view('user.convertDaDang');
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
        return view('user.thuvien');
    }

    public function nhomSoHuu(){
        return view('user.nhomSoHuu');
    }

    public function nhomThamGia(){
        return view('user.nhomThamGia');
    }
}

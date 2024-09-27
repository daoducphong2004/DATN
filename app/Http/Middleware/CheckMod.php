<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckMod
{
    public function handle(Request $request, Closure $next): Response
    {
        // Kiểm tra xem người dùng đã đăng nhập hay chưa
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'Bạn chưa đăng nhập.');
        }

        // Kiểm tra quyền truy cập của mod và super_admin
        if (!Auth::check() || (Auth::user()->role_id !== 'mod' && Auth::user()->role_id !== 'super_admin')) {
            return redirect()->route('no_permission')->with('error', 'Bạn không có quyền truy cập vào chức năng này.');
        }



        return $next($request);
    }
}

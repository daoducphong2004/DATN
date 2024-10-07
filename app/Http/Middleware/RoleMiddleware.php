<?php

namespace App\Http\Middleware;

use Closure;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $role): Response
    {
        if (!Auth::check()) {
            return redirect('/login')->with('error', 'Bạn cần đăng nhập.');
        }

        $user = Auth::user();
        $userRole = $user->role->name ?? null;

        // Kiểm tra vai trò của người dùng
        if (!in_array($userRole, ['super_admin', 'admin', 'mod'])) {
            return redirect('/')->with('error', 'Bạn không có quyền truy cập vào chức năng này.');
        }


        if ($userRole === $role || in_array($userRole, ['super_admin', 'admin', 'mod'])) {
            return $next($request);
        }
        return redirect('/')->with('error', 'Bạn không có quyền truy cập vào chức năng này.');
    }


}

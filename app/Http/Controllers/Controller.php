<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function __construct()
    {
        // Gọi lệnh 'schedule:run' mỗi khi có yêu cầu truy cập vào hệ thống
        Artisan::call('schedule:run');
    }

    protected function canEditBook($user, $book)
    {   
        if(!Auth::check()){
            return view('auth.login');
        }
        // Kiểm tra nếu người dùng là chủ sở hữu hoặc có quyền chia sẻ
        return $user->id === $book->user_id || $book->sharedUsers()->where('user_id', $user->id)->exists();
    }
}

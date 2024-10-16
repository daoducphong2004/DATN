<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    protected function canEditBook($user, $book)
    {
        // Kiểm tra nếu người dùng là chủ sở hữu hoặc có quyền chia sẻ
        return $user->id === $book->user_id || $book->sharedUsers()->where('user_id', $user->id)->exists();
    }
}

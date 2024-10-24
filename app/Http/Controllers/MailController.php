<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMailRequest;
use App\Models\Letter;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

use function Laravel\Prompts\alert;

class MailController extends Controller
{

    public function sendMail(StoreMailRequest $request)
    {
        try {
            Mail::raw($request->content, function ($message) use ($request) {
                $message->to($request->receive_user)
                    ->subject($request->title);
            });

            if (auth()->check()) {
                $userCurrentId = auth()->user()->id;
            } else {
                return redirect()->route('login')->withErrors('Mày phải đăng nhập trước khi gửi mail.');
            }

            $receiverEmail = $request->receive_user;
            $title = $request->title;
            $content = $request->content;

            $user = User::where('email', $receiverEmail)->first();
            if (!$user) {
                return back()->withErrors('Người nhận không có trong ĐB.');
            }
            $receiverId = $user->id;

            Letter::create([
                'title' => $title,
                'content' => $content,
                'receiver_id' => $receiverId, 
                'sender_id' => $userCurrentId,
            ]);

            return back()->with('success', 'Gửi mail thành công!');
        } catch (\Exception $e) {
            return back()->withErrors('Lỗi khi gửi mail: ' . $e->getMessage());
        }
    }
}

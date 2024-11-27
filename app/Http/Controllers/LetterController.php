<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLetterRequest;
use App\Models\Letter;
use App\Models\User;
use Illuminate\Http\Request;
use Exception;

class LetterController extends Controller
{
    public function index()
    {
        $user_id = auth()->user()->id;
        $letters = Letter::where('receiver_id', $user_id)->get();
        $type = "receiver_id";
        return view('home.hopthu', compact('letters', 'type'));
    }
    public function lettersended()
    {
        $user_id = auth()->user()->id;
        $letters = Letter::where('sender_id', $user_id)->get();
        $type = "sender_id";
        return view('home.hopthu', compact('letters', 'type'));
    }
    public function create()
    {
        return view('home.tinnhanmoi');
    }

    public function store(StoreLetterRequest $request)
    {
        try {
            // Kiểm tra người dùng đã đăng nhập
            if (!auth()->check()) {
                return redirect()->route('login')->withErrors('Bạn phải đăng nhập trước khi gửi mail.');
            }

            $userCurrentId = auth()->user()->id;
            $userCurrentUsername = auth()->user()->username; // Lấy username của người gửi

            // Lấy thông tin từ request
            $receiverUsername = $request->receive_user; // Sử dụng username thay vì email
            $title = $request->title;
            $content = $request->content;

            // Tìm người nhận qua username
            $user = User::where('username', $receiverUsername)->first();
            if (!$user) {
                return back()->withErrors('Người nhận không có trong Hệ thống.');
            }

            $receiverId = $user->id;

            // Kiểm tra người gửi có gửi cho chính mình không
            if ($userCurrentId == $receiverId) {
                return back()->withErrors('Bạn không thể gửi tin nhắn cho chính mình.');
            }

            // Tạo thư mới
            Letter::create([
                'title' => $title,
                'content' => $content,
                'receiver_id' => $receiverId,
                'sender_id' => $userCurrentId,
            ]);

            return redirect()->route('Letter.sender')->with('success', 'Gửi tin nhắn thành công!');
        } catch (Exception $e) {
            return back()->withErrors('Lỗi khi gửi tin nhắn: ' . $e->getMessage());
        }
    }

    public function show(Letter $id) {}
    public function edit(Letter $id) {}

    public function update(StoreLetterRequest $request, Letter $id) {}

    public function destroy(Letter $id) {}
    // Phương thức xóa thư
    public function delete(Request $request)
    {
        try {
            // Kiểm tra xem người dùng có đang đăng nhập không
            if (auth()->check()) {
                $userId = auth()->user()->id; // Lấy ID người dùng đang đăng nhập
            } else {
                return redirect()->route('login')->withErrors('Bạn cần đăng nhập để xóa thư.');
            }

            // Lấy mảng ID của thư được chọn
            $messageIds = $request->input('messages');
            $type = $request->type;

            // Kiểm tra nếu có thư nào được chọn
            if (empty($messageIds)) {
                return back()->withErrors('Bạn chưa chọn thư để xóa.');
            }

            // Kiểm tra và xử lý thư với sender_id hoặc receiver_id là null
            foreach ($messageIds as $messageId) {
                $letter = Letter::find($messageId);

                // Nếu không tìm thấy thư
                if (!$letter) {
                    return back()->withErrors('Không tìm thấy thư.');
                }

                // Kiểm tra nếu một trong các trường sender_id hoặc receiver_id là null
                if (is_null($letter->sender_id) || is_null($letter->receiver_id)) {
                    // Xóa ngay nếu một trong các trường sender_id hoặc receiver_id là null
                    $letter->delete();
                }
            }

            // Cập nhật các thư, chỉ bỏ đi ID của người dùng trong cột sender_id hoặc receiver_id
            $updatedRows = Letter::whereIn('id', $messageIds)
                ->where(function ($query) use ($userId, $type) {
                    // Xác định và cập nhật dựa trên type (sender_id hoặc receiver_id)
                    $query->where($type, $userId);
                })
                ->update([$type => null]);

            // Kiểm tra nếu có bản ghi nào được cập nhật
            if ($updatedRows > 0) {
                return redirect()->route('Letter.index')->with('success', 'Cập nhật thư thành công!');
            } else {
                return back()->withErrors('Không có thư nào được cập nhật.');
            }
        } catch (\Exception $e) {
            return back()->withErrors('Lỗi khi xóa thư: ' . $e->getMessage());
        }
    }
}

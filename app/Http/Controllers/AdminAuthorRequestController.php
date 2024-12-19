<?php

    namespace App\Http\Controllers;

    use App\Models\Author;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Mail;

    class AdminAuthorRequestController extends Controller
    {
        public function index()
        {
            // Lấy danh sách tất cả yêu cầu tác giả
            $requests = Author::all();
            return view('admin.authors.author_requests', compact('requests'));
        }

        public function accept($id)
        {
            // Tìm yêu cầu dựa vào ID
            $request = Author::find($id);

            if ($request) {
                // Cập nhật trạng thái thành 'accepted'
                $request->status = 'accepted';
                $request->save();

                // Gửi email chấp nhận yêu cầu
                $name = $request->user->username; // Giả sử có quan hệ với User
                $email = $request->user->email; // Lấy email từ user

                Mail::send('emails.test', compact('name'), function ($message) use ($name, $email) {
                    $message->subject('Yêu cầu tác giả được chấp nhận');
                    $message->to($email, $name);
                });

                // Chuyển hướng với thông báo thành công
                return redirect()->route('admin.requests')->with('success', 'Yêu cầu đã được chấp nhận và email đã được gửi.');
            }

            // Chuyển hướng với thông báo lỗi nếu không tìm thấy yêu cầu
            return redirect()->route('admin.requests')->with('error', 'Không tìm thấy yêu cầu.');
        }

        public function reject($id)
        {
            // Tìm yêu cầu dựa vào ID
            $request = Author::find($id);

            if ($request) {
                // Cập nhật trạng thái thành 'rejected'
                $request->status = 'rejected';
                $request->save();

                // Gửi email từ chối yêu cầu
                $name = $request->user->username;
                $email = $request->user->email; // Lấy email từ user

                Mail::send('emails.refuse', compact('name'), function ($message) use ($name, $email) {
                    $message->subject('Yêu cầu tác giả bị từ chối');
                    $message->to($email, $name);
                });

                // Chuyển hướng với thông báo thành công
                return redirect()->route('admin.requests')->with('success', 'Yêu cầu đã bị từ chối và email đã được gửi.');
            }


            return redirect()->route('admin.requests')->with('error', 'Không tìm thấy yêu cầu.');
        }
    }

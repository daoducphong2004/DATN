<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

            // Chuyển hướng với thông báo thành công
            return redirect()->route('admin.requests')->with('success', 'Yêu cầu đã được chấp nhận.');
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

            // Chuyển hướng với thông báo thành công
            return redirect()->route('admin.requests')->with('success', 'Yêu cầu đã bị từ chối.');
        }

        // Chuyển hướng với thông báo lỗi nếu không tìm thấy yêu cầu
        return redirect()->route('admin.requests')->with('error', 'Không tìm thấy yêu cầu.');
    }
}

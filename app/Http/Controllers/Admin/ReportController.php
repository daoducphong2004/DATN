<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Report;

class ReportController extends Controller
{
    public function index()
    {
        $reports = Report::query()->latest('id')->paginate(10);
        return view('admin.reports.index', compact('reports'));
    }
    public function approve(Report $report)
    {
        $report->status = 'Đã duyệt';
        $report->save();

        return redirect()->route('reports.index')->with('success', 'Báo cáo đã được duyệt.');
    }

    public function reject(Report $report)
    {
        $report->status = 'Từ chối';
        $report->save();

        return redirect()->route('reports.index')->with('success', 'Báo cáo đã bị từ chối.');
    }
    public function review(Report $report)
    {
        $report->status = 'Chờ duyệt';
        $report->save();

        return redirect()->route('reports.index')->with('success', 'Báo cáo chờ xem xét.');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'reasons' => 'required|array',
            'description' => 'nullable|string',
            'book_id' => 'required|exists:books,id' // Kiểm tra rằng book_id tồn tại trong bảng books
        ]);

        $report = new Report();
        $report->user_id = auth()->id(); // Lưu ID người dùng nếu đã đăng nhập
        $report->book_id = $validatedData['book_id']; // Lấy book_id từ validated data
        $report->reason = json_encode($validatedData['reasons']); // Lưu mảng lý do dưới dạng JSON
        $report->description = $validatedData['description'] ?? '';
        $report->status = 'Chờ duyệt'; // Trạng thái mặc định
        $report->save();

        return response()->json(['message' => 'Báo cáo đã được gửi thành công.']);
    }

}

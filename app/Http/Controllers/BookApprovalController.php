<?php

namespace App\Http\Controllers;

use App\Events\StoryCreated;
use App\Models\Book;
use App\Models\Role;
use App\Models\User;
use App\Notifications\StoryApprovedNotification;
use Illuminate\Http\Request;

class BookApprovalController extends Controller
{
    // Hiển thị danh sách các truyện chưa duyệt
    public function index()
    {
        $books = Book::where('Is_Inspect', 0)->get(); // Chỉ lấy các truyện chưa duyệt
        return view('admin.books.approval', compact('books'));
    }

    // Duyệt hoặc từ chối truyện
    public function approve(Request $request, $id)
    {
        $book = Book::findOrFail($id);

        // Cập nhật trạng thái Is_Inspect (1: Đã duyệt, 0: Từ chối)
        $book->Is_Inspect = $request->input('approve') ? 1 : 0;
        $book->save();

        $pendingBooksCount = Book::where('Is_Inspect', 0)->count();

        $admin = User::where('role_id', Role::where('name', 'super_admin')->value('id'))->first();

        $admin->notifications()->where('type', 'App\Notifications\BookPendingNotification')->delete();

        if ($pendingBooksCount > 0) {
            $admin->notifications()->create([
                'type' => 'App\Notifications\BookPendingNotification',
                'data' => [
                    'message' => 'Có ' . $pendingBooksCount . ' truyện chưa được duyệt.',
                ],
            ]);
        }

        // $author = User::find($book->user_id);
        // $author->notify(new StoryApprovedNotification($book->title));

        event(new StoryCreated($book));

        return redirect()->back()->with('success', 'Trạng thái truyện đã được cập nhật.');
    }
}

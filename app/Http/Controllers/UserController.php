<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Models\Book;
use App\Models\Bookmarks;
use App\Models\chapter;
use App\Models\chaptercomment;
use App\Models\Role;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function index()
    {
        try {
            $users = User::paginate(10);
            return view('admin.users.index', compact('users'));
        } catch (Exception $e) {
            return back()->withErrors(['error' => 'Failed to load User: ' . $e->getMessage()]);
        }
    }


    public function updateAvatar(Request $request, $id)
    {
        $request->validate([
            'avatar' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);
        $user = User::findOrFail($id);
        // Xử lý lưu ảnh
        $avatarPath = $request->file('avatar')->store('avatars', 'public');
        // Xóa ảnh cũ nếu có
        if ($user->avatar_url) {
            Storage::disk('public')->delete($user->avatar_url);
        }
        $user->avatar_url = $avatarPath;
        $user->save();
        return response()->json(['message' => 'Avatar updated successfully']);
    }


    public function updateBackground(Request $request, $id)
    {
        $request->validate([
            'background' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);
        $user = User::findOrFail($id);
        // Xử lý lưu ảnh nền
        $backgroundPath = $request->file('background')->store('backgrounds', 'public');
        // Xóa ảnh nền cũ nếu có
        if ($user->background) {
            Storage::disk('public')->delete($user->background);
        }
        $user->background = $backgroundPath;
        $user->save();
        return response()->json(['message' => 'Background updated successfully']);
    }



    public function create()
    {
        try {
            return view('admin.users.create');
        } catch (Exception $e) {
            return back()->withErrors(['error' => 'Failed to load create form: ' . $e->getMessage()]);
        }
    }

    public function store(StoreUserRequest $request)
    {
        try {
            $data = $request->except('avatar_url');
            $data['avatar_url'] = "";
            if ($request->hasFile('avatar_url')) {
                // Upload file
                $path_image = $request->file('avatar_url')->store('images');
                $data['avatar_url'] = $path_image;
            }

            User::create($data);
            return redirect()->route('user_index')->with('success', 'User created successfully.');
        } catch (Exception $e) {
            return back()->withErrors(['error' => 'Failed to create User: ' . $e->getMessage()]);
        }
    }

    public function edit(User $id)
    {
        try {
            $role = Role::pluck('id','name');
            return view('admin.users.edit', compact('id','role'));
        } catch (Exception $e) {
            return back()->withErrors(['error' => 'Failed to load edit form: ' . $e->getMessage()]);
        }
    }

    public function update(StoreUserRequest $request, User $id)
    {
            // Xác thực dữ liệu đầu vào
            $request->validate([
                'avatar_url' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            ]);

            // Lấy tất cả dữ liệu từ form ngoại trừ avatar_url
            $data = $request->except('avatar_url');
            $old_image = $id->avatar_url;

            // Không cập nhật ảnh nếu không có thay đổi
            $data['avatar_url'] = $old_image;

            // Nếu có ảnh mới thì xử lý và cập nhật ảnh
            if ($request->hasFile('avatar_url')) {
                // Xử lý lưu ảnh mới
                $avatarPath = $request->file('avatar_url')->store('avatars', 'public');
                $data['avatar_url'] = $avatarPath;

                // Xóa ảnh cũ nếu có
                if ($old_image) {
                    Storage::disk('public')->delete($old_image);
                }
            }

            // Cập nhật dữ liệu vào DB
            $id->update($data);

            // Trở lại trang danh sách với thông báo thành công
            return redirect()->route('user_index')->with('success', 'User updated successfully.');
    }



    public function destroy(User $id)
    {
        try {
            $id->delete();
            return redirect()->route('user_index')->with('success', 'User deleted successfully.');
        } catch (Exception $e) {
            return back()->withErrors(['error' => 'Failed to delete User: ' . $e->getMessage()]);
        }
    }
    public function showBooks($userId)
    {
        $userInfor = User::findOrFail($userId);

        $userBooks = $userInfor->books; // Truyện do user đăng
        $bookHasJoin = $userInfor->sharedBooks; // Truyện user được chia sẻ quyền
        $countBook = Book::where('user_id', $userInfor->id)->count();
        $countChapters = chapter::where('user_id', $userInfor->id)->count();
        $countComment = chaptercomment::where('user_id', $userInfor->id)->count();
        $countBookmark = Bookmarks::where('user_id', $userInfor->id)->count();

        return view('home.taikhoan', compact('userInfor', 'bookHasJoin', 'countChapters', 'countComment', 'countBookmark'));
    }
    public function purchaseHistory()
    {
        $user = Auth::user();
        $purchasedStories = $user->purchasedStories()->with('chapter')->get();
        return view('user.purchaseHistory', compact('purchasedStories'));
    }
    public function profile()
    {
        $user = Auth::user();
        return view('user.profile', compact('user'));
    }
    public function updateUser(Request $request)
    {
        $validated = $request->validate([
            'id' => 'required|exists:users,id',
            'full_name' => 'nullable|string|max:255',
            'gender' => 'nullable|in:male,female,other',
            'date_of_birth' => 'nullable|date',
            'avatar_url' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'background' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $user = User::find($request->id);

        // Cập nhật các trường text
        $user->fill([
            'full_name' => $validated['full_name'],
            'gender' => $validated['gender'],
            'date_of_birth' => $validated['date_of_birth'],
        ]);

        // Cập nhật avatar
        if ($request->hasFile('avatar_url')) {
            if ($user->avatar_url && Storage::exists($user->avatar_url)) {
                Storage::delete($user->avatar_url); // Xóa ảnh cũ
            }
            $path = $request->file('avatar_url')->store('avatars', 'public');
            $user->avatar_url = $path;
        }

        // Cập nhật nền
        if ($request->hasFile('background')) {
            if ($user->background && Storage::exists($user->background)) {
                Storage::delete($user->background); // Xóa nền cũ
            }
            $backgroundPath = $request->file('background')->store('backgrounds', 'public');
            $user->background = $backgroundPath;
        }

        // Lưu thay đổi
        $user->save();

        return redirect()->back()->with('success', 'Cập nhật thành công!');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\group;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Str;

class GroupController extends Controller
{
    // Show the form to create a group
    public function create()
    {
        return view('action.group.create');
    }

    // Store a newly created group
    public function store(Request $request)
    {
        // Validate input data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string|max:1000',
        ]);

        // Get the currently authenticated user
        $user = Auth::user();

        // Check if the user already belongs to a group
        if ($user->group) {
            return redirect()->back()->with('error', 'You are already a member of a group.');
        }

        // Create a new group
        $group = group::create([
            'name' => $validatedData['name'],
            'slug' => Str::slug($validatedData['name']),
            'description' => $validatedData['description'],
            'user_id' => $user->id, // Assign the current user as the group owner
        ]);

        // Associate the user with the created group
        $user->group = $group->id; // Assuming 'group' represents the foreign key
        $user->save();

        return redirect()->route('action.group.index')->with('success', 'Group created successfully!');
    }


    // Show a list of all groups
    public function index()
    {
        // Nếu người dùng đã có nhóm, chuyển hướng đến trang nhóm của họ
        if (Auth::user()->group) {
            return redirect()->route('action.group.show', Auth::user()->group);
        }

        // Nếu người dùng chưa có nhóm, hiển thị trang chọn hành động
        $groups = group::all();  // Lấy tất cả nhóm hiện có
        return view('action.group.index', compact('groups'));
    }
    public function JoinGroup(Request $request)
    {
        $user = Auth::user();
        $group = group::findOrFail($request->group_id);

        // Kiểm tra nếu người dùng đã có nhóm, không cho tham gia thêm
        if ($user->group) {
            return redirect()->route('action.group.show', $user->group)
                ->with('error', 'Bạn đã là thành viên của một nhóm!');
        }

        // Tham gia nhóm
        $user->group = $group->id;
        $user->save();

        return redirect()->route('action.group.show', $group->id)->with('success', 'Bạn đã tham gia nhóm thành công!');
    }

    // Show the details of a specific group
    public function show($id)
    {
        // Lấy thông tin nhóm cùng với thành viên
        $group = group::with('members')->findOrFail($id);

        // Lấy thông tin người dùng hiện tại
        $currentUser = Auth::user();

        return view('action.group.show', compact('group', 'currentUser'));
    }


    public function addUser(Request $request)
    {
        $validated = $request->validate([
            'username' => 'required|string|exists:users,username',
            'group_id' => 'required|exists:groups,id',
        ]);

        $user = User::where('username', $validated['username'])->first();
        $user->group = $validated['group_id'];
        $user->save();

        return redirect()->back()->with('success', 'Thành viên đã được thêm vào nhóm.');
    }
    public function removeUser($id)
    {
        $user = User::findOrFail($id);
        $user->group = null;
        $user->save();
        return response()->json(['message' => 'Thành viên đã được xóa khỏi nhóm.']);
    }
    public function leaveGroup()
    {
        // Lấy người dùng hiện tại
        $user = Auth::user();

        // Kiểm tra nếu người dùng không phải chủ nhóm và đã tham gia nhóm
        if (!$user->group) {
            return redirect()->route('home')->with('error', 'Bạn chưa tham gia nhóm nào!');
        }
        // dd($user->myGroup);
        // Nếu người dùng là chủ nhóm, không cho phép rời nhóm
        if ($user->myGroup->user_id === $user->id) {
            return redirect()->route('action.group.show', $user->group->id)
                ->with('error', 'Bạn không thể rời nhóm của mình!');
        }

        // Rời nhóm
        $user->group = null;  // Xóa giá trị của trường group_id trong bảng users
        $user->save();

        return redirect()->route('home')->with('success', 'Bạn đã rời nhóm thành công!');
    }
    public function search(Request $request)
    {
        $searchTerm = $request->input('name');

        // Tìm nhóm theo tên chứa từ khóa
        $groups = group::where('name', 'LIKE', '%' . $searchTerm . '%')->get();

        return response()->json([
            'groups' => $groups
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        try {
            $users = User::paginate(10);
            return view('admin.users.index', compact('users'));
            // dd($users);
            // $groups = group::paginate(10);
            // return view('admin.group.index', compact('groups'));
        } catch (Exception $e) {
            return back()->withErrors(['error' => 'Failed to load User: ' . $e->getMessage()]);
        }
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
            return view('admin.users.edit', compact('id'));
        } catch (Exception $e) {
            return back()->withErrors(['error' => 'Failed to load edit form: ' . $e->getMessage()]);
        }
    }

    public function update(StoreUserRequest $request, User $id)
    {
        try {
            $data = $request->except('avatar_url');
            $old_image = $id->avatar_url;

            // Không cập nhật ảnh
            $data['avatar_url'] = $old_image;

            // Cập nhật ảnh
            if ($request->hasFile('avatar_url')) {
                $path_image = $request->file('avatar_url')->store('images');
                $data['avatar_url'] = $path_image;
            }

            // Cập nhật lên DB
            $id->update($data);

            if (isset($path_image)) {
                if (file_exists('storage/' . $old_image)) {
                    unlink('storage/' . $old_image);
                }
            }
            return redirect()->route('user_index')->with('success', 'User updated successfully.');
        } catch (Exception $e) {
            return back()->withErrors(['error' => 'Failed to update User: ' . $e->getMessage()]);
        }
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
}

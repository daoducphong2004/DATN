<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Group;
use App\Models\User;

class UserGroupController extends Controller
{
    public function index(Group $group)
    {
        $users = $group->users;
        return view('admin.group.users.list-user-group', compact('group', 'users'));
    }

    public function create(Group $group)
    {
        return view('admin.group.users.add-user-group', compact('group'));
    }

    public function store(Request $request, Group $group)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
        ]);

        $user = User::find($request->user_id);
        $user->group_id = $group->id;
        $user->save();

        return redirect()->route('groups.users.index', $group)->with('success', 'User added to group successfully.');
    }

    public function destroy(Group $group, User $user)
    {
        if ($user->group_id == $group->id) {
            $user->group_id = null;
            $user->save();
        }

        return redirect()->route('groups.users.index', $group)->with('success', 'User removed from group successfully.');
    }
}

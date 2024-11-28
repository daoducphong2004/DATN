<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\group;
use App\Models\User;

class UserGroupController extends Controller
{
    public function index(group $group)
    {
        $user_group = $group->users;
        return view('admin.group.users.list-user-group', compact('group', 'user_group'));
    }

    public function delete(group $group, User $user_group)
    {
        if ($user_group->group_id == $group->id) {
            $user_group->group_id = null;
            $user_group->save();
        }

        return redirect()->route('groups.users.index', $group)->with('success', 'User removed from group successfully.');
    }
}

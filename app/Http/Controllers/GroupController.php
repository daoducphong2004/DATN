<?php 
namespace App\Http\Controllers;

use App\Models\Group;
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
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string|max:1000',
        ]);
    
        // Get the currently authenticated user
        $user = Auth::user();
    
        // Create a new group
        $group = new Group();
        $group->name = $request->input('name');
        
        // Generate slug from the 'name' field
        $group->slug = Str::slug($request->input('name')); 
    
        $group->description = $request->input('description');
        $group->save();
    
        // Associate the group with the user
        $user->group = $group->id;  // Assuming 'group_id' is the foreign key in your users table
        $user->save();
    
        return redirect()->route('action.group.index')->with('success', 'Group created successfully!');
    }

    // Show a list of all groups
    public function index()
    {
        $user = auth()->user(); // Get the currently authenticated user
        
        // Check if the user has an associated group
        $group = $user->groupInfor; // Assuming you have a relationship between the user and the group model
        if ($group) {
            // If the user already has a group, redirect to the show page
            return redirect()->route('action.group.show', ['group' => $group->id]);
        } else {
            // If the user does not have a group, redirect to the create group page
            return redirect()->route('action.group.create');
        }
    }
    
      // Show the details of a specific group
      public function show($id)
      {
          $group = Group::findOrFail($id);
          $users = $group->users;
          return view('action.group.show', compact('group', 'users'));
      }
      public function addUser(Request $request){
        $group = Group::find($request->input('group_id'));
        $user = User::find($request->input('user_id'));
        $user->group = $group->id;  // Assuming 'group_id' is the foreign key in your users table
      }
}

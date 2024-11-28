<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoregroupRequest;
use App\Models\group;
use Illuminate\Http\Request;
use Exception;

class GroupController extends Controller
{
    public function index()
    {
        try {
            $groups = group::paginate(10);
            return view('admin.group.index', compact('groups'));
        } catch (Exception $e) {
            return back()->withErrors(['error' => 'Failed to load groups: ' . $e->getMessage()]);
        }
    }

    public function create()
    {
        try {
            return view('admin.group.create');
        } catch (Exception $e) {
            return back()->withErrors(['error' => 'Failed to load create form: ' . $e->getMessage()]);
        }
    }

    public function store(StoregroupRequest $request)
    {
        try {
            group::create($request->validated());
            return redirect()->route('groups_index')->with('success', 'groups created successfully.');
        } catch (Exception $e) {
            return back()->withErrors(['error' => 'Failed to create groups: ' . $e->getMessage()]);
        }
    }

    public function edit(group $id)
    {
        try {
            return view('admin.group.edit', compact('id'));
        } catch (Exception $e) {
            return back()->withErrors(['error' => 'Failed to load edit form: ' . $e->getMessage()]);
        }
    }

    public function update(StoregroupRequest $request, group $id)
    {
        try {
            $id->update($request->validated());
            return redirect()->route('groups_index')->with('success', 'groups updated successfully.');
        } catch (Exception $e) {
            return back()->withErrors(['error' => 'Failed to update groups: ' . $e->getMessage()]);
        }
    }

    public function destroy(group $id)
    {
        try {
            $id->delete();
            return redirect()->route('groups_index')->with('success', 'groups deleted successfully.');
        } catch (Exception $e) {
            return back()->withErrors(['error' => 'Failed to delete groups: ' . $e->getMessage()]);
        }
    }

    public function showU(string $slug){
        $group = group::where('slug',$slug)->with('books')->first();
        return view('home.group',compact('group'));
    }
}

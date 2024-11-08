<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCopyrightRequest;
use App\Models\Copyright;
use Exception;
use Illuminate\Http\Request;

class CopyrightController extends Controller
{
    public function index()
    {
        try {
            $copyrights = Copyright::paginate(10);
            return view('admin.copyright.index', compact('copyrights'));
        } catch (Exception $e) {
            return back()->withErrors(['error' => 'Failed to load copyright: ' . $e->getMessage()]);
        }
    }

    public function create()
    {
        try {
            return view('admin.copyright.create');
        } catch (Exception $e) {
            return back()->withErrors(['error' => 'Failed to load create form: ' . $e->getMessage()]);
        }
    }

    public function store(StoreCopyrightRequest $request)
    {
        try {
            Copyright::create($request->validated());
            return redirect()->route('copyright_index')->with('success', 'Bookshelf created successfully.');
        } catch (Exception $e) {
            return back()->withErrors(['error' => 'Failed to create bookshelf: ' . $e->getMessage()]);
        }
    }

    public function edit(Copyright $id)
    {
        try {
            return view('admin.copyright.edit', compact('id'));
        } catch (Exception $e) {
            return back()->withErrors(['error' => 'Failed to load edit form: ' . $e->getMessage()]);
        }
    }

    public function update(StoreCopyrightRequest $request, Copyright $id)
    {
        try {
            $id->update($request->validated());
            return redirect()->route('copyright_index')->with('success', 'Bookshelf updated successfully.');
        } catch (Exception $e) {
            return back()->withErrors(['error' => 'Failed to update bookshelf: ' . $e->getMessage()]);
        }
    }

    public function destroy(Copyright $id)
    {
        try {
            $id->delete();
            return redirect()->route('copyright_index')->with('success', 'Bookshelf deleted successfully.');
        } catch (Exception $e) {
            return back()->withErrors(['error' => 'Failed to delete bookshelf: ' . $e->getMessage()]);
        }
    }
}

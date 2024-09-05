<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBookmarksRequest;
use App\Models\Bookmarks;
use Illuminate\Http\Request;
use Exception;

class BookmarksController extends Controller
{
    public function index()
    {
        try {
            $bookmarks = Bookmarks::paginate(10);
            return view('admin.bookmarks.index', compact('bookmarks'));
        } catch (Exception $e) {
            return back()->withErrors(['error' => 'Failed to load bookmarks: ' . $e->getMessage()]);
        }
    }

    public function create()
    {
        try {
            return view('admin.bookmarks.create');
        } catch (Exception $e) {
            return back()->withErrors(['error' => 'Failed to load create form: ' . $e->getMessage()]);
        }
    }

    public function store(StoreBookmarksRequest $request)
    {
        try {
            Bookmarks::create($request->validated());
            return redirect()->route('bookmarks_index')->with('success', 'Bookmark created successfully.');
        } catch (Exception $e) {
            return back()->withErrors(['error' => 'Failed to create bookmark: ' . $e->getMessage()]);
        }
    }

    public function edit(Bookmarks $id)
    {
        try {
            return view('admin.bookmarks.edit', compact('id'));
        } catch (Exception $e) {
            return back()->withErrors(['error' => 'Failed to load edit form: ' . $e->getMessage()]);
        }
    }

    public function update(StoreBookmarksRequest $request, Bookmarks $id)
    {
        try {
            $id->update($request->validated());
            return redirect()->route('bookmarks_index')->with('success', 'Bookmark updated successfully.');
        } catch (Exception $e) {
            return back()->withErrors(['error' => 'Failed to update bookmark: ' . $e->getMessage()]);
        }
    }

    public function destroy(Bookmarks $id)
    {
        try {
            $id->delete();
            return redirect()->route('bookmarks_index')->with('success', 'Bookmark deleted successfully.');
        } catch (Exception $e) {
            return back()->withErrors(['error' => 'Failed to delete bookmark: ' . $e->getMessage()]);
        }
    }
}

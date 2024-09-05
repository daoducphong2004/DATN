<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBookshelvesRequest;
use App\Models\Bookmarks;
use App\Models\Bookshelves;
use Illuminate\Http\Request;
use Exception;

class BookshelvesController extends Controller
{
    public function index()
    {
        try {
            $bookshelves = Bookshelves::paginate(10);
            return view('admin.bookshelves.index', compact('bookshelves'));
        } catch (Exception $e) {
            return back()->withErrors(['error' => 'Failed to load bookshelves: ' . $e->getMessage()]);
        }
    }

    public function create()
    {
        try {
            return view('admin.bookshelves.create');
        } catch (Exception $e) {
            return back()->withErrors(['error' => 'Failed to load create form: ' . $e->getMessage()]);
        }
    }

    public function store(StoreBookshelvesRequest $request)
    {
        try {
            Bookshelves::create($request->validated());
            return redirect()->route('bookshelves_index')->with('success', 'Bookshelf created successfully.');
        } catch (Exception $e) {
            return back()->withErrors(['error' => 'Failed to create bookshelf: ' . $e->getMessage()]);
        }
    }

    public function edit(Bookshelves $id)
    {
        try {
            return view('admin.bookshelves.edit', compact('id'));
        } catch (Exception $e) {
            return back()->withErrors(['error' => 'Failed to load edit form: ' . $e->getMessage()]);
        }
    }

    public function update(StoreBookshelvesRequest $request, Bookshelves $id)
    {
        try {
            $id->update($request->validated());
            return redirect()->route('bookshelves_index')->with('success', 'Bookshelf updated successfully.');
        } catch (Exception $e) {
            return back()->withErrors(['error' => 'Failed to update bookshelf: ' . $e->getMessage()]);
        }
    }

    public function destroy(Bookshelves $id)
    {
        try {
            $id->delete();
            return redirect()->route('bookshelves_index')->with('success', 'Bookshelf deleted successfully.');
        } catch (Exception $e) {
            return back()->withErrors(['error' => 'Failed to delete bookshelf: ' . $e->getMessage()]);
        }
    }
}

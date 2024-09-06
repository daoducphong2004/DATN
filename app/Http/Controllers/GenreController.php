<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoregenreRequest;
use App\Models\genre;
use Illuminate\Http\Request;
use Exception;

class GenreController extends Controller
{
    public function index()
    {
        try {
            $genres = genre::paginate(10);
            return view('admin.genre.index', compact('genres'));
        } catch (Exception $e) {
            return back()->withErrors(['error' => 'Failed to load genre: ' . $e->getMessage()]);
        }
    }

    public function create()
    {
        try {
            return view('admin.genre.create');
        } catch (Exception $e) {
            return back()->withErrors(['error' => 'Failed to load create form: ' . $e->getMessage()]);
        }
    }

    public function store(StoregenreRequest $request)
    {
        try {
            genre::create($request->validated());
            return redirect()->route('genres_index')->with('success', 'Genre created successfully.');
        } catch (Exception $e) {
            return back()->withErrors(['error' => 'Failed to create Genre: ' . $e->getMessage()]);
        }
    }

    public function edit(genre $id)
    {
        try {
            return view('admin.genre.edit', compact('id'));
        } catch (Exception $e) {
            return back()->withErrors(['error' => 'Failed to load edit form: ' . $e->getMessage()]);
        }
    }

    public function update(StoregenreRequest $request, genre $id)
    {
        try {
            $id->update($request->validated());
            return redirect()->route('genres_index')->with('success', 'Genre updated successfully.');
        } catch (Exception $e) {
            return back()->withErrors(['error' => 'Failed to update Genre: ' . $e->getMessage()]);
        }
    }

    public function destroy(genre $id)
    {
        try {
            $id->delete();
            return redirect()->route('genres_index')->with('success', 'Genre deleted successfully.');
        } catch (Exception $e) {
            return back()->withErrors(['error' => 'Failed to delete Genre: ' . $e->getMessage()]);
        }
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreLetterRequest;
use App\Models\Letter;
use Illuminate\Http\Request;
use Exception;

class LetterController extends Controller
{
    public function index()
    {
        try {
            $letters = Letter::paginate(10);
            return view('admin.letter.index', compact('letters'));
        } catch (Exception $e) {
            return back()->withErrors(['error' => 'Failed to load letters.']);
        }
    }

    public function create()
    {
        try {
            return view('admin.letter.create');
        } catch (Exception $e) {
            return back()->withErrors(['error' => 'Failed to load the create form.']);
        }
    }

    public function store(StoreLetterRequest $request)
    {
        try {
            Letter::create($request->validated());
            return redirect()->route('letter_index')->with('success', 'Letter created successfully!');
        } catch (Exception $e) {
            return back()->withErrors(['error' => 'Failed to create letter.']);
        }
    }

    public function edit(Letter $id)
    {
        try {
            return view('admin.letter.edit', compact('id'));
        } catch (Exception $e) {
            return back()->withErrors(['error' => 'Failed to load the edit form.']);
        }
    }

    public function update(StoreLetterRequest $request, Letter $id)
    {
        try {
            $id->update($request->validated());
            return redirect()->route('letter_index')->with('success', 'Letter updated successfully!');
        } catch (Exception $e) {
            return back()->withErrors(['error' => 'Failed to update letter.']);
        }
    }

    public function destroy(Letter $id)
    {
        try {
            $id->delete();
            return redirect()->route('letter_index')->with('success', 'Letter deleted successfully!');
        } catch (Exception $e) {
            return back()->withErrors(['error' => 'Failed to delete letter.']);
        }
    }
}

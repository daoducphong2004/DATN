<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePosRequest;
use App\Models\Pos;
use Exception;


class PosController extends Controller
{
    public function index()
    {
        
        try {
            $pos = Pos::paginate(10);
            return view('admin.pos.index', compact('pos'));
        } catch (Exception $e) {
            return back()->withErrors(['error' => 'Failed to load pos: ' . $e->getMessage()]);
        }
    }

    public function create()
    {
        try {
            return view('admin.pos.create');
        } catch (Exception $e) {
            return back()->withErrors(['error' => 'Failed to load create form: ' . $e->getMessage()]);
        }
    }

    public function store(StorePosRequest $request)
    {
        try {
            Pos::create($request->validated());
            return redirect()->route('pos_index')->with('success', 'pos created successfully.');
        } catch (Exception $e) {
            return back()->withErrors(['error' => 'Failed to create pos: ' . $e->getMessage()]);
        }
    }

    public function edit(Pos $id)
    {
        try {
            return view('admin.pos.edit', compact('id'));
        } catch (Exception $e) {
            return back()->withErrors(['error' => 'Failed to load edit form: ' . $e->getMessage()]);
        }
    }

    public function update(StorePosRequest $request, pos $id)
    {
        try {
            $id->update($request->validated());
            return redirect()->route('pos_index')->with('success', 'pos updated successfully.');
        } catch (Exception $e) {
            return back()->withErrors(['error' => 'Failed to update pos: ' . $e->getMessage()]);
        }
    }

    public function destroy(Pos $id)
    {
        try {
            $id->delete();
            return redirect()->route('pos_index')->with('success', 'pos deleted successfully.');
        } catch (Exception $e) {
            return back()->withErrors(['error' => 'Failed to delete pos: ' . $e->getMessage()]);
        }
    }
}

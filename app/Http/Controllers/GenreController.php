<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoregenreRequest;
use App\Models\genre;
use Illuminate\Http\Request;
use Exception;
use Illuminate\Support\Str;

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


    public function store(Request $request)
    {
        try {
            // Lấy tất cả dữ liệu từ request ngoại trừ slug
            $data = $request->except('slug');
            
            // Thêm slug vào dữ liệu
            $data['slug'] = Str::slug($request->name, '-');
    
            // Lưu vào cơ sở dữ liệu
            genre::create($data);
    
            // Phân trang và trả về view
            $genres = genre::paginate(10);
            return back()->with(['error' => 'Failed to create Genre: ' . $e->getMessage()]);
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

<?php

namespace App\Http\Controllers;

use App\Models\episode;
use App\Http\Requests\StoreepisodeRequest;
use App\Http\Requests\UpdateepisodeRequest;
use App\Models\book;
use Str;

class EpisodeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreepisodeRequest $request)
    {   //chưa viết vadidate
        // try {
            // Validate the incoming request data
            $validatedData = $request->validate([
                'book_id' => 'required|integer|exists:books,id',
                'title' => 'required|string|max:255',
                'description' => 'required|string',
                'episode_path' => 'required|file|mimes:png,jpg,jpeg,gif|max:2048', // Accept only specific image types and max 2MB
            ]);
            $slug = Str::slug($validatedData['title'], '-');
            // Handle file upload
            if ($request->hasFile('episode_path')) {
                $file = $request->file('episode_path');
                $filename = time() . '_' . $file->getClientOriginalName();
                $filePath = $file->storeAs('public/episodes', $filename);

                // Store episode data in the database
                $episode = new Episode();
                $episode->book_id = $validatedData['book_id'];
                $episode->title = $validatedData['title'];
                $episode->slug = $slug; // Store the generated slug
                $episode->description = $validatedData['description'];
                $episode->episode_path = $filePath;
                $episode->save();
            }

            return redirect()->back()->with('episode', $episode);
        // } catch (\Exception $e) {
        //     return redirect()->back()->with('error', 'An error occurred while creating the episode: ' . $e->getMessage());
        // }
    }

    /**
     * Display the specified resource.
     */
    public function show(episode $episode)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(episode $episode)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateepisodeRequest $request, episode $episode)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(episode $episode)
    {
        //
    }
}

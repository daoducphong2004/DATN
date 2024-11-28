<?php

namespace App\Http\Controllers;

use App\Models\episode;
use App\Http\Requests\StoreepisodeRequest;
use App\Http\Requests\UpdateepisodeRequest;
use App\Models\Book;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Str;
use Illuminate\Http\Request;

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
    {
        try {
            // Validate the incoming request data
            $validatedData = $request->validate([
                'book_id' => 'required|integer|exists:books,id',
                'title' => 'required|string|max:255',
                'description' => 'required|string',
                'episode_path' => 'required|file|mimes:png,jpg,jpeg,gif|max:2048', // Accept only specific image types and max 2MB
            ]);

            // Handle file upload
            if ($request->hasFile('episode_path')) {
                $file = $request->file('episode_path');
                $filename = time() . '_' . $file->getClientOriginalName();
                $filePath = $file->storeAs('public/episodes', $filename);

                // Store episode data in the database
                $episode = new episode();
                $episode->book_id = $validatedData['book_id'];
                $episode->title = $validatedData['title'];
                $episode->slug = ''; // Store the generated slug
                $episode->description = $validatedData['description'];
                $episode->episode_path = $filePath;
                $episode->user_id = Auth::id();
                $episode->save();

                // Generate and save slug
                $slug = Str::slug('t' . $episode->id . '-' . $validatedData['title']);
                $episode->slug = $slug;
                $lastOder = $episode->getMaxOrderByBook($episode->book_id);
                $episode->order = $lastOder+1;
                $episode->save();
            }

            // Flash a success message to the session
            session()->flash('success', 'Thêm tập mới thành công!');

            return redirect()->back()->with('episode', $episode);
        } catch (\Exception $e) {
            // Flash an error message to the session
            session()->flash('error', 'Đã xảy ra lỗi khi tạo tập mới: ' . $e->getMessage());

            return redirect()->back();
        }
    }


    /**
     * Display the specified resource.
     */
    public function show(episode $episode) {}
    public function showU(string $slug, string $slug_episode)
    {
        $episode = episode::where('slug', $slug_episode)->with('chapters')->firstOrFail();
        // dd($episode);
        $book = Book::where('slug', $slug)->with('episodes')->firstOrFail();

        // Lấy danh sách các chapters trong episode của chapter hiện tại
        // dd($book->episodes);
        return view('story.episodeShow', compact('book', 'episode'));
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $episode = episode::findOrFail($id);
        // dd($episode)

        // Lấy danh sách các chapters trong episode của chapter hiện tại
        // dd($book->episodes);
        return view('stories.iframe.episodes.formUpdateEpisode', compact('episode'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEpisodeRequest $request, $id)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'string',
            'episode_path' => 'nullable|file|mimes:png,jpg,jpeg,gif|max:2048', // File is optional during update
        ]);

        // Find the episode by ID
        $episode = episode::findOrFail($id);

        // Update the title and description
        $episode->title = $validatedData['title'];
        $episode->description = $validatedData['description'];

        // Handle file upload if a new file is provided
        if ($request->hasFile('episode_path')) {
            $file = $request->file('episode_path');
            $filename = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('public/episodes', $filename);

            // Delete the old file if it exists
            if ($episode->episode_path && Storage::exists($episode->episode_path)) {
                Storage::delete($episode->episode_path);
            }

            // Update the file path
            $episode->episode_path = $filePath;
        }

        // Save the updated episode
        $episode->save();

        // Update the slug after saving to ensure the episode ID is included in the slug
        $slug = Str::slug('t' . $episode->id . '-' . $validatedData['title']);
        $episode->slug = $slug;
        $episode->save();

        // Redirect or return a success message
        return redirect()->route('episode.index')->with('success', 'Episode updated successfully!');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(episode $episode)
    {
        try {
            // Delete the episode and its related chapters
            $episode->delete();

            // Return a JSON response with success status
            return response()->json(['success' => true, 'message' => 'Tập truyện đã được xóa thành công!']);
        } catch (\Exception $e) {
            // Log the error message
            \Log::error('Error deleting episode: ' . $e->getMessage());

            // Return a JSON response with error status
            return response()->json(['success' => false, 'message' => 'Có lỗi xảy ra khi xóa tập. Vui lòng thử lại.']);
        }
    }
    //Sắp xếp tập truyện
    public function sortView($bookId)
    {
        // Get episodes for the specific book and sort them by 'order'
        $episodes = episode::where('book_id', $bookId)->orderBy('order')->get();
        return view('stories.iframe.episodes.sort', compact('episodes'));
    }

    public function updateOrder(Request $request)
    {
        $order = $request->input('order');

        foreach ($order as $position => $id) {
            episode::where('id', $id)->update(['order' => $position + 1]);
        }

        return response()->json(['status' => 'success']);
    }
    //End sắp xếp tập truyện
}

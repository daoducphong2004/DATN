<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ReadingHistory;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Cache;

class ReadingHistoryController extends Controller
{
    // Method to store reading history
    public function store(Request $request)
    {
        $chapterId = $request->input('chapter_id');
        $user = Auth::user();

        if ($user) {
            // Logged-in user, save to database
            $readingHistory = new ReadingHistory();
            $readingHistory->user_id = $user->id;
            $readingHistory->chapter_id = $chapterId;
            $readingHistory->save();

            return response()->json(['message' => 'Reading history saved to database']);
        } else {
            // Guest user, save to local storage (cookie or cache)
            $this->saveToLocal($chapterId);

            return response()->json(['message' => 'Reading history saved locally']);
        }
    }

    // Save to local storage (cookie or cache)
    private function saveToLocal($storyId)
    {
        // Option 1: Save to cookie
        $cookieName = 'reading_history';
        $existingHistory = json_decode(Cookie::get($cookieName), true) ?? [];

        // Check if story is already in the history
        if (!in_array($storyId, $existingHistory)) {
            $existingHistory[] = $storyId;
        }

        // Save updated history to the cookie
        Cookie::queue(Cookie::make($cookieName, json_encode($existingHistory), 60 * 24 * 30)); // Expires in 30 days

        // Option 2: Save to cache (if preferred)
        // Cache::put($cookieName, $existingHistory, now()->addDays(30));
    }
}

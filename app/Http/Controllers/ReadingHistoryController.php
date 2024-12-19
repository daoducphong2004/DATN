<?php

namespace App\Http\Controllers;

use App\Models\AutoPurchase;
use App\Models\Book;
use App\Models\chapter;
use App\Models\Payment;
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
    public function index()
    {
        $user = Auth::user();
        // Lịch sử mua truyện
        $purchasedStories = "";
        $dataHistory = "";
        $totalPayment = "";
        $totalCoin  = "";
        $AutoPurchase = "";

        // Number of items per page
        $perPage = 4;

        // Check if the user is logged in
        if (auth()->check()) {
            // Logged-in user: Retrieve reading history from the database
            $user = auth()->user();
            $readingHistories = ReadingHistory::where('user_id', $user->id)
                ->whereHas('book', function ($query) {
                    $query->where('Is_Inspect', 1);
                })
                ->with('book', 'chapter')
                ->orderBy('last_read_at', 'desc')
                ->orderBy('created_at', 'desc')
                ->paginate($perPage);

            // Danh sách truyện đăng ký tự động
            $AutoPurchase = AutoPurchase::where('user_id', $user->id)
                ->where('status', 1)
                ->paginate(4);
            $purchasedStories = $user->purchasedStories()->with('chapter')->orderByDesc('id')->paginate(10);

            // Lịch sử nạp tiền
            $dataHistory = Payment::where('user_id', Auth::id())->get();
            $totalPayment = 0;
            $totalCoin = 0;
            foreach ($dataHistory as $item) {
                $totalPayment += $item->amount;
                $totalCoin += $item->coin_earned;
            }
        } else {
            // Guest user: Retrieve reading history from session or cookie
            $cookieName = 'reading_history';
            $guestReadingHistory = json_decode(Cookie::get($cookieName), true) ?? [];
            // Paginate the collection manually
            $readingHistories = collect($guestReadingHistory)
                ->map(function ($history) {
                    // Fetch the book and chapter details using the saved IDs
                    $book = Book::where('id', $history['book_id'])->where('Is_Inspect', 1)->first();
                    $chapter = Chapter::find($history['chapter_id']);
                    return [
                        'book' => $book,
                        'chapter' => $chapter,
                        'last_read_at' => $history['last_read_at'],
                    ];
                })
                ->filter(function ($item) {
                    return $item['book'] !== null; // Only include items where the book is found
                });

            // Manually paginate the collection
            $page = request()->get('page', 1); // Get the current page, default to 1
            $paginatedData = $readingHistories->forPage($page, $perPage);

            $readingHistories = new \Illuminate\Pagination\LengthAwarePaginator(
                $paginatedData,
                $readingHistories->count(),
                $perPage,
                $page,
                ['path' => request()->url(), 'query' => request()->query()]
            );
        }
        // dd($purchasedStories);

        return view('home.lichsu', compact('readingHistories', 'purchasedStories', 'dataHistory', 'totalPayment', 'totalCoin', 'AutoPurchase'));
    }
}

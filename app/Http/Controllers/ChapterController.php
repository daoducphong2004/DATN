<?php

namespace App\Http\Controllers;

use App\Models\chapter;
use App\Http\Requests\StorechapterRequest;
use App\Http\Requests\UpdatechapterRequest;
use App\Models\episode;
use App\Models\PurchasedStory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Str;

class ChapterController extends Controller
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
    public function store(Request $request)
    {
           // Validation
    $validatedData = $request->validate([
        'episode_id' => 'required|integer|exists:episodes,id',
        'title' => 'required|string|max:255',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        'content' => 'required|string',
        'price' => 'required|numeric', // Thêm quy tắc xác thực cho price
    ]);

    // Calculate word count
    $wordCount = str_word_count(strip_tags($validatedData['content']));

    $book = Episode::find($validatedData['episode_id'])->book()->first();

    // Create new chapter
    $chapter = new Chapter();
    $chapter->episode_id = $validatedData['episode_id'];
    $chapter->title = $validatedData['title'];
    $chapter->slug = '';
    $chapter->user_id = Auth::id();
    $chapter->content = $validatedData['content'];
    $chapter->price = $validatedData['price']; // Gán giá
    $chapter->word_count = $wordCount; // Lưu số từ
    $chapter->save();

    // Create slug from chapter_id and title
    $slug = 'c' . $chapter->id . '-' . Str::slug($validatedData['title']);
    $chapter->slug = $slug;

    // Save the chapter again with the updated slug
    $chapter->save();

    // Update the word count for the book (sum of all chapters)
    $book->word_count += $wordCount;
    $book->save();

    return redirect()->route('chapter.edit', $chapter->id)->with('success', 'Chapter added successfully.');
    }

    public function uploadImage(Request $request)
    {
        try {
            $request->validate([
                'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);

            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imageName = time() . '_' . $image->getClientOriginalName();
                $imagePath = $image->storeAs('public/uploads', $imageName);

                // Return the URL of the uploaded image
                return response()->json([
                    'success' => true,
                    'url' => asset('storage/uploads/' . $imageName)
                ]);
            }

            return response()->json(['success' => false, 'message' => 'No file uploaded']);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => $e->getMessage()]);
        }
    }
    /**
     * Display the specified resource.
     */
    public function show(chapter $chapter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(String $id)
    {
        $chapter = chapter::findOrFail($id);

        return view('stories.iframe.chapters.formUpdateChapter', compact('chapter'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validation
        $validatedData = $request->validate([
            'episode_id' => 'required|integer|exists:episodes,id',
            'title' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'content' => 'required|string',
        ]);

        // Tìm chapter cần cập nhật
        $chapter = Chapter::findOrFail($id);
        $chapter->episode_id = $validatedData['episode_id'];
        $chapter->title = $validatedData['title'];
        $chapter->slug = 'c' . $chapter->id . '-' . Str::slug($validatedData['title']);
        // $chapter->image = $imagePath;
        $chapter->content = $validatedData['content'];
        $chapter->save();

        // Trigger sẽ tự động cập nhật trường 'updated_at' trong bảng 'book'

        return redirect()->route('chapter.edit', $chapter->id)->with('success', 'Chapter updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            // Find the chapter or fail if it doesn't exist
            $chapter = Chapter::findOrFail($id);

            // Detach the associated genres
            // $chapter->genres()->detach();

            // Get the book ID associated with the chapter
            // $bookId = $chapter->book_id;

            // Delete the chapter
            $chapter->delete();

            // Return a JSON response with success status
            return response()->json(['success' => true, 'message' => 'Chapter đã được xóa thành công!']);
        } catch (\Exception $e) {
            // Log the error message
            \Log::error('Error deleting chapter: ' . $e->getMessage());

            // Return a JSON response with error status
            return response()->json(['success' => false, 'message' => 'Có lỗi xảy ra khi xóa chapter. Vui lòng thử lại.']);
        }
    }
    public function purchaseChapter(Request $request, $chapterId)
    {
        $user = auth()->user(); // Lấy thông tin người dùng hiện tại

        // Kiểm tra xem người dùng đã mua chapter này chưa
        $alreadyPurchased = PurchasedStory::where('user_id', $user->id)
            ->where('chapter_id', $chapterId)
            ->exists();

        if ($alreadyPurchased) {
            return response()->json(['message' => 'Bạn đã mua chapter này rồi.'], 400);
        }

        // Lấy thông tin chapter cần mua
        $chapter = Chapter::findOrFail($chapterId);

        // Kiểm tra nếu người dùng có đủ coin để mua
        $price = $chapter->price; // Giả sử mỗi chapter có giá trị 'price'

        if ($user->coin_earned < $price) {
            return response()->json(['message' => 'Bạn không đủ coin để mua chapter này.'], 400);
        }

        // Trừ coin của người dùng
        $user->coin_earned -= $price;
        $user->save();

        // Lưu thông tin mua chapter vào bảng purchased_chapters
        PurchasedStory::create([
            'user_id' => $user->id,
            'chapter_id' => $chapter->id,
            'purchase_date' => now(),
        ]);

        return response()->json(['message' => 'Mua chapter thành công!'], 200);
    }
    public function purchase($bookSlug, $chapterId)
    {
        $user = auth()->user(); // Lấy thông tin người dùng hiện tại

        // Tìm chương cần mua
        $chapter = Chapter::findOrFail($chapterId);

        // Kiểm tra nếu chương đã có giá là 0 thì không cần mua
        if ($chapter->price == 0) {
            return redirect()->route('truyen.chuong', [$bookSlug, $chapter->slug])
                             ->with('message', 'Chương này miễn phí, bạn không cần mua.');
        }

        // Kiểm tra nếu người dùng đã mua chương này
        if ($user->hasPurchased($chapter->id)) {
            return redirect()->route('truyen.chuong', [$bookSlug, $chapter->slug])
                             ->with('message', 'Bạn đã mua chương này rồi.');
        }

        // Kiểm tra số dư coin của người dùng
        if ($user->coin_earned < $chapter->price) {
            return redirect()->back()->with('error', 'Bạn không đủ coin để mua chương này.');
        }

        // Trừ coin và lưu thông tin mua chương
        $user->coin_earned -= $chapter->price;
        $user->save();

        PurchasedStory::create([
            'user_id' => $user->id,
            'chapter_id' => $chapter->id,
            'purchase_date' => now(),
        ]);

        return redirect()->route('truyen.chuong', [$bookSlug, $chapter->slug])
                         ->with('message', 'Mua chương thành công!');
    }
}

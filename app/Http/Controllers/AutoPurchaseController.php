<?php

namespace App\Http\Controllers;

use App\Models\AutoPurchase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AutoPurchaseController extends Controller
{
    public function autoPurchase(Request $request)
    {
        // Validate request
        $request->validate([
            'book_id' => 'required|exists:books,id',
        ]);

        $bookId = $request->book_id;
        $userId = Auth::id(); // Get the authenticated user's ID

        // Check if the user already purchased the book
        $existingPurchase = AutoPurchase::where('user_id', $userId)
            ->where('book_id', $bookId)
            ->first();

        if ($existingPurchase) {
            return response()->json(['success' => false, 'message' => 'Bạn đã mua chương này rồi.']);
        }

        // Create a new auto-purchase record
        AutoPurchase::create([
            'user_id' => $userId,
            'book_id' => $bookId,
            'status' => 1, // Assuming 'purchased' means the chapter is bought
        ]);

        return response()->json(['success' => true, 'message' => 'Mua chương thành công!']);
    }
    // Method to get books that have been auto-purchased
    public function getAutoPurchasedBooks(Request $request)
    {
        $userId = Auth::id(); // Get the authenticated user's ID
        // Retrieve auto-purchases and load related book details with pagination
        $autoPurchases = AutoPurchase::with('book') // eager load 'book' relationship
            ->where('user_id', $userId)
            ->paginate(10);  // Pagination of 10 items per page

        // Return the paginated list of auto-purchased books
        return response()->json([
            'autoPurchases' => $autoPurchases->items(),
            'currentPage' => $autoPurchases->currentPage(),
            'lastPage' => $autoPurchases->lastPage(),
            'message' => 'Mua chương thành công!'
        ]);
    }
    public function destroy(Request $request)
    {
        $book_id = $request->book_id;

        try {
            $autoPurchase = AutoPurchase::query()
            ->where('book_id', $book_id)
            ->where('user_id',Auth::id())
            ->first();

            if ($autoPurchase) {
                $autoPurchase->delete();

                return response()->json([
                    'success' => true,
                    'message' => 'Xóa tự động mua thành công.'
                ]);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'Không tìm thấy bản ghi tự động mua.'
                ]);
            }
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Đã xảy ra lỗi: ' . $e->getMessage()
            ]);
        }
    }
}

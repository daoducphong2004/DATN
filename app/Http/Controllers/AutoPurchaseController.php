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
}

<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\PurchasedStory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function addToCart(Request $request)
    {
        if (!Auth::check()) {
            return response()->json(['status' => 'error', 'message' => 'Bạn cần đăng nhập để thêm chương vào giỏ hàng.']);
        }

        $exists = Cart::where('user_id', Auth::id())->where('chapter_id', $request->chapter_id)->exists();

        if ($exists) {
            return response()->json(['status' => 'error', 'message' => 'Chapter already in cart']);
        }

        Cart::create([
            'user_id' => Auth::id(),
            'chapter_id' => $request->chapter_id,
            'quantity' => 1,
        ]);

        return response()->json(['status' => 'success', 'message' => 'Chapter added to cart']);
    }

    public function viewCart()
    {
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'Bạn cần đăng nhập để thêm chương vào giỏ hàng.');
        }

        $user = Auth::user();
        $cartItems = Cart::where('user_id', $user->id)->with('chapter')->get();

        $purchasedItems = $cartItems->filter(function ($item) use ($user) {
            return PurchasedStory::where('user_id', $user->id)->where('chapter_id', $item->chapter_id)->exists();
        });

        $unpurchasedItems = $cartItems->filter(function ($item) use ($user) {
            return !PurchasedStory::where('user_id', $user->id)->where('chapter_id', $item->chapter_id)->exists();
        });

        return view('user.cart.index', compact('purchasedItems', 'unpurchasedItems'));
    }

    public function removeFromCart($id)
    {
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'Bạn cần đăng nhập để thêm chương vào giỏ hàng.');
        }

        $cartItem = Cart::findOrFail($id);
        $cartItem->delete();

        return response()->json(['status' => 'success', 'message' => 'Chapter removed from cart']);
    }
    public function getCartCount()
    {
        $count = Cart::where('user_id', Auth::id())->count();
        return response()->json(['status' => 'success', 'count' => $count]);
    }
    public function addMultipleToCart(Request $request)
    {
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'Bạn cần đăng nhập để thêm chương vào giỏ hàng.');
        }

        $chapterIds = $request->input('chapters', []);
        $userId = Auth::id();
        $addedChapters = [];
        $existingChapters = [];

        foreach ($chapterIds as $chapterId) {
            $exists = Cart::where('user_id', $userId)->where('chapter_id', $chapterId)->exists();

            if (!$exists) {
                Cart::create([
                    'user_id' => $userId,
                    'chapter_id' => $chapterId,
                ]);
                $addedChapters[] = $chapterId;
            } else {
                $existingChapters[] = $chapterId;
            }
        }

        $message = 'Các chương đã được thêm vào giỏ hàng.';
        if (!empty($existingChapters)) {
            $message .= ' Một số chương đã có trong giỏ hàng và không được thêm lại.';
        }

        return redirect()->back()->with('message', $message);
    }
}

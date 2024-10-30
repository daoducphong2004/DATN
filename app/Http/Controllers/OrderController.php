<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\PurchasedStory;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function createOrder()
    {
        $user = Auth::user();
        $cartItems = Cart::where('user_id', $user->id)->get();

        // Kiểm tra nếu giỏ hàng rỗng
        if ($cartItems->isEmpty()) {
            return response()->json(['status' => 'error', 'message' => 'Giỏ hàng trống.']);
        }

        // Lọc các chương đã mua
        $cartItems = $cartItems->filter(function($item) use ($user) {
            return !PurchasedStory::where('user_id', $user->id)->where('chapter_id', $item->chapter_id)->exists();
        });

        // Kiểm tra nếu tất cả các chương đã được mua
        if ($cartItems->isEmpty()) {
            return response()->json(['status' => 'error', 'message' => 'Tất cả các chương trong giỏ hàng đã được mua.']);
        }

        $totalPrice = $cartItems->sum(function($item) {
            return $item->chapter->price;
        });

        // Kiểm tra số dư coin của người dùng
        if ($user->coin_earned < $totalPrice) {
            return response()->json(['status' => 'error', 'message' => 'Bạn không đủ coin để mua các chương này.']);
        }

        try {
            DB::beginTransaction();

            // Trừ coin người dùng
            $user->coin_earned -= $totalPrice;
            $user->save();

            // Tạo đơn hàng
            $order = Order::create([
                'user_id' => $user->id,
                'total_price' => $totalPrice,
                'status' => 'completed',
            ]);

            foreach ($cartItems as $item) {
                // Thêm chương vào đơn hàng
                $order->chapters()->attach($item->chapter_id, ['price' => $item->chapter->price]);

                // Thêm chương vào PurchasedStory
                PurchasedStory::create([
                    'user_id' => $user->id,
                    'chapter_id' => $item->chapter_id,
                    'purchase_date' => now(),
                    'price' => $item->chapter->price,
                ]);

                // Xóa chương khỏi giỏ hàng
                $item->delete();
            }

            DB::commit();

            return response()->json(['status' => 'success', 'message' => 'Thanh toán thành công!']);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['status' => 'error', 'message' => 'Đã xảy ra lỗi khi thanh toán: ' . $e->getMessage()]);
        }
    }

}

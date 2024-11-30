<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Auth;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function indexPayment(){
        return view('pay.choose-payment');
    }

    public function indexCash(){
        return view('pay.choose-cash');
    }

    public function payment(Request $request)
    {
        $vnp_TmnCode = "ME3DBPPL";
        $vnp_HashSecret = "I4DW6LYA3KPCUK7ZYC1GR7054X59P7L3";
        $vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
        $vnp_Returnurl = "http://lightnovel.id.vn/vnpay-return";

        $vnp_TxnRef = 'MRD' . rand(00, 9999);
        $vnp_OrderInfo = "Thanh toán online";
        $vnp_OrderType = "vnpay";
        $vnp_Amount = $request->cash * 100;
        $vnp_Locale = 'vn';
        $vnp_BankCode = 'NCB';
        $vnp_IpAddr = $_SERVER['REMOTE_ADDR'];
        $vnp_createDate = date('YmdHis');

        $inputData = array(
            "vnp_Version" => "2.1.0",
            "vnp_TmnCode" => $vnp_TmnCode,
            "vnp_Amount" => $vnp_Amount,
            "vnp_Command" => "pay",
            "vnp_CreateDate" => $vnp_createDate,
            "vnp_CurrCode" => "VND",
            "vnp_IpAddr" => $vnp_IpAddr,
            "vnp_Locale" => $vnp_Locale,
            "vnp_OrderInfo" => $vnp_OrderInfo,
            "vnp_OrderType" => $vnp_OrderType,
            "vnp_ReturnUrl" => $vnp_Returnurl,
            "vnp_TxnRef" => $vnp_TxnRef

        );

        if (isset($vnp_BankCode) && $vnp_BankCode != "") {
            $inputData['vnp_BankCode'] = $vnp_BankCode;
        }

        ksort($inputData);
        $query = "";
        $i = 0;
        $hashdata = "";
        foreach ($inputData as $key => $value) {
            if ($i == 1) {
                $hashdata .= '&' . urlencode($key) . "=" . urlencode($value);
            } else {
                $hashdata .= urlencode($key) . "=" . urlencode($value);
                $i = 1;
            }
            $query .= urlencode($key) . "=" . urlencode($value) . '&';
        }

        $vnp_Url = $vnp_Url . "?" . $query;
        if (isset($vnp_HashSecret)) {
            $vnpSecureHash = hash_hmac('sha512', $hashdata, $vnp_HashSecret); //
            $vnp_Url .= 'vnp_SecureHash=' . $vnpSecureHash;
        }

        Payment::create([
            'user_id' => Auth::user()->id,
            'amount' => $vnp_Amount / 100,
            'final_amount' => $vnp_Amount / 100,
            'coin_earned' => $vnp_Amount / 100,
            'status' => 'pending',
            'description' => $vnp_OrderInfo,
            'payment_date' => $vnp_createDate,
            'currency' => "VND",
            'payment_method' => 'Thanh toán online',
            'transaction_id' => $vnp_TxnRef
        ]);
        return redirect($vnp_Url);
    }

    public function paymentReturn(Request $request)
    {
        $vnp_HashSecret = "I4DW6LYA3KPCUK7ZYC1GR7054X59P7L3"; // Chuỗi ký bí mật
        $inputData = $request->all();

        $vnp_SecureHash = $inputData['vnp_SecureHash'];
        unset($inputData['vnp_SecureHash']);

        ksort($inputData);
        $hashData = '';
        foreach ($inputData as $key => $value) {
            if ($hashData != '') {
                $hashData .= '&' . urlencode($key) . "=" . urlencode($value);
            } else {
                $hashData .= urlencode($key) . "=" . urlencode($value);
            }
        }

        $secureHash = hash_hmac('sha512', $hashData, $vnp_HashSecret);

        if ($secureHash == $vnp_SecureHash) {
            $payment = Payment::where('transaction_id', $inputData['vnp_TxnRef'])->first();

            if ($payment) {
                if ($inputData['vnp_ResponseCode'] == '00') {
                    $payment->update([
                        'status' => 'completed',
                        'transaction_id' => $inputData['vnp_TransactionNo']
                    ]);
                    $encodedData = base64_encode(json_encode($request->all()));
                    $userInfo = Auth::user();
                    // $requestObject = (object) $request->all();
                    $userInfo->coin_earned +=  $request->vnp_Amount/100;
                    $userInfo->save();
                    return redirect()->route('paymentSuccess', ['paymentData' => $encodedData])->with('message', 'Giao dịch thành công!');
                } else {
                    $payment->update([
                        'status' => 'failed'
                    ]);
                    return redirect()->route('indexCash')->with('message', 'Giao dịch không thành công');
                }
            } else {
                return redirect()->route('indexCash')->with('message', 'Giao dịch không tồn tại');
            }
        } else {
            return redirect()->route('indexCash')->with('message', 'Chữ ký không hợp lệ');
        }
    }

    public function paymentSuccess($paymentData){
        $dataInput = json_decode(base64_decode($paymentData), true);
        $dataInput = (object) $dataInput;
        $userInfo = Auth::user();
        return view('pay.payment-status', compact('dataInput', 'userInfo'));
    }

    public function paymentHistory($userId){
        $dataHistory = Payment::where('user_id', Auth::id())->get();
        $totalPayment = 0;
        $totalCoin = 0;
        foreach($dataHistory as $item){
            $totalPayment += $item->amount;
            $totalCoin += $item->coin_earned;
        }
        return view('pay.payment-history', compact('dataHistory', 'totalPayment','totalCoin'));
    }
}

@extends('home.layout.master')
@section('content')
    <div class="page-top-group  at-index ">
        @include('partials.banner')
    </div>

    <main id="mainpart" class="user-page">
        <div class="container">
            <div class="row d-block clearfix">
                @include('home.layout.box')
                <div style="text-align: center; margin: 0 auto 10px auto;">
                </div>
                <div class="col-12 col-lg-9 float-left">
                    <div class="letter-details"
                        style="max-width: 600px; margin: auto; padding: 20px; border: 1px solid #ddd; border-radius: 8px; font-family: Arial, sans-serif;">
                        <h2 style="text-align: center;">Chi Tiết Thư</h2>

                        <!-- Thông tin chung -->
                        <p><strong>Người gửi:</strong> {{ $letter->sender->username ?? 'Không xác định' }}</p>
                        <p><strong>Người nhận:</strong> {{ $letter->receiver->username ?? 'Không xác định' }}</p>
                        <p><strong>Trạng thái:</strong>
                            @if ($letter->status === 'unread')
                                <span style="color: red;">Chưa đọc</span>
                            @else
                                <span style="color: green;">Đã đọc</span>
                            @endif
                        </p>
                        <p><strong>Ngày gửi:</strong> {{ $letter->created_at->format('d/m/Y H:i') }}</p>

                        <!-- Nội dung thư -->
                        <hr>
                        <h3 style="text-align: center;">{{ $letter->title }}</h3>
                        <div
                            style="white-space: pre-line; padding: 10px; background: #f9f9f9; border: 1px solid #eee; border-radius: 4px; margin-top: 10px;">
                            {!! $letter->content !!}
                        </div>

                        <!-- Nút quay lại -->
                        <div style="margin-top: 20px; text-align: center;">
                            <a href="{{ route('Letter.index') }}"
                                style="display: inline-block; padding: 10px 20px; color: white; background: #007bff; border-radius: 4px; text-decoration: none;">Quay
                                lại hộp thư</a>
                           @if (Auth::id()!=$letter->sender->id)
                                <!-- Nút Trả lời -->
                            <a href="{{ route('Letter.create') }}?receiver={{ $letter->sender->username }}"
                                style="display: inline-block; padding: 10px 20px; color: white; background: #007bff; border-radius: 4px; text-decoration: none;">
                                Trả lời
                             </a>
                           @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

@extends('home.layout.master')
@section('title')
    Gửi thư - Cổng Light Novel - Đọc Light Novel
@endsection
@section('content')
    <div class="page-top-group at-index ">
        @include('partials.banner')
    </div>

    <main id="mainpart" class="new-pm-page" style="min-height: 181px;">
        <header class="page-title">
            <div class="page-name_wrapper">
                <div class="container">
                    <span class="page-name"><i class="fas fa-circle"></i>Gửi thư mới</span>
                </div>
            </div>
        </header>
        <div class="container">
            <section class="new-private-messages">
                @if (session('success'))
                    <div class="alert alert-success" style="background-color: rgb(90, 205, 90)">
                        {{ session('success') }}
                    </div>
                @endif

                <form method="post" action="{{ route('Letter.send') }}">
                    {{ csrf_field() }}
                    
                    <!-- Thông tin người nhận -->
                    <div class="mail-attribute" style="margin-top: 20px;">
                        <div class="mail-attribute-name" style="margin-bottom: 5px;">Người nhận</div>
                        <input id="receiver-input" class="form-control mail-attribute-input" name="receive_user"
                            size="40" placeholder="UserName" value="{{ old('receive_user') }}" type="text">
                        @error('receive_user') 
                            <div class="error-message" style="color: red; font-size: 16px; margin-top: 5px;">{{ $message }}</div> 
                        @enderror
                    </div>

                    <div class="mail-attribute">
                        <div class="mail-attribute-name">Tên thư</div>
                        <input class="form-control mail-attribute-input" name="title" size="40"
                            placeholder="Bắt buộc" value="{{ old('title') }}" type="text">
                        @error('title') 
                            <div class="error-message" style="color: red; font-size: 16px; margin-top: 5px;">{{ $message }}</div> 
                        @enderror
                    </div>

                    <div class="mail-attribute">
                        <div class="mail-attribute-name">Nội dung</div>
                        <textarea class="comment_content" name="content" style="width: 100%; height: 100px" aria-hidden="true"
                            placeholder="Bắt buộc">{{ old('content') }}</textarea>
                        @error('content') 
                            <div class="error-message" style="color: red; font-size: 16px; margin-top: 5px;">{{ $message }}</div> 
                        @enderror
                    </div>

                    <div id="ln-comment-submit" class="ln-comment-form clear">
                        <div class="form-submit-btn">
                            <input type="submit" class="button" value="Gửi đi">
                        </div>
                    </div>
                </form>
            </section>
            @include('layouts.TinyMCEscriptNoImport')
        </div>
    </main>

    <script>
        // Hàm lấy query parameter từ URL
        function getQueryParam(param) {
            const urlParams = new URLSearchParams(window.location.search);
            return urlParams.get(param);
        }

        // Lấy giá trị 'receiver' từ URL và điền vào ô input
        const receiver = getQueryParam('receiver');
        const receiverInput = document.getElementById('receiver-input');
        // console.log(receiver,receiverInput)
        // Kiểm tra nếu phần tử tồn tại
        if (receiverInput && receiver) {
            receiverInput.value = receiver;
            console.log('điền thành công')
        }
    </script>
@endsection

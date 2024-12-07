@extends('user.layout.master')
@section('content')
<div class="wrapper container-fluid" style="height: 100vh;">
    <!-- Nút bật/tắt khung quản lý chỉ hiển thị trên các thiết bị nhỏ -->
    <div class="visible-xs-block visible-sm-block"
        style="
            position: absolute;
            top: 70px;
            left: 0;
            z-index: 10000;
            padding: 10px;
            border: 2px solid #de2222;
            border-radius: 2px;
            background-color: #f5f5f5;"
        id="action-tree-toggle">
        Click để bật/tắt khung Quản lý
    </div>

    <div class="row" style="height: 100%;">
        <!-- Cột trái: Khung quản lý -->
        <div class="col-xs-12 col-sm-12 col-md-3 hidden-xs hidden-sm" id="action-tree"
            style="border-right: 1px solid #ccc; padding: 0; height: 100%;">
            <iframe name="nav" src="{{ route('storytree', $book->id) }}" style="width: 100%; height: 100%; border: none;"></iframe>
        </div>

        <!-- Cột phải: Khung thông tin -->
        <div class="col-xs-12 col-sm-12 col-md-9" style="padding: 0; height: 100%;">
            <iframe name="action" src="{{ route('storyinformation', $book->id) }}" style="width: 100%; height: 100%; border: none;"></iframe>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        // Bật/tắt khung quản lý
        $('#action-tree-toggle').on('click', function() {
            $('#action-tree').toggleClass('hidden-xs hidden-sm');
        });

        // Xử lý khi form bên trong iframe "action" được submit thành công
        window.addEventListener('message', function(event) {
            if (event.data === 'form-submitted') {
                // Làm mới iframe bên trái (nav)
                document.querySelector('iframe[name="nav"]').contentWindow.location.reload();
            }
        });

        // Xử lý cho thiết bị iOS
        if (/iPhone|iPod|iPad/.test(navigator.userAgent)) {
            $('iframe').parent().css({
                width: '100%',
                height: '100%',
                overflow: 'auto',
                '-webkit-overflow-scrolling': 'touch' // Hỗ trợ cuộn mượt trên iOS
            });
        }
    });
</script>
@endsection

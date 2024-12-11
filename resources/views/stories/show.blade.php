@extends('user.layout.master')
@section('content')
<div class="position-fixed d-block d-md-none toggle-container p-2 border border-danger rounded bg-light"
id="action-tree-toggle" style="top: 70px; left: 0; z-index: 1000;">
Click để bật/tắt khung Quản lý
</div>
    <div class="wrapper container-fluid" style="height: 100vh;">
     
    
        <div class="row h-100 ">
            <!-- Cột trái: Khung quản lý -->
            <div class="col-md-3 d-none d-md-block border-end h-100" id="action-tree">
                <iframe name="nav" src="{{ route('storytree', $book->id) }}"  class="w-100 h-100 border-0"></iframe>
            </div>

            <!-- Cột phải: Khung thông tin -->
            <div class="col-12 col-md-9 h-100 p-0">
                <iframe name="action" src="{{ route('storyinformation', $book->id) }}"
                    class="w-100 h-100 border-0"></iframe>
            </div>
        </div>
    </div>

        <style>
            .toggle-container {
                cursor: pointer;
                transition: background-color 0.3s;
            }

            .toggle-container:hover {
                background-color: #e9ecef;
            }

            iframe {
                scroll-behavior: smooth;
            }
        </style>


    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // Bật/tắt khung quản lý trên thiết bị nhỏ
            const actionTreeToggle = document.getElementById('action-tree-toggle');
            const actionTree = document.getElementById('action-tree');

            actionTreeToggle.addEventListener('click', () => {
                actionTree.classList.toggle('d-none');
            });

            // Lắng nghe sự kiện "form-submitted" từ iframe
            window.addEventListener('message', (event) => {
                if (event.data === 'form-submitted') {
                    const navIframe = document.querySelector('iframe[name="nav"]');
                    if (navIframe) navIframe.contentWindow.location.reload();
                }
            });

            // Xử lý cho thiết bị iOS
            if (/iPhone|iPod|iPad/.test(navigator.userAgent)) {
                const iframes = document.querySelectorAll('iframe');
                iframes.forEach((iframe) => {
                    iframe.parentElement.style.overflow = 'auto';
                    iframe.parentElement.style.webkitOverflowScrolling = 'touch'; // Cuộn mượt cho iOS
                });
            }
        });
    </script>
@endsection

@extends('user.layout.master')

@section('content')
<div class="container my-5">
    <h1 class="text-center mb-4">Quản lý Hợp đồng</h1>

    <!-- Tabs Navigation -->
    <ul class="nav nav-tabs" id="contractTabs" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="steps-tab" data-bs-toggle="tab" data-bs-target="#steps" type="button" role="tab" aria-controls="steps" aria-selected="true">Các bước hoàn thành hợp đồng</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="qa-tab" data-bs-toggle="tab" data-bs-target="#qa" type="button" role="tab" aria-controls="qa" aria-selected="false">Q&A về hợp đồng</button>
        </li>
    </ul>

    <!-- Tabs Content -->
    <div class="tab-content" id="contractTabsContent">
        <!-- Steps to complete the contract -->
        <div class="tab-pane fade show active" id="steps" role="tabpanel" aria-labelledby="steps-tab">
            <h2 class="mt-4">Các bước hoàn thành hợp đồng</h2>
            <ol>
                <li>
                    <strong>Nhập thông tin hợp đồng trên hệ thống</strong>
                    <p>Bên A nhập đầy đủ thông tin liên quan để tạo hợp đồng trên hệ thống. Sau khi nhập, hệ thống sẽ tự động tạo một hợp đồng online nhưng ở trạng thái chưa được chấp nhận.</p>
                </li>
                <li>
                    <strong>Áp dụng tỉ lệ chia sẻ doanh thu tạm thời</strong>
                    <p>Khi hợp đồng chưa được chấp nhận, tỷ lệ chia sẻ doanh thu của tác giả (Bên B) sẽ cố định ở mức 30%.</p>
                </li>
                <li>
                    <strong>In hợp đồng và ký kết</strong>
                    <p>Bên A in hợp đồng ra với số lượng 4 bản. Điền đầy đủ thông tin vào hợp đồng in, đảm bảo nội dung khớp với hợp đồng hiển thị trên hệ thống. Bên A ký đầy đủ vào cả 4 bản hợp đồng và gửi cho Bên B.</p>
                </li>
                <li>
                    <strong>Bên B kiểm tra và quyết định</strong>
                    <p>Bên B có trách nhiệm kiểm tra nội dung hợp đồng và quyết định:</p>
                    <ul>
                        <li>Chấp nhận hợp đồng: Ký đầy đủ vào cả 4 bản hợp đồng.</li>
                        <li>Từ chối hợp đồng: Không ký và thông báo lại cho Bên A.</li>
                    </ul>
                </li>
                <li>
                    <strong>Gửi lại hợp đồng</strong>
                    <p>Nếu chấp nhận, Bên B giữ lại 2 bản hợp đồng và gửi lại cho Bên A 2 bản đã ký đầy đủ.</p>
                </li>
                <li>
                    <strong>Kích hoạt hợp đồng online</strong>
                    <p>Khi nhận được 2 bản hợp đồng đã ký từ Bên B, Bên A sẽ kích hoạt hợp đồng online trên hệ thống. Lúc này, tỷ lệ chia sẻ doanh thu sẽ được áp dụng như đã ghi rõ trong hợp đồng.</p>
                </li>
            </ol>
            <p><strong>Lưu ý:</strong></p>
            <ul>
                <li>Trong thời gian hợp đồng chưa được chấp nhận, các quyền lợi và nghĩa vụ sẽ chỉ được thực hiện theo điều khoản tạm thời (30% chia sẻ doanh thu).</li>
                <li>Hợp đồng online chỉ có hiệu lực khi cả hai bên đã hoàn thành việc ký kết trên hợp đồng giấy.</li>
            </ul>
            </ol>
            <p><strong>Lưu ý:</strong> Trong thời gian hợp đồng chưa được chấp nhận, tỷ lệ doanh thu chỉ là tạm thời.</p>
        </div>

        <!-- Q&A about the contract -->
        <div class="tab-pane fade" id="qa" role="tabpanel" aria-labelledby="qa-tab">
            <h2 class="mt-4">Q&A về hợp đồng</h2>
            <dl>
                <dt><strong>1. Tỷ lệ chia sẻ doanh thu ban đầu là bao nhiêu?</strong></dt>
                <dd>Tỷ lệ chia sẻ doanh thu ban đầu cố định là 30% cho đến khi hợp đồng được chấp nhận.</dd>

                <dt><strong>2. Làm thế nào để hợp đồng được kích hoạt?</strong></dt>
                <dd>Hợp đồng được kích hoạt khi Bên A nhận lại 2 bản hợp đồng đã ký từ Bên B, và cập nhật trạng thái trên hệ thống.</dd>

                <dt><strong>3. Bên B cần làm gì nếu muốn từ chối hợp đồng?</strong></dt>
                <dd>Bên B có thể từ chối hợp đồng bằng cách thông báo lại với Bên A mà không cần ký kết hợp đồng.</dd>

                <dt><strong>4. Bao nhiêu bản hợp đồng cần được in?</strong></dt>
                <dd>Bốn bản hợp đồng cần được in: 2 bản cho Bên A và 2 bản cho Bên B.</dd>

                <dt><strong>5. Tỷ lệ chia sẻ doanh thu có thể thay đổi không?</strong></dt>
                <dd>Có, sau khi hợp đồng được kích hoạt, tỷ lệ chia sẻ doanh thu sẽ áp dụng theo điều khoản đã thỏa thuận trong hợp đồng.</dd>
            </dl>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

@endsection
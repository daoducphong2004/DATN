<!-- resources/views/contracts/show.blade.php -->
@extends('user.layout.master')
@section('content')
<style>
    body {
        font-family: 'Times New Roman', Times, serif;
        margin: 0;
        padding: 0;
        line-height: 1.5;
        font-size: 14px;
    }
    .container {
        width: 90%;
        margin: 0 auto;
        padding: 20px;
    }
    h1, h2 {
        text-align: center;
        font-size: 16px;
        margin: 20px 0;
    }
    .header {
        text-align: center;
        font-size: 18px;
        font-weight: bold;
        margin-top: 40px;
    }
    .section-title {
        font-weight: bold;
        margin-top: 30px;
    }
    .section-content {
        margin-left: 20px;
    }
    .underline {
        text-decoration: underline;
    }
    .signature {
        margin-top: 50px;
        display: flex;
        justify-content: space-between;
    }
    .signature div {
        text-align: center;
    }
</style>
<div class="container">
    <div class="header">
        <p>CỘNG HÒA XÃ HỘI CHỦ NGHĨA VIỆT NAM</p>
        <p>Độc lập – Tự do – Hạnh phúc</p>
        <h1>Hợp Đồng Dịch Vụ Đăng Truyện và Chia Sẻ Doanh Thu</h1>
        <p>Số: {{ $contract->contract_code }}</p>
    </div>

    <div>
        <p><strong>BÊN A: (Bên cung cấp dịch vụ)</strong></p>
        <p>Trụ sở: Quận Nam Từ Liên, thành phố Hà Nội</p>
        <p>Điện thoại: 0399943016</p>
        <p>Mã số thuế: 123456789</p>
        <p>Người đại diện: Đào Đức Phong</p>
    </div>

    <div>
        <p><strong>BÊN B: (Bên sử dụng dịch vụ)</strong></p>
        <p>Trụ sở: <span class="">{{ $contract->address }}</span></p>
        <p>Điện thoại: <span class="">{{ $contract->phone }}</span></p>
        <p>Mã số thuế: <span class="">{{ $contract->tax }}</span></p>
        <p>Người đại diện: <span class="">{{ $contract->fullname }}</span></p>
        
    </div>

    <p>Sau khi trao đổi, thỏa thuận, hai bên đồng ý ký hợp đồng này với các điều khoản như sau:</p>

    <div class="section-title">Điều 1: Quy định chung</div>
    <div class="section-content">
        <p>1. Bên B phải đồng ý và tuân thủ các quy định sau khi tham gia sử dụng dịch vụ của Bên A.</p>
        <p>2. Quy định này áp dụng cho mọi tác giả tham gia hoạt động tại website Novel Pub.</p>
    </div>

    <div class="section-title">Điều 2: Nội dung dịch vụ</div>
    <div class="section-content">
        <p>1. Bên B chỉ được phép đăng các truyện do mình tự sáng tác hoặc có quyền sử dụng.</p>
        <p>2. Nội dung giới thiệu truyện và nội dung chương truyện phải trình bày phân đoạn rõ ràng, nếu viết thành một khối dày đặc chữ sẽ bị xóa.</p>
        <p>3. Bên B không được quảng cáo các trang web, nền tảng, dịch vụ khác dưới mọi hình thức.</p>
        <p>4. Bên B không được đưa thông tin donate/ủng hộ của các trang web, nền tảng, dịch vụ khác dưới mọi hình thức.</p>
        <p>5. Ảnh bìa truyện không được có các hình ảnh khiêu dâm, kích dục, kích động, thù hằn, ám chỉ đến tôn giáo, chính trị, các hoạt động bị cấm bởi pháp luật.</p>
        <p>6. Tất cả truyện Bên B đăng lên Novel Pub có bản quyền thuộc về cá nhân của Bên B. Bên A không có quyền lợi hay nghĩa vụ đăng ký bản quyền hộ Bên B. Khi đăng truyện lên hệ thống, Bên B cho phép Bên A và các website thuộc hệ thống quyền khai thác quảng cáo và quyền thu hộ trả phí (mở khóa) các chương truyện trên các truyện Bên B đã đăng.</p>
    </div>

    <div class="section-title">Điều 3: Chia sẻ doanh thu</div>
    <div class="section-content">
        <p>1. Doanh thu từ việc khai thác quảng cáo và thu hộ trả phí (mở khóa) các chương truyện của Bên B sẽ được chuyển vào ví của Bên B.</p>
        <p>2. Bên B chỉ được rút doanh thu sau 1 tháng hợp đồng có hiệu lực và khi có ít nhất 1 truyện có doanh thu tối thiểu là 10.000 coin (tương đương với 10.000 VND).</p>
        <p>3. Nếu Bên B muốn rút doanh thu, Bên B sẽ tạo một phiếu và điền các thông tin tài khoản vào trong đó.</p>
        <p>4. Doanh thu sẽ được hiển thị để Bên B quyết định, nhưng không quá 50% doanh thu của các bộ truyện được đăng trong thời gian hiệu lực của hợp đồng.</p>
        <p>5. Nếu Bên B có trên 05 bộ truyện với tổng doanh thu hơn 1.000.000 coin (tương đương với 1.000.000 VND), Bên B có thể tái ký hợp đồng với tỷ lệ chia sẻ doanh thu ít nhất là 70%.</p>
        <p>6. Nếu Bên B tái ký hợp đồng với tỷ lệ chia sẻ doanh thu khác với hợp đồng cũ, các chương được đăng trong thời gian hiệu lực của hợp đồng cũ sẽ luôn áp dụng tỷ lệ chia sẻ doanh thu của hợp đồng đó. Các chương được đăng trong thời gian hiệu lực của hợp đồng mới sẽ áp dụng tỷ lệ chia sẻ doanh thu của hợp đồng mới.</p>
        <p>7. Nếu có đồng tác giả tham gia truyện, doanh thu từ mỗi chương sẽ được phân chia theo người đăng chương đó. Cụ thể, chương nào do tác giả nào đăng, tác giả đó sẽ hưởng toàn bộ doanh thu của chương đó.</p>
        <p>8. Tỷ lệ chia sẻ doanh thu: {{ $contract->revenue_share }}%</p>
    </div>

    <div class="section-title">Điều 4: Hiệu lực và chấm dứt hợp đồng</div>
    <div class="section-content">
        <p>1. Hợp đồng này có hiệu lực từ ngày Bên B bắt đầu ký hợp đồng mềm với Bên A.</p>
        <p>2. Bên A có quyền thay đổi nội dung hợp đồng mà không cần báo trước. Bên B có trách nhiệm theo dõi và tuân thủ các thay đổi này.</p>
        <p>3. Hợp đồng có thể chấm dứt khi một trong hai bên vi phạm nghiêm trọng các điều khoản đã thỏa thuận hoặc theo thỏa thuận của cả hai bên.</p>
        <p>4. Ngày bắt đầu: {{ $contract->start_date }} Ngày kết thúc: {{ $contract->end_date }}</p>
    </div>

    <div class="section-title">Điều 5: ĐIỀU KHOẢN CHUNG</div>
    <div class="section-content">
        <p>1. Trong quá trình thực hiện hợp đồng, nếu có phát sinh tranh chấp, hai bên sẽ thương thảo giải quyết. Nếu tranh chấp không thể giải quyết được sẽ được đưa ra Tòa án có thẩm quyền tại TP. Hà Nội giải quyết. Quyết định của Tòa án là quyết định cuối cùng, bên thua kiện phải chi trả án phí và chi phí luật sư cho bên kia.</p>
    </div>

    <div class="signature">
        <div>
            <p><strong>Đại Diện Bên A</strong></p>
            <p>....................................................................................</p>
        </div>
        <div>
            <p><strong>Đại Diện Bên B</strong></p>
            <p>Đào Đức Phong</p>
            <p>....................................................................................</p>
        </div>
    </div>
</div>
@endsection

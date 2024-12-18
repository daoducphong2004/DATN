<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ForumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('forums')->insert([
            ['id' => '10273452', 'title' => 'Hướng dẫn đăng truyện', 'content' => '<div class="forum-page-content long-text">
                    <p><strong>Nếu ảnh nhỏ, xin hãy "Open image in new tab" để xem ảnh với kích thước lớn hơn.</strong></p><p>Hướng dẫn thêm truyện mới <a class="spoiler_toggle" href="#">Click vào để hiển thị nội dung</a></p><div class="spoiler" style="text-align:center;">Trước hết bạn phải đăng nhập.<br><img alt="default.png" src="https://1.bp.blogspot.com/-JRPkdknodjA/W2CCnh2wbUI/AAAAAAABeEs/GQm9DtE0-J8Oi_LrfymOCT-bNMr2w7N3wCHMYCw/s0/default.png"><br>Nhập TÊN ĐĂNG NHẬP và MẬT KHẨU. Nếu chưa có tài khoản hãy đăng ký.<br><img alt="default.png" src="https://2.bp.blogspot.com/-2L3_elVP530/WUYlScQWypI/AAAAAAAAZ_o/MgDToQ-p-jI2Ze_QAoGDAyqlQTjIaHNlgCHMYCw/s0/default.png"><br><br>Sau khi đăng nhập, click vào Menu như hình dưới để đến Bảng điều khiển<br><img alt="default.png" src="https://2.bp.blogspot.com/-x-txXXQwsXo/W2CCoTGso5I/AAAAAAABeEw/PNxVrIP63TUI1K2QHYDGIoCsiFf93mg2gCHMYCw/s0/default.png"><br>Chọn thêm truyện mới<br><img alt="default.png" src="https://3.bp.blogspot.com/-E1D-Fc5UD4o/WUYlTPtV5mI/AAAAAAAAZ_w/HnNs0Ec6HpIgOa2sJCODoGiEEGQua0QIQCHMYCw/s0/default.png"><br><br>Điền thông tin của truyện theo yêu cầu như mình đã chú thích trong ảnh. Hãy đọc quy định khi đăng truyện trước để nắm rõ tránh cho truyện bị xóa.<br><img alt="default.png" src="https://2.bp.blogspot.com/-YcGxSpM6Lb8/WUYlUG_kJKI/AAAAAAAAZ_0/xR4ssTgCqkQ3i7LfXGc6h-lkWsQO_duVQCHMYCw/s0/default.png"><img alt="default.png" src="https://2.bp.blogspot.com/-tPvtj3J5DnQ/WUYlUi50qrI/AAAAAAAAZ_4/UW2kL7j_04gXdDR4Eu4kRC6BjyM3wzRvgCHMYCw/s0/default.png"></div><p>Hướng dẫn thêm nhóm dịch mới <a class="spoiler_toggle" href="#">Click vào để hiển thị nội dung</a></p><div class="spoiler" style="text-align:center;">Sau khi vào bảng điều khiển, ấn vào danh sách nhóm dịch ở Menu Nhóm dịch.<br><img alt="default.png" src="https://4.bp.blogspot.com/-9wd4OnPCfzE/WUYlVNkW6QI/AAAAAAAAZ_8/H2vvK09s2sgRG4VyvhjwNkNkT1GbCjT6QCHMYCw/s0/default.png"><br><br>Thêm nhóm dịch mới<br><img alt="default.png" src="https://3.bp.blogspot.com/-5P6GACWfEBA/WUYlVoB8SKI/AAAAAAAAaAA/o0xhwk0z5DY7FAQ4b_VDIUoYp_a-8lZ_wCHMYCw/s0/default.png"><br><br>Điền các thông tin cần thiết. Vậy là xong!<br><img alt="default.png" src="https://3.bp.blogspot.com/-CudDrRZogjw/WUYlWF5RtHI/AAAAAAAAaAE/LICM8d6j5YkdV_PqlBC1RtBYaeeL62K7QCHMYCw/s0/default.png"></div><p>Hướng dẫn thêm các tập và chương truyện <a class="spoiler_toggle" href="#">Click vào để hiển thị nội dung</a></p><div class="spoiler" style="text-align:center;">Sau khi Thêm truyện mới. Bạn sẽ được dẫn vào trang quản lý truyện. Sử dụng chuột phải lên tên truyện để mở các Menu tương ứng. Click Thêm tập<br><img alt="default.png" src="https://4.bp.blogspot.com/-EgWLIObCXDg/WUY1c2asjtI/AAAAAAAAaIE/-_FuuFa0RSUJuto9Do7AUD93aEXbYRReQCHMYCw/s0/default.png"><br><br>Nhập Tiêu đề của tập bắt buộc, còn các khung khác có thể bỏ qua.<br><img alt="default.png" src="https://4.bp.blogspot.com/-7yxzNQA7NB8/WUY1dq3B2iI/AAAAAAAAaII/CATmYqhkj6cPlLZ8HTAsJ3Pi2Fn9SnHzwCHMYCw/s0/default.png"><br><br>Sau khi thêm tập mới, click chuột phải vào tên tập đó để chỉnh sửa hoặc thêm chương như ảnh bên dưới<br><img alt="default.png" src="https://3.bp.blogspot.com/-UUzHViXqdLA/WUY1eINb9EI/AAAAAAAAaIM/khkafwI5reoReDKk0xlWETEbiMokLFnmACHMYCw/s0/default.png"><br><br>Nhập các nội dung để thêm chương mới như yêu cầu. Có thể upload ảnh minh họa bằng các chức năng như hình bên dưới. Nếu số ảnh upload bị thiếu, có thể do ảnh đó bị lỗi hoặc server bị lỗi.<br><img alt="default.png" src="https://3.bp.blogspot.com/-jc3kspnz-Ic/WUY1evjUXoI/AAAAAAAAaIU/rqipJPNqspsiJHvBxMecDz-P8ytsQeRzQCHMYCw/s0/default.png"><br><br>Sau khi thêm chương mới, click chuột phải vào tên chương vừa tạo để Sửa hoặc Xóa chương.<br><img alt="default.png" src="https://4.bp.blogspot.com/-953BAOhLH2w/WUY1fB8ucTI/AAAAAAAAaIY/CIr4xMzcSk85idMKf7xc6kUNFsRnP4a3wCHMYCw/s0/default.png"></div><p>Hướng dẫn thêm chú thích <a class="spoiler_toggle" href="#">Click vào để hiển thị nội dung</a></p><div class="spoiler" style="text-align:center;">Làm theo hướng dẫn thêm tập và thêm chương ở bên trên. Sau khi đã thêm chương, kéo xuống cuối cùng trang Sửa chương để thêm chú thích theo hướng dẫn sau đây.<br><img src="https://4.bp.blogspot.com/-q_spIDtHPaU/W2CAEXH8wuI/AAAAAAABeDQ/Lu8jrmuToTovVyrC__4hIE6HnyHi4oDaQCHMYCw/s0/default.png" alt="default.png"><br><img src="https://1.bp.blogspot.com/-_U6p_8HrzBY/W2CAE4f4-pI/AAAAAAABeDU/e96oo4gdYrECDwUzfWebT2OVK77I8HPRACHMYCw/s0/default.png" alt="default.png"><br><img src="https://4.bp.blogspot.com/-nfFX0tD0N2s/W2CAFidSV6I/AAAAAAABeDY/PzmVCtmD77kSjQkJS83mP4qN_zdImedZACHMYCw/s0/default.png" alt="default.png"><br><img src="https://4.bp.blogspot.com/-c9LBcQFW12g/W2CAGLa_jSI/AAAAAAABeDc/iqUP9bqvUPwNdexQUL2LSijSkyl6R3QuwCHMYCw/s0/default.png" alt="default.png"><br><img src="https://1.bp.blogspot.com/-LV_GszNA3xo/W2CAGkWjafI/AAAAAAABeDg/NeEnf5mgz38OcnX9nQXWIw6pImIfZpxcgCHMYCw/s0/default.png" alt="default.png"><br><img src="https://4.bp.blogspot.com/-XC4xAJHa3W0/W2CAHNZ86dI/AAAAAAABeDk/2R-oBhMXC1YVfS_yRK5O57YIqCI9Sxh9wCHMYCw/s0/default.png" alt="default.png"></div><p>Hướng dẫn sắp xếp lại thứ tự các Tập và Chương <a class="spoiler_toggle" href="#">Click vào để hiển thị nội dung</a></p><div class="spoiler" style="text-align:center;">Vào trang quản lý truyện, và làm theo hướng dẫn dưới đây để sắp xếp thứ tự các tập và chương truyện<br><br><img src="https://4.bp.blogspot.com/-egvk0t29urg/W2CAH1veZsI/AAAAAAABeDo/gcs1eAZTvAgbTUZg9WMB1r_oI3ArUZRmgCHMYCw/s0/default.png" alt="default.png"><br><img src="https://4.bp.blogspot.com/-bPa2SnZe7VE/W2CAIaFxXII/AAAAAAABeDs/kK-T9Xia5LUw9iLjyewSg1gk0Q-V6KuDACHMYCw/s0/default.png" alt="default.png"><br><img src="https://2.bp.blogspot.com/-4EZ6bYSw1NY/W2CAIxXB6SI/AAAAAAABeDw/61W9BYAHPbQcFJdj-v6d43l-6fgG-7TggCHMYCw/s0/default.png" alt="default.png"></div>
                </div>', 'user_id' => '1', 'category_id' => '1', 'book_id' => null, 'viewer' => 0, 'lock' => 0, 'is_featured' => 1, 'slug' => 'thong-bao-cua-admin', 'created_at' => Carbon::now()],
            ['id' => '10573894', 'title' => 'Giới thiệu Cổng Novel Pub', 'content' => '<div class="forum-page-content long-text">
                    <p>Cổng Light Novel (từng được gọi với cái tên BBS Hako) là một cổng thông tin chuyên về Light Novel ra đời từ năm 2013 dưới sự cộng tác của Hako và Sonako Light Novel Wiki, trang hoạt động với các tiêu chí và mục đích sau đây:</p>

<ul><li>Tập hợp toàn bộ bản dịch Light Novel Tiếng Việt có trên mạng.</li>
	<li>Tạo điều kiện cho các nhóm dịch Light Novel chia sẻ, quảng bá và thảo luận thành quả của họ.</li>
	<li>Giúp người đọc tiếp cận với Light Novel một cách trực quan thông qua hệ thống đọc online chuyên biệt.</li>
</ul><p>Những yếu tố giúp Cổng Light Novel ưu việt hơn những dịch vụ chia sẻ Light Novel khác:</p>

<ul><li>Ở CLN, tốc độ được đặt lên trên hết, trang sử dụng server riêng và có khả năng lưu trữ toàn bộ dữ liệu, giúp cho việc truy cập và hiển thị ảnh nhanh hơn với chất lượng tốt nhất.</li>
	<li>Giao diện đọc online được tối ưu hóa với chức năng tăng size font và giãn cách line, cùng với hệ thống bookmark cho người dùng.</li>
	<li>CLN hỗ trợ người dùng đăng bản dịch với bộ công cụ nhanh và hiệu quả.</li>
	<li>Hỗ trợ đọc online trên thiết bị cầm tay và điện thoại di động.</li>
</ul>
                </div>', 'user_id' => '1', 'category_id' => '1', 'book_id' => null, 'viewer' => 0, 'lock' => 0, 'is_featured' => 1, 'slug' => 'thong-bao-cua-admin', 'created_at' => Carbon::now()],
            ['id' => '10726324', 'title' => 'Góp ý và báo lỗi', 'content' => '<div class="forum-page-content long-text">
                    <p>Hiện Cổng Light Novel mở thêm một trang "Thảo luận" nơi các bạn tụ họp để cùng bạn luận chém gió những Light Novel các bạn yêu thích.</p>
<p>Do mới cập nhật nên có thể có lỗi xảy ra nên mời các bạn vào đây để báo lại với bọn mình sớm nhất có thể. Các bạn sẽ dùng acc của Cổng Light Novel để "tạo trang" vào "bình luận".</p>
<p>Cảm ơn các bạn đã quan tâm.</p>
<p>&nbsp;</p>
<p>Hoặc liên hệ discord <strong>@embersz</strong></p>
                </div>', 'user_id' => '1', 'category_id' => '1', 'book_id' => null, 'viewer' => 0, 'lock' => 0, 'is_featured' => 1, 'slug' => 'thong-bao-cua-admin', 'created_at' => Carbon::now()],
        ]);
    }
}

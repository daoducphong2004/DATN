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
        ['title' => 'Thảo luận cho tác giả OLN', 'content' => '<p>Vì nhà cũ bình luận quá nhiều nên Admin yêu cầu lập cái mới.</p><p>Đọc kỹ trước khi đăng truyện:</p><p><a href="../../thao-luan/77-quy-dinh-doi-voi-oln"><strong><span style="color:#ff0000;">QUY ĐỊNH DÀNH CHO TRUYỆN SÁNG TÁC</span></strong></a></p><p><a href="https://drive.google.com/open?id=1hB4c5O68EDMgxVK77_kWuFelnUa0nNRP" rel="nofollow noreferrer noopener" target="_blank"><strong><span style="color:#ff0000;">THỦ THUẬT - HƯỚNG DẪN VÀ NHỮNG THỨ LINH TINH KHÁC</span></strong></a></p><p><strong><span style="color:#ff0000;"><a href="https://discord.gg/Sb7GmcN" rel="nofollow noreferrer noopener" target="_blank">DISCORD XÀM XÍ ĐÚ</a> - Chỗ để chuẩn bị trước khi đăng truyện, nhớ đọc #rule trước khi tham gia chat kẻo bị Ban.</span></strong><a href="https://discord.gg/Sb7GmcN" rel="nofollow noreferrer noopener" target="_blank"><strong><br></strong></a></p><p><span style="color:#3598db;"><strong><a href="https://discord.gg/N45B8Kf5fQ" rel="nofollow noreferrer noopener" target="_blank">Hakord &nbsp;</a><span style="color:#ba372a;">- Nơi giao lưu với dịch giả, tác giả, và độc giả Hako nói chung</span></strong></span></p><p><strong><span style="color:#ff0000;"><span style="color:#e03e2d;"><a href="https://www.facebook.com/hako.oln" rel="nofollow noreferrer noopener" target="_blank">Fanpage OLN Hako</a></span></span></strong></p><p><a href="https://www.pinterest.com/lightnovelhakore" rel="nofollow noreferrer noopener" target="_blank"><strong>LINK PINTEREST CỦA OLN HAKO</strong></a></p><p><a href="../../../thao-luan/2376-quy-chuan-duyet-banner-box-sang-tac"><strong>QUY CHUẨN DUYỆT BANNER</strong></a></p><p>Bạn muốn viết nên câu truyện của riêng mình nhưng lại chẳng biết phải bắt đầu từ đâu?</p><p>Bạn muốn được thỏa đam mê nhưng lại gặp quá nhiều rào cản ngăn trở?</p><p>Đừng lo lắng, hãy lại đây và ngồi xuống, chúng ta sẽ cùng bàn luận và tìm cách khắc phục nó.</p><p>*Tay lăm le cục gạch*</p><p><strong><span style="color:#e25041;">CHỖ NÀY KHÔNG PHẢI CÁI ĐỘNG SEX, PORN HAY HENTAI. VUI LÒNG KHÔNG POST LINK HOẶC BÀN ĐẾN MẤY CÁI VẤN ĐỀ QUÁ MỨC NHẠY CẢM. XIN CẢM ƠN! </span></strong></p>', 'user_id' => '1', 'category_id'=>'1','book_id'=>null,'viewer'=>0,'slug'=>'thong-bao-cua-admin', 'created_at'=>Carbon::now()],
        ]);
    }
}

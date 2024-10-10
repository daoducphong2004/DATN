@extends('home.layout.master')
@section('content')


    <div class="page-top-group  at-index ">
        <a href="/truyen/13957">
            <div class="index-background d-none d-lg-block"
                style="background-image: url('{{ asset('/images/banners/fbg_d.jpg') }}')"></div>
            <div class="index-background d-lg-none"
                style="background-image: url('{{ asset('/images/banners/fbg_m.jpg') }}'); background-size: cover">
            </div>
        </a>
    </div>

    <main id="mainpart" class="search-page" style="min-height: 181px;">
        <header class="page-title">
            <div class="page-name_wrapper">
                <div class="container">
                    <span class="page-name"><i class="fas fa-circle"></i>Tìm kiếm</span>
                </div>
            </div>
        </header>

        <div class="search-form_wrapper">
            <div class="container">
                <form class="search-form clear" action="tim-kiem" method="get">
                    <div class="row">
                        <input id="search-page-input" class="search-form in col-8 col-md-10 col-lg-10" type="text" placeholder="Tối thiểu 2 kí tự" name="keywords" size="40" value="truyện">
                        <input id="search-go" class="search-go_form search-form submit col-4 col-md-2 col-lg-2" type="submit" value="Tìm kiếm">
                    </div>
                    <a class="search-advance_toggle" href="tim-kiem-nang-cao" style="margin-top: 10px;"><i class="fas fa-filter"></i> Tìm kiếm nâng cao</a>
                </form>
            </div>
        </div>

        <div class="container">
            <section class="basic-section has-pagination">
                <main class="sect-body">
                    <div class="row">
                                        <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
        <div class="thumb-wrapper ln-tooltip" data-tooltip-content="#series_6650">
            <a href="/truyen/6650-truyen-ki-niem-10-nam-sword-art-online/c62151-chuong-01" title="Chương 01">
                <div class="a6-ratio">
                    <div class="content img-in-ratio lazyloaded" data-bg="https://ln.hako.vn/img/nocover.jpg" style="background-image: url(&quot;https://ln.hako.vn/img/nocover.jpg&quot;);"></div>
                </div>
            </a>
            <div class="thumb-detail">
                <div class="thumb_attr chapter-title" title="Chương 01"><a href="/truyen/6650-truyen-ki-niem-10-nam-sword-art-online/c62151-chuong-01" title="Chương 01">Chương 01</a></div>
                <div class="thumb_attr volume-title">Mình lười chia tập nên các bạn đọc liền nhá :))</div>
            </div>
        </div>
        <div class="thumb_attr series-title"><a href="/truyen/6650-truyen-ki-niem-10-nam-sword-art-online" title="Truyện Kỉ Niệm 10 năm Sword Art Online">Truyện Kỉ Niệm 10 năm Sword Art Online</a></div>
    </div>
                                        <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
        <div class="thumb-wrapper ln-tooltip" data-tooltip-content="#series_17636">
            <a href="/truyen/17636-truyen-ky-thieu-nu-nho-sinh-thieu-nu-cai-nam-trang-chon-dia-nguc-thi-cu/c138220-truyen-ngan-tren-x-cua-tac-gia-28062024" title="Truyện ngắn trên X của tác giả - 28/06/2024">
                <div class="a6-ratio">
                    <div class="content img-in-ratio lazyloaded" data-bg="https://i.hako.vn/ln/series/covers/s17636-f391285e-e230-43cd-b56c-f28888907bfc.jpg" style="background-image: url(&quot;https://i.hako.vn/ln/series/covers/s17636-f391285e-e230-43cd-b56c-f28888907bfc.jpg&quot;);"></div>
                </div>
            </a>
            <div class="thumb-detail">
                <div class="thumb_attr chapter-title" title="Truyện ngắn trên X của tác giả - 28/06/2024"><a href="/truyen/17636-truyen-ky-thieu-nu-nho-sinh-thieu-nu-cai-nam-trang-chon-dia-nguc-thi-cu/c138220-truyen-ngan-tren-x-cua-tac-gia-28062024" title="Truyện ngắn trên X của tác giả - 28/06/2024">Truyện ngắn trên X của tác giả - 28/06/2024</a></div>
                <div class="thumb_attr volume-title">Ngoại truyện</div>
            </div>
        </div>
        <div class="thumb_attr series-title"><a href="/truyen/17636-truyen-ky-thieu-nu-nho-sinh-thieu-nu-cai-nam-trang-chon-dia-nguc-thi-cu" title="Truyền kì thiếu nữ Nho sinh ~Tiểu thư cải nam trang chốn địa ngục thi cử~">Truyền kì thiếu nữ Nho sinh ~Tiểu thư cải nam trang chốn địa ngục thi cử~</a></div>
    </div>
                                        <div class="thumb-item-flow col-4 col-md-3 col-lg-2 type-original ">
        <div class="thumb-wrapper ln-tooltip" data-tooltip-content="#series_2253">
            <a href="/sang-tac/2253-truyen-ngan-chi-vay-thoi-la-du/c29606-truyen-ngan-chi-vay-thoi-la-du" title="[Truyện ngắn] Chỉ vậy thôi là đủ">
                <div class="a6-ratio">
                    <div class="content img-in-ratio lazyloaded" data-bg="https://i.docln.net/lightnovel/covers/s2253-4c02da99-92c0-403a-8f5f-048cdfa73a40-m.jpg" style="background-image: url(&quot;https://i.docln.net/lightnovel/covers/s2253-4c02da99-92c0-403a-8f5f-048cdfa73a40-m.jpg&quot;);"></div>
                </div>
            </a>
            <div class="thumb-detail">
                <div class="thumb_attr chapter-title" title="[Truyện ngắn] Chỉ vậy thôi là đủ"><a href="/sang-tac/2253-truyen-ngan-chi-vay-thoi-la-du/c29606-truyen-ngan-chi-vay-thoi-la-du" title="[Truyện ngắn] Chỉ vậy thôi là đủ">[Truyện ngắn] Chỉ vậy thôi là đủ</a></div>
                <div class="thumb_attr volume-title">Truyện ngắn</div>
            </div>
        </div>
        <div class="thumb_attr series-title"><a href="/sang-tac/2253-truyen-ngan-chi-vay-thoi-la-du" title="[Truyện ngắn] Chỉ vậy thôi là đủ">[Truyện ngắn] Chỉ vậy thôi là đủ</a></div>
    </div>
                                        <div class="thumb-item-flow col-4 col-md-3 col-lg-2 type-original ">
        <div class="thumb-wrapper ln-tooltip" data-tooltip-content="#series_2289">
            <a href="/sang-tac/2289-truyen-ngan-duong-u-that-dang/c70390-toi-den-tu-qua-khu-cua-ngay-mai" title="Tôi đến từ quá khứ của ngày mai!">
                <div class="a6-ratio">
                    <div class="content img-in-ratio lazyloaded" data-bg="https://ln.hako.vn/img/nocover.jpg" style="background-image: url(&quot;https://ln.hako.vn/img/nocover.jpg&quot;);"></div>
                </div>
            </a>
            <div class="thumb-detail">
                <div class="thumb_attr chapter-title" title="Tôi đến từ quá khứ của ngày mai!"><a href="/sang-tac/2289-truyen-ngan-duong-u-that-dang/c70390-toi-den-tu-qua-khu-cua-ngay-mai" title="Tôi đến từ quá khứ của ngày mai!">Tôi đến từ quá khứ của ngày mai!</a></div>
                <div class="thumb_attr volume-title">Toàn tập</div>
            </div>
        </div>
        <div class="thumb_attr series-title"><a href="/sang-tac/2289-truyen-ngan-duong-u-that-dang" title="Truyện ngắn: Đường ư, thật đắng!">Truyện ngắn: Đường ư, thật đắng!</a></div>
    </div>
                                        <div class="thumb-item-flow col-4 col-md-3 col-lg-2 type-original ">
        <div class="thumb-wrapper ln-tooltip" data-tooltip-content="#series_13029">
            <a href="/sang-tac/13029-truyen-ngan-di-gioi/c100669-chuong-ket-hoi-ket-sau-ba-nam" title="Chương kết: Lời hứa sau ba năm">
                <div class="a6-ratio">
                    <div class="content img-in-ratio lazyloaded" data-bg="https://ln.hako.vn/img/nocover.jpg" style="background-image: url(&quot;https://ln.hako.vn/img/nocover.jpg&quot;);"></div>
                </div>
            </a>
            <div class="thumb-detail">
                <div class="thumb_attr chapter-title" title="Chương kết: Lời hứa sau ba năm"><a href="/sang-tac/13029-truyen-ngan-di-gioi/c100669-chuong-ket-hoi-ket-sau-ba-nam" title="Chương kết: Lời hứa sau ba năm">Chương kết: Lời hứa sau ba năm</a></div>
                <div class="thumb_attr volume-title">Cậu ấy là Lento, nhưng đồng thời lại không</div>
            </div>
        </div>
        <div class="thumb_attr series-title"><a href="/sang-tac/13029-truyen-ngan-di-gioi" title="Truyện ngắn dị giới">Truyện ngắn dị giới</a></div>
    </div>
                                        <div class="thumb-item-flow col-4 col-md-3 col-lg-2 type-original ">
        <div class="thumb-wrapper ln-tooltip" data-tooltip-content="#series_12163">
            <a href="/sang-tac/12163-truyen-ngan-ve-mot-co-gai-marcellus/c113079-truyen-ngan-ve-trung-si-john" title="Truyện Ngắn về Trung sĩ John">
                <div class="a6-ratio">
                    <div class="content img-in-ratio lazyloaded" data-bg="https://i.docln.net/lightnovel/covers/s12163-8e34432f-a2d9-461a-a242-3b3558e06d67-m.jpg" style="background-image: url(&quot;https://i.docln.net/lightnovel/covers/s12163-8e34432f-a2d9-461a-a242-3b3558e06d67-m.jpg&quot;);"></div>
                </div>
            </a>
            <div class="thumb-detail">
                <div class="thumb_attr chapter-title" title="Truyện Ngắn về Trung sĩ John"><a href="/sang-tac/12163-truyen-ngan-ve-mot-co-gai-marcellus/c113079-truyen-ngan-ve-trung-si-john" title="Truyện Ngắn về Trung sĩ John">Truyện Ngắn về Trung sĩ John</a></div>
                <div class="thumb_attr volume-title">Truyện Ngắn về Trung sĩ John</div>
            </div>
        </div>
        <div class="thumb_attr series-title"><a href="/sang-tac/12163-truyen-ngan-ve-mot-co-gai-marcellus" title="Truyện ngắn về Marcellus">Truyện ngắn về Marcellus</a></div>
    </div>
                                        <div class="thumb-item-flow col-4 col-md-3 col-lg-2 type-original ">
        <div class="thumb-wrapper ln-tooltip" data-tooltip-content="#series_19004">
            <a href="/sang-tac/19004-tieu-thuyet-trang/c145041-chuong-08-la-bi-kich-hay-phuoc-lanh" title="Chương 08 : Là bi kịch hay phước lành?">
                <div class="a6-ratio">
                    <div class="content img-in-ratio lazyloaded" data-bg="https://i.hako.vn/ln/series/covers/s19004-ce2826f8-c505-4786-a035-fac3bd341208.jpg" style="background-image: url(&quot;https://i.hako.vn/ln/series/covers/s19004-ce2826f8-c505-4786-a035-fac3bd341208.jpg&quot;);"></div>
                </div>
            </a>
            <div class="thumb-detail">
                <div class="thumb_attr chapter-title" title="Chương 08 : Là bi kịch hay phước lành?"><a href="/sang-tac/19004-tieu-thuyet-trang/c145041-chuong-08-la-bi-kich-hay-phuoc-lanh" title="Chương 08 : Là bi kịch hay phước lành?">Chương 08 : Là bi kịch hay phước lành?</a></div>
                <div class="thumb_attr volume-title">Tập 01</div>
            </div>
        </div>
        <div class="thumb_attr series-title"><a href="/sang-tac/19004-tieu-thuyet-trang" title="Truyền Thuyết xứ Ataraxia">Truyền Thuyết xứ Ataraxia</a></div>
    </div>
                                        <div class="thumb-item-flow col-4 col-md-3 col-lg-2 type-original ">
        <div class="thumb-wrapper ln-tooltip" data-tooltip-content="#series_16682">
            <a href="/sang-tac/16682-cot-truyen-cua-nhan-vat-phu/c143504-chuong-30-chong-vanh" title="Chương 30: Chóng vánh.">
                <div class="a6-ratio">
                    <div class="content img-in-ratio lazyloaded" data-bg="https://i.hako.vn/ln/series/covers/s16682-ad6f16e2-acb3-4d4f-acb2-0e4d488f97dc.jpg" style="background-image: url(&quot;https://i.hako.vn/ln/series/covers/s16682-ad6f16e2-acb3-4d4f-acb2-0e4d488f97dc.jpg&quot;);"></div>
                </div>
            </a>
            <div class="thumb-detail">
                <div class="thumb_attr chapter-title" title="Chương 30: Chóng vánh."><a href="/sang-tac/16682-cot-truyen-cua-nhan-vat-phu/c143504-chuong-30-chong-vanh" title="Chương 30: Chóng vánh.">Chương 30: Chóng vánh.</a></div>
                <div class="thumb_attr volume-title">Tập 01: Paranoid</div>
            </div>
        </div>
        <div class="thumb_attr series-title"><a href="/sang-tac/16682-cot-truyen-cua-nhan-vat-phu" title="Cốt Truyện Của Nhân Vật Phụ">Cốt Truyện Của Nhân Vật Phụ</a></div>
    </div>
                                        <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
        <div class="thumb-wrapper ln-tooltip" data-tooltip-content="#series_6596">
            <a href="/truyen/6596-overlord-ngoai-truyen-cong-chua-vampire-cua-vuong-quoc-bi-lang-quen/c62553-chuong-01-cuoc-gap-go-tai-vuong-quoc-bi-lang-quen" title="Chương 01: Cuộc Hội Ngộ Tại Vương Quốc Bị Lãng Quên">
                <div class="a6-ratio">
                    <div class="content img-in-ratio lazyloaded" data-bg="https://i.docln.net/lightnovel/covers/s6596-72a48097-1e6a-4c80-9791-c75e18e7ca61-m.jpg" style="background-image: url(&quot;https://i.docln.net/lightnovel/covers/s6596-72a48097-1e6a-4c80-9791-c75e18e7ca61-m.jpg&quot;);"></div>
                </div>
            </a>
            <div class="thumb-detail">
                <div class="thumb_attr chapter-title" title="Chương 01: Cuộc Hội Ngộ Tại Vương Quốc Bị Lãng Quên"><a href="/truyen/6596-overlord-ngoai-truyen-cong-chua-vampire-cua-vuong-quoc-bi-lang-quen/c62553-chuong-01-cuoc-gap-go-tai-vuong-quoc-bi-lang-quen" title="Chương 01: Cuộc Hội Ngộ Tại Vương Quốc Bị Lãng Quên">Chương 01: Cuộc Hội Ngộ Tại Vương Quốc Bị Lãng Quên</a></div>
                <div class="thumb_attr volume-title">The Vampire Princess of the Lost Country</div>
            </div>
        </div>
        <div class="thumb_attr series-title"><a href="/truyen/6596-overlord-ngoai-truyen-cong-chua-vampire-cua-vuong-quoc-bi-lang-quen" title="Overlord Ngoại Truyện: Công Chúa Vampire của Vương Quốc bị Lãng Quên">Overlord Ngoại Truyện: Công Chúa Vampire của Vương Quốc bị Lãng Quên</a></div>
    </div>
                                        <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
        <div class="thumb-wrapper ln-tooltip" data-tooltip-content="#series_13563">
            <a href="/truyen/13563-mushoku-tensei-truyen-thuyet-co-long/c103999-2-su-ra-doi-cua-ma-long" title="2. Sự ra đời của Ma Long">
                <div class="a6-ratio">
                    <div class="content img-in-ratio lazyloaded" data-bg="https://ln.hako.vn/img/nocover.jpg" style="background-image: url(&quot;https://ln.hako.vn/img/nocover.jpg&quot;);"></div>
                </div>
            </a>
            <div class="thumb-detail">
                <div class="thumb_attr chapter-title" title="2. Sự ra đời của Ma Long"><a href="/truyen/13563-mushoku-tensei-truyen-thuyet-co-long/c103999-2-su-ra-doi-cua-ma-long" title="2. Sự ra đời của Ma Long">2. Sự ra đời của Ma Long</a></div>
                <div class="thumb_attr volume-title">Tiền Biên</div>
            </div>
        </div>
        <div class="thumb_attr series-title"><a href="/truyen/13563-mushoku-tensei-truyen-thuyet-co-long" title="Mushoku Tensei: Truyền thuyết Cổ Long">Mushoku Tensei: Truyền thuyết Cổ Long</a></div>
    </div>
                                        <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
        <div class="thumb-wrapper ln-tooltip" data-tooltip-content="#series_2305">
            <a href="/truyen/2305-nhung-mau-truyen-ngan-toi-dich/c34851-oneshot-nhung-meo-chong-muoi-vao-mua-he" title="Oneshot: Những Mẹo Chống Muỗi Vào Mùa Hè.">
                <div class="a6-ratio">
                    <div class="content img-in-ratio lazyloaded" data-bg="https://4.bp.blogspot.com/-Po_XyPbVrsw/W0ozIlSPSkI/AAAAAAABaG4/6AQCPadOXK44jMCc_NtwuJXbqK0FhZLNwCHMYCw/w215/default.jpg" style="background-image: url(&quot;https://4.bp.blogspot.com/-Po_XyPbVrsw/W0ozIlSPSkI/AAAAAAABaG4/6AQCPadOXK44jMCc_NtwuJXbqK0FhZLNwCHMYCw/w215/default.jpg&quot;);"></div>
                </div>
            </a>
            <div class="thumb-detail">
                <div class="thumb_attr chapter-title" title="Oneshot: Những Mẹo Chống Muỗi Vào Mùa Hè."><a href="/truyen/2305-nhung-mau-truyen-ngan-toi-dich/c34851-oneshot-nhung-meo-chong-muoi-vao-mua-he" title="Oneshot: Những Mẹo Chống Muỗi Vào Mùa Hè.">Oneshot: Những Mẹo Chống Muỗi Vào Mùa Hè.</a></div>
                <div class="thumb_attr volume-title">Các Oneshot được viết bởi - 'A Scholar'.</div>
            </div>
        </div>
        <div class="thumb_attr series-title"><a href="/truyen/2305-nhung-mau-truyen-ngan-toi-dich" title="Những Mẫu Truyện Ngắn Tôi Dịch.">Những Mẫu Truyện Ngắn Tôi Dịch.</a></div>
    </div>
                                        <div class="thumb-item-flow col-4 col-md-3 col-lg-2 type-original ">
        <div class="thumb-wrapper ln-tooltip" data-tooltip-content="#series_17812">
            <a href="/sang-tac/17812-nu-hoang-muon-viet-truyen/c143670-chuong-16-nong-va-lanh" title="Chương 16: Nóng và lạnh">
                <div class="a6-ratio">
                    <div class="content img-in-ratio lazyloaded" data-bg="https://i.hako.vn/ln/series/covers/s17812-142eb12e-d223-460b-895f-e854f0a6b9ee.jpg" style="background-image: url(&quot;https://i.hako.vn/ln/series/covers/s17812-142eb12e-d223-460b-895f-e854f0a6b9ee.jpg&quot;);"></div>
                </div>
            </a>
            <div class="thumb-detail">
                <div class="thumb_attr chapter-title" title="Chương 16: Nóng và lạnh"><a href="/sang-tac/17812-nu-hoang-muon-viet-truyen/c143670-chuong-16-nong-va-lanh" title="Chương 16: Nóng và lạnh">Chương 16: Nóng và lạnh</a></div>
                <div class="thumb_attr volume-title">Nữ Hoàng muốn viết truyện</div>
            </div>
        </div>
        <div class="thumb_attr series-title"><a href="/sang-tac/17812-nu-hoang-muon-viet-truyen" title="Nữ Hoàng muốn viết truyện">Nữ Hoàng muốn viết truyện</a></div>
    </div>
                                        <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
        <div class="thumb-wrapper ln-tooltip" data-tooltip-content="#series_16188">
            <a href="/truyen/16188-high-card-7-never-no-dollars/c120444-chuong-01" title="Chương 01">
                <div class="a6-ratio">
                    <div class="content img-in-ratio lazyloaded" data-bg="https://i.docln.net/lightnovel/covers/s16188-913a4007-2c44-481e-8f67-bba6abc3b217-m.jpg" style="background-image: url(&quot;https://i.docln.net/lightnovel/covers/s16188-913a4007-2c44-481e-8f67-bba6abc3b217-m.jpg&quot;);"></div>
                </div>
            </a>
            <div class="thumb-detail">
                <div class="thumb_attr chapter-title" title="Chương 01"><a href="/truyen/16188-high-card-7-never-no-dollars/c120444-chuong-01" title="Chương 01">Chương 01</a></div>
                <div class="thumb_attr volume-title">Phần manga: ♢9 No Mercy</div>
            </div>
        </div>
        <div class="thumb_attr series-title"><a href="/truyen/16188-high-card-7-never-no-dollars" title="Tuyển tập ngoại truyện của HIGH CARD">Tuyển tập ngoại truyện của HIGH CARD</a></div>
    </div>
                                        <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
        <div class="thumb-wrapper ln-tooltip" data-tooltip-content="#series_7986">
            <a href="/truyen/7986-nier-automata-truyen-ngan/c71880-long-ky-uc-viet-boi-jun-eishima" title="Lồng Ký Ức - viết bởi Jun Eishima">
                <div class="a6-ratio">
                    <div class="content img-in-ratio lazyloaded" data-bg="https://i.docln.net/lightnovel/covers/s7986-511db8c5-158b-4083-97d0-7a482fd9c99e-m.jpg" style="background-image: url(&quot;https://i.docln.net/lightnovel/covers/s7986-511db8c5-158b-4083-97d0-7a482fd9c99e-m.jpg&quot;);"></div>
                </div>
            </a>
            <div class="thumb-detail">
                <div class="thumb_attr chapter-title" title="Lồng Ký Ức - viết bởi Jun Eishima"><a href="/truyen/7986-nier-automata-truyen-ngan/c71880-long-ky-uc-viet-boi-jun-eishima" title="Lồng Ký Ức - viết bởi Jun Eishima">Lồng Ký Ức - viết bởi Jun Eishima</a></div>
                <div class="thumb_attr volume-title">Lồng Ký Ức</div>
            </div>
        </div>
        <div class="thumb_attr series-title"><a href="/truyen/7986-nier-automata-truyen-ngan" title="NieR: Automata Truyện Ngắn">NieR: Automata Truyện Ngắn</a></div>
    </div>
                                        <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
        <div class="thumb-wrapper ln-tooltip" data-tooltip-content="#series_17725">
            <a href="/truyen/17725-tong-hop-truyen-ngan-saenai-heroine-no-sodatekata/c138323-csp6-egoistic-lily-kashiwagi-eri-memories-of-lily-00-feat-kasumi-utako" title="(CSP6) [egoistic lily (Kashiwagi Eri)] Memories Of Lily 00 feat. Kasumi Utako">
                <div class="a6-ratio">
                    <div class="content img-in-ratio lazyloaded" data-bg="https://i.hako.vn/ln/series/covers/s17725-0aadb167-9476-4058-b4ee-bf8310c8382f.jpg" style="background-image: url(&quot;https://i.hako.vn/ln/series/covers/s17725-0aadb167-9476-4058-b4ee-bf8310c8382f.jpg&quot;);"></div>
                </div>
            </a>
            <div class="thumb-detail">
                <div class="thumb_attr chapter-title" title="(CSP6) [egoistic lily (Kashiwagi Eri)] Memories Of Lily 00 feat. Kasumi Utako"><a href="/truyen/17725-tong-hop-truyen-ngan-saenai-heroine-no-sodatekata/c138323-csp6-egoistic-lily-kashiwagi-eri-memories-of-lily-00-feat-kasumi-utako" title="(CSP6) [egoistic lily (Kashiwagi Eri)] Memories Of Lily 00 feat. Kasumi Utako">(CSP6) [egoistic lily (Kashiwagi Eri)] Memories Of Lily 00 feat. Kasumi Utako</a></div>
                <div class="thumb_attr volume-title">Short Stories</div>
            </div>
        </div>
        <div class="thumb_attr series-title"><a href="/truyen/17725-tong-hop-truyen-ngan-saenai-heroine-no-sodatekata" title="Tổng hợp truyện ngắn Saenai Heroine no Sodatekata">Tổng hợp truyện ngắn Saenai Heroine no Sodatekata</a></div>
    </div>
                                        <div class="thumb-item-flow col-4 col-md-3 col-lg-2 type-original ">
        <div class="thumb-wrapper ln-tooltip" data-tooltip-content="#series_6979">
            <a href="/sang-tac/6979-molten-chocolte-nong-sot-cung-cafe-au-lait-cua-tuong-lai/c113808-oneshot-2-raspberry-custard-huong-vi-su-nguy-bien-cua-ich-ki" title="Oneshot 2: Raspberry Custard “hương vị sự ngụy biện của ích kỉ”">
                <div class="a6-ratio">
                    <div class="content img-in-ratio lazyloaded" data-bg="https://i.docln.net/lightnovel/covers/s6979-cc1008a8-e6e1-4de6-b99e-4830413e5120-m.jpg" style="background-image: url(&quot;https://i.docln.net/lightnovel/covers/s6979-cc1008a8-e6e1-4de6-b99e-4830413e5120-m.jpg&quot;);"></div>
                </div>
            </a>
            <div class="thumb-detail">
                <div class="thumb_attr chapter-title" title="Oneshot 2: Raspberry Custard “hương vị sự ngụy biện của ích kỉ”"><a href="/sang-tac/6979-molten-chocolte-nong-sot-cung-cafe-au-lait-cua-tuong-lai/c113808-oneshot-2-raspberry-custard-huong-vi-su-nguy-bien-cua-ich-ki" title="Oneshot 2: Raspberry Custard “hương vị sự ngụy biện của ích kỉ”">Oneshot 2: Raspberry Custard “hương vị sự ngụy biện của ích kỉ”</a></div>
                <div class="thumb_attr volume-title">Những mẫu truyện ngắn xoay quanh cửa tiệm The Gentle Cat</div>
            </div>
        </div>
        <div class="thumb_attr series-title"><a href="/sang-tac/6979-molten-chocolte-nong-sot-cung-cafe-au-lait-cua-tuong-lai" title="Những mẫu truyện ngắn xoay quanh cửa tiệm The Gentle Cat">Những mẫu truyện ngắn xoay quanh cửa tiệm The Gentle Cat</a></div>
    </div>
                                        <div class="thumb-item-flow col-4 col-md-3 col-lg-2 type-original ">
        <div class="thumb-wrapper ln-tooltip" data-tooltip-content="#series_18363">
            <a href="/sang-tac/18363-nguc-thanh-ngoai-truyen/c136111-son-tra" title="Sơn Trà">
                <div class="a6-ratio">
                    <div class="content img-in-ratio lazyloaded" data-bg="https://i.hako.vn/ln/series/covers/s18363-92191863-86a3-48f3-b734-73a05361f279.jpg" style="background-image: url(&quot;https://i.hako.vn/ln/series/covers/s18363-92191863-86a3-48f3-b734-73a05361f279.jpg&quot;);"></div>
                </div>
            </a>
            <div class="thumb-detail">
                <div class="thumb_attr chapter-title" title="Sơn Trà"><a href="/sang-tac/18363-nguc-thanh-ngoai-truyen/c136111-son-tra" title="Sơn Trà">Sơn Trà</a></div>
                <div class="thumb_attr volume-title">Chuyện của hoa</div>
            </div>
        </div>
        <div class="thumb_attr series-title"><a href="/sang-tac/18363-nguc-thanh-ngoai-truyen" title="Ngục Thánh ngoại truyện">Ngục Thánh ngoại truyện</a></div>
    </div>
                                        <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
        <div class="thumb-wrapper ln-tooltip" data-tooltip-content="#series_17978">
            <a href="/truyen/17978-ta-o-tokyo-sang-tao-truyen-thuyet-do-thi/c133082-chuong-02-cau-lac-bo-u-linh-thuong" title="Chương 02 : Câu lạc bộ U Linh (thượng)">
                <div class="a6-ratio">
                    <div class="content img-in-ratio lazyloaded" data-bg="https://i.hako.vn/ln/series/covers/s17978-011c6e8f-0b47-460c-b884-0ce3ae965e8e.jpg" style="background-image: url(&quot;https://i.hako.vn/ln/series/covers/s17978-011c6e8f-0b47-460c-b884-0ce3ae965e8e.jpg&quot;);"></div>
                </div>
            </a>
            <div class="thumb-detail">
                <div class="thumb_attr chapter-title" title="Chương 02 : Câu lạc bộ U Linh (thượng)"><a href="/truyen/17978-ta-o-tokyo-sang-tao-truyen-thuyet-do-thi/c133082-chuong-02-cau-lac-bo-u-linh-thuong" title="Chương 02 : Câu lạc bộ U Linh (thượng)">Chương 02 : Câu lạc bộ U Linh (thượng)</a></div>
                <div class="thumb_attr volume-title">Ta ở Tōkyō sáng tạo truyền thuyết đô thị</div>
            </div>
        </div>
        <div class="thumb_attr series-title"><a href="/truyen/17978-ta-o-tokyo-sang-tao-truyen-thuyet-do-thi" title="Ta ở Tokyo sáng tạo truyền thuyết đô thị">Ta ở Tokyo sáng tạo truyền thuyết đô thị</a></div>
    </div>
                                        <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
        <div class="thumb-wrapper ln-tooltip" data-tooltip-content="#series_4711">
            <a href="/truyen/4711-by-a-slight-mistake/c87514-chuong-8" title="Chương 8">
                <div class="a6-ratio">
                    <div class="content img-in-ratio lazyload" data-bg="https://i.docln.net/lightnovel/covers/s4711-34c1c748-ecd4-4ccf-9399-300f5e022089-m.jpg"></div>
                </div>
            </a>
            <div class="thumb-detail">
                <div class="thumb_attr chapter-title" title="Chương 8"><a href="/truyen/4711-by-a-slight-mistake/c87514-chuong-8" title="Chương 8">Chương 8</a></div>
                <div class="thumb_attr volume-title">Toàn Tập</div>
            </div>
        </div>
        <div class="thumb_attr series-title"><a href="/truyen/4711-by-a-slight-mistake" title="Chỉ Vì Một Sai Lầm Nhỏ Của Tôi Mà Cốt Truyện Bị Đảo Lộn">Chỉ Vì Một Sai Lầm Nhỏ Của Tôi Mà Cốt Truyện Bị Đảo Lộn</a></div>
    </div>
                                        <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
        <div class="thumb-wrapper ln-tooltip" data-tooltip-content="#series_13544">
            <a href="/truyen/13544-de-cuu-lay-nhan-vat-yeu-thich-cua-minh-toi-da-quyet-dinh-pha-cot-truyen-game/c112736-chuong-27-tham-du-dai-hoi-vo-thuat-thi-sao-nhi" title="Chương 27: Tham dự đại hội võ thuật thì sao nhỉ?">
                <div class="a6-ratio">
                    <div class="content img-in-ratio lazyload" data-bg="https://ln.hako.vn/img/nocover.jpg"></div>
                </div>
            </a>
            <div class="thumb-detail">
                <div class="thumb_attr chapter-title" title="Chương 27: Tham dự đại hội võ thuật thì sao nhỉ?"><a href="/truyen/13544-de-cuu-lay-nhan-vat-yeu-thich-cua-minh-toi-da-quyet-dinh-pha-cot-truyen-game/c112736-chuong-27-tham-du-dai-hoi-vo-thuat-thi-sao-nhi" title="Chương 27: Tham dự đại hội võ thuật thì sao nhỉ?">Chương 27: Tham dự đại hội võ thuật thì sao nhỉ?</a></div>
                <div class="thumb_attr volume-title">Arc 3: Đấu trường ngầm hỗn loạn</div>
            </div>
        </div>
        <div class="thumb_attr series-title"><a href="/truyen/13544-de-cuu-lay-nhan-vat-yeu-thich-cua-minh-toi-da-quyet-dinh-pha-cot-truyen-game" title="Để cứu lấy nhân vật yêu thích của mình, tôi đã quyết định phá cốt truyện game">Để cứu lấy nhân vật yêu thích của mình, tôi đã quyết định phá cốt truyện game</a></div>
    </div>
                                        <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
        <div class="thumb-wrapper ln-tooltip" data-tooltip-content="#series_13778">
            <a href="/truyen/13778-co-ve-nhu-co-em-gai-thang-ban-than-se-la-hinh-mau-ly-tuong-cho-toi-viet-truyen-khieu-dam/c112049-chuong-1-em-gai-may-noi-nhe-nhang-la-mot-ke-bien-thai" title="Chương 1:  EM GÁI MÀY, NÓI NHẸ NHÀNG LÀ MỘT KẺ BIẾN THÁI">
                <div class="a6-ratio">
                    <div class="content img-in-ratio lazyload" data-bg="https://i.docln.net/lightnovel/covers/s13778-6e371e63-9b50-4340-8a13-c043c64f6b0c-m.jpg"></div>
                </div>
            </a>
            <div class="thumb-detail">
                <div class="thumb_attr chapter-title" title="Chương 1:  EM GÁI MÀY, NÓI NHẸ NHÀNG LÀ MỘT KẺ BIẾN THÁI"><a href="/truyen/13778-co-ve-nhu-co-em-gai-thang-ban-than-se-la-hinh-mau-ly-tuong-cho-toi-viet-truyen-khieu-dam/c112049-chuong-1-em-gai-may-noi-nhe-nhang-la-mot-ke-bien-thai" title="Chương 1:  EM GÁI MÀY, NÓI NHẸ NHÀNG LÀ MỘT KẺ BIẾN THÁI">Chương 1:  EM GÁI MÀY, NÓI NHẸ NHÀNG LÀ MỘT KẺ BIẾN THÁI</a></div>
                <div class="thumb_attr volume-title">Vol 1</div>
            </div>
        </div>
        <div class="thumb_attr series-title"><a href="/truyen/13778-co-ve-nhu-co-em-gai-thang-ban-than-se-la-hinh-mau-ly-tuong-cho-toi-viet-truyen-khieu-dam" title="Có Vẻ Như Cô Em Gái Thằng Bạn Thân Sẽ Trở Thành Hình Mẫu Lý Tưởng Cho Bộ Truyện Khiêu Dâm Của Tôi">Có Vẻ Như Cô Em Gái Thằng Bạn Thân Sẽ Trở Thành Hình Mẫu Lý Tưởng Cho Bộ Truyện Khiêu Dâm Của Tôi</a></div>
    </div>
                                        <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
        <div class="thumb-wrapper ln-tooltip" data-tooltip-content="#series_7856">
            <a href="/truyen/7856-my-sexist-party-leader-kicked-me-out-so-i-teamed-up-with-a-mythical-sorceress/c106438-chuong-02-dong-xu-bi-nguyen-rua" title="Chương 01: Đồng xu bị nguyền rủa">
                <div class="a6-ratio">
                    <div class="content img-in-ratio lazyload" data-bg="https://i.docln.net/lightnovel/covers/s7856-0b2d2d5d-458e-4389-8bac-2c6a4ff6c385-m.jpg"></div>
                </div>
            </a>
            <div class="thumb-detail">
                <div class="thumb_attr chapter-title" title="Chương 01: Đồng xu bị nguyền rủa"><a href="/truyen/7856-my-sexist-party-leader-kicked-me-out-so-i-teamed-up-with-a-mythical-sorceress/c106438-chuong-02-dong-xu-bi-nguyen-rua" title="Chương 01: Đồng xu bị nguyền rủa">Chương 01: Đồng xu bị nguyền rủa</a></div>
                <div class="thumb_attr volume-title">Quyển 2</div>
            </div>
        </div>
        <div class="thumb_attr series-title"><a href="/truyen/7856-my-sexist-party-leader-kicked-me-out-so-i-teamed-up-with-a-mythical-sorceress" title="Vì Là Nữ Nên Bị Đuổi Khỏi Tổ Đội, Tôi Bắt Cặp Với Phù Thủy Mệnh Danh Mạnh Nhất Trong Truyền Thuyết">Vì Là Nữ Nên Bị Đuổi Khỏi Tổ Đội, Tôi Bắt Cặp Với Phù Thủy Mệnh Danh Mạnh Nhất Trong Truyền Thuyết</a></div>
    </div>
                                        <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
        <div class="thumb-wrapper ln-tooltip" data-tooltip-content="#series_1566">
            <a href="/truyen/1566-ngoai-truyen-chua-te/c32533-full" title="Full">
                <div class="a6-ratio">
                    <div class="content img-in-ratio lazyload" data-bg="https://i.hako.vn/ln/series/covers/s1566-ebc9cfc9-60aa-4ace-8414-1fe9a9c4af0c.jpg"></div>
                </div>
            </a>
            <div class="thumb-detail">
                <div class="thumb_attr chapter-title" title="Full"><a href="/truyen/1566-ngoai-truyen-chua-te/c32533-full" title="Full">Full</a></div>
                <div class="thumb_attr volume-title">Ainz’s Ambition</div>
            </div>
        </div>
        <div class="thumb_attr series-title"><a href="/truyen/1566-ngoai-truyen-chua-te" title="Overlord">Overlord</a></div>
    </div>
                                        <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
        <div class="thumb-wrapper ln-tooltip" data-tooltip-content="#series_10952">
            <a href="/truyen/10952-ys-ix-prequel-the-lost-sword/c89241-act-8-epilogue" title="ACT VIII + Epilogue">
                <div class="a6-ratio">
                    <div class="content img-in-ratio lazyload" data-bg="https://i.docln.net/lightnovel/covers/s10952-6e955e4a-3e64-4c31-99b9-24edb187f207-m.jpg"></div>
                </div>
            </a>
            <div class="thumb-detail">
                <div class="thumb_attr chapter-title" title="ACT VIII + Epilogue"><a href="/truyen/10952-ys-ix-prequel-the-lost-sword/c89241-act-8-epilogue" title="ACT VIII + Epilogue">ACT VIII + Epilogue</a></div>
                <div class="thumb_attr volume-title">Toàn tập</div>
            </div>
        </div>
        <div class="thumb_attr series-title"><a href="/truyen/10952-ys-ix-prequel-the-lost-sword" title="Ys IX Prequel - The Lost Sword">Ys IX Prequel - The Lost Sword</a></div>
    </div>
                                    </div>
                </main>

                <div class="pagination-footer">
            <div class="pagination_wrap">
                <!--<a href="" class="paging_item paging_prevnext prev  disabled ">Trước</a>-->
                <a href="https://ln.hako.vn/tim-kiem?query=truy%E1%BB%87n&amp;keywords=truy%E1%BB%87n&amp;page=1" class="paging_item paging_prevnext prev  disabled ">Đầu</a>

                            <a href="https://ln.hako.vn/tim-kiem?query=truy%E1%BB%87n&amp;keywords=truy%E1%BB%87n&amp;page=1" class="paging_item page_num  current ">1</a>
                            <a href="https://ln.hako.vn/tim-kiem?query=truy%E1%BB%87n&amp;keywords=truy%E1%BB%87n&amp;page=2" class="paging_item page_num ">2</a>
                            <a href="https://ln.hako.vn/tim-kiem?query=truy%E1%BB%87n&amp;keywords=truy%E1%BB%87n&amp;page=3" class="paging_item page_num ">3</a>
                            <a href="https://ln.hako.vn/tim-kiem?query=truy%E1%BB%87n&amp;keywords=truy%E1%BB%87n&amp;page=4" class="paging_item page_num ">4</a>
                            <a href="https://ln.hako.vn/tim-kiem?query=truy%E1%BB%87n&amp;keywords=truy%E1%BB%87n&amp;page=5" class="paging_item page_num ">5</a>

                <!--<a href=" https://ln.hako.vn/tim-kiem?query=truy%E1%BB%87n&amp;keywords=truy%E1%BB%87n&amp;page=2 " class="paging_item paging_prevnext next ">Tiếp</a>-->
                <a href="https://ln.hako.vn/tim-kiem?query=truy%E1%BB%87n&amp;keywords=truy%E1%BB%87n&amp;page=27" class="paging_item paging_prevnext next ">Cuối</a>
            </div>
        </div>
                </section>
        </div>
    </main>

@endsection

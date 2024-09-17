@extends('home.layout.master')
@section('content')
    <div class="page-top-group ">
        <a href="/thao-luan/2591">
            <div class="index-background d-none d-lg-block"
                style="background-image: url('{{ asset('users/user/img/path/12890_d_l.jpg') }}')"></div>
            <div class="index-background d-lg-none"
                style="background-image: url('{{ asset('users/user/img/path/12890_d_l.jpg') }}'); background-size: cover">
            </div>
        </a>
    </div>

    <form method="get">
        <main id="mainpart" class="browser-page" style="min-height: 212px;">
            <div style="text-align: center; margin: 0 auto 10px auto;">
            </div>

            <div class="container">
                <div class="page-breadcrumb">
                    <span class="breadcrum-level"><a href="https://docln.net"><i class="fas fa-home"></i></a></span>
                    <span class="next-icon"><i class="fas fa-chevron-right"></i></span>
                    <span class="breadcrum-level"><a href="https://docln.net/danh-sach">Danh sách</a></span>
                </div>

            </div>

            <div class="container">
                <div class="row d-block clear">
                    <div class="col-12 none d-lg-block col-lg-3 float-right filters-wrapper">
                        <div class="none-l pad-bottom-20 text-right pad-top-20">
                            <span class="js-off-filters-wrapper button button-red">Tắt bộ lọc</span>
                        </div>

                        <section class="sub-index-style">
                            <div class="title-wrapper">
                                <div class="section-title">Chữ cái</div>
                            </div>
                            <div class="browse-alphabet">
                                <a class="alphabet_item  current " href="https://docln.net/danh-sach">Tất cả</a>
                                <a class="alphabet_item " href="https://docln.net/danh-sach/khac">#</a>
                                <a class="alphabet_item " href="https://docln.net/danh-sach/a">A</a>
                                <a class="alphabet_item " href="https://docln.net/danh-sach/b">B</a>
                                <a class="alphabet_item " href="https://docln.net/danh-sach/c">C</a>
                                <a class="alphabet_item " href="https://docln.net/danh-sach/d">D</a>
                                <a class="alphabet_item " href="https://docln.net/danh-sach/e">E</a>
                                <a class="alphabet_item " href="https://docln.net/danh-sach/f">F</a>
                                <a class="alphabet_item " href="https://docln.net/danh-sach/g">G</a>
                                <a class="alphabet_item " href="https://docln.net/danh-sach/h">H</a>
                                <a class="alphabet_item " href="https://docln.net/danh-sach/i">I</a>
                                <a class="alphabet_item " href="https://docln.net/danh-sach/j">J</a>
                                <a class="alphabet_item " href="https://docln.net/danh-sach/k">K</a>
                                <a class="alphabet_item " href="https://docln.net/danh-sach/l">L</a>
                                <a class="alphabet_item " href="https://docln.net/danh-sach/m">M</a>
                                <a class="alphabet_item " href="https://docln.net/danh-sach/n">N</a>
                                <a class="alphabet_item " href="https://docln.net/danh-sach/o">O</a>
                                <a class="alphabet_item " href="https://docln.net/danh-sach/p">P</a>
                                <a class="alphabet_item " href="https://docln.net/danh-sach/q">Q</a>
                                <a class="alphabet_item " href="https://docln.net/danh-sach/r">R</a>
                                <a class="alphabet_item " href="https://docln.net/danh-sach/s">S</a>
                                <a class="alphabet_item " href="https://docln.net/danh-sach/t">T</a>
                                <a class="alphabet_item " href="https://docln.net/danh-sach/u">U</a>
                                <a class="alphabet_item " href="https://docln.net/danh-sach/v">V</a>
                                <a class="alphabet_item " href="https://docln.net/danh-sach/w">W</a>
                                <a class="alphabet_item " href="https://docln.net/danh-sach/x">X</a>
                                <a class="alphabet_item " href="https://docln.net/danh-sach/y">Y</a>
                                <a class="alphabet_item " href="https://docln.net/danh-sach/z">Z</a>

                            </div>
                        </section>

                        <section class="sub-index-style filter-section">
                            <div class="title-wrapper">
                                <div class="section-title">Phân loại</div>
                            </div>
                            <div class="section-content">
                                <ul class="filter-type unstyled">
                                    <li><input type="checkbox" name="truyendich" value="1" checked=""> Truyện dịch
                                    </li>
                                    <li><input type="checkbox" name="sangtac" value="1"> Truyện sáng tác</li>
                                    <li><input type="checkbox" name="convert" value="1"> Convert</li>
                                </ul>
                                <div class="submit-wrapper">
                                    <input type="submit" class="button bg-green-600 text-white hover:bg-green-700"
                                        value="Áp dụng">
                                </div>
                            </div>
                        </section>

                        <section class="sub-index-style filter-section">
                            <div class="title-wrapper">
                                <div class="section-title">Tình trạng</div>
                            </div>
                            <div class="section-content">
                                <ul class="filter-type unstyled">
                                    <li><input type="checkbox" name="dangtienhanh" value="1" checked=""> Đang
                                        tiến hành</li>
                                    <li><input type="checkbox" name="tamngung" value="1" checked=""> Tạm ngưng
                                    </li>
                                    <li><input type="checkbox" name="hoanthanh" value="1" checked=""> Đã hoàn
                                        thành</li>
                                </ul>
                                <div class="submit-wrapper">
                                    <input type="submit" class="button bg-green-600 text-white hover:bg-green-700"
                                        value="Áp dụng">
                                </div>
                            </div>
                        </section>


                        <section class="sub-index-style">
                            <div class="title-wrapper">
                                <div class="section-title">Phân loại</div>
                            </div>
                            <div class="section-content">
                                <ul class="filter-type unstyled clear">
                                    @foreach ($genres as $key => $value)
                                        <li class="filter-type_item"><a
                                                href="the-loai/{{ $value }}">{{ $key }}</a>
                                    @endforeach

                                </ul>
                            </div>
                        </section>
                    </div>

                    <div class="col-12 float-left col-lg-9">


                        <section class="thumb-section-flow">
                            <header class="filter-container pad-bottom-10">
                                <!-- <button class="button button-general" type="submit" name="sapxep" value="tentruyen">
                                        <i class="fa fa-sort-alpha-asc" aria-hidden="true"></i> A - Z
                                    </button>
                                    <button class="button button-general" type="submit" name="sapxep" value="tentruyenza">
                                        <i class="fa fa-sort-alpha-desc" aria-hidden="true"></i> Z - A
                                    </button>
                                    <button class="button button-general" type="submit" name="sapxep" value="capnhat">
                                        <i class="fa fa-sort-amount-desc" aria-hidden="true"></i> Mới cập nhật
                                    </button>
                                    <button class="button button-general" type="submit" name="sapxep" value="truyenmoi">
                                        <i class="fa fa-sort-amount-desc" aria-hidden="true"></i> Truyện mới
                                    </button>
                                    <button class="button button-general" type="submit" name="sapxep" value="theodoi">
                                        <i class="fa fa-heart" aria-hidden="true"></i> Theo dõi
                                    </button>
                                    <button class="button button-general" type="submit" name="sapxep" value="top">
                                        <i class="fa fa-fire" aria-hidden="true"></i> Top
                                    </button>
                                    <button class="button button-general type="submit" name="sapxep" value="topthang">
                                        <i class="fa fa-fire" aria-hidden="true"></i> Top tháng
                                    </button>  -->
                                <select name="sapxep" onchange="this.form.submit()" class="block inline-m">
                                    <option value="tentruyen">A - Z</option>
                                    <option value="tentruyenza">Z - A</option>
                                    <option value="capnhat">Mới cập nhật</option>
                                    <option value="truyenmoi">Truyện mới</option>
                                    <option value="theodoi">Theo dõi</option>
                                    <option value="top">Top toàn thời gian</option>
                                    <option value="topthang">Top tháng</option>
                                    <option value="sotu">Số từ</option>
                                </select>
                                <div class="text-right inline-block-m right-m none-l">
                                    <span class="button button-green js-call-filters-wrapper"><i class="fas fa-filter"
                                            style="margin-right: 10px;"></i>Bộ lọc</span>
                                </div>
                            </header>
                            <main class="row">
                                @foreach ($data as $item)
                                    <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
                                        <div class="thumb-wrapper ln-tooltip" data-tooltip-content="#series_15056">
                                            <a href="{{route('truyen.truyen', $item->slug)}}">
                                                <div class="a6-ratio">
                                                    <div class="content img-in-ratio lazyloaded"
                                                        data-bg="https://i2.docln.net/ln/series/covers/s15056-da17f7fd-9793-42a5-9f5b-64c8a7927853.jpg"
                                                        style="background-image: url('{{ $item->book_path }}');">
                                                    </div>
                                                </div>
                                            </a>
                                            <div class="thumb-detail">
                                                <div class="thumb_attr chapter-title" title="Chương 03: Trò chọc ghẹo"><a
                                                        href="{{route('truyen.truyen', $item->slug)}}">{{ $item->title}}</a></div>
                                                <div class="thumb_attr volume-title">Vol 2</div>
                                            </div>
                                        </div>
                                        <div class="thumb_attr series-title"><a
                                                href="{{route('truyen.truyen', $item->slug)}}">{{ $item->description}}</a>
                                        </div>

                                    </div>
                                @endforeach
                                <!-- Tooltip -->
                                {{-- <div style="display: none">
                                    <div id="series_15056">
                                        <div style="margin: 10px 0; width: 250px">
                                            <p style="color: white; font-weight: bold">
                                                "Cậu chẳng thể hôn được đâu ha?" Khi tôi khiến cho cô bạn thuở nhỏ luôn trêu
                                                chọc mình hiểu chuyện, cô ấy đột nhiên trở nên dễ thương hơn nhiều
                                            </p>
                                            <p>
                                            </p>
                                            <div>Số từ: 64.471</div>
                                            <div>Lượt xem: 417.793</div>
                                            <div>Lượt thích: 2.796</div>
                                            <p></p>

                                            "Sao chúng ta không... thử hôn nhỉ?"
                                            Nam sinh cao trung năm hai, Kazami Ibuki, có một cô bạn thuở nhỏ tinh nghịch,
                                            Cô gái được đồn đại là xinh đẹp nhất trường, với mái tóc vàng óng và đôi mắt
                                            xanh lam...
                                        </div>
                                    </div>
                                </div> --}}
                               {{--  <!-- // Tooltip -->
                                <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
                                    <div class="thumb-wrapper ln-tooltip" data-tooltip-content="#series_12808">
                                        <a href="/truyen/12808-dont-take-it-wrong-thats-what-my-childhood-friend-who-gave-me-love-chocolate-said-but-what-does-that-mean-dont-take-it-wrong/c99490-oneshot"
                                            title="Oneshot">
                                            <div class="a6-ratio">
                                                <div class="content img-in-ratio lazyloaded"
                                                    data-bg="https://i.docln.net/lightnovel/covers/s12808-1ce54b49-e221-4b9a-a93a-e65a8c68c066-m.jpg"
                                                    style="background-image: url(&quot;https://i.docln.net/lightnovel/covers/s12808-1ce54b49-e221-4b9a-a93a-e65a8c68c066-m.jpg&quot;);">
                                                </div>
                                            </div>
                                        </a>
                                        <div class="thumb-detail">
                                            <div class="thumb_attr chapter-title" title="Oneshot"><a
                                                    href="/truyen/12808-dont-take-it-wrong-thats-what-my-childhood-friend-who-gave-me-love-chocolate-said-but-what-does-that-mean-dont-take-it-wrong/c99490-oneshot"
                                                    title="Oneshot">Oneshot</a></div>
                                            <div class="thumb_attr volume-title">Oneshot</div>
                                        </div>
                                    </div>
                                    <div class="thumb_attr series-title"><a
                                            href="/truyen/12808-dont-take-it-wrong-thats-what-my-childhood-friend-who-gave-me-love-chocolate-said-but-what-does-that-mean-dont-take-it-wrong"
                                            title="&quot;Don’t take it wrong!&quot; That's what my childhood friend who gave me love chocolate said, but what does that mean don't take it wrong!?">"Don’t
                                            take it wrong!" That's what my childhood friend who gave me love chocolate said,
                                            but what does that mean don't take it wrong!?</a></div>
                                </div>

                                <!-- Tooltip -->
                                <div style="display: none">
                                    <div id="series_12808">
                                        <div style="margin: 10px 0; width: 250px">
                                            <p style="color: white; font-weight: bold">
                                                "Don’t take it wrong!" That's what my childhood friend who gave me love
                                                chocolate said, but what does that mean don't take it wrong!?
                                            </p>
                                            <p>
                                            </p>
                                            <div>Số từ: 1.215</div>
                                            <div>Lượt xem: 132.686</div>
                                            <div>Lượt thích: 121</div>
                                            <p></p>

                                            Câu chuyện về kẻ muốn nhận được sô-cô-la tình yêu vào ngày valentine, Hoshimi
                                            Akira và người đáp lại mong muốn của cậu, Kumosaki Karin hay cũng chính là bạn
                                            thủa nhỏ của cậu.
                                        </div>
                                    </div>
                                </div>

                                <!-- // Tooltip -->
                                <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
                                    <div class="thumb-wrapper ln-tooltip" data-tooltip-content="#series_11923">
                                        <a href="/truyen/11923-hay-lam-tnh-di-loi-cau-hon-den-ban-cung-lop-cua-toi-truoc-khi-co-ay-nhay-lau/c94496-chuong-02"
                                            title="Chương 02">
                                            <div class="a6-ratio">
                                                <div class="content img-in-ratio lazyloaded"
                                                    data-bg="https://i.docln.net/lightnovel/covers/s11923-5bfc4306-9d2b-48fb-af42-75c0b89ad417-m.jpg"
                                                    style="background-image: url(&quot;https://i.docln.net/lightnovel/covers/s11923-5bfc4306-9d2b-48fb-af42-75c0b89ad417-m.jpg&quot;);">
                                                </div>
                                            </div>
                                        </a>
                                        <div class="thumb-detail">
                                            <div class="thumb_attr chapter-title" title="Chương 02"><a
                                                    href="/truyen/11923-hay-lam-tnh-di-loi-cau-hon-den-ban-cung-lop-cua-toi-truoc-khi-co-ay-nhay-lau/c94496-chuong-02"
                                                    title="Chương 02">Chương 02</a></div>
                                            <div class="thumb_attr volume-title">Web Novel</div>
                                        </div>
                                    </div>
                                    <div class="thumb_attr series-title"><a
                                            href="/truyen/11923-hay-lam-tnh-di-loi-cau-hon-den-ban-cung-lop-cua-toi-truoc-khi-co-ay-nhay-lau"
                                            title="&quot;Hãy làm t*nh đi&quot; Lời cầu hôn đến bạn cùng lớp của tôi trước khi cô ấy nhảy lầu">"Hãy
                                            làm t*nh đi" Lời cầu hôn đến bạn cùng lớp của tôi trước khi cô ấy nhảy lầu</a>
                                    </div>
                                </div>

                                <!-- Tooltip -->
                                <div style="display: none">
                                    <div id="series_11923">
                                        <div style="margin: 10px 0; width: 250px">
                                            <p style="color: white; font-weight: bold">
                                                "Hãy làm t*nh đi" Lời cầu hôn đến bạn cùng lớp của tôi trước khi cô ấy nhảy
                                                lầu
                                            </p>
                                            <p>
                                            </p>
                                            <div>Số từ: 3.254</div>
                                            <div>Lượt xem: 234.037</div>
                                            <div>Lượt thích: 1.165</div>
                                            <p></p>

                                            Một ngày nọ, tôi phát hiện bạn cùng lớp xinh đẹp của tôi đang chuẩn bị tự tử. Cô
                                            ấy là người tôi yêu nhất và tôi sẽ không bao giờ để cô thực hiện điều đó.
                                            Vậy nên tôi đã nói:
                                            "Hãy làm t*nh với mình đi...
                                        </div>
                                    </div>
                                </div>
                                <!-- // Tooltip -->
                                <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
                                    <div class="thumb-wrapper ln-tooltip" data-tooltip-content="#series_3845">
                                        <a href="/truyen/3845-omae-gotoki-ga-maou-ni-kateru-to-omou-na-to-gachizei-ni-yuusha-party-wo-tsuihou-sareta-node-outo-de-kimama-ni-kurashitai/c54081-chuong-8-co-gai-dao-nghich-toa-sang-noi-bong-toi-ngu-tri"
                                            title="Chương 8: Cô gái đảo nghịch tỏa sáng nơi bóng tối ngự trị">
                                            <div class="a6-ratio">
                                                <div class="content img-in-ratio lazyloaded"
                                                    data-bg="https://2.bp.blogspot.com/-rxtawNUWpsA/XDUSHk0ueiI/AAAAAAACBMw/tohHKh_cNHgMesmb-L_jZyayKevofbteQCHMYCw/w215/default.jpg"
                                                    style="background-image: url(&quot;https://2.bp.blogspot.com/-rxtawNUWpsA/XDUSHk0ueiI/AAAAAAACBMw/tohHKh_cNHgMesmb-L_jZyayKevofbteQCHMYCw/w215/default.jpg&quot;);">
                                                </div>
                                            </div>
                                        </a>
                                        <div class="thumb-detail">
                                            <div class="thumb_attr chapter-title"
                                                title="Chương 8: Cô gái đảo nghịch tỏa sáng nơi bóng tối ngự trị"><a
                                                    href="/truyen/3845-omae-gotoki-ga-maou-ni-kateru-to-omou-na-to-gachizei-ni-yuusha-party-wo-tsuihou-sareta-node-outo-de-kimama-ni-kurashitai/c54081-chuong-8-co-gai-dao-nghich-toa-sang-noi-bong-toi-ngu-tri"
                                                    title="Chương 8: Cô gái đảo nghịch tỏa sáng nơi bóng tối ngự trị">Chương
                                                    8: Cô gái đảo nghịch tỏa sáng nơi bóng tối ngự trị</a></div>
                                            <div class="thumb_attr volume-title">Vol 01: Cô gái đảo nghịch từ chối lòng
                                                thương xót của Chúa</div>
                                        </div>
                                    </div>
                                    <div class="thumb_attr series-title"><a
                                            href="/truyen/3845-omae-gotoki-ga-maou-ni-kateru-to-omou-na-to-gachizei-ni-yuusha-party-wo-tsuihou-sareta-node-outo-de-kimama-ni-kurashitai"
                                            title="&quot;Omae Gotoki ga Maou ni Kateru to Omou na&quot; to Gachizei ni Yuusha Party wo Tsuihou Sareta node, Outo de Kimama ni Kurashitai">"Omae
                                            Gotoki ga Maou ni Kateru to Omou na" to Gachizei ni Yuusha Party wo Tsuihou
                                            Sareta node, Outo de Kimama ni Kurashitai</a></div>
                                </div>

                                <!-- Tooltip -->
                                <div style="display: none">
                                    <div id="series_3845">
                                        <div style="margin: 10px 0; width: 250px">
                                            <p style="color: white; font-weight: bold">
                                                "Omae Gotoki ga Maou ni Kateru to Omou na" to Gachizei ni Yuusha Party wo
                                                Tsuihou Sareta node, Outo de Kimama ni Kurashitai
                                            </p>
                                            <p>
                                            </p>
                                            <div>Số từ: 43.149</div>
                                            <div>Lượt xem: 204.953</div>
                                            <div>Lượt thích: 561</div>
                                            <p></p>

                                            Đây là một câu chuyện kể về cô gái - người từng mang danh Anh Hùng - đi lên từ
                                            dưới đáy xã hội để quay trở về cuộc sống bình thường.
                                        </div>
                                    </div>
                                </div>
                                <!-- // Tooltip -->
                                <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
                                    <div class="thumb-wrapper ln-tooltip" data-tooltip-content="#series_5091">
                                        <a href="/truyen/5091-omae-gotoki-ga-maou-ni-kateru-to-omou-na-to-gachizei-ni-yuusha-party-wo-tsuihou-sareta-node-outo-de-kimama-ni-kurashitai/c62750-chuong-04-di-thoi-toi-ngoi-lang-cua-su-tuyet-vong"
                                            title="Chương 04: Đi thôi, tới ngôi làng của sự tuyệt vọng.">
                                            <div class="a6-ratio">
                                                <div class="content img-in-ratio lazyloaded"
                                                    data-bg="https://i.docln.net/lightnovel/covers/s5091-e5bfbc2e-ec9c-4b59-8529-dff3205e9682-m.jpg"
                                                    style="background-image: url(&quot;https://i.docln.net/lightnovel/covers/s5091-e5bfbc2e-ec9c-4b59-8529-dff3205e9682-m.jpg&quot;);">
                                                </div>
                                            </div>
                                        </a>
                                        <div class="thumb-detail">
                                            <div class="thumb_attr chapter-title"
                                                title="Chương 04: Đi thôi, tới ngôi làng của sự tuyệt vọng."><a
                                                    href="/truyen/5091-omae-gotoki-ga-maou-ni-kateru-to-omou-na-to-gachizei-ni-yuusha-party-wo-tsuihou-sareta-node-outo-de-kimama-ni-kurashitai/c62750-chuong-04-di-thoi-toi-ngoi-lang-cua-su-tuyet-vong"
                                                    title="Chương 04: Đi thôi, tới ngôi làng của sự tuyệt vọng.">Chương 04:
                                                    Đi thôi, tới ngôi làng của sự tuyệt vọng.</a></div>
                                            <div class="thumb_attr volume-title">ARC 02 : Nô lệ mang dấu ấn, mong muốn
                                                chuỗi ngày vô tận và sự kiểm soát</div>
                                        </div>
                                    </div>
                                    <div class="thumb_attr series-title"><a
                                            href="/truyen/5091-omae-gotoki-ga-maou-ni-kateru-to-omou-na-to-gachizei-ni-yuusha-party-wo-tsuihou-sareta-node-outo-de-kimama-ni-kurashitai"
                                            title="&quot;Omae Gotoki ga Maou ni Kateru to Omou na&quot; to Gachizei ni Yuusha Party wo Tsuihou Sareta node, Outo de Kimama ni Kurashitai">"Omae
                                            Gotoki ga Maou ni Kateru to Omou na" to Gachizei ni Yuusha Party wo Tsuihou
                                            Sareta node, Outo de Kimama ni Kurashitai</a></div>
                                </div>

                                <!-- Tooltip -->
                                <div style="display: none">
                                    <div id="series_5091">
                                        <div style="margin: 10px 0; width: 250px">
                                            <p style="color: white; font-weight: bold">
                                                "Omae Gotoki ga Maou ni Kateru to Omou na" to Gachizei ni Yuusha Party wo
                                                Tsuihou Sareta node, Outo de Kimama ni Kurashitai
                                            </p>
                                            <p>
                                            </p>
                                            <div>Số từ: 54.626</div>
                                            <div>Lượt xem: 126.512</div>
                                            <div>Lượt thích: 415</div>
                                            <p></p>

                                            Flamm Apricot chưa từng bao giờ muốn rời khỏi làng của mình. Cô hài lòng dành cả
                                            quãng đời để sống yên bình tại nơi đây. Không may, sau khi bị chỉ định bởi lời
                                            tiên tri của Thần Sáng tạo [Origin] rằng...
                                        </div>
                                    </div>
                                </div>
                                <!-- // Tooltip -->
                                <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
                                    <div class="thumb-wrapper ln-tooltip" data-tooltip-content="#series_8184">
                                        <a href="/truyen/8184-omae-gotoki-ga-maou-ni-kateru-to-omou-na-to-gachizei-ni-yuusha-party-wo-tsuihou-sareta-node-outo-de-kimama-ni-kurashitai/c81616-chuong-19-su-that-khong-co-o-do-dau"
                                            title="Chương 19: Sự thật không có ở đó đâu">
                                            <div class="a6-ratio">
                                                <div class="content img-in-ratio lazyloaded"
                                                    data-bg="https://i.docln.net/lightnovel/covers/s8184-1100e2bb-14eb-43a6-9665-00e0735e4e6b-m.jpg"
                                                    style="background-image: url(&quot;https://i.docln.net/lightnovel/covers/s8184-1100e2bb-14eb-43a6-9665-00e0735e4e6b-m.jpg&quot;);">
                                                </div>
                                            </div>
                                        </a>
                                        <div class="thumb-detail">
                                            <div class="thumb_attr chapter-title"
                                                title="Chương 19: Sự thật không có ở đó đâu"><a
                                                    href="/truyen/8184-omae-gotoki-ga-maou-ni-kateru-to-omou-na-to-gachizei-ni-yuusha-party-wo-tsuihou-sareta-node-outo-de-kimama-ni-kurashitai/c81616-chuong-19-su-that-khong-co-o-do-dau"
                                                    title="Chương 19: Sự thật không có ở đó đâu">Chương 19: Sự thật không
                                                    có ở đó đâu</a></div>
                                            <div class="thumb_attr volume-title">Vol 3: Đứa trẻ xoắn ốc người nói ra những
                                                ác ý</div>
                                        </div>
                                    </div>
                                    <div class="thumb_attr series-title"><a
                                            href="/truyen/8184-omae-gotoki-ga-maou-ni-kateru-to-omou-na-to-gachizei-ni-yuusha-party-wo-tsuihou-sareta-node-outo-de-kimama-ni-kurashitai"
                                            title="&quot;Omae Gotoki ga Maou ni Kateru to Omou na&quot; to Gachizei ni Yuusha Party wo Tsuihou Sareta node, Outo de Kimama ni Kurashitai">"Omae
                                            Gotoki ga Maou ni Kateru to Omou na" to Gachizei ni Yuusha Party wo Tsuihou
                                            Sareta node, Outo de Kimama ni Kurashitai</a></div>
                                </div>

                                <!-- Tooltip -->
                                <div style="display: none">
                                    <div id="series_8184">
                                        <div style="margin: 10px 0; width: 250px">
                                            <p style="color: white; font-weight: bold">
                                                "Omae Gotoki ga Maou ni Kateru to Omou na" to Gachizei ni Yuusha Party wo
                                                Tsuihou Sareta node, Outo de Kimama ni Kurashitai
                                            </p>
                                            <p>
                                            </p>
                                            <div>Số từ: 43.170</div>
                                            <div>Lượt xem: 107.185</div>
                                            <div>Lượt thích: 479</div>
                                            <p></p>

                                            Flamm Apricot, một trong 7 anh hùng được thần linh lựa chọn để tiêu diệt quỷ tộc
                                            cứu rỗi loài người.
                                            Trái ngược với đồng đội mình với chỉ số cao ngất trời, chỉ số của Flamm là con
                                            số 0 dù cô có làm gì...
                                        </div>
                                    </div>
                                </div>
                                <!-- // Tooltip -->
                                <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
                                    <div class="thumb-wrapper ln-tooltip" data-tooltip-content="#series_11925">
                                        <a href="/truyen/11925-lets-have-sex-my-proposal-to-my-classmate-just-before-she-jumps-off/c131967-chuong-1-lap-nhom"
                                            title="Chương 1: Lập Nhóm">
                                            <div class="a6-ratio">
                                                <div class="content img-in-ratio lazyloaded"
                                                    data-bg="https://i.docln.net/lightnovel/covers/s11925-aff87d9a-c529-4a5e-859f-352f8f07a0c5-m.jpg"
                                                    style="background-image: url(&quot;https://i.docln.net/lightnovel/covers/s11925-aff87d9a-c529-4a5e-859f-352f8f07a0c5-m.jpg&quot;);">
                                                </div>
                                            </div>
                                        </a>
                                        <div class="thumb-detail">
                                            <div class="thumb_attr chapter-title" title="Chương 1: Lập Nhóm"><a
                                                    href="/truyen/11925-lets-have-sex-my-proposal-to-my-classmate-just-before-she-jumps-off/c131967-chuong-1-lap-nhom"
                                                    title="Chương 1: Lập Nhóm">Chương 1: Lập Nhóm</a></div>
                                            <div class="thumb_attr volume-title">VOL 2</div>
                                        </div>
                                    </div>
                                    <div class="thumb_attr series-title"><a
                                            href="/truyen/11925-lets-have-sex-my-proposal-to-my-classmate-just-before-she-jumps-off"
                                            title="“Let’s Have Sex” My Proposal to My Classmate Just Before She Jumps Off">“Let’s
                                            Have Sex” My Proposal to My Classmate Just Before She Jumps Off</a></div>
                                </div>

                                <!-- Tooltip -->
                                <div style="display: none">
                                    <div id="series_11925">
                                        <div style="margin: 10px 0; width: 250px">
                                            <p style="color: white; font-weight: bold">
                                                “Let’s Have Sex” My Proposal to My Classmate Just Before She Jumps Off
                                            </p>
                                            <p>
                                            </p>
                                            <div>Số từ: 52.057</div>
                                            <div>Lượt xem: 1.163.933</div>
                                            <div>Lượt thích: 6.070</div>
                                            <p></p>

                                            Tiêu đề thì như vậy, nhưng đây lại là một câu chuyện tình yêu đầy trong sáng!?
                                            Đối phương là mối tình đầu trầm lặng và dễ thương.Mối tình đầu đời của tôi, Koga
                                            Kurumi.
                                            Sở hữu vẻ đẹp và tính cách dường...
                                        </div>
                                    </div>
                                </div>
                                <!-- // Tooltip -->
                                <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
                                    <div class="thumb-wrapper ln-tooltip" data-tooltip-content="#series_468">
                                        <a href="/truyen/468-um-sorry-ive-been-reincarnated/c15724-chuong-11-co-ve-cha-that-su-tuyet-voi"
                                            title="Chương 11 - Có vẻ Cha thật sự tuyệt vời">
                                            <div class="a6-ratio">
                                                <div class="content img-in-ratio lazyloaded"
                                                    data-bg="https://2.bp.blogspot.com/-ciuJHNqZ2iQ/WO2wOLtgubI/AAAAAAAAKIQ/rG2aYbCj2sg/w215/series_468.jpg"
                                                    style="background-image: url(&quot;https://2.bp.blogspot.com/-ciuJHNqZ2iQ/WO2wOLtgubI/AAAAAAAAKIQ/rG2aYbCj2sg/w215/series_468.jpg&quot;);">
                                                </div>
                                            </div>
                                        </a>
                                        <div class="thumb-detail">
                                            <div class="thumb_attr chapter-title"
                                                title="Chương 11 - Có vẻ Cha thật sự tuyệt vời"><a
                                                    href="/truyen/468-um-sorry-ive-been-reincarnated/c15724-chuong-11-co-ve-cha-that-su-tuyet-voi"
                                                    title="Chương 11 - Có vẻ Cha thật sự tuyệt vời">Chương 11 - Có vẻ Cha
                                                    thật sự tuyệt vời</a></div>
                                            <div class="thumb_attr volume-title">Arc 1: Tuổi Thơ sung túc</div>
                                        </div>
                                    </div>
                                    <div class="thumb_attr series-title"><a
                                            href="/truyen/468-um-sorry-ive-been-reincarnated"
                                            title="(Um, Sorry) I’ve Been Reincarnated!">(Um, Sorry) I’ve Been
                                            Reincarnated!</a></div>
                                </div>

                                <!-- Tooltip -->
                                <div style="display: none">
                                    <div id="series_468">
                                        <div style="margin: 10px 0; width: 250px">
                                            <p style="color: white; font-weight: bold">
                                                (Um, Sorry) I’ve Been Reincarnated!
                                            </p>
                                            <p>
                                            </p>
                                            <div>Số từ: 11.223</div>
                                            <div>Lượt xem: 82.910</div>
                                            <div>Lượt thích: 376</div>
                                            <p></p>

                                            Vẫn là&nbsp;câu chuyện tái sinh ở thế giới khác. Lần này nguyên nhân là cứu bạn
                                            và chấn thương sọ não vì cái bình hoa của thượng đế. Được chọn giữa biến mất và
                                            tái sinh, câu trả lời là tái sinh và yêu cầu...
                                        </div>
                                    </div>
                                </div>
                                <!-- // Tooltip -->
                                <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
                                    <div class="thumb-wrapper ln-tooltip" data-tooltip-content="#series_4849">
                                        <a href="/truyen/4849-um-sorry-ive-been-reincarnated/c73905-chuong-59-tien-den-lau-dai"
                                            title="Chương 59: Tiến đến lâu đài">
                                            <div class="a6-ratio">
                                                <div class="content img-in-ratio lazyloaded"
                                                    data-bg="https://i.docln.net/lightnovel/covers/s4849-0663eedd-a005-4d45-83bb-c1ee6e8558e8-m.jpg"
                                                    style="background-image: url(&quot;https://i.docln.net/lightnovel/covers/s4849-0663eedd-a005-4d45-83bb-c1ee6e8558e8-m.jpg&quot;);">
                                                </div>
                                            </div>
                                        </a>
                                        <div class="thumb-detail">
                                            <div class="thumb_attr chapter-title" title="Chương 59: Tiến đến lâu đài"><a
                                                    href="/truyen/4849-um-sorry-ive-been-reincarnated/c73905-chuong-59-tien-den-lau-dai"
                                                    title="Chương 59: Tiến đến lâu đài">Chương 59: Tiến đến lâu đài</a>
                                            </div>
                                            <div class="thumb_attr volume-title">Arc 2: Tiến tới Học viện nào!</div>
                                        </div>
                                    </div>
                                    <div class="thumb_attr series-title"><a
                                            href="/truyen/4849-um-sorry-ive-been-reincarnated"
                                            title="(Um, Sorry) I’ve Been Reincarnated!">(Um, Sorry) I’ve Been
                                            Reincarnated!</a></div>
                                </div>

                                <!-- Tooltip -->
                                <div style="display: none">
                                    <div id="series_4849">
                                        <div style="margin: 10px 0; width: 250px">
                                            <p style="color: white; font-weight: bold">
                                                (Um, Sorry) I’ve Been Reincarnated!
                                            </p>
                                            <p>
                                            </p>
                                            <div>Số từ: 114.794</div>
                                            <div>Lượt xem: 353.644</div>
                                            <div>Lượt thích: 854</div>
                                            <p></p>

                                            Sau khi bị một vị thần vô tình cướp đi mạng sống của mình. Shou được tái sinh
                                            với món quà từ thần để bù dắp cho cậu. Shou yêu cầu giữ lại tất cả ký ức từ kiếp
                                            trước. Cậu tái sinh thành Will, con trai...
                                        </div>
                                    </div>
                                </div>
                                <!-- // Tooltip -->
                                <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
                                    <div class="thumb-wrapper ln-tooltip" data-tooltip-content="#series_14935">
                                        <a href="/truyen/14935-danh-tinh-yeu-cho-em-gai-cung-la-mot-cong-viec-quan-trong/c112363-phan-1-chuong-1-cuoc-song-binh-thuong-moi-ngay-cua-anh-em-nha-mitsuki"
                                            title="Phần 1 - Chương 1 - Cuộc sống bình thường mỗi ngày của anh em nhà Mitsuki">
                                            <div class="a6-ratio">
                                                <div class="content img-in-ratio lazyloaded"
                                                    data-bg="https://i.docln.net/lightnovel/covers/s14935-91a71a60-0ee5-4820-9ceb-c37029e6c590-m.jpg"
                                                    style="background-image: url(&quot;https://i.docln.net/lightnovel/covers/s14935-91a71a60-0ee5-4820-9ceb-c37029e6c590-m.jpg&quot;);">
                                                </div>
                                            </div>
                                        </a>
                                        <div class="thumb-detail">
                                            <div class="thumb_attr chapter-title"
                                                title="Phần 1 - Chương 1 - Cuộc sống bình thường mỗi ngày của anh em nhà Mitsuki">
                                                <a href="/truyen/14935-danh-tinh-yeu-cho-em-gai-cung-la-mot-cong-viec-quan-trong/c112363-phan-1-chuong-1-cuoc-song-binh-thuong-moi-ngay-cua-anh-em-nha-mitsuki"
                                                    title="Phần 1 - Chương 1 - Cuộc sống bình thường mỗi ngày của anh em nhà Mitsuki">Phần
                                                    1 - Chương 1 - Cuộc sống bình thường mỗi ngày của anh em nhà Mitsuki</a>
                                            </div>
                                            <div class="thumb_attr volume-title">Toàn Tập</div>
                                        </div>
                                    </div>
                                    <div class="thumb_attr series-title"><a
                                            href="/truyen/14935-danh-tinh-yeu-cho-em-gai-cung-la-mot-cong-viec-quan-trong"
                                            title="※Dành Tình Yêu Cho Em Gái Cũng Là Một Công Việc Quan Trọng">※Dành Tình
                                            Yêu Cho Em Gái Cũng Là Một Công Việc Quan Trọng</a></div>
                                </div>

                                <!-- Tooltip -->
                                <div style="display: none">
                                    <div id="series_14935">
                                        <div style="margin: 10px 0; width: 250px">
                                            <p style="color: white; font-weight: bold">
                                                ※Dành Tình Yêu Cho Em Gái Cũng Là Một Công Việc Quan Trọng
                                            </p>
                                            <p>
                                            </p>
                                            <div>Số từ: 3.157</div>
                                            <div>Lượt xem: 29.480</div>
                                            <div>Lượt thích: 346</div>
                                            <p></p>

                                            Cô em gái này, sao lại dễ thương quá trời vậy nè ! ? Cùng cười, cùng khóc và
                                            cùng run rẩy vì tác phẩm Imouto RomCom đầy sáng tạo và nhiệt huyết này đi!
                                            Mitsuki Hiro có một cô em gái rượu mà anh sẵn sà...
                                        </div>
                                    </div>
                                </div>
                                <!-- // Tooltip -->
                                <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
                                    <div class="thumb-wrapper ln-tooltip" data-tooltip-content="#series_18510">
                                        <a href="/truyen/18510-0-va-1/c138775-chuong-08" title="Chương 08">
                                            <div class="a6-ratio">
                                                <div class="content img-in-ratio lazyloaded"
                                                    data-bg="https://i2.docln.net/ln/series/covers/s18510-96f16f71-2821-490b-8353-7005a2def8b0.jpg"
                                                    style="background-image: url(&quot;https://i2.docln.net/ln/series/covers/s18510-96f16f71-2821-490b-8353-7005a2def8b0.jpg&quot;);">
                                                </div>
                                            </div>
                                        </a>
                                        <div class="thumb-detail">
                                            <div class="thumb_attr chapter-title" title="Chương 08"><a
                                                    href="/truyen/18510-0-va-1/c138775-chuong-08" title="Chương 08">Chương
                                                    08</a></div>
                                            <div class="thumb_attr volume-title">Đọc ở đây</div>
                                        </div>
                                    </div>
                                    <div class="thumb_attr series-title"><a href="/truyen/18510-0-va-1" title="0 và 1">0
                                            và 1</a></div>
                                </div>

                                <!-- Tooltip -->
                                <div style="display: none">
                                    <div id="series_18510">
                                        <div style="margin: 10px 0; width: 250px">
                                            <p style="color: white; font-weight: bold">
                                                0 và 1
                                            </p>
                                            <p>
                                            </p>
                                            <div>Số từ: 14.495</div>
                                            <div>Lượt xem: 4.458</div>
                                            <div>Lượt thích: 24</div>
                                            <p></p>

                                            Tôi đã xuyên vào một nhân vật trong trò chơi mô phỏng hẹn hò dành cho nữ. Tôi là
                                            Nhị Hoàng tử kẻ bày kế quyến rũ nữ chính chỉ vì để thỏa mãn phức cảm tự ti của
                                            mình với Đại Hoàng tử Edward.
                                            Tôi không...
                                        </div>
                                    </div>
                                </div>
                                <!-- // Tooltip -->
                                <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
                                    <div class="thumb-wrapper ln-tooltip" data-tooltip-content="#series_5184">
                                        <a href="/truyen/5184-koko-wa-ore-ni-makasete-saki-ni-ike-to-itte-kara-10-nen-ga-tattara-densetsu-ni-natteita/c58018-chuong-20-di-nhan-nhiem-vu-nao"
                                            title="Chương 20: Đi nhận nhiệm vụ nào">
                                            <div class="a6-ratio">
                                                <div class="content img-in-ratio lazyloaded"
                                                    data-bg="https://i.docln.net/lightnovel/covers/s5184-5c9063be-fe93-45af-b80a-a8c416d91788-m.jpg"
                                                    style="background-image: url(&quot;https://i.docln.net/lightnovel/covers/s5184-5c9063be-fe93-45af-b80a-a8c416d91788-m.jpg&quot;);">
                                                </div>
                                            </div>
                                        </a>
                                        <div class="thumb-detail">
                                            <div class="thumb_attr chapter-title" title="Chương 20: Đi nhận nhiệm vụ nào">
                                                <a href="/truyen/5184-koko-wa-ore-ni-makasete-saki-ni-ike-to-itte-kara-10-nen-ga-tattara-densetsu-ni-natteita/c58018-chuong-20-di-nhan-nhiem-vu-nao"
                                                    title="Chương 20: Đi nhận nhiệm vụ nào">Chương 20: Đi nhận nhiệm vụ
                                                    nào</a></div>
                                            <div class="thumb_attr volume-title">Web Novel</div>
                                        </div>
                                    </div>
                                    <div class="thumb_attr series-title"><a
                                            href="/truyen/5184-koko-wa-ore-ni-makasete-saki-ni-ike-to-itte-kara-10-nen-ga-tattara-densetsu-ni-natteita"
                                            title="10 năm sau khi nói câu “Cứ đi đi, ở đây để tôi lo”, tôi đã trở thành một huyền thoại">10
                                            năm sau khi nói câu “Cứ đi đi, ở đây để tôi lo”, tôi đã trở thành một huyền
                                            thoại</a></div>
                                </div>

                                <!-- Tooltip -->
                                <div style="display: none">
                                    <div id="series_5184">
                                        <div style="margin: 10px 0; width: 250px">
                                            <p style="color: white; font-weight: bold">
                                                10 năm sau khi nói câu “Cứ đi đi, ở đây để tôi lo”, tôi đã trở thành một
                                                huyền thoại
                                            </p>
                                            <p>
                                            </p>
                                            <div>Số từ: 19.387</div>
                                            <div>Lượt xem: 166.008</div>
                                            <div>Lượt thích: 759</div>
                                            <p></p>

                                            Tổ Đội Anh Hùng bị tấn công bởi Quân Đoàn quỷ vương với số lượng vô số kể, không
                                            nghi ngờ gì nữa nếu đối đầu trực tiếp tổ đội sẽ hoàn toàn bị tiêu diệt.
                                            Một thành viên trong tổ đội, Pháp Sư mạnh nhất,...
                                        </div>
                                    </div>
                                </div>
                                <!-- // Tooltip -->
                                <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
                                    <div class="thumb-wrapper ln-tooltip" data-tooltip-content="#series_7596">
                                        <a href="/truyen/7596-10-nam-sau-khi-noi-cau-cu-di-di-o-day-de-toi-lo-toi-da-tro-thanh-mot-huyen-thoai/c69387-chapter-23-dieu-cau-ay-bao-ve"
                                            title="Chapter 23 : Điều cậu ấy bảo vệ.">
                                            <div class="a6-ratio">
                                                <div class="content img-in-ratio lazyloaded"
                                                    data-bg="https://i.docln.net/lightnovel/covers/s7596-cd32fad4-92a2-42cd-b46a-ea7541ba9d6b-m.jpg"
                                                    style="background-image: url(&quot;https://i.docln.net/lightnovel/covers/s7596-cd32fad4-92a2-42cd-b46a-ea7541ba9d6b-m.jpg&quot;);">
                                                </div>
                                            </div>
                                        </a>
                                        <div class="thumb-detail">
                                            <div class="thumb_attr chapter-title"
                                                title="Chapter 23 : Điều cậu ấy bảo vệ."><a
                                                    href="/truyen/7596-10-nam-sau-khi-noi-cau-cu-di-di-o-day-de-toi-lo-toi-da-tro-thanh-mot-huyen-thoai/c69387-chapter-23-dieu-cau-ay-bao-ve"
                                                    title="Chapter 23 : Điều cậu ấy bảo vệ.">Chapter 23 : Điều cậu ấy bảo
                                                    vệ.</a></div>
                                            <div class="thumb_attr volume-title">WN</div>
                                        </div>
                                    </div>
                                    <div class="thumb_attr series-title"><a
                                            href="/truyen/7596-10-nam-sau-khi-noi-cau-cu-di-di-o-day-de-toi-lo-toi-da-tro-thanh-mot-huyen-thoai"
                                            title="10 năm sau khi nói câu “Cứ đi đi, ở đây để tôi lo”, tôi đã trở thành một huyền thoại">10
                                            năm sau khi nói câu “Cứ đi đi, ở đây để tôi lo”, tôi đã trở thành một huyền
                                            thoại</a></div>
                                </div>

                                <!-- Tooltip -->
                                <div style="display: none">
                                    <div id="series_7596">
                                        <div style="margin: 10px 0; width: 250px">
                                            <p style="color: white; font-weight: bold">
                                                10 năm sau khi nói câu “Cứ đi đi, ở đây để tôi lo”, tôi đã trở thành một
                                                huyền thoại
                                            </p>
                                            <p>
                                            </p>
                                            <div>Số từ: 4.573</div>
                                            <div>Lượt xem: 41.792</div>
                                            <div>Lượt thích: 241</div>
                                            <p></p>

                                            Khi tổ Đội Anh Hùng bị tấn công bởi Quân Đoàn quỷ vương với số lượng vô số kể,
                                            không nghi ngờ gì nữa nếu đối đầu trực tiếp tổ đội sẽ hoàn toàn bị tiêu diệt.
                                            Một thành viên trong tổ đội, Pháp Sư mạnh n...
                                        </div>
                                    </div>
                                </div>
                                <!-- // Tooltip -->
                                <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
                                    <div class="thumb-wrapper ln-tooltip" data-tooltip-content="#series_759">
                                        <a href="/truyen/759-10-nen-goshi-no-hikiniito-o-yamete-gaishutsushitara-jitaku-goto-isekai-ni-tenishiteta/c64252-phan-ket"
                                            title="Phần kết">
                                            <div class="a6-ratio">
                                                <div class="content img-in-ratio lazyloaded"
                                                    data-bg="https://i.docln.net/lightnovel/covers/s759-4109954a-6358-4bcf-9abb-4c6d5a2cfa1d-m.jpg"
                                                    style="background-image: url(&quot;https://i.docln.net/lightnovel/covers/s759-4109954a-6358-4bcf-9abb-4c6d5a2cfa1d-m.jpg&quot;);">
                                                </div>
                                            </div>
                                        </a>
                                        <div class="thumb-detail">
                                            <div class="thumb_attr chapter-title" title="Phần kết"><a
                                                    href="/truyen/759-10-nen-goshi-no-hikiniito-o-yamete-gaishutsushitara-jitaku-goto-isekai-ni-tenishiteta/c64252-phan-ket"
                                                    title="Phần kết">Phần kết</a></div>
                                            <div class="thumb_attr volume-title">Chương 08: Lãnh đạo tiên phong Yuuji trở
                                                thành trưởng làng Honjou, lãnh địa Pasteur</div>
                                        </div>
                                    </div>
                                    <div class="thumb_attr series-title"><a
                                            href="/truyen/759-10-nen-goshi-no-hikiniito-o-yamete-gaishutsushitara-jitaku-goto-isekai-ni-tenishiteta"
                                            title="10 nen goshi no HikiNiito o Yamete Gaishutsushitara Jitaku goto Isekai ni Ten’ishiteta">10
                                            nen goshi no HikiNiito o Yamete Gaishutsushitara Jitaku goto Isekai ni
                                            Ten’ishiteta</a></div>
                                </div>

                                <!-- Tooltip -->
                                <div style="display: none">
                                    <div id="series_759">
                                        <div style="margin: 10px 0; width: 250px">
                                            <p style="color: white; font-weight: bold">
                                                10 nen goshi no HikiNiito o Yamete Gaishutsushitara Jitaku goto Isekai ni
                                                Ten’ishiteta
                                            </p>
                                            <p>
                                            </p>
                                            <div>Số từ: 187.670</div>
                                            <div>Lượt xem: 546.042</div>
                                            <div>Lượt thích: 1.780</div>
                                            <p></p>

                                            Houjou Yuuji, 30 tuổi, thất nghiệp, là một hikikomori trong suốt 10 năm, quyết
                                            định đi ra khỏi nhà. Tuy nhiên, bên ngoài đó lại là một thế giới khác cùng với
                                            những sinh vật kì lạ mà cậu chưa từng biết...
                                        </div>
                                    </div>
                                </div>
                                <!-- // Tooltip -->
                                <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
                                    <div class="thumb-wrapper ln-tooltip" data-tooltip-content="#series_890">
                                        <a href="/truyen/890-10-sai-no-saikyou-madoushi/c19850-mua-sam"
                                            title="Mua sắm - おかいもの">
                                            <div class="a6-ratio">
                                                <div class="content img-in-ratio lazyloaded"
                                                    data-bg="https://2.bp.blogspot.com/-aYUSfXJCoBs/WS2rXDUeIrI/AAAAAAAAU7E/P4rB6kpL3Jo2QnsGaoH2XuqpoM95nWfGwCHM/w215/default.jpg"
                                                    style="background-image: url(&quot;https://2.bp.blogspot.com/-aYUSfXJCoBs/WS2rXDUeIrI/AAAAAAAAU7E/P4rB6kpL3Jo2QnsGaoH2XuqpoM95nWfGwCHM/w215/default.jpg&quot;);">
                                                </div>
                                            </div>
                                        </a>
                                        <div class="thumb-detail">
                                            <div class="thumb_attr chapter-title" title="Mua sắm - おかいもの"><a
                                                    href="/truyen/890-10-sai-no-saikyou-madoushi/c19850-mua-sam"
                                                    title="Mua sắm - おかいもの">Mua sắm - おかいもの</a></div>
                                            <div class="thumb_attr volume-title">WN</div>
                                        </div>
                                    </div>
                                    <div class="thumb_attr series-title"><a href="/truyen/890-10-sai-no-saikyou-madoushi"
                                            title="10 sai no Saikyou Madoushi">10 sai no Saikyou Madoushi</a></div>
                                </div>

                                <!-- Tooltip -->
                                <div style="display: none">
                                    <div id="series_890">
                                        <div style="margin: 10px 0; width: 250px">
                                            <p style="color: white; font-weight: bold">
                                                10 sai no Saikyou Madoushi
                                            </p>
                                            <p>
                                            </p>
                                            <div>Số từ: 12.583</div>
                                            <div>Lượt xem: 56.893</div>
                                            <div>Lượt thích: 310</div>
                                            <p></p>

                                            Pháp sư mạnh nhất không biết mình là “người mạnh nhất” đã xuất hiện!

                                            &nbsp;

                                            Cô bé Ferris 10 tuổi là nô lệ làm việc ở khu mỏ khai thác ma thạch.

                                            Tuy nhiên, khi bé được&nbsp;phát hiện đang mang trong mình tài...
                                        </div>
                                    </div>
                                </div>
                                <!-- // Tooltip -->
                                <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
                                    <div class="thumb-wrapper ln-tooltip" data-tooltip-content="#series_1739">
                                        <a href="/truyen/1739-juu-sai-no-saikyou-madoushi/c25377-chuong-07-con-duong-toi-truong-phan-2"
                                            title="Chương 07 : Con đường tới trường - Phần 2">
                                            <div class="a6-ratio">
                                                <div class="content img-in-ratio lazyloaded"
                                                    data-bg="https://2.bp.blogspot.com/-UEgqsbpRBtc/Wf3YGNzbaRI/AAAAAAAAxyc/YSUcM2slIrEh9D8l4zP3NbiQip5zUHlEQCHMYCw/w215/default.jpg"
                                                    style="background-image: url(&quot;https://2.bp.blogspot.com/-UEgqsbpRBtc/Wf3YGNzbaRI/AAAAAAAAxyc/YSUcM2slIrEh9D8l4zP3NbiQip5zUHlEQCHMYCw/w215/default.jpg&quot;);">
                                                </div>
                                            </div>
                                        </a>
                                        <div class="thumb-detail">
                                            <div class="thumb_attr chapter-title"
                                                title="Chương 07 : Con đường tới trường - Phần 2"><a
                                                    href="/truyen/1739-juu-sai-no-saikyou-madoushi/c25377-chuong-07-con-duong-toi-truong-phan-2"
                                                    title="Chương 07 : Con đường tới trường - Phần 2">Chương 07 : Con đường
                                                    tới trường - Phần 2</a></div>
                                            <div class="thumb_attr volume-title">Tập 01</div>
                                        </div>
                                    </div>
                                    <div class="thumb_attr series-title"><a
                                            href="/truyen/1739-juu-sai-no-saikyou-madoushi"
                                            title="10 Sai no Saikyou Madoushi">10 Sai no Saikyou Madoushi</a></div>
                                </div>

                                <!-- Tooltip -->
                                <div style="display: none">
                                    <div id="series_1739">
                                        <div style="margin: 10px 0; width: 250px">
                                            <p style="color: white; font-weight: bold">
                                                10 Sai no Saikyou Madoushi
                                            </p>
                                            <p>
                                            </p>
                                            <div>Số từ: 2.832</div>
                                            <div>Lượt xem: 29.099</div>
                                            <div>Lượt thích: 192</div>
                                            <p></p>

                                            Pháp sư mạnh nhất không biết mình là “người mạnh nhất” đã xuất hiện!

                                            Cô bé Ferris 10 tuổi là nô lệ làm việc ở khu mỏ khai thác ma thạch.

                                            Tuy nhiên, khi bé được&nbsp;phát hiện đang mang trong mình tài năn...
                                        </div>
                                    </div>
                                </div>
                                <!-- // Tooltip -->
                                <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
                                    <div class="thumb-wrapper ln-tooltip" data-tooltip-content="#series_15462">
                                        <a href="/truyen/15462-10-nen-buri-ni-saikai-shita-kusogaki-wa-seijun-bishoujo-jk-ni-seichoushita-ita/c140327-chuong-32-long-vong-va-vong-vo"
                                            title="Chương 32: Lòng vòng và vòng vo.">
                                            <div class="a6-ratio">
                                                <div class="content img-in-ratio lazyloaded"
                                                    data-bg="https://i2.docln.net/ln/series/covers/s15462-94f2ccf2-9449-4ed4-a27e-10c5f70d19cf.jpg"
                                                    style="background-image: url(&quot;https://i2.docln.net/ln/series/covers/s15462-94f2ccf2-9449-4ed4-a27e-10c5f70d19cf.jpg&quot;);">
                                                </div>
                                            </div>
                                        </a>
                                        <div class="thumb-detail">
                                            <div class="thumb_attr chapter-title"
                                                title="Chương 32: Lòng vòng và vòng vo."><a
                                                    href="/truyen/15462-10-nen-buri-ni-saikai-shita-kusogaki-wa-seijun-bishoujo-jk-ni-seichoushita-ita/c140327-chuong-32-long-vong-va-vong-vo"
                                                    title="Chương 32: Lòng vòng và vòng vo.">Chương 32: Lòng vòng và vòng
                                                    vo.</a></div>
                                            <div class="thumb_attr volume-title">WN</div>
                                        </div>
                                    </div>
                                    <div class="thumb_attr series-title"><a
                                            href="/truyen/15462-10-nen-buri-ni-saikai-shita-kusogaki-wa-seijun-bishoujo-jk-ni-seichoushita-ita"
                                            title="10-nen Buri ni Saikai Shita Kusogaki wa Seijun Bishoujo JK ni Seichoushite Ita">10-nen
                                            Buri ni Saikai Shita Kusogaki wa Seijun Bishoujo JK ni Seichoushite Ita</a>
                                    </div>
                                </div>

                                <!-- Tooltip -->
                                <div style="display: none">
                                    <div id="series_15462">
                                        <div style="margin: 10px 0; width: 250px">
                                            <p style="color: white; font-weight: bold">
                                                10-nen Buri ni Saikai Shita Kusogaki wa Seijun Bishoujo JK ni Seichoushite
                                                Ita
                                            </p>
                                            <p>
                                            </p>
                                            <div>Số từ: 34.914</div>
                                            <div>Lượt xem: 280.625</div>
                                            <div>Lượt thích: 1.778</div>
                                            <p></p>

                                            "Đã lâu không gặp rồi nhỉ... sao anh lại không nhận ra em chứ!?"
                                            Aritsuki Yuu, 28 tuổi, sau khi nghỉ việc tại một công ty đen ở Tokyo và trở về
                                            quê nhà để khởi đầu một cuộc sống mới, đã bắt gặp một cô...
                                        </div>
                                    </div>
                                </div>
                                <!-- // Tooltip -->
                                <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
                                    <div class="thumb-wrapper ln-tooltip" data-tooltip-content="#series_15703">
                                        <a href="/truyen/15703-100-co-ban-gai-nguoi-ma-thuc-su-thuc-su-thuc-su-thuc-su-thuc-su-yeu-ban-chuyen-tinh-yeu-dac-biet-chuyen-tinh-bi-mat/c116910-phu-truyen-1-mua-sam-cung-hakari-karane"
                                            title="Phụ Truyện 1: Mua Sắm Cùng Hakari &amp; Karane">
                                            <div class="a6-ratio">
                                                <div class="content img-in-ratio lazyloaded"
                                                    data-bg="https://i.docln.net/lightnovel/covers/s15703-b3c0491e-d9f4-45e9-a11d-829cb69c870a-m.jpg"
                                                    style="background-image: url(&quot;https://i.docln.net/lightnovel/covers/s15703-b3c0491e-d9f4-45e9-a11d-829cb69c870a-m.jpg&quot;);">
                                                </div>
                                            </div>
                                        </a>
                                        <div class="thumb-detail">
                                            <div class="thumb_attr chapter-title"
                                                title="Phụ Truyện 1: Mua Sắm Cùng Hakari &amp; Karane"><a
                                                    href="/truyen/15703-100-co-ban-gai-nguoi-ma-thuc-su-thuc-su-thuc-su-thuc-su-thuc-su-yeu-ban-chuyen-tinh-yeu-dac-biet-chuyen-tinh-bi-mat/c116910-phu-truyen-1-mua-sam-cung-hakari-karane"
                                                    title="Phụ Truyện 1: Mua Sắm Cùng Hakari &amp; Karane">Phụ Truyện 1:
                                                    Mua Sắm Cùng Hakari &amp; Karane</a></div>
                                            <div class="thumb_attr volume-title">Toàn Văn</div>
                                        </div>
                                    </div>
                                    <div class="thumb_attr series-title"><a
                                            href="/truyen/15703-100-co-ban-gai-nguoi-ma-thuc-su-thuc-su-thuc-su-thuc-su-thuc-su-yeu-ban-chuyen-tinh-yeu-dac-biet-chuyen-tinh-bi-mat"
                                            title="100 Cô Bạn Gái, Người Mà Thực Sự Thực Sự Thực Sự Thực Sự Thực Sự Yêu Bạn: Chuyện Tình Yêu Đặc Biệt ~ Chuyện Tình Bí Mật">100
                                            Cô Bạn Gái, Người Mà Thực Sự Thực Sự Thực Sự Thực Sự Thực Sự Yêu Bạn: Chuyện
                                            Tình Yêu Đặc Biệt ~ Chuyện Tình Bí Mật</a></div>
                                </div>

                                <!-- Tooltip -->
                                <div style="display: none">
                                    <div id="series_15703">
                                        <div style="margin: 10px 0; width: 250px">
                                            <p style="color: white; font-weight: bold">
                                                100 Cô Bạn Gái, Người Mà Thực Sự Thực Sự Thực Sự Thực Sự Thực Sự Yêu Bạn:
                                                Chuyện Tình Yêu Đặc Biệt ~ Chuyện Tình Bí Mật
                                            </p>
                                            <p>
                                            </p>
                                            <div>Số từ: 8.455</div>
                                            <div>Lượt xem: 42.764</div>
                                            <div>Lượt thích: 167</div>
                                            <p></p>

                                            Câu chuyện kể về cuộc đời của nam sinh có tên Aijou Rentarou, người đã bị từ
                                            chối 100 lần liên tiếp bởi 100 cô gái khác nhau trước khi tốt nghiệp sơ trung.
                                            Trong một lần viếng thăm ngôi đền tình duyên...
                                        </div>
                                    </div>
                                </div>
                                <!-- // Tooltip -->
                                <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
                                    <div class="thumb-wrapper ln-tooltip" data-tooltip-content="#series_18031">
                                        <a href="/truyen/18031-100-dieu-em-khong-biet-ve-senpai/c133959-ngay-thu-592-senpai-sang-giai-doan-moi-roi-lieu-chung-ta-co-the-tiep-tuc-than-thiet-nhu-the-nay-khong"
                                            title="Ngày thứ 592: &quot;Senpai, sang giai đoạn mới rồi... liệu chúng ta có thể tiếp tục thân thiết như thế này không?&quot;">
                                            <div class="a6-ratio">
                                                <div class="content img-in-ratio lazyloaded"
                                                    data-bg="https://i2.docln.net/ln/series/covers/s18031-bc498d99-90f1-4384-8268-59309e7f23eb.jpg"
                                                    style="background-image: url(&quot;https://i2.docln.net/ln/series/covers/s18031-bc498d99-90f1-4384-8268-59309e7f23eb.jpg&quot;);">
                                                </div>
                                            </div>
                                        </a>
                                        <div class="thumb-detail">
                                            <div class="thumb_attr chapter-title"
                                                title="Ngày thứ 592: &quot;Senpai, sang giai đoạn mới rồi... liệu chúng ta có thể tiếp tục thân thiết như thế này không?&quot;">
                                                <a href="/truyen/18031-100-dieu-em-khong-biet-ve-senpai/c133959-ngay-thu-592-senpai-sang-giai-doan-moi-roi-lieu-chung-ta-co-the-tiep-tuc-than-thiet-nhu-the-nay-khong"
                                                    title="Ngày thứ 592: &quot;Senpai, sang giai đoạn mới rồi... liệu chúng ta có thể tiếp tục thân thiết như thế này không?&quot;">Ngày
                                                    thứ 592: "Senpai, sang giai đoạn mới rồi... liệu chúng ta có thể tiếp
                                                    tục thân thiết như thế này không?"</a></div>
                                            <div class="thumb_attr volume-title">Extra (Sau khi end)</div>
                                        </div>
                                    </div>
                                    <div class="thumb_attr series-title"><a
                                            href="/truyen/18031-100-dieu-em-khong-biet-ve-senpai"
                                            title="100 điều em không biết về senpai">100 điều em không biết về senpai</a>
                                    </div>
                                </div>

                                <!-- Tooltip -->
                                <div style="display: none">
                                    <div id="series_18031">
                                        <div style="margin: 10px 0; width: 250px">
                                            <p style="color: white; font-weight: bold">
                                                100 điều em không biết về senpai
                                            </p>
                                            <p>
                                            </p>
                                            <div>Số từ: 31.231</div>
                                            <div>Lượt xem: 35.002</div>
                                            <div>Lượt thích: 387</div>
                                            <p></p>

                                            Senpai và kouhai, hai người vốn chỉ biết nhau là "cùng chung ga tàu" (*), bỗng
                                            một ngày nọ, đã cùng nhau lập một lời hứa.&nbsp;Nội dung của nó là: "Mỗi ngày
                                            một câu hỏi, bất kể là gì, nhất định phải trả lờ...
                                        </div>
                                    </div>
                                </div>
                                <!-- // Tooltip -->
                                <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
                                    <div class="thumb-wrapper ln-tooltip" data-tooltip-content="#series_5797">
                                        <a href="/truyen/5797-100-dieu-em-khong-biet-ve-senpai/c95094-ngay-thu-84-senpai-anh-dang-o-dau-day-a"
                                            title="Ngày thứ 84: &quot;Senpai, anh đang ở đâu đấy ạ?&quot;">
                                            <div class="a6-ratio">
                                                <div class="content img-in-ratio lazyloaded"
                                                    data-bg="https://i.docln.net/lightnovel/covers/s5797-29ef7abb-8149-4bd2-b631-ae25e97f03a3-m.jpg"
                                                    style="background-image: url(&quot;https://i.docln.net/lightnovel/covers/s5797-29ef7abb-8149-4bd2-b631-ae25e97f03a3-m.jpg&quot;);">
                                                </div>
                                            </div>
                                        </a>
                                        <div class="thumb-detail">
                                            <div class="thumb_attr chapter-title"
                                                title="Ngày thứ 84: &quot;Senpai, anh đang ở đâu đấy ạ?&quot;"><a
                                                    href="/truyen/5797-100-dieu-em-khong-biet-ve-senpai/c95094-ngay-thu-84-senpai-anh-dang-o-dau-day-a"
                                                    title="Ngày thứ 84: &quot;Senpai, anh đang ở đâu đấy ạ?&quot;">Ngày thứ
                                                    84: "Senpai, anh đang ở đâu đấy ạ?"</a></div>
                                            <div class="thumb_attr volume-title">Web Novel</div>
                                        </div>
                                    </div>
                                    <div class="thumb_attr series-title"><a
                                            href="/truyen/5797-100-dieu-em-khong-biet-ve-senpai"
                                            title="100 điều em không biết về senpai">100 điều em không biết về senpai</a>
                                    </div>
                                </div>

                                <!-- Tooltip -->
                                <div style="display: none">
                                    <div id="series_5797">
                                        <div style="margin: 10px 0; width: 250px">
                                            <p style="color: white; font-weight: bold">
                                                100 điều em không biết về senpai
                                            </p>
                                            <p>
                                            </p>
                                            <div>Số từ: 130.973</div>
                                            <div>Lượt xem: 910.810</div>
                                            <div>Lượt thích: 4.379</div>
                                            <p></p>

                                            "Senpai, anh làm rơi gì này."
                                            Câu nói đột ngột ấy đánh dấu cho sự bắt đầu của mối quan hệ giữa senpai thơ thẩn
                                            và kouhai-chan dễ-thương-tăng-động. Mặc dù không có mối liên kết nào ngoài việc
                                            đi chung...
                                        </div>
                                    </div>
                                </div>
                                <!-- // Tooltip -->
                                <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
                                    <div class="thumb-wrapper ln-tooltip" data-tooltip-content="#series_13795">
                                        <a href="/truyen/13795-100-dieu-em-khong-biet-ve-senpai/c123198-chuong-88-senpai-anh-thuong-ket-thuc-viec-on-bai-va-di-ngu-luc-may-gio"
                                            title="Chương 88: “Senpai, anh thường kết thúc việc ôn bài và đi ngủ lúc mấy giờ?”">
                                            <div class="a6-ratio">
                                                <div class="content img-in-ratio lazyloaded"
                                                    data-bg="https://i.docln.net/lightnovel/covers/s13795-7c6a9c4a-a618-476c-bd1c-b5074b832c64-m.jpg"
                                                    style="background-image: url(&quot;https://i.docln.net/lightnovel/covers/s13795-7c6a9c4a-a618-476c-bd1c-b5074b832c64-m.jpg&quot;);">
                                                </div>
                                            </div>
                                        </a>
                                        <div class="thumb-detail">
                                            <div class="thumb_attr chapter-title"
                                                title="Chương 88: “Senpai, anh thường kết thúc việc ôn bài và đi ngủ lúc mấy giờ?”">
                                                <a href="/truyen/13795-100-dieu-em-khong-biet-ve-senpai/c123198-chuong-88-senpai-anh-thuong-ket-thuc-viec-on-bai-va-di-ngu-luc-may-gio"
                                                    title="Chương 88: “Senpai, anh thường kết thúc việc ôn bài và đi ngủ lúc mấy giờ?”">Chương
                                                    88: “Senpai, anh thường kết thúc việc ôn bài và đi ngủ lúc mấy giờ?”</a>
                                            </div>
                                            <div class="thumb_attr volume-title">Web Novel</div>
                                        </div>
                                    </div>
                                    <div class="thumb_attr series-title"><a
                                            href="/truyen/13795-100-dieu-em-khong-biet-ve-senpai"
                                            title="100 điều em không biết về senpai">100 điều em không biết về senpai</a>
                                    </div>
                                </div>

                                <!-- Tooltip -->
                                <div style="display: none">
                                    <div id="series_13795">
                                        <div style="margin: 10px 0; width: 250px">
                                            <p style="color: white; font-weight: bold">
                                                100 điều em không biết về senpai
                                            </p>
                                            <p>
                                            </p>
                                            <div>Số từ: 6.932</div>
                                            <div>Lượt xem: 45.024</div>
                                            <div>Lượt thích: 587</div>
                                            <p></p>

                                            "Senpai, anh làm rơi gì này."
                                            Câu nói đột ngột ấy đánh dấu cho sự bắt đầu của mối quan hệ giữa senpai thơ thẩn
                                            và kouhai-chan dễ-thương-tăng-động. Mặc dù không có mối liên kết nào ngoài việc
                                            đi chung...
                                        </div>
                                    </div>
                                </div>
                                <!-- // Tooltip -->
                                <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
                                    <div class="thumb-wrapper ln-tooltip" data-tooltip-content="#series_11727">
                                        <a href="/truyen/11727-the-villainess-who-only-had-100-days-to-live-had-fun-every-day/c126520-chuong-45-cung-nhau-vui-ve-nao"
                                            title="Chương 45: Cùng nhau vui vẻ nào! ⑥">
                                            <div class="a6-ratio">
                                                <div class="content img-in-ratio lazyloaded"
                                                    data-bg="https://i.docln.net/lightnovel/covers/s11727-f0dd26ff-0fc2-44fb-8af9-34c3abc272e4-m.jpg"
                                                    style="background-image: url(&quot;https://i.docln.net/lightnovel/covers/s11727-f0dd26ff-0fc2-44fb-8af9-34c3abc272e4-m.jpg&quot;);">
                                                </div>
                                            </div>
                                        </a>
                                        <div class="thumb-detail">
                                            <div class="thumb_attr chapter-title"
                                                title="Chương 45: Cùng nhau vui vẻ nào! ⑥"><a
                                                    href="/truyen/11727-the-villainess-who-only-had-100-days-to-live-had-fun-every-day/c126520-chuong-45-cung-nhau-vui-ve-nao"
                                                    title="Chương 45: Cùng nhau vui vẻ nào! ⑥">Chương 45: Cùng nhau vui vẻ
                                                    nào! ⑥</a></div>
                                            <div class="thumb_attr volume-title">Web novel</div>
                                        </div>
                                    </div>
                                    <div class="thumb_attr series-title"><a
                                            href="/truyen/11727-the-villainess-who-only-had-100-days-to-live-had-fun-every-day"
                                            title="100 Ngày Hạnh Phúc Của Tiểu Thư Phản Diện">100 Ngày Hạnh Phúc Của Tiểu
                                            Thư Phản Diện</a></div>
                                </div>

                                <!-- Tooltip -->
                                <div style="display: none">
                                    <div id="series_11727">
                                        <div style="margin: 10px 0; width: 250px">
                                            <p style="color: white; font-weight: bold">
                                                100 Ngày Hạnh Phúc Của Tiểu Thư Phản Diện
                                            </p>
                                            <p>
                                            </p>
                                            <div>Số từ: 64.668</div>
                                            <div>Lượt xem: 244.646</div>
                                            <div>Lượt thích: 1.152</div>
                                            <p></p>

                                            Lelouche, con gái của nhà công tước, nhận được lời nhắn từ Thần.
                                            [Ngươi sẽ chết trong 100 ngày nữa.]
                                            Có tin đồn là thái tử, cũng là hôn thê của cô ấy đã tìm được người mới và muốn
                                            phá vỡ hôn ước của h...
                                        </div>
                                    </div>
                                </div>
                                <!-- // Tooltip -->
                                <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
                                    <div class="thumb-wrapper ln-tooltip" data-tooltip-content="#series_5078">
                                        <a href="/truyen/5078-15-sai-demo-ore-no-yome/c51356-chuong-01-va-roi-no-thanh-mot-dam-cuoi-hoan-hi"
                                            title="Chương 01 - Và rồi nó thành một đám cưới hoan hỉ">
                                            <div class="a6-ratio">
                                                <div class="content img-in-ratio lazyloaded"
                                                    data-bg="https://i.docln.net/lightnovel/covers/s5078-ad42e309-df5d-4f01-bcf8-de224b9b04e6-m.jpg"
                                                    style="background-image: url(&quot;https://i.docln.net/lightnovel/covers/s5078-ad42e309-df5d-4f01-bcf8-de224b9b04e6-m.jpg&quot;);">
                                                </div>
                                            </div>
                                        </a>
                                        <div class="thumb-detail">
                                            <div class="thumb_attr chapter-title"
                                                title="Chương 01 - Và rồi nó thành một đám cưới hoan hỉ"><a
                                                    href="/truyen/5078-15-sai-demo-ore-no-yome/c51356-chuong-01-va-roi-no-thanh-mot-dam-cuoi-hoan-hi"
                                                    title="Chương 01 - Và rồi nó thành một đám cưới hoan hỉ">Chương 01 - Và
                                                    rồi nó thành một đám cưới hoan hỉ</a></div>
                                            <div class="thumb_attr volume-title">Tập 01 - The booksellers wars beginning
                                                with a haphazar marriage</div>
                                        </div>
                                    </div>
                                    <div class="thumb_attr series-title"><a href="/truyen/5078-15-sai-demo-ore-no-yome"
                                            title="15 sai demo Ore no Yome!">15 sai demo Ore no Yome!</a></div>
                                </div>

                                <!-- Tooltip -->
                                <div style="display: none">
                                    <div id="series_5078">
                                        <div style="margin: 10px 0; width: 250px">
                                            <p style="color: white; font-weight: bold">
                                                15 sai demo Ore no Yome!
                                            </p>
                                            <p>
                                            </p>
                                            <div>Số từ: 5.006</div>
                                            <div>Lượt xem: 89.059</div>
                                            <div>Lượt thích: 521</div>
                                            <p></p>

                                            Chuyện về Hinosaka Kenichi, một thanh niên công chức 27 tuổi kết hôn cùng với nữ
                                            sinh trung học 15 tuổi. Chuyện tình này không chỉ một mà đến những hai bé 15
                                            tuổi mới đau chứ. Liệu thanh niên này sẽ s...
                                        </div>
                                    </div>
                                </div>
                                <!-- // Tooltip -->
                                <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
                                    <div class="thumb-wrapper ln-tooltip" data-tooltip-content="#series_8133">
                                        <a href="/truyen/8133-1-ldk-soshite-2-jk-26-sai-salaryman-joshikousei-ni-nin-to-doukyo-hajimemashita/c86777-chuong-06-tai-nan-voi-nu-sinh-cao-trung"
                                            title="Chương 06: Tai nạn với nữ sinh cao trung">
                                            <div class="a6-ratio">
                                                <div class="content img-in-ratio lazyloaded"
                                                    data-bg="https://i.docln.net/lightnovel/covers/s8133-9baa3e68-1b67-4998-9342-37033257b650-m.jpg"
                                                    style="background-image: url(&quot;https://i.docln.net/lightnovel/covers/s8133-9baa3e68-1b67-4998-9342-37033257b650-m.jpg&quot;);">
                                                </div>
                                            </div>
                                        </a>
                                        <div class="thumb-detail">
                                            <div class="thumb_attr chapter-title"
                                                title="Chương 06: Tai nạn với nữ sinh cao trung"><a
                                                    href="/truyen/8133-1-ldk-soshite-2-jk-26-sai-salaryman-joshikousei-ni-nin-to-doukyo-hajimemashita/c86777-chuong-06-tai-nan-voi-nu-sinh-cao-trung"
                                                    title="Chương 06: Tai nạn với nữ sinh cao trung">Chương 06: Tai nạn với
                                                    nữ sinh cao trung</a></div>
                                            <div class="thumb_attr volume-title">Tập 01</div>
                                        </div>
                                    </div>
                                    <div class="thumb_attr series-title"><a
                                            href="/truyen/8133-1-ldk-soshite-2-jk-26-sai-salaryman-joshikousei-ni-nin-to-doukyo-hajimemashita"
                                            title="1LDK, Soshite 2JK. 26-sai Salaryman, Joshi Kousei Futari to Doukyou Hajimemashita">1LDK,
                                            Soshite 2JK. 26-sai Salaryman, Joshi Kousei Futari to Doukyou Hajimemashita</a>
                                    </div>
                                </div>

                                <!-- Tooltip -->
                                <div style="display: none">
                                    <div id="series_8133">
                                        <div style="margin: 10px 0; width: 250px">
                                            <p style="color: white; font-weight: bold">
                                                1LDK, Soshite 2JK. 26-sai Salaryman, Joshi Kousei Futari to Doukyou
                                                Hajimemashita
                                            </p>
                                            <p>
                                            </p>
                                            <div>Số từ: 26.742</div>
                                            <div>Lượt xem: 106.246</div>
                                            <div>Lượt thích: 955</div>
                                            <p></p>

                                            “Ahh, unm, cũng lâu rồi anh ha.”
                                            (……Không đời nào.)
                                            Komamura, một người làm công ăn lương độc thân, đã được giao phó cho việc chăm
                                            sóc cô em họ, Kanon, một gal JK.
                                            Khi vừa mới gắng hiểu sự thay đổi sự...
                                        </div>
                                    </div>
                                </div>
                                <!-- // Tooltip -->
                                <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
                                    <div class="thumb-wrapper ln-tooltip" data-tooltip-content="#series_3660">
                                        <a href="/truyen/3660-2311/c139034-ngay-095" title="Ngày 095">
                                            <div class="a6-ratio">
                                                <div class="content img-in-ratio lazyload"
                                                    data-bg="https://4.bp.blogspot.com/-kXSvTnxZ8ys/XBKNSxoa4SI/AAAAAAAB58Y/bJYY-ulN_0M-FfcooEiWpKNiFpXyC13UgCHMYCw/w215/default.jpg">
                                                </div>
                                            </div>
                                        </a>
                                        <div class="thumb-detail">
                                            <div class="thumb_attr chapter-title" title="Ngày 095"><a
                                                    href="/truyen/3660-2311/c139034-ngay-095" title="Ngày 095">Ngày
                                                    095</a></div>
                                            <div class="thumb_attr volume-title">23:11</div>
                                        </div>
                                    </div>
                                    <div class="thumb_attr series-title"><a href="/truyen/3660-2311"
                                            title="23:11">23:11</a></div>
                                </div>

                                <!-- Tooltip -->
                                <div style="display: none">
                                    <div id="series_3660">
                                        <div style="margin: 10px 0; width: 250px">
                                            <p style="color: white; font-weight: bold">
                                                23:11
                                            </p>
                                            <p>
                                            </p>
                                            <div>Số từ: 67.293</div>
                                            <div>Lượt xem: 298.983</div>
                                            <div>Lượt thích: 336</div>
                                            <p></p>

                                            “Nếu em muốn hạnh phúc mãi mãi về sau, anh sẵn sàng bắt đầu câu chuyện ngày xửa
                                            ngày xưa với em.” - Rico, 23:11
                                            Tóm tắt nội dung của tác giả:
                                            Một tác giả. Một kẻ lạ mặt kỳ quái. Rất nhiều cuộc hội th...
                                        </div>
                                    </div>
                                </div>
                                <!-- // Tooltip -->
                                <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
                                    <div class="thumb-wrapper ln-tooltip" data-tooltip-content="#series_8328">
                                        <a href="/truyen/8328-2311/c93616-chuong-12" title="Chương 12">
                                            <div class="a6-ratio">
                                                <div class="content img-in-ratio lazyload"
                                                    data-bg="https://i.docln.net/lightnovel/covers/s8328-de0ec3cf-03fd-4d23-986b-295e0bc7c619-m.jpg">
                                                </div>
                                            </div>
                                        </a>
                                        <div class="thumb-detail">
                                            <div class="thumb_attr chapter-title" title="Chương 12"><a
                                                    href="/truyen/8328-2311/c93616-chuong-12" title="Chương 12">Chương
                                                    12</a></div>
                                            <div class="thumb_attr volume-title">Tập 01</div>
                                        </div>
                                    </div>
                                    <div class="thumb_attr series-title"><a href="/truyen/8328-2311"
                                            title="23/11">23/11</a></div>
                                </div>

                                <!-- Tooltip -->
                                <div style="display: none">
                                    <div id="series_8328">
                                        <div style="margin: 10px 0; width: 250px">
                                            <p style="color: white; font-weight: bold">
                                                23/11
                                            </p>
                                            <p>
                                            </p>
                                            <div>Số từ: 39.950</div>
                                            <div>Lượt xem: 33.173</div>
                                            <div>Lượt thích: 76</div>
                                            <p></p>

                                            phần tiếp theo sau cái kết của phần 23:11.
                                        </div>
                                    </div>
                                </div>
                                <!-- // Tooltip -->
                                <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
                                    <div class="thumb-wrapper ln-tooltip" data-tooltip-content="#series_2138">
                                        <a href="/truyen/2138-29-years-old-bachelor-was-brought-to-a-different-world-to-live-freely/c46557-chuong-10-toi-roi-vao-trang-thai-cam-ghet-ban-than-minh"
                                            title="Chương 26: Tôi rơi vào trạng thái căm ghét bản thân mình.">
                                            <div class="a6-ratio">
                                                <div class="content img-in-ratio lazyload"
                                                    data-bg="https://2.bp.blogspot.com/-1O8TibBXvaU/WovJMyYTnSI/AAAAAAAA_18/sRf55GJAP20NgVb4BiX62wJcLwf2NMIqACHMYCw/w215/default.jpg">
                                                </div>
                                            </div>
                                        </a>
                                        <div class="thumb-detail">
                                            <div class="thumb_attr chapter-title"
                                                title="Chương 26: Tôi rơi vào trạng thái căm ghét bản thân mình."><a
                                                    href="/truyen/2138-29-years-old-bachelor-was-brought-to-a-different-world-to-live-freely/c46557-chuong-10-toi-roi-vao-trang-thai-cam-ghet-ban-than-minh"
                                                    title="Chương 26: Tôi rơi vào trạng thái căm ghét bản thân mình.">Chương
                                                    26: Tôi rơi vào trạng thái căm ghét bản thân mình.</a></div>
                                            <div class="thumb_attr volume-title">Tập 02</div>
                                        </div>
                                    </div>
                                    <div class="thumb_attr series-title"><a
                                            href="/truyen/2138-29-years-old-bachelor-was-brought-to-a-different-world-to-live-freely"
                                            title="29-sai Dokushin wa Isekai de Jiyuu ni Ikita......katta">29-sai Dokushin
                                            wa Isekai de Jiyuu ni Ikita......katta</a></div>
                                </div>

                                <!-- Tooltip -->
                                <div style="display: none">
                                    <div id="series_2138">
                                        <div style="margin: 10px 0; width: 250px">
                                            <p style="color: white; font-weight: bold">
                                                29-sai Dokushin wa Isekai de Jiyuu ni Ikita......katta
                                            </p>
                                            <p>
                                            </p>
                                            <div>Số từ: 123.450</div>
                                            <div>Lượt xem: 416.092</div>
                                            <div>Lượt thích: 1.895</div>
                                            <p></p>

                                            Một anh main 29 tuổi còn độc thân được qua thế giới khác mà mình từng mong muốn…
                                            Từ những ngày đầu khi anh đăng ký vào Guild mạo hiểm giả, anh gặp một cô gái và
                                            đã miễn cưỡng phải cưới cô ấy.
                                            Hơn mười...
                                        </div>
                                    </div>
                                </div>
                                <!-- // Tooltip -->
                                <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
                                    <div class="thumb-wrapper ln-tooltip" data-tooltip-content="#series_2840">
                                        <a href="/truyen/2840-3-minutes-boy-meets-girl/c34162-chuong-19-3-phut-boy-meets-girl"
                                            title="Chương 19. 3 Phút Boy Meets Girl">
                                            <div class="a6-ratio">
                                                <div class="content img-in-ratio lazyload"
                                                    data-bg="https://4.bp.blogspot.com/-8shteqngTDM/WzjkgV_LTaI/AAAAAAABXkE/PL7IYOgMHLUG_r0TZOXzjKrX2r9KsCDRwCHMYCw/w215/default.jpg">
                                                </div>
                                            </div>
                                        </a>
                                        <div class="thumb-detail">
                                            <div class="thumb_attr chapter-title"
                                                title="Chương 19. 3 Phút Boy Meets Girl"><a
                                                    href="/truyen/2840-3-minutes-boy-meets-girl/c34162-chuong-19-3-phut-boy-meets-girl"
                                                    title="Chương 19. 3 Phút Boy Meets Girl">Chương 19. 3 Phút Boy Meets
                                                    Girl</a></div>
                                            <div class="thumb_attr volume-title">Toàn tập</div>
                                        </div>
                                    </div>
                                    <div class="thumb_attr series-title"><a href="/truyen/2840-3-minutes-boy-meets-girl"
                                            title="3 Minutes Boy Meets Girl">3 Minutes Boy Meets Girl</a></div>
                                </div>

                                <!-- Tooltip -->
                                <div style="display: none">
                                    <div id="series_2840">
                                        <div style="margin: 10px 0; width: 250px">
                                            <p style="color: white; font-weight: bold">
                                                3 Minutes Boy Meets Girl
                                            </p>
                                            <p>
                                            </p>
                                            <div>Số từ: 36.887</div>
                                            <div>Lượt xem: 76.996</div>
                                            <div>Lượt thích: 479</div>
                                            <p></p>

                                            3 Minutes Boy Meets Girl là một tuyển tập truyện ngắn của các tác giả làm việc
                                            tại Famitsu Bunko. Có 19 chương và là 19 truyện ngắn từ 19 tác giả khác nhau.
                                            Thể loại chung chính là lãng mạn. Truyện đư...
                                        </div>
                                    </div>
                                </div>
                                <!-- // Tooltip -->
                                <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
                                    <div class="thumb-wrapper ln-tooltip" data-tooltip-content="#series_2031">
                                        <a href="/truyen/2031-400-years-old-virgin-demon-king/c32374-chuong-03-ma-vuong-thuc-hien-hoa-ly-tuong"
                                            title="Chương 03 : Ma vương thực hiện hóa lý tưởng.">
                                            <div class="a6-ratio">
                                                <div class="content img-in-ratio lazyload"
                                                    data-bg="https://docln.net/img/nocover.jpg"></div>
                                            </div>
                                        </a>
                                        <div class="thumb-detail">
                                            <div class="thumb_attr chapter-title"
                                                title="Chương 03 : Ma vương thực hiện hóa lý tưởng."><a
                                                    href="/truyen/2031-400-years-old-virgin-demon-king/c32374-chuong-03-ma-vuong-thuc-hien-hoa-ly-tuong"
                                                    title="Chương 03 : Ma vương thực hiện hóa lý tưởng.">Chương 03 : Ma
                                                    vương thực hiện hóa lý tưởng.</a></div>
                                            <div class="thumb_attr volume-title">Tập 01</div>
                                        </div>
                                    </div>
                                    <div class="thumb_attr series-title"><a
                                            href="/truyen/2031-400-years-old-virgin-demon-king"
                                            title="400 Years Old Virgin Demon King">400 Years Old Virgin Demon King</a>
                                    </div>
                                </div>

                                <!-- Tooltip -->
                                <div style="display: none">
                                    <div id="series_2031">
                                        <div style="margin: 10px 0; width: 250px">
                                            <p style="color: white; font-weight: bold">
                                                400 Years Old Virgin Demon King
                                            </p>
                                            <p>
                                            </p>
                                            <div>Số từ: 4.723</div>
                                            <div>Lượt xem: 26.656</div>
                                            <div>Lượt thích: 116</div>
                                            <p></p>

                                            Chuyện về ma vương 400 tuổi còn trinh đi kiếm vợ và một gái muốn cưới hắn để nắm
                                            giữ quyền lực to lớn.
                                        </div>
                                    </div>
                                </div>
                                <!-- // Tooltip -->
                                <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
                                    <div class="thumb-wrapper ln-tooltip" data-tooltip-content="#series_14836">
                                        <a href="/truyen/14836-45510/c111785-chuong-01" title="Chương 01">
                                            <div class="a6-ratio">
                                                <div class="content img-in-ratio lazyload"
                                                    data-bg="https://i.docln.net/lightnovel/covers/s14836-f44e722f-0888-4518-9ffa-317865a13bd4-m.jpg">
                                                </div>
                                            </div>
                                        </a>
                                        <div class="thumb-detail">
                                            <div class="thumb_attr chapter-title" title="Chương 01"><a
                                                    href="/truyen/14836-45510/c111785-chuong-01" title="Chương 01">Chương
                                                    01</a></div>
                                            <div class="thumb_attr volume-title">Toàn văn</div>
                                        </div>
                                    </div>
                                    <div class="thumb_attr series-title"><a href="/truyen/14836-45510"
                                            title="45510">45510</a></div>
                                </div>

                                <!-- Tooltip -->
                                <div style="display: none">
                                    <div id="series_14836">
                                        <div style="margin: 10px 0; width: 250px">
                                            <p style="color: white; font-weight: bold">
                                                45510
                                            </p>
                                            <p>
                                            </p>
                                            <div>Số từ: 2.212</div>
                                            <div>Lượt xem: 60.610</div>
                                            <div>Lượt thích: 185</div>
                                            <p></p>

                                            Được chấp bút bởi Akasaka Aka (tác giả của loạt manga Kaguya sama: Love is war
                                            nổi tiếng),『45510』 đề cập đến khía cạnh chưa ai biết tới của Idol hoàn hảo tối
                                            thượng「B-Komachi」Ai. Cuốn tiểu thuyết...
                                        </div>
                                    </div>
                                </div>
                                <!-- // Tooltip -->
                                <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
                                    <div class="thumb-wrapper ln-tooltip" data-tooltip-content="#series_14837">
                                        <a href="/truyen/14837-45510/c111788-oneshot" title="Oneshot">
                                            <div class="a6-ratio">
                                                <div class="content img-in-ratio lazyload"
                                                    data-bg="https://i.docln.net/lightnovel/covers/s14837-956f4f46-99bf-4b5b-9968-9560c8a60cae-m.jpg">
                                                </div>
                                            </div>
                                        </a>
                                        <div class="thumb-detail">
                                            <div class="thumb_attr chapter-title" title="Oneshot"><a
                                                    href="/truyen/14837-45510/c111788-oneshot" title="Oneshot">Oneshot</a>
                                            </div>
                                            <div class="thumb_attr volume-title">Toàn tập</div>
                                        </div>
                                    </div>
                                    <div class="thumb_attr series-title"><a href="/truyen/14837-45510"
                                            title="45510">45510</a></div>
                                </div>

                                <!-- Tooltip -->
                                <div style="display: none">
                                    <div id="series_14837">
                                        <div style="margin: 10px 0; width: 250px">
                                            <p style="color: white; font-weight: bold">
                                                45510
                                            </p>
                                            <p>
                                            </p>
                                            <div>Số từ: 3.935</div>
                                            <div>Lượt xem: 41.885</div>
                                            <div>Lượt thích: 161</div>
                                            <p></p>

                                            "45510" là một tiểu thuyết ngắn được viết bởi Aka Akasaka, nói về một khía cạnh
                                            chưa ai biết của idol thập toàn tối thượng "B-Komachi" Ai.
                                            Đây là câu chuyện gốc của bài hát chủ đề "Idol" của YOASOBI c...
                                        </div>
                                    </div>
                                </div>
                                <!-- // Tooltip -->
                                <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
                                    <div class="thumb-wrapper ln-tooltip" data-tooltip-content="#series_15927">
                                        <a href="/truyen/15927-6-nu-chinh-deu-muon-toan-quyen-doc-chiem-toi/c121446-chuong-32"
                                            title="Chương 3.2">
                                            <div class="a6-ratio">
                                                <div class="content img-in-ratio lazyload"
                                                    data-bg="https://i.docln.net/lightnovel/covers/s15927-9cd62c9f-e138-4dbc-a646-b22be1730948-m.jpg">
                                                </div>
                                            </div>
                                        </a>
                                        <div class="thumb-detail">
                                            <div class="thumb_attr chapter-title" title="Chương 3.2"><a
                                                    href="/truyen/15927-6-nu-chinh-deu-muon-toan-quyen-doc-chiem-toi/c121446-chuong-32"
                                                    title="Chương 3.2">Chương 3.2</a></div>
                                            <div class="thumb_attr volume-title">Tập 01</div>
                                        </div>
                                    </div>
                                    <div class="thumb_attr series-title"><a
                                            href="/truyen/15927-6-nu-chinh-deu-muon-toan-quyen-doc-chiem-toi"
                                            title="6 nữ chính đều muốn toàn quyền độc chiếm tôi">6 nữ chính đều muốn toàn
                                            quyền độc chiếm tôi</a></div>
                                </div>

                                <!-- Tooltip -->
                                <div style="display: none">
                                    <div id="series_15927">
                                        <div style="margin: 10px 0; width: 250px">
                                            <p style="color: white; font-weight: bold">
                                                6 nữ chính đều muốn toàn quyền độc chiếm tôi
                                            </p>
                                            <p>
                                            </p>
                                            <div>Số từ: 25.639</div>
                                            <div>Lượt xem: 86.855</div>
                                            <div>Lượt thích: 868</div>
                                            <p></p>

                                            [Cái gì nhiều quá cũng không tốt. Cả sở hữu vật chất lẫn các mối quan hệ.]
                                            Shinichi Hirakawa, một nam sinh cao trung sống theo chủ nghĩa tối giản, chỉ giao
                                            lưu với số ít người, giờ lại tham gia một dự...
                                        </div>
                                    </div>
                                </div>
                                <!-- // Tooltip -->
                                <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
                                    <div class="thumb-wrapper ln-tooltip" data-tooltip-content="#series_1985">
                                        <a href="/truyen/1985-86-eightysix/c65065-chuong-8-run-to-the-battlefront"
                                            title="Chương 8: Run to the Battlefront">
                                            <div class="a6-ratio">
                                                <div class="content img-in-ratio lazyload"
                                                    data-bg="https://i.docln.net/lightnovel/covers/s1985-b606b7d8-33bc-4b2c-87a5-5f811c463ae8-m.jpg">
                                                </div>
                                            </div>
                                        </a>
                                        <div class="thumb-detail">
                                            <div class="thumb_attr chapter-title"
                                                title="Chương 8: Run to the Battlefront"><a
                                                    href="/truyen/1985-86-eightysix/c65065-chuong-8-run-to-the-battlefront"
                                                    title="Chương 8: Run to the Battlefront">Chương 8: Run to the
                                                    Battlefront</a></div>
                                            <div class="thumb_attr volume-title">Tập 3</div>
                                        </div>
                                    </div>
                                    <div class="thumb_attr series-title"><a href="/truyen/1985-86-eightysix"
                                            title="86 -eightysix-">86 -eightysix-</a></div>
                                </div>

                                <!-- Tooltip -->
                                <div style="display: none">
                                    <div id="series_1985">
                                        <div style="margin: 10px 0; width: 250px">
                                            <p style="color: white; font-weight: bold">
                                                86 -eightysix-
                                            </p>
                                            <p>
                                            </p>
                                            <div>Số từ: 244.749</div>
                                            <div>Lượt xem: 752.802</div>
                                            <div>Lượt thích: 1.901</div>
                                            <p></p>

                                            Cộng hòa San Magnolia.Quốc gia này từ lâu đã chịu phải ách xâm lược từ những
                                            Legion - chiến xa không người lái của phía Đế quốc. Để đáp trả lại mối đe doạ
                                            đó, nước Cộng hoà cũng phát triển thành công...
                                        </div>
                                    </div>
                                </div>
                                <!-- // Tooltip -->
                                <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
                                    <div class="thumb-wrapper ln-tooltip" data-tooltip-content="#series_16685">
                                        <a href="/truyen/16685-87-ngay-cho-den-lan-dau-lam-chuyen-ay-voi-co-ban-gai-ngay-tho-va-de-dai/c125252-chuong-ket-nhieu-lan-dau-cung-nhau-trai-nghiem"
                                            title="Chương kết: Nhiều lần đầu cùng nhau trải nghiệm">
                                            <div class="a6-ratio">
                                                <div class="content img-in-ratio lazyload"
                                                    data-bg="https://i.docln.net/lightnovel/covers/s16685-23173e61-bce9-44cc-9dbf-140c87a06365-m.jpg">
                                                </div>
                                            </div>
                                        </a>
                                        <div class="thumb-detail">
                                            <div class="thumb_attr chapter-title"
                                                title="Chương kết: Nhiều lần đầu cùng nhau trải nghiệm"><a
                                                    href="/truyen/16685-87-ngay-cho-den-lan-dau-lam-chuyen-ay-voi-co-ban-gai-ngay-tho-va-de-dai/c125252-chuong-ket-nhieu-lan-dau-cung-nhau-trai-nghiem"
                                                    title="Chương kết: Nhiều lần đầu cùng nhau trải nghiệm">Chương kết:
                                                    Nhiều lần đầu cùng nhau trải nghiệm</a></div>
                                            <div class="thumb_attr volume-title">Thật ra... đây là lần đầu của mình đó
                                            </div>
                                        </div>
                                    </div>
                                    <div class="thumb_attr series-title"><a
                                            href="/truyen/16685-87-ngay-cho-den-lan-dau-lam-chuyen-ay-voi-co-ban-gai-ngay-tho-va-de-dai"
                                            title="87 ngày cho đến lần đầu làm chuyện ấy với cô bạn gái ngây thơ và dễ dãi">87
                                            ngày cho đến lần đầu làm chuyện ấy với cô bạn gái ngây thơ và dễ dãi</a></div>
                                </div>

                                <!-- Tooltip -->
                                <div style="display: none">
                                    <div id="series_16685">
                                        <div style="margin: 10px 0; width: 250px">
                                            <p style="color: white; font-weight: bold">
                                                87 ngày cho đến lần đầu làm chuyện ấy với cô bạn gái ngây thơ và dễ dãi
                                            </p>
                                            <p>
                                            </p>
                                            <div>Số từ: 63.203</div>
                                            <div>Lượt xem: 123.046</div>
                                            <div>Lượt thích: 1.335</div>
                                            <p></p>

                                            Như tiêu đề, đây là câu chuyện về 87 ngày cho đến lần đầu “ân ái” giữa chàng
                                            trai mang tiếng lăng nhăng nhưng thực chất là trai tân, và cô gái mang tiếng
                                            lẳng lơ nhưng thực chất là gái tơ.
                                            &nbsp;
                                            &nbsp;
                                        </div>
                                    </div>
                                </div>
                                <!-- // Tooltip -->
                                <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
                                    <div class="thumb-wrapper ln-tooltip" data-tooltip-content="#series_2463">
                                        <a href="/truyen/2463-99th-vampire-princess-the-last-vampire/c35808-part-03"
                                            title="Part 03">
                                            <div class="a6-ratio">
                                                <div class="content img-in-ratio lazyload"
                                                    data-bg="https://3.bp.blogspot.com/-io56sbTwLKQ/WtNbfTL0lDI/AAAAAAABHzE/4C55FPwci4wEpA10SHqrMkoiIdxYQHrVgCHMYCw/w215/default.jpg">
                                                </div>
                                            </div>
                                        </a>
                                        <div class="thumb-detail">
                                            <div class="thumb_attr chapter-title" title="Part 03"><a
                                                    href="/truyen/2463-99th-vampire-princess-the-last-vampire/c35808-part-03"
                                                    title="Part 03">Part 03</a></div>
                                            <div class="thumb_attr volume-title">Chương 1: Truyền thuyết về nghi thức "
                                                Liên lạc với người chết"</div>
                                        </div>
                                    </div>
                                    <div class="thumb_attr series-title"><a
                                            href="/truyen/2463-99th-vampire-princess-the-last-vampire"
                                            title="99th vampire princess ~The last vampire~">99th vampire princess ~The
                                            last vampire~</a></div>
                                </div>

                                <!-- Tooltip -->
                                <div style="display: none">
                                    <div id="series_2463">
                                        <div style="margin: 10px 0; width: 250px">
                                            <p style="color: white; font-weight: bold">
                                                99th vampire princess ~The last vampire~
                                            </p>
                                            <p>
                                            </p>
                                            <div>Số từ: 7.532</div>
                                            <div>Lượt xem: 32.329</div>
                                            <div>Lượt thích: 246</div>
                                            <p></p>

                                            "Lores" - những hình thể đáng kể được sinh ra từ những truyền thuyết thành phố.
                                            Và học sinh trung học Tsukumo Jin, người đã vô tình giải phóng "truyền thuyết về
                                            ma cà rồng" mạnh mẽ nhất, giờ đây là ng...
                                        </div>
                                    </div>
                                </div>
                                <!-- // Tooltip -->
                                <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
                                    <div class="thumb-wrapper ln-tooltip" data-tooltip-content="#series_7990">
                                        <a href="/truyen/7990-a-banished-failure-survives-in-the-borderland-and-becomes-an-s-rank-exorcist/c91611-chuong-44-tai-nang-no-ro"
                                            title="Chương 44: Tài năng nở rộ">
                                            <div class="a6-ratio">
                                                <div class="content img-in-ratio lazyload"
                                                    data-bg="https://i.docln.net/lightnovel/covers/s7990-c92b1939-3e9e-4fa8-8187-32a3e50a29cc-m.jpg">
                                                </div>
                                            </div>
                                        </a>
                                        <div class="thumb-detail">
                                            <div class="thumb_attr chapter-title" title="Chương 44: Tài năng nở rộ"><a
                                                    href="/truyen/7990-a-banished-failure-survives-in-the-borderland-and-becomes-an-s-rank-exorcist/c91611-chuong-44-tai-nang-no-ro"
                                                    title="Chương 44: Tài năng nở rộ">Chương 44: Tài năng nở rộ</a></div>
                                            <div class="thumb_attr volume-title">Tìm ra kẻ phản bội</div>
                                        </div>
                                    </div>
                                    <div class="thumb_attr series-title"><a
                                            href="/truyen/7990-a-banished-failure-survives-in-the-borderland-and-becomes-an-s-rank-exorcist"
                                            title="A Banished Failure Survives in the Borderland and Becomes an S-Rank Exorcist">A
                                            Banished Failure Survives in the Borderland and Becomes an S-Rank Exorcist</a>
                                    </div>
                                </div>

                                <!-- Tooltip -->
                                <div style="display: none">
                                    <div id="series_7990">
                                        <div style="margin: 10px 0; width: 250px">
                                            <p style="color: white; font-weight: bold">
                                                A Banished Failure Survives in the Borderland and Becomes an S-Rank Exorcist
                                            </p>
                                            <p>
                                            </p>
                                            <div>Số từ: 77.008</div>
                                            <div>Lượt xem: 561.360</div>
                                            <div>Lượt thích: 2.101</div>
                                            <p></p>

                                            Đây là thế giới bị xâm chiếm bởi [Twilight]
                                            150 năm trước, trong cuộc chiến trường kì giữa nhân loại và ác quỷ. Loài người
                                            đã bại trận bởi một thứ gọi là [Twilight]. Và chúng đã xâm chiếm cả thế giới....
                                        </div>
                                    </div>
                                </div>
                                <!-- // Tooltip -->
                                <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
                                    <div class="thumb-wrapper ln-tooltip" data-tooltip-content="#series_14682">
                                        <a href="/truyen/14682-a-beautiful-girl-who-is-under-the-delusion-that-shes-dating-me-i-cant-escape-because-we-are-childhood-friends/c113106-chuong-11"
                                            title="Chương 11">
                                            <div class="a6-ratio">
                                                <div class="content img-in-ratio lazyload"
                                                    data-bg="https://docln.net/img/nocover.jpg"></div>
                                            </div>
                                        </a>
                                        <div class="thumb-detail">
                                            <div class="thumb_attr chapter-title" title="Chương 11"><a
                                                    href="/truyen/14682-a-beautiful-girl-who-is-under-the-delusion-that-shes-dating-me-i-cant-escape-because-we-are-childhood-friends/c113106-chuong-11"
                                                    title="Chương 11">Chương 11</a></div>
                                            <div class="thumb_attr volume-title">WN</div>
                                        </div>
                                    </div>
                                    <div class="thumb_attr series-title"><a
                                            href="/truyen/14682-a-beautiful-girl-who-is-under-the-delusion-that-shes-dating-me-i-cant-escape-because-we-are-childhood-friends"
                                            title="A Beautiful Girl Who Is Under the Delusion That She’s Dating Me, I Can’t Escape Because We Are Childhood Friends">A
                                            Beautiful Girl Who Is Under the Delusion That She’s Dating Me, I Can’t Escape
                                            Because We Are Childhood Friends</a></div>
                                </div>

                                <!-- Tooltip -->
                                <div style="display: none">
                                    <div id="series_14682">
                                        <div style="margin: 10px 0; width: 250px">
                                            <p style="color: white; font-weight: bold">
                                                A Beautiful Girl Who Is Under the Delusion That She’s Dating Me, I Can’t
                                                Escape Because We Are Childhood Friends
                                            </p>
                                            <p>
                                            </p>
                                            <div>Số từ: 6.963</div>
                                            <div>Lượt xem: 103.753</div>
                                            <div>Lượt thích: 675</div>
                                            <p></p>

                                            “Nè, nếu tụi mình sống chung thì chỗ này tốt đó.~”
                                            “....Hờờ.”
                                            Vào giờ nghỉ trưa, tôi, Izumi Saku, buông một tiếng thở dài chán nản.
                                            Hiện tại trước mặt tôi đây là cô gái mang tên Shiina Yukiho.
                                            Con nhỏ...
                                        </div>
                                    </div>
                                </div>
                                <!-- // Tooltip -->
                                <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
                                    <div class="thumb-wrapper ln-tooltip" data-tooltip-content="#series_17884">
                                        <a href="/truyen/17884-a-beautiful-girl-who-is-under-the-delusion-that-shes-dating-me-i-cant-escape-because-we-are-childhood-friends/c136556-chuong-25"
                                            title="Chương 25">
                                            <div class="a6-ratio">
                                                <div class="content img-in-ratio lazyload"
                                                    data-bg="https://docln.net/img/nocover.jpg"></div>
                                            </div>
                                        </a>
                                        <div class="thumb-detail">
                                            <div class="thumb_attr chapter-title" title="Chương 25"><a
                                                    href="/truyen/17884-a-beautiful-girl-who-is-under-the-delusion-that-shes-dating-me-i-cant-escape-because-we-are-childhood-friends/c136556-chuong-25"
                                                    title="Chương 25">Chương 25</a></div>
                                            <div class="thumb_attr volume-title">WN</div>
                                        </div>
                                    </div>
                                    <div class="thumb_attr series-title"><a
                                            href="/truyen/17884-a-beautiful-girl-who-is-under-the-delusion-that-shes-dating-me-i-cant-escape-because-we-are-childhood-friends"
                                            title="A Beautiful Girl Who Is Under the Delusion That She’s Dating Me, I Can’t Escape Because We Are Childhood Friends">A
                                            Beautiful Girl Who Is Under the Delusion That She’s Dating Me, I Can’t Escape
                                            Because We Are Childhood Friends</a></div>
                                </div>

                                <!-- Tooltip -->
                                <div style="display: none">
                                    <div id="series_17884">
                                        <div style="margin: 10px 0; width: 250px">
                                            <p style="color: white; font-weight: bold">
                                                A Beautiful Girl Who Is Under the Delusion That She’s Dating Me, I Can’t
                                                Escape Because We Are Childhood Friends
                                            </p>
                                            <p>
                                            </p>
                                            <div>Số từ: 8.618</div>
                                            <div>Lượt xem: 37.780</div>
                                            <div>Lượt thích: 248</div>
                                            <p></p>

                                            “Nè, nếu tụi mình sống chung thì chỗ này tốt đó.~”
                                            “....Hờờ.”
                                            Vào giờ nghỉ trưa, tôi, Izumi Saku, buông một tiếng thở dài chán nản.
                                            Hiện tại trước mặt tôi đây là cô gái mang tên Shiina Yukiho.
                                            Con nhỏ...
                                        </div>
                                    </div>
                                </div>
                                <!-- // Tooltip -->
                                <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
                                    <div class="thumb-wrapper ln-tooltip" data-tooltip-content="#series_13759">
                                        <a href="/truyen/13759-a-boy-who-was-falsely-accused-and-hurt-by-the-people-he-cares-about-even-if-they-apologize-after-finding-out-hes-innocent-hell-never-forgive-them/c116302-chuong-11-ngon-nen-cuoi-cung"
                                            title="Chương 11 Ngọn nến cuối cùng">
                                            <div class="a6-ratio">
                                                <div class="content img-in-ratio lazyload"
                                                    data-bg="https://docln.net/img/nocover.jpg"></div>
                                            </div>
                                        </a>
                                        <div class="thumb-detail">
                                            <div class="thumb_attr chapter-title" title="Chương 11 Ngọn nến cuối cùng">
                                                <a href="/truyen/13759-a-boy-who-was-falsely-accused-and-hurt-by-the-people-he-cares-about-even-if-they-apologize-after-finding-out-hes-innocent-hell-never-forgive-them/c116302-chuong-11-ngon-nen-cuoi-cung"
                                                    title="Chương 11 Ngọn nến cuối cùng">Chương 11 Ngọn nến cuối cùng</a>
                                            </div>
                                            <div class="thumb_attr volume-title">Phần 2</div>
                                        </div>
                                    </div>
                                    <div class="thumb_attr series-title"><a
                                            href="/truyen/13759-a-boy-who-was-falsely-accused-and-hurt-by-the-people-he-cares-about-even-if-they-apologize-after-finding-out-hes-innocent-hell-never-forgive-them"
                                            title="A boy who was falsely accused and hurt by the people he cares about, even if they apologize after finding out he’s innocent, he’ll never forgive them.">A
                                            boy who was falsely accused and hurt by the people he cares about, even if they
                                            apologize after finding out he’s innocent, he’ll never forgive them.</a></div>
                                </div>

                                <!-- Tooltip -->
                                <div style="display: none">
                                    <div id="series_13759">
                                        <div style="margin: 10px 0; width: 250px">
                                            <p style="color: white; font-weight: bold">
                                                A boy who was falsely accused and hurt by the people he cares about, even if
                                                they apologize after finding out he’s innocent, he’ll never forgive them.
                                            </p>
                                            <p>
                                            </p>
                                            <div>Số từ: 78.000</div>
                                            <div>Lượt xem: 405.265</div>
                                            <div>Lượt thích: 1.238</div>
                                            <p></p>

                                            Ryosuke Yamamoto đã bị buộc tội hành hung một người phụ nữ và mất đi tất cả
                                            những người thân yêu với mình. Chị gái Kaede và em gái Nagisa hoàn toàn từ mặt
                                            cậu, ngay cả bố cậu cũng bỏ rơi cậu.
                                            Ryosuke...
                                        </div>
                                    </div>
                                </div>
                                <!-- // Tooltip -->
                                <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
                                    <div class="thumb-wrapper ln-tooltip" data-tooltip-content="#series_9141">
                                        <a href="/truyen/9141-a-certain-elfs-note/c78968-chuong-08-mua-dong-trang-ben-phai"
                                            title="Chương 08: Mùa đông – Trang bên phải">
                                            <div class="a6-ratio">
                                                <div class="content img-in-ratio lazyload"
                                                    data-bg="https://docln.net/img/nocover.jpg"></div>
                                            </div>
                                        </a>
                                        <div class="thumb-detail">
                                            <div class="thumb_attr chapter-title"
                                                title="Chương 08: Mùa đông – Trang bên phải"><a
                                                    href="/truyen/9141-a-certain-elfs-note/c78968-chuong-08-mua-dong-trang-ben-phai"
                                                    title="Chương 08: Mùa đông – Trang bên phải">Chương 08: Mùa đông –
                                                    Trang bên phải</a></div>
                                            <div class="thumb_attr volume-title">Oneshot</div>
                                        </div>
                                    </div>
                                    <div class="thumb_attr series-title"><a href="/truyen/9141-a-certain-elfs-note"
                                            title="A Certain Elf’s Note">A Certain Elf’s Note</a></div>
                                </div>

                                <!-- Tooltip -->
                                <div style="display: none">
                                    <div id="series_9141">
                                        <div style="margin: 10px 0; width: 250px">
                                            <p style="color: white; font-weight: bold">
                                                A Certain Elf’s Note
                                            </p>
                                            <p>
                                            </p>
                                            <div>Số từ: 1.831</div>
                                            <div>Lượt xem: 43.474</div>
                                            <div>Lượt thích: 79</div>
                                            <p></p>

                                            Hồi ký của cô nàng elf nọ
                                        </div>
                                    </div>
                                </div>
                                <!-- // Tooltip -->
                                <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
                                    <div class="thumb-wrapper ln-tooltip" data-tooltip-content="#series_14991">
                                        <a href="/truyen/14991-a-fairy-tale-for-the-villains/c132195-chuong-10"
                                            title="Chương 10">
                                            <div class="a6-ratio">
                                                <div class="content img-in-ratio lazyload"
                                                    data-bg="https://i.docln.net/lightnovel/covers/s14991-fa3d0053-e53e-4e35-8525-3fae12ee60bd-m.jpg">
                                                </div>
                                            </div>
                                        </a>
                                        <div class="thumb-detail">
                                            <div class="thumb_attr chapter-title" title="Chương 10"><a
                                                    href="/truyen/14991-a-fairy-tale-for-the-villains/c132195-chuong-10"
                                                    title="Chương 10">Chương 10</a></div>
                                            <div class="thumb_attr volume-title">Tập 01</div>
                                        </div>
                                    </div>
                                    <div class="thumb_attr series-title"><a
                                            href="/truyen/14991-a-fairy-tale-for-the-villains"
                                            title="A Fairy Tale for the Villains">A Fairy Tale for the Villains</a></div>
                                </div>

                                <!-- Tooltip -->
                                <div style="display: none">
                                    <div id="series_14991">
                                        <div style="margin: 10px 0; width: 250px">
                                            <p style="color: white; font-weight: bold">
                                                A Fairy Tale for the Villains
                                            </p>
                                            <p>
                                            </p>
                                            <div>Số từ: 21.996</div>
                                            <div>Lượt xem: 21.375</div>
                                            <div>Lượt thích: 55</div>
                                            <p></p>

                                            Bỗng một ngày tôi được tái sinh làm nhân vật phụ trong một cuốn tiểu thuyết lãng
                                            mạn đẫm máu. Dù sinh ra trong một gia đình thường dân, nhưng cuộc sống của tôi
                                            vẫn đủ đầy do mẹ tôi làm bà vú cho nhà C...
                                        </div>
                                    </div>
                                </div>
                                <!-- // Tooltip -->
                                <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
                                    <div class="thumb-wrapper ln-tooltip" data-tooltip-content="#series_19099">
                                        <a href="/truyen/19099-a-family-of-yandere-witches-living-in-modern-day-wont-let-me-go/c142289-chuong-03-hoi-uc"
                                            title="Chương 03: Hồi ức">
                                            <div class="a6-ratio">
                                                <div class="content img-in-ratio lazyload"
                                                    data-bg="https://i2.docln.net/ln/series/covers/s19099-c98e8fcd-33bd-4c90-adeb-1d46889ad1a0.jpg">
                                                </div>
                                            </div>
                                        </a>
                                        <div class="thumb-detail">
                                            <div class="thumb_attr chapter-title" title="Chương 03: Hồi ức"><a
                                                    href="/truyen/19099-a-family-of-yandere-witches-living-in-modern-day-wont-let-me-go/c142289-chuong-03-hoi-uc"
                                                    title="Chương 03: Hồi ức">Chương 03: Hồi ức</a></div>
                                            <div class="thumb_attr volume-title">Web nv</div>
                                        </div>
                                    </div>
                                    <div class="thumb_attr series-title"><a
                                            href="/truyen/19099-a-family-of-yandere-witches-living-in-modern-day-wont-let-me-go"
                                            title="A Family of Yandere Witches Living in Modern Day Won't Let Me Go">A
                                            Family of Yandere Witches Living in Modern Day Won't Let Me Go</a></div>
                                </div>

                                <!-- Tooltip -->
                                <div style="display: none">
                                    <div id="series_19099">
                                        <div style="margin: 10px 0; width: 250px">
                                            <p style="color: white; font-weight: bold">
                                                A Family of Yandere Witches Living in Modern Day Won't Let Me Go
                                            </p>
                                            <p>
                                            </p>
                                            <div>Số từ: 5.157</div>
                                            <div>Lượt xem: 9.493</div>
                                            <div>Lượt thích: 219</div>
                                            <p></p>

                                            Nhân vật chính, Saegusa Tone, gần đây đang có một giấc mơ.
                                            Cậu mơ thấy mình bị kẹp giữa hai người phụ nữ xinh đẹp.Tuy nhiên, đó không phải
                                            là một giấc mơ dễ chịu chút nào, vì họ đang khóc khi nhìn thấ...
                                        </div>
                                    </div>
                                </div>
                                <!-- // Tooltip --> --}}
                            </main>
                            <div class="pagination-footer">
                                <div class="pagination_wrap">
                                    <!--<a href="" class="paging_item paging_prevnext prev  disabled ">Trước</a>-->
                                    <a href="https://docln.net/danh-sach?page=1"
                                        class="paging_item paging_prevnext prev  disabled ">Đầu</a>

                                    <a href="https://docln.net/danh-sach?page=1"
                                        class="paging_item page_num  current ">1</a>
                                    <a href="https://docln.net/danh-sach?page=2" class="paging_item page_num ">2</a>
                                    <a href="https://docln.net/danh-sach?page=3" class="paging_item page_num ">3</a>
                                    <a href="https://docln.net/danh-sach?page=4" class="paging_item page_num ">4</a>
                                    <a href="https://docln.net/danh-sach?page=5" class="paging_item page_num ">5</a>

                                    <!--<a href=" https://docln.net/danh-sach?page=2 " class="paging_item paging_prevnext next ">Tiếp</a>-->
                                    <a href="https://docln.net/danh-sach?page=79"
                                        class="paging_item paging_prevnext next ">Cuối</a>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </main>
    </form>
@endsection

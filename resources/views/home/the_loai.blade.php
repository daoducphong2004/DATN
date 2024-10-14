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

    <main id="mainpart" class="browser-page" style="min-height: 314px;">
        <div style="text-align: center; margin: 0 auto 10px auto;">
        </div>

        <div class="container">
            <div class="page-breadcrumb">
                <span class="breadcrum-level"><a href="https://ln.hako.vn"><i class="fas fa-home"></i></a></span>
                <span class="next-icon"><i class="fas fa-chevron-right"></i></span>
                <span class="breadcrum-level"><a href="https://ln.hako.vn/danh-sach">Danh sách</a></span>
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
                            <a class="alphabet_item " href="https://ln.hako.vn/danh-sach">Tất cả</a>
                            <a class="alphabet_item " href="https://ln.hako.vn/danh-sach/khac">#</a>
                            <a class="alphabet_item " href="https://ln.hako.vn/danh-sach/a">A</a>
                            <a class="alphabet_item " href="https://ln.hako.vn/danh-sach/b">B</a>
                            <a class="alphabet_item " href="https://ln.hako.vn/danh-sach/c">C</a>
                            <a class="alphabet_item " href="https://ln.hako.vn/danh-sach/d">D</a>
                            <a class="alphabet_item " href="https://ln.hako.vn/danh-sach/e">E</a>
                            <a class="alphabet_item " href="https://ln.hako.vn/danh-sach/f">F</a>
                            <a class="alphabet_item " href="https://ln.hako.vn/danh-sach/g">G</a>
                            <a class="alphabet_item " href="https://ln.hako.vn/danh-sach/h">H</a>
                            <a class="alphabet_item " href="https://ln.hako.vn/danh-sach/i">I</a>
                            <a class="alphabet_item " href="https://ln.hako.vn/danh-sach/j">J</a>
                            <a class="alphabet_item " href="https://ln.hako.vn/danh-sach/k">K</a>
                            <a class="alphabet_item " href="https://ln.hako.vn/danh-sach/l">L</a>
                            <a class="alphabet_item " href="https://ln.hako.vn/danh-sach/m">M</a>
                            <a class="alphabet_item " href="https://ln.hako.vn/danh-sach/n">N</a>
                            <a class="alphabet_item " href="https://ln.hako.vn/danh-sach/o">O</a>
                            <a class="alphabet_item " href="https://ln.hako.vn/danh-sach/p">P</a>
                            <a class="alphabet_item " href="https://ln.hako.vn/danh-sach/q">Q</a>
                            <a class="alphabet_item " href="https://ln.hako.vn/danh-sach/r">R</a>
                            <a class="alphabet_item " href="https://ln.hako.vn/danh-sach/s">S</a>
                            <a class="alphabet_item " href="https://ln.hako.vn/danh-sach/t">T</a>
                            <a class="alphabet_item " href="https://ln.hako.vn/danh-sach/u">U</a>
                            <a class="alphabet_item " href="https://ln.hako.vn/danh-sach/v">V</a>
                            <a class="alphabet_item " href="https://ln.hako.vn/danh-sach/w">W</a>
                            <a class="alphabet_item " href="https://ln.hako.vn/danh-sach/x">X</a>
                            <a class="alphabet_item " href="https://ln.hako.vn/danh-sach/y">Y</a>
                            <a class="alphabet_item " href="https://ln.hako.vn/danh-sach/z">Z</a>

                        </div>
                    </section>

                    <section class="sub-index-style filter-section">
                        <div class="title-wrapper">
                            <div class="section-title">Phân loại</div>
                        </div>
                        <div class="section-content">
                            <ul class="filter-type unstyled">
                                <li><input type="checkbox" name="truyendich" value="1" checked=""> Truyện dịch</li>
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
                                <li><input type="checkbox" name="dangtienhanh" value="1" checked=""> Đang tiến
                                    hành</li>
                                <li><input type="checkbox" name="tamngung" value="1" checked=""> Tạm ngưng</li>
                                <li><input type="checkbox" name="hoanthanh" value="1" checked=""> Đã hoàn thành
                                </li>
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
                                <li class="filter-type_item"><a href="https://ln.hako.vn/the-loai/action">Action</a>
                                </li>
                                <li class="filter-type_item"><a
                                        href="https://ln.hako.vn/the-loai/adapted-to-anime">Adapted to Anime</a>
                                </li>
                                <li class="filter-type_item"><a
                                        href="https://ln.hako.vn/the-loai/adapted-to-drama-cd">Adapted to Drama CD</a>
                                </li>
                                <li class="filter-type_item"><a
                                        href="https://ln.hako.vn/the-loai/adapted-to-manga">Adapted to Manga</a>
                                </li>
                                <li class="filter-type_item"><a href="https://ln.hako.vn/the-loai/adult">Adult</a>
                                </li>
                                <li class="filter-type_item"><a href="https://ln.hako.vn/the-loai/adventure">Adventure</a>
                                </li>
                                <li class="filter-type_item"><a href="https://ln.hako.vn/the-loai/age-gap">Age Gap</a>
                                </li>
                                <li class="filter-type_item"><a href="https://ln.hako.vn/the-loai/boys-love">Boys Love</a>
                                </li>
                                <li class="filter-type_item"><a
                                        href="https://ln.hako.vn/the-loai/character-growth">Character Growth</a>
                                </li>
                                <li class="filter-type_item"><a href="https://ln.hako.vn/the-loai/chinese-novel">Chinese
                                        Novel</a>
                                </li>
                                <li class="filter-type_item"><a href="https://ln.hako.vn/the-loai/comedy">Comedy</a>
                                </li>
                                <li class="filter-type_item"><a href="https://ln.hako.vn/the-loai/cooking">Cooking</a>
                                </li>
                                <li class="filter-type_item"><a
                                        href="https://ln.hako.vn/the-loai/different-social-status">Different Social
                                        Status</a>
                                </li>
                                <li class="filter-type_item"><a href="https://ln.hako.vn/the-loai/drama">Drama</a>
                                </li>
                                <li class="filter-type_item"><a href="https://ln.hako.vn/the-loai/ecchi">Ecchi</a>
                                </li>
                                <li class="filter-type_item"><a href="https://ln.hako.vn/the-loai/english-novel">English
                                        Novel</a>
                                </li>
                                <li class="filter-type_item"><a href="https://ln.hako.vn/the-loai/fantasy">Fantasy</a>
                                </li>
                                <li class="filter-type_item"><a
                                        href="https://ln.hako.vn/the-loai/female-protagonist">Female Protagonist</a>
                                </li>
                                <li class="filter-type_item"><a href="https://ln.hako.vn/the-loai/game">Game</a>
                                </li>
                                <li class="filter-type_item"><a href="https://ln.hako.vn/the-loai/gender-bender">Gender
                                        Bender</a>
                                </li>
                                <li class="filter-type_item"><a href="https://ln.hako.vn/the-loai/harem">Harem</a>
                                </li>
                                <li class="filter-type_item"><a
                                        href="https://ln.hako.vn/the-loai/historical">Historical</a>
                                </li>
                                <li class="filter-type_item"><a href="https://ln.hako.vn/the-loai/horror">Horror</a>
                                </li>
                                <li class="filter-type_item"><a href="https://ln.hako.vn/the-loai/incest">Incest</a>
                                </li>
                                <li class="filter-type_item"><a href="https://ln.hako.vn/the-loai/isekai">Isekai</a>
                                </li>
                                <li class="filter-type_item"><a href="https://ln.hako.vn/the-loai/josei">Josei</a>
                                </li>
                                <li class="filter-type_item"><a href="https://ln.hako.vn/the-loai/korean-novel">Korean
                                        Novel</a>
                                </li>
                                <li class="filter-type_item"><a href="https://ln.hako.vn/the-loai/magic">Magic</a>
                                </li>
                                <li class="filter-type_item"><a href="https://ln.hako.vn/the-loai/martial-arts">Martial
                                        Arts</a>
                                </li>
                                <li class="filter-type_item"><a href="https://ln.hako.vn/the-loai/mature">Mature</a>
                                </li>
                                <li class="filter-type_item"><a href="https://ln.hako.vn/the-loai/mecha">Mecha</a>
                                </li>
                                <li class="filter-type_item"><a href="https://ln.hako.vn/the-loai/military">Military</a>
                                </li>
                                <li class="filter-type_item"><a
                                        href="https://ln.hako.vn/the-loai/misunderstanding">Misunderstanding</a>
                                </li>
                                <li class="filter-type_item"><a href="https://ln.hako.vn/the-loai/mystery">Mystery</a>
                                </li>
                                <li class="filter-type_item"><a href="https://ln.hako.vn/the-loai/netorare">Netorare</a>
                                </li>
                                <li class="filter-type_item"><a href="https://ln.hako.vn/the-loai/one-shot">One shot</a>
                                </li>
                                <li class="filter-type_item"><a href="https://ln.hako.vn/the-loai/otome-game">Otome
                                        Game</a>
                                </li>
                                <li class="filter-type_item"><a href="https://ln.hako.vn/the-loai/parody">Parody</a>
                                </li>
                                <li class="filter-type_item"><a
                                        href="https://ln.hako.vn/the-loai/psychological">Psychological</a>
                                </li>
                                <li class="filter-type_item"><a href="https://ln.hako.vn/the-loai/reverse-harem">Reverse
                                        Harem</a>
                                </li>
                                <li class="filter-type_item"><a href="https://ln.hako.vn/the-loai/romance">Romance</a>
                                </li>
                                <li class="filter-type_item"><a href="https://ln.hako.vn/the-loai/school-life">School
                                        Life</a>
                                </li>
                                <li class="filter-type_item"><a href="https://ln.hako.vn/the-loai/science-fiction">Science
                                        Fiction</a>
                                </li>
                                <li class="filter-type_item"><a href="https://ln.hako.vn/the-loai/seinen">Seinen</a>
                                </li>
                                <li class="filter-type_item"><a href="https://ln.hako.vn/the-loai/shoujo">Shoujo</a>
                                </li>
                                <li class="filter-type_item"><a href="https://ln.hako.vn/the-loai/shoujo-ai">Shoujo ai</a>
                                </li>
                                <li class="filter-type_item"><a href="https://ln.hako.vn/the-loai/shounen">Shounen</a>
                                </li>
                                <li class="filter-type_item"><a href="https://ln.hako.vn/the-loai/shounen-ai">Shounen
                                        ai</a>
                                </li>
                                <li class="filter-type_item"><a href="https://ln.hako.vn/the-loai/slice-of-life">Slice of
                                        Life</a>
                                </li>
                                <li class="filter-type_item"><a href="https://ln.hako.vn/the-loai/slow-life">Slow Life</a>
                                </li>
                                <li class="filter-type_item"><a href="https://ln.hako.vn/the-loai/sports">Sports</a>
                                </li>
                                <li class="filter-type_item"><a href="https://ln.hako.vn/the-loai/super-power">Super
                                        Power</a>
                                </li>
                                <li class="filter-type_item"><a
                                        href="https://ln.hako.vn/the-loai/supernatural">Supernatural</a>
                                </li>
                                <li class="filter-type_item"><a href="https://ln.hako.vn/the-loai/suspense">Suspense</a>
                                </li>
                                <li class="filter-type_item"><a href="https://ln.hako.vn/the-loai/tragedy">Tragedy</a>
                                </li>
                                <li class="filter-type_item"><a href="https://ln.hako.vn/the-loai/wars">Wars</a>
                                </li>
                                <li class="filter-type_item"><a href="https://ln.hako.vn/the-loai/web-novel">Web Novel</a>
                                </li>
                                <li class="filter-type_item"><a href="https://ln.hako.vn/the-loai/workplace">Workplace</a>
                                </li>
                                <li class="filter-type_item"><a href="https://ln.hako.vn/the-loai/yuri">Yuri</a>
                                </li>
                            </ul>
                        </div>
                    </section>
                </div>

                <div class="col-12 float-left col-lg-9">
                    <section class="sub-index-style">
                        <div class="title-wrapper">
                            <div class="section-title">Giới thiệu</div>
                        </div>
                        <div class="section-content">
                            Thể loại hành động, thường có nội dung về đánh nhau, bạo lực, hỗn loạn, với diễn biến nhanh.
                        </div>
                    </section>


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
                                                title="Chương 8: Cô gái đảo nghịch tỏa sáng nơi bóng tối ngự trị">Chương 8:
                                                Cô gái đảo nghịch tỏa sáng nơi bóng tối ngự trị</a></div>
                                        <div class="thumb_attr volume-title">Vol 01: Cô gái đảo nghịch từ chối lòng thương
                                            xót của Chúa</div>
                                    </div>
                                </div>
                                <div class="thumb_attr series-title"><a
                                        href="/truyen/3845-omae-gotoki-ga-maou-ni-kateru-to-omou-na-to-gachizei-ni-yuusha-party-wo-tsuihou-sareta-node-outo-de-kimama-ni-kurashitai"
                                        title="&quot;Omae Gotoki ga Maou ni Kateru to Omou na&quot; to Gachizei ni Yuusha Party wo Tsuihou Sareta node, Outo de Kimama ni Kurashitai">"Omae
                                        Gotoki ga Maou ni Kateru to Omou na" to Gachizei ni Yuusha Party wo Tsuihou Sareta
                                        node, Outo de Kimama ni Kurashitai</a></div>
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
                                        <div>Lượt xem: 208.074</div>
                                        <div>Lượt thích: 567</div>
                                        <p></p>

                                        Đây là một câu chuyện kể về cô gái - người từng mang danh Anh Hùng - đi lên từ dưới
                                        đáy xã hội để quay trở về cuộc sống bình thường.
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
                                                title="Chương 04: Đi thôi, tới ngôi làng của sự tuyệt vọng.">Chương 04: Đi
                                                thôi, tới ngôi làng của sự tuyệt vọng.</a></div>
                                        <div class="thumb_attr volume-title">ARC 02 : Nô lệ mang dấu ấn, mong muốn chuỗi
                                            ngày vô tận và sự kiểm soát</div>
                                    </div>
                                </div>
                                <div class="thumb_attr series-title"><a
                                        href="/truyen/5091-omae-gotoki-ga-maou-ni-kateru-to-omou-na-to-gachizei-ni-yuusha-party-wo-tsuihou-sareta-node-outo-de-kimama-ni-kurashitai"
                                        title="&quot;Omae Gotoki ga Maou ni Kateru to Omou na&quot; to Gachizei ni Yuusha Party wo Tsuihou Sareta node, Outo de Kimama ni Kurashitai">"Omae
                                        Gotoki ga Maou ni Kateru to Omou na" to Gachizei ni Yuusha Party wo Tsuihou Sareta
                                        node, Outo de Kimama ni Kurashitai</a></div>
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
                                        <div>Lượt xem: 128.259</div>
                                        <div>Lượt thích: 417</div>
                                        <p></p>

                                        Flamm Apricot chưa từng bao giờ muốn rời khỏi làng của mình. Cô hài lòng dành cả
                                        quãng đời để sống yên bình tại nơi đây. Không may, sau khi bị chỉ định bởi lời tiên
                                        tri của Thần Sáng tạo [Origin] rằng...
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
                                                title="Chương 19: Sự thật không có ở đó đâu">Chương 19: Sự thật không có ở
                                                đó đâu</a></div>
                                        <div class="thumb_attr volume-title">Vol 3: Đứa trẻ xoắn ốc người nói ra những ác ý
                                        </div>
                                    </div>
                                </div>
                                <div class="thumb_attr series-title"><a
                                        href="/truyen/8184-omae-gotoki-ga-maou-ni-kateru-to-omou-na-to-gachizei-ni-yuusha-party-wo-tsuihou-sareta-node-outo-de-kimama-ni-kurashitai"
                                        title="&quot;Omae Gotoki ga Maou ni Kateru to Omou na&quot; to Gachizei ni Yuusha Party wo Tsuihou Sareta node, Outo de Kimama ni Kurashitai">"Omae
                                        Gotoki ga Maou ni Kateru to Omou na" to Gachizei ni Yuusha Party wo Tsuihou Sareta
                                        node, Outo de Kimama ni Kurashitai</a></div>
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
                                        <div>Lượt xem: 109.294</div>
                                        <div>Lượt thích: 483</div>
                                        <p></p>

                                        Flamm Apricot, một trong 7 anh hùng được thần linh lựa chọn để tiêu diệt quỷ tộc cứu
                                        rỗi loài người.
                                        Trái ngược với đồng đội mình với chỉ số cao ngất trời, chỉ số của Flamm là con số 0
                                        dù cô có làm gì...
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
                                                title="Chương 59: Tiến đến lâu đài">Chương 59: Tiến đến lâu đài</a></div>
                                        <div class="thumb_attr volume-title">Arc 2: Tiến tới Học viện nào!</div>
                                    </div>
                                </div>
                                <div class="thumb_attr series-title"><a href="/truyen/4849-um-sorry-ive-been-reincarnated"
                                        title="(Um, Sorry) I’ve Been Reincarnated!">(Um, Sorry) I’ve Been Reincarnated!</a>
                                </div>
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
                                        <div>Lượt xem: 359.280</div>
                                        <div>Lượt thích: 856</div>
                                        <p></p>

                                        Sau khi bị một vị thần vô tình cướp đi mạng sống của mình. Shou được tái sinh với
                                        món quà từ thần để bù dắp cho cậu. Shou yêu cầu giữ lại tất cả ký ức từ kiếp trước.
                                        Cậu tái sinh thành Will, con trai...
                                    </div>
                                </div>
                            </div>
                            <!-- // Tooltip -->
                            <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
                                <div class="thumb-wrapper ln-tooltip" data-tooltip-content="#series_19282">
                                    <a href="/truyen/19282-1-second-invincibility-in-the-game/c145257-chuong-02"
                                        title="Chương 02">
                                        <div class="a6-ratio">
                                            <div class="content img-in-ratio lazyloaded"
                                                data-bg="https://i.hako.vn/ln/series/covers/s19282-f729cf3e-bdef-4c43-8e6e-d87dd339f727.jpg"
                                                style="background-image: url(&quot;https://i.hako.vn/ln/series/covers/s19282-f729cf3e-bdef-4c43-8e6e-d87dd339f727.jpg&quot;);">
                                            </div>
                                        </div>
                                    </a>
                                    <div class="thumb-detail">
                                        <div class="thumb_attr chapter-title" title="Chương 02"><a
                                                href="/truyen/19282-1-second-invincibility-in-the-game/c145257-chuong-02"
                                                title="Chương 02">Chương 02</a></div>
                                        <div class="thumb_attr volume-title">Webnovel</div>
                                    </div>
                                </div>
                                <div class="thumb_attr series-title"><a
                                        href="/truyen/19282-1-second-invincibility-in-the-game"
                                        title="1 Second Invincibility in the Game">1 Second Invincibility in the Game</a>
                                </div>
                            </div>

                            <!-- Tooltip -->
                            <div style="display: none">
                                <div id="series_19282">
                                    <div style="margin: 10px 0; width: 250px">
                                        <p style="color: white; font-weight: bold">
                                            1 Second Invincibility in the Game
                                        </p>
                                        <p>
                                        </p>
                                        <div>Số từ: 5.104</div>
                                        <div>Lượt xem: 3.400</div>
                                        <div>Lượt thích: 51</div>
                                        <p></p>

                                        Tôi chợt thấy mình trong thân xác của một thiếu gia mà ai ai cũng đều muốn giết.
                                        Nhưng tôi thì bất khả chiến bại, nên cứ để họ thử giết tôi. Chỉ có điều, sự bất khả
                                        chiến bại đó chỉ kéo dài trong một...
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
                                        <div class="thumb_attr chapter-title" title="Chương 20: Đi nhận nhiệm vụ nào"><a
                                                href="/truyen/5184-koko-wa-ore-ni-makasete-saki-ni-ike-to-itte-kara-10-nen-ga-tattara-densetsu-ni-natteita/c58018-chuong-20-di-nhan-nhiem-vu-nao"
                                                title="Chương 20: Đi nhận nhiệm vụ nào">Chương 20: Đi nhận nhiệm vụ nào</a>
                                        </div>
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
                                            10 năm sau khi nói câu “Cứ đi đi, ở đây để tôi lo”, tôi đã trở thành một huyền
                                            thoại
                                        </p>
                                        <p>
                                        </p>
                                        <div>Số từ: 19.387</div>
                                        <div>Lượt xem: 168.531</div>
                                        <div>Lượt thích: 761</div>
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
                                        <div class="thumb_attr chapter-title" title="Chapter 23 : Điều cậu ấy bảo vệ."><a
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
                                            10 năm sau khi nói câu “Cứ đi đi, ở đây để tôi lo”, tôi đã trở thành một huyền
                                            thoại
                                        </p>
                                        <p>
                                        </p>
                                        <div>Số từ: 4.573</div>
                                        <div>Lượt xem: 42.551</div>
                                        <div>Lượt thích: 242</div>
                                        <p></p>

                                        Khi tổ Đội Anh Hùng bị tấn công bởi Quân Đoàn quỷ vương với số lượng vô số kể, không
                                        nghi ngờ gì nữa nếu đối đầu trực tiếp tổ đội sẽ hoàn toàn bị tiêu diệt.
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
                                        <div class="thumb_attr volume-title">Chương 08: Lãnh đạo tiên phong Yuuji trở thành
                                            trưởng làng Honjou, lãnh địa Pasteur</div>
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
                                        <div>Lượt xem: 553.089</div>
                                        <div>Lượt thích: 1.786</div>
                                        <p></p>

                                        Houjou Yuuji, 30 tuổi, thất nghiệp, là một hikikomori trong suốt 10 năm, quyết định
                                        đi ra khỏi nhà. Tuy nhiên, bên ngoài đó lại là một thế giới khác cùng với những sinh
                                        vật kì lạ mà cậu chưa từng biết...
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
                                        <div>Lượt xem: 57.590</div>
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
                                <div class="thumb-wrapper ln-tooltip" data-tooltip-content="#series_2138">
                                    <a href="/truyen/2138-29-years-old-bachelor-was-brought-to-a-different-world-to-live-freely/c46557-chuong-10-toi-roi-vao-trang-thai-cam-ghet-ban-than-minh"
                                        title="Chương 26: Tôi rơi vào trạng thái căm ghét bản thân mình.">
                                        <div class="a6-ratio">
                                            <div class="content img-in-ratio lazyloaded"
                                                data-bg="https://2.bp.blogspot.com/-1O8TibBXvaU/WovJMyYTnSI/AAAAAAAA_18/sRf55GJAP20NgVb4BiX62wJcLwf2NMIqACHMYCw/w215/default.jpg"
                                                style="background-image: url(&quot;https://2.bp.blogspot.com/-1O8TibBXvaU/WovJMyYTnSI/AAAAAAAA_18/sRf55GJAP20NgVb4BiX62wJcLwf2NMIqACHMYCw/w215/default.jpg&quot;);">
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
                                        title="29-sai Dokushin wa Isekai de Jiyuu ni Ikita......katta">29-sai Dokushin wa
                                        Isekai de Jiyuu ni Ikita......katta</a></div>
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
                                        <div>Lượt xem: 419.661</div>
                                        <div>Lượt thích: 1.896</div>
                                        <p></p>

                                        Một anh main 29 tuổi còn độc thân được qua thế giới khác mà mình từng mong muốn…
                                        Từ những ngày đầu khi anh đăng ký vào Guild mạo hiểm giả, anh gặp một cô gái và đã
                                        miễn cưỡng phải cưới cô ấy.
                                        Hơn mười...
                                    </div>
                                </div>
                            </div>
                            <!-- // Tooltip -->
                            <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
                                <div class="thumb-wrapper ln-tooltip" data-tooltip-content="#series_1985">
                                    <a href="/truyen/1985-86-eightysix/c65065-chuong-8-run-to-the-battlefront"
                                        title="Chương 8: Run to the Battlefront">
                                        <div class="a6-ratio">
                                            <div class="content img-in-ratio lazyloaded"
                                                data-bg="https://i.docln.net/lightnovel/covers/s1985-b606b7d8-33bc-4b2c-87a5-5f811c463ae8-m.jpg"
                                                style="background-image: url(&quot;https://i.docln.net/lightnovel/covers/s1985-b606b7d8-33bc-4b2c-87a5-5f811c463ae8-m.jpg&quot;);">
                                            </div>
                                        </div>
                                    </a>
                                    <div class="thumb-detail">
                                        <div class="thumb_attr chapter-title" title="Chương 8: Run to the Battlefront"><a
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
                                        <div>Lượt xem: 763.353</div>
                                        <div>Lượt thích: 1.902</div>
                                        <p></p>

                                        Cộng hòa San Magnolia.Quốc gia này từ lâu đã chịu phải ách xâm lược từ những Legion
                                        - chiến xa không người lái của phía Đế quốc. Để đáp trả lại mối đe doạ đó, nước Cộng
                                        hoà cũng phát triển thành công...
                                    </div>
                                </div>
                            </div>
                            <!-- // Tooltip -->
                            <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
                                <div class="thumb-wrapper ln-tooltip" data-tooltip-content="#series_2463">
                                    <a href="/truyen/2463-99th-vampire-princess-the-last-vampire/c35808-part-03"
                                        title="Part 03">
                                        <div class="a6-ratio">
                                            <div class="content img-in-ratio lazyloaded"
                                                data-bg="https://3.bp.blogspot.com/-io56sbTwLKQ/WtNbfTL0lDI/AAAAAAABHzE/4C55FPwci4wEpA10SHqrMkoiIdxYQHrVgCHMYCw/w215/default.jpg"
                                                style="background-image: url(&quot;https://3.bp.blogspot.com/-io56sbTwLKQ/WtNbfTL0lDI/AAAAAAABHzE/4C55FPwci4wEpA10SHqrMkoiIdxYQHrVgCHMYCw/w215/default.jpg&quot;);">
                                            </div>
                                        </div>
                                    </a>
                                    <div class="thumb-detail">
                                        <div class="thumb_attr chapter-title" title="Part 03"><a
                                                href="/truyen/2463-99th-vampire-princess-the-last-vampire/c35808-part-03"
                                                title="Part 03">Part 03</a></div>
                                        <div class="thumb_attr volume-title">Chương 1: Truyền thuyết về nghi thức " Liên
                                            lạc với người chết"</div>
                                    </div>
                                </div>
                                <div class="thumb_attr series-title"><a
                                        href="/truyen/2463-99th-vampire-princess-the-last-vampire"
                                        title="99th vampire princess ~The last vampire~">99th vampire princess ~The last
                                        vampire~</a></div>
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
                                        <div>Lượt xem: 32.651</div>
                                        <div>Lượt thích: 245</div>
                                        <p></p>

                                        "Lores" - những hình thể đáng kể được sinh ra từ những truyền thuyết thành phố. Và
                                        học sinh trung học Tsukumo Jin, người đã vô tình giải phóng "truyền thuyết về ma cà
                                        rồng" mạnh mẽ nhất, giờ đây là ng...
                                    </div>
                                </div>
                            </div>
                            <!-- // Tooltip -->
                            <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
                                <div class="thumb-wrapper ln-tooltip" data-tooltip-content="#series_7990">
                                    <a href="/truyen/7990-a-banished-failure-survives-in-the-borderland-and-becomes-an-s-rank-exorcist/c91611-chuong-44-tai-nang-no-ro"
                                        title="Chương 44: Tài năng nở rộ">
                                        <div class="a6-ratio">
                                            <div class="content img-in-ratio lazyloaded"
                                                data-bg="https://i.docln.net/lightnovel/covers/s7990-c92b1939-3e9e-4fa8-8187-32a3e50a29cc-m.jpg"
                                                style="background-image: url(&quot;https://i.docln.net/lightnovel/covers/s7990-c92b1939-3e9e-4fa8-8187-32a3e50a29cc-m.jpg&quot;);">
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
                                        Banished Failure Survives in the Borderland and Becomes an S-Rank Exorcist</a></div>
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
                                        <div>Lượt xem: 569.214</div>
                                        <div>Lượt thích: 2.100</div>
                                        <p></p>

                                        Đây là thế giới bị xâm chiếm bởi [Twilight]
                                        150 năm trước, trong cuộc chiến trường kì giữa nhân loại và ác quỷ. Loài người đã
                                        bại trận bởi một thứ gọi là [Twilight]. Và chúng đã xâm chiếm cả thế giới....
                                    </div>
                                </div>
                            </div>
                            <!-- // Tooltip -->
                            <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
                                <div class="thumb-wrapper ln-tooltip" data-tooltip-content="#series_6647">
                                    <a href="/truyen/6647-a-guess-in-the-ghost-house/c62526-chuong-29" title="Chương 29">
                                        <div class="a6-ratio">
                                            <div class="content img-in-ratio lazyloaded"
                                                data-bg="https://i.docln.net/lightnovel/covers/s6647-eec7d78c-f2bf-44c4-ac95-891358a5385f-m.jpg"
                                                style="background-image: url(&quot;https://i.docln.net/lightnovel/covers/s6647-eec7d78c-f2bf-44c4-ac95-891358a5385f-m.jpg&quot;);">
                                            </div>
                                        </div>
                                    </a>
                                    <div class="thumb-detail">
                                        <div class="thumb_attr chapter-title" title="Chương 29"><a
                                                href="/truyen/6647-a-guess-in-the-ghost-house/c62526-chuong-29"
                                                title="Chương 29">Chương 29</a></div>
                                        <div class="thumb_attr volume-title">Danh Sách Chương</div>
                                    </div>
                                </div>
                                <div class="thumb_attr series-title"><a href="/truyen/6647-a-guess-in-the-ghost-house"
                                        title="A Guess In The Ghost House">A Guess In The Ghost House</a></div>
                            </div>

                            <!-- Tooltip -->
                            <div style="display: none">
                                <div id="series_6647">
                                    <div style="margin: 10px 0; width: 250px">
                                        <p style="color: white; font-weight: bold">
                                            A Guess In The Ghost House
                                        </p>
                                        <p>
                                        </p>
                                        <div>Số từ: 18.286</div>
                                        <div>Lượt xem: 39.796</div>
                                        <div>Lượt thích: 57</div>
                                        <p></p>

                                        Cứ mỗi 3 ngày tôi lại nhân được 3 tấm ảnh báo trước cái chết của ai đó. Tôi bắt đầu
                                        tìm kiếm nguồn gốc của những bức ảnh này và chợt nhận ra mình đã bị mắc kẹt trong
                                        một ngôi nhà ma với 108 hồn ma nữ...
                                    </div>
                                </div>
                            </div>
                            <!-- // Tooltip -->
                            <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
                                <div class="thumb-wrapper ln-tooltip" data-tooltip-content="#series_6674">
                                    <a href="/truyen/6674-a-monster-who-levels-up/c62678-chuong-09-tho-san-thien-bam-3"
                                        title="Chương 09: Thợ săn thiên bẩm (3)">
                                        <div class="a6-ratio">
                                            <div class="content img-in-ratio lazyloaded"
                                                data-bg="https://i.docln.net/lightnovel/covers/s6674-fa5ad1a9-3dc9-489a-93e2-2300549326f8-m.jpg"
                                                style="background-image: url(&quot;https://i.docln.net/lightnovel/covers/s6674-fa5ad1a9-3dc9-489a-93e2-2300549326f8-m.jpg&quot;);">
                                            </div>
                                        </div>
                                    </a>
                                    <div class="thumb-detail">
                                        <div class="thumb_attr chapter-title" title="Chương 09: Thợ săn thiên bẩm (3)"><a
                                                href="/truyen/6674-a-monster-who-levels-up/c62678-chuong-09-tho-san-thien-bam-3"
                                                title="Chương 09: Thợ săn thiên bẩm (3)">Chương 09: Thợ săn thiên bẩm
                                                (3)</a></div>
                                        <div class="thumb_attr volume-title">WN</div>
                                    </div>
                                </div>
                                <div class="thumb_attr series-title"><a href="/truyen/6674-a-monster-who-levels-up"
                                        title="A Monster Who Levels Up">A Monster Who Levels Up</a></div>
                            </div>

                            <!-- Tooltip -->
                            <div style="display: none">
                                <div id="series_6674">
                                    <div style="margin: 10px 0; width: 250px">
                                        <p style="color: white; font-weight: bold">
                                            A Monster Who Levels Up
                                        </p>
                                        <p>
                                        </p>
                                        <div>Số từ: 11.274</div>
                                        <div>Lượt xem: 41.875</div>
                                        <div>Lượt thích: 117</div>
                                        <p></p>

                                        Câu chuyện về một chàng trai có tên là Kim Sae-Jin, người có thể biến thành Quái Vật
                                        và lên cấp.Ben 10 ver.Hàn
                                    </div>
                                </div>
                            </div>
                            <!-- // Tooltip -->
                            <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
                                <div class="thumb-wrapper ln-tooltip" data-tooltip-content="#series_4915">
                                    <a href="/truyen/4915-a-monster-who-levels-up/c51160-chuong-06-long-nhan-hau-cua-goblin-3"
                                        title="Chương 06 - Lòng Nhân Hậu của Goblin (3)">
                                        <div class="a6-ratio">
                                            <div class="content img-in-ratio lazyloaded"
                                                data-bg="https://i.docln.net/lightnovel/covers/s4915-849f00e6-c4b1-4983-bd0d-a08a1eb3bdf4-m.jpg"
                                                style="background-image: url(&quot;https://i.docln.net/lightnovel/covers/s4915-849f00e6-c4b1-4983-bd0d-a08a1eb3bdf4-m.jpg&quot;);">
                                            </div>
                                        </div>
                                    </a>
                                    <div class="thumb-detail">
                                        <div class="thumb_attr chapter-title"
                                            title="Chương 06 - Lòng Nhân Hậu của Goblin (3)"><a
                                                href="/truyen/4915-a-monster-who-levels-up/c51160-chuong-06-long-nhan-hau-cua-goblin-3"
                                                title="Chương 06 - Lòng Nhân Hậu của Goblin (3)">Chương 06 - Lòng Nhân Hậu
                                                của Goblin (3)</a></div>
                                        <div class="thumb_attr volume-title">Web Novel</div>
                                    </div>
                                </div>
                                <div class="thumb_attr series-title"><a href="/truyen/4915-a-monster-who-levels-up"
                                        title="A Monster Who Levels Up">A Monster Who Levels Up</a></div>
                            </div>

                            <!-- Tooltip -->
                            <div style="display: none">
                                <div id="series_4915">
                                    <div style="margin: 10px 0; width: 250px">
                                        <p style="color: white; font-weight: bold">
                                            A Monster Who Levels Up
                                        </p>
                                        <p>
                                        </p>
                                        <div>Số từ: 18.044</div>
                                        <div>Lượt xem: 78.507</div>
                                        <div>Lượt thích: 236</div>
                                        <p></p>

                                        Câu chuyện về một chàng trai có tên là Kim Sae-Jin, người có thể biến thành Quái Vật
                                        và lên cấp.
                                    </div>
                                </div>
                            </div>
                            <!-- // Tooltip -->
                            <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
                                <div class="thumb-wrapper ln-tooltip" data-tooltip-content="#series_14997">
                                    <a href="/truyen/14997-a-monster-who-levels-up/c112682-chuong-1-tro-thanh-soi-1"
                                        title="Chương 1: Trở thành sói (1)">
                                        <div class="a6-ratio">
                                            <div class="content img-in-ratio lazyloaded"
                                                data-bg="https://i.docln.net/lightnovel/covers/s14997-e0d45f7f-de5b-4fdb-80f6-c098a365fbf3-m.jpg"
                                                style="background-image: url(&quot;https://i.docln.net/lightnovel/covers/s14997-e0d45f7f-de5b-4fdb-80f6-c098a365fbf3-m.jpg&quot;);">
                                            </div>
                                        </div>
                                    </a>
                                    <div class="thumb-detail">
                                        <div class="thumb_attr chapter-title" title="Chương 1: Trở thành sói (1)"><a
                                                href="/truyen/14997-a-monster-who-levels-up/c112682-chuong-1-tro-thanh-soi-1"
                                                title="Chương 1: Trở thành sói (1)">Chương 1: Trở thành sói (1)</a></div>
                                        <div class="thumb_attr volume-title">Vol. 1</div>
                                    </div>
                                </div>
                                <div class="thumb_attr series-title"><a href="/truyen/14997-a-monster-who-levels-up"
                                        title="A Monster Who Levels Up">A Monster Who Levels Up</a></div>
                            </div>

                            <!-- Tooltip -->
                            <div style="display: none">
                                <div id="series_14997">
                                    <div style="margin: 10px 0; width: 250px">
                                        <p style="color: white; font-weight: bold">
                                            A Monster Who Levels Up
                                        </p>
                                        <p>
                                        </p>
                                        <div>Số từ: 1.998</div>
                                        <div>Lượt xem: 8.696</div>
                                        <div>Lượt thích: 44</div>
                                        <p></p>

                                        Câu chuyện kể về một người đàn ông tên là Kim Sae-Jin. Một ngày nọ, không hiểu sao
                                        anh tỉnh dậy và biến thành Quái vật. Cùng theo dõi hành trình đầy nguy hiểm của anh
                                        ta để lấy lại cuộc sống như một C...
                                    </div>
                                </div>
                            </div>
                            <!-- // Tooltip -->
                            <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
                                <div class="thumb-wrapper ln-tooltip" data-tooltip-content="#series_15876">
                                    <a href="/truyen/15876-a-neets-guide-to-the-parallel-world-healer-the-strongest-cheat/c117769-chuong-02-part-2-suc-manh-ky-bi"
                                        title="Chương 23+24+25">
                                        <div class="a6-ratio">
                                            <div class="content img-in-ratio lazyloaded"
                                                data-bg="https://i.docln.net/lightnovel/covers/s15876-ff861f18-83d4-446f-bd8e-92fb1c8bd4ab-m.jpg"
                                                style="background-image: url(&quot;https://i.docln.net/lightnovel/covers/s15876-ff861f18-83d4-446f-bd8e-92fb1c8bd4ab-m.jpg&quot;);">
                                            </div>
                                        </div>
                                    </a>
                                    <div class="thumb-detail">
                                        <div class="thumb_attr chapter-title" title="Chương 23+24+25"><a
                                                href="/truyen/15876-a-neets-guide-to-the-parallel-world-healer-the-strongest-cheat/c117769-chuong-02-part-2-suc-manh-ky-bi"
                                                title="Chương 23+24+25">Chương 23+24+25</a></div>
                                        <div class="thumb_attr volume-title">Web Novel</div>
                                    </div>
                                </div>
                                <div class="thumb_attr series-title"><a
                                        href="/truyen/15876-a-neets-guide-to-the-parallel-world-healer-the-strongest-cheat"
                                        title="A NEET’s Guide to the Parallel World: Healer, the Strongest Cheat?">A NEET’s
                                        Guide to the Parallel World: Healer, the Strongest Cheat?</a></div>
                            </div>

                            <!-- Tooltip -->
                            <div style="display: none">
                                <div id="series_15876">
                                    <div style="margin: 10px 0; width: 250px">
                                        <p style="color: white; font-weight: bold">
                                            A NEET’s Guide to the Parallel World: Healer, the Strongest Cheat?
                                        </p>
                                        <p>
                                        </p>
                                        <div>Số từ: 9.025</div>
                                        <div>Lượt xem: 10.080</div>
                                        <div>Lượt thích: 84</div>
                                        <p></p>

                                        Sau khi nhảy lầu tự tử, Masamune bị kéo vào một cuộc triệu hồi tới một thế giới
                                        khác.
                                        Tại chính điện.
                                        Tất cả mọi người đều nhận được những chức nghiệp cấp cao như Hiền Nhân hay Anh Hùng.
                                        Ngoại trừ Mas...
                                    </div>
                                </div>
                            </div>
                            <!-- // Tooltip -->
                            <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
                                <div class="thumb-wrapper ln-tooltip" data-tooltip-content="#series_7199">
                                    <a href="/truyen/7199-a-neets-guide-to-the-parallel-world-healer-the-strongest-cheat/c68551-chuong-08-binh-minh"
                                        title="Chương 08 - Bình minh.">
                                        <div class="a6-ratio">
                                            <div class="content img-in-ratio lazyloaded"
                                                data-bg="https://i.docln.net/lightnovel/covers/s7199-9a2a7dac-c711-442e-ba06-d0d062d0a196-m.jpg"
                                                style="background-image: url(&quot;https://i.docln.net/lightnovel/covers/s7199-9a2a7dac-c711-442e-ba06-d0d062d0a196-m.jpg&quot;);">
                                            </div>
                                        </div>
                                    </a>
                                    <div class="thumb-detail">
                                        <div class="thumb_attr chapter-title" title="Chương 08 - Bình minh."><a
                                                href="/truyen/7199-a-neets-guide-to-the-parallel-world-healer-the-strongest-cheat/c68551-chuong-08-binh-minh"
                                                title="Chương 08 - Bình minh.">Chương 08 - Bình minh.</a></div>
                                        <div class="thumb_attr volume-title">Web Novel</div>
                                    </div>
                                </div>
                                <div class="thumb_attr series-title"><a
                                        href="/truyen/7199-a-neets-guide-to-the-parallel-world-healer-the-strongest-cheat"
                                        title="A NEET’s Guide to the Parallel World: Healer, the Strongest Cheat?">A NEET’s
                                        Guide to the Parallel World: Healer, the Strongest Cheat?</a></div>
                            </div>

                            <!-- Tooltip -->
                            <div style="display: none">
                                <div id="series_7199">
                                    <div style="margin: 10px 0; width: 250px">
                                        <p style="color: white; font-weight: bold">
                                            A NEET’s Guide to the Parallel World: Healer, the Strongest Cheat?
                                        </p>
                                        <p>
                                        </p>
                                        <div>Số từ: 15.141</div>
                                        <div>Lượt xem: 124.408</div>
                                        <div>Lượt thích: 619</div>
                                        <p></p>

                                        Sau khi nhảy lầu tự tử,&nbsp;Masamune bị lôi vào cuộc triệu hồi tới một thế giới
                                        khác.
                                        Tại chính điện.
                                        Tất cả mọi người đều nhận được những thiên chức cấp cao như Hiền Nhân hay Anh Hùng.
                                        Ngoại trừ&nbsp;Masamune...
                                    </div>
                                </div>
                            </div>
                            <!-- // Tooltip -->
                            <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
                                <div class="thumb-wrapper ln-tooltip" data-tooltip-content="#series_8502">
                                    <a href="/truyen/8502-a-neets-guide-to-the-parallel-world-healer-the-strongest-cheat/c101817-chuong-21-pho-co"
                                        title="Chương 21: Phố Cổ">
                                        <div class="a6-ratio">
                                            <div class="content img-in-ratio lazyloaded"
                                                data-bg="https://i.docln.net/lightnovel/covers/s8502-fff39068-adb4-443b-8c98-47d19a270ba9-m.jpg"
                                                style="background-image: url(&quot;https://i.docln.net/lightnovel/covers/s8502-fff39068-adb4-443b-8c98-47d19a270ba9-m.jpg&quot;);">
                                            </div>
                                        </div>
                                    </a>
                                    <div class="thumb-detail">
                                        <div class="thumb_attr chapter-title" title="Chương 21: Phố Cổ"><a
                                                href="/truyen/8502-a-neets-guide-to-the-parallel-world-healer-the-strongest-cheat/c101817-chuong-21-pho-co"
                                                title="Chương 21: Phố Cổ">Chương 21: Phố Cổ</a></div>
                                        <div class="thumb_attr volume-title">Web novel</div>
                                    </div>
                                </div>
                                <div class="thumb_attr series-title"><a
                                        href="/truyen/8502-a-neets-guide-to-the-parallel-world-healer-the-strongest-cheat"
                                        title="A NEET’s Guide to the Parallel World: Healer, the Strongest Cheat?">A NEET’s
                                        Guide to the Parallel World: Healer, the Strongest Cheat?</a></div>
                            </div>

                            <!-- Tooltip -->
                            <div style="display: none">
                                <div id="series_8502">
                                    <div style="margin: 10px 0; width: 250px">
                                        <p style="color: white; font-weight: bold">
                                            A NEET’s Guide to the Parallel World: Healer, the Strongest Cheat?
                                        </p>
                                        <p>
                                        </p>
                                        <div>Số từ: 36.722</div>
                                        <div>Lượt xem: 135.585</div>
                                        <div>Lượt thích: 820</div>
                                        <p></p>

                                        Sau khi nhảy lầu tự tử, Masamune bị kéo vào một cuộc triệu hồi tới một thế giới
                                        khác.
                                        Tại chính điện.
                                        Tất cả mọi người đều nhận được những chức nghiệp cấp cao như Hiền Nhân hay Anh Hùng.
                                        Ngoại trừ Mas...
                                    </div>
                                </div>
                            </div>
                            <!-- // Tooltip -->
                            <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
                                <div class="thumb-wrapper ln-tooltip" data-tooltip-content="#series_7485">
                                    <a href="/truyen/7485-a-returners-magic-should-be-special/c73396-chuong-04"
                                        title="Chương 04">
                                        <div class="a6-ratio">
                                            <div class="content img-in-ratio lazyloaded"
                                                data-bg="https://i.docln.net/lightnovel/covers/s7485-3c036bda-f089-40eb-8d14-8140574f07ba-m.jpg"
                                                style="background-image: url(&quot;https://i.docln.net/lightnovel/covers/s7485-3c036bda-f089-40eb-8d14-8140574f07ba-m.jpg&quot;);">
                                            </div>
                                        </div>
                                    </a>
                                    <div class="thumb-detail">
                                        <div class="thumb_attr chapter-title" title="Chương 04"><a
                                                href="/truyen/7485-a-returners-magic-should-be-special/c73396-chuong-04"
                                                title="Chương 04">Chương 04</a></div>
                                        <div class="thumb_attr volume-title">Web Novel</div>
                                    </div>
                                </div>
                                <div class="thumb_attr series-title"><a
                                        href="/truyen/7485-a-returners-magic-should-be-special"
                                        title="A Returner’s Magic Should Be Special">A Returner’s Magic Should Be
                                        Special</a></div>
                            </div>

                            <!-- Tooltip -->
                            <div style="display: none">
                                <div id="series_7485">
                                    <div style="margin: 10px 0; width: 250px">
                                        <p style="color: white; font-weight: bold">
                                            A Returner’s Magic Should Be Special
                                        </p>
                                        <p>
                                        </p>
                                        <div>Số từ: 10.753</div>
                                        <div>Lượt xem: 50.523</div>
                                        <div>Lượt thích: 174</div>
                                        <p></p>

                                        "Giờ tôi đã trở về, tôi sẽ không để cho người thân của mình phải chết thêm lần
                                        nữa!"Mê cung Bóng đêm - sự tồn tại thảm khốc nhất mà loài người phải đối mặt trong
                                        lịch sử.
                                        Desir Arman là một trong sáu...
                                    </div>
                                </div>
                            </div>
                            <!-- // Tooltip -->
                            <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
                                <div class="thumb-wrapper ln-tooltip" data-tooltip-content="#series_13909">
                                    <a href="/truyen/13909-a-sword-master-childhood-friend-power-harassed-me-harshly-so-i-broke-off-our-relationship-and-make-a-fresh-start-at-the-frontier-as-a-magic-swordsman/c107643-chuong-71-ten-cua-ma-kiem"
                                        title="Chương 71: Tên của Ma kiếm">
                                        <div class="a6-ratio">
                                            <div class="content img-in-ratio lazyloaded"
                                                data-bg="https://i.docln.net/lightnovel/covers/s13909-3cb1ae23-57ea-4c6e-aa33-1bef15c597b8-m.jpg"
                                                style="background-image: url(&quot;https://i.docln.net/lightnovel/covers/s13909-3cb1ae23-57ea-4c6e-aa33-1bef15c597b8-m.jpg&quot;);">
                                            </div>
                                        </div>
                                    </a>
                                    <div class="thumb-detail">
                                        <div class="thumb_attr chapter-title" title="Chương 71: Tên của Ma kiếm"><a
                                                href="/truyen/13909-a-sword-master-childhood-friend-power-harassed-me-harshly-so-i-broke-off-our-relationship-and-make-a-fresh-start-at-the-frontier-as-a-magic-swordsman/c107643-chuong-71-ten-cua-ma-kiem"
                                                title="Chương 71: Tên của Ma kiếm">Chương 71: Tên của Ma kiếm</a></div>
                                        <div class="thumb_attr volume-title">Phần Hai: Thành phố thú nhân tộc Inbahanes
                                        </div>
                                    </div>
                                </div>
                                <div class="thumb_attr series-title"><a
                                        href="/truyen/13909-a-sword-master-childhood-friend-power-harassed-me-harshly-so-i-broke-off-our-relationship-and-make-a-fresh-start-at-the-frontier-as-a-magic-swordsman"
                                        title="A Sword Master Childhood Friend Power Harassed Me Harshly, So I Broke Off Our Relationship And Make A Fresh Start At The Frontier As A Magic Swordsman.">A
                                        Sword Master Childhood Friend Power Harassed Me Harshly, So I Broke Off Our
                                        Relationship And Make A Fresh Start At The Frontier As A Magic Swordsman.</a></div>
                            </div>

                            <!-- Tooltip -->
                            <div style="display: none">
                                <div id="series_13909">
                                    <div style="margin: 10px 0; width: 250px">
                                        <p style="color: white; font-weight: bold">
                                            A Sword Master Childhood Friend Power Harassed Me Harshly, So I Broke Off Our
                                            Relationship And Make A Fresh Start At The Frontier As A Magic Swordsman.
                                        </p>
                                        <p>
                                        </p>
                                        <div>Số từ: 113.727</div>
                                        <div>Lượt xem: 315.619</div>
                                        <div>Lượt thích: 1.070</div>
                                        <p></p>

                                        Finn quyết định cắt đứt quan hệ với thời thơ ấu Alfine, một [Sword Master] vì không
                                        thể chịu được tính khí của cô.
                                        Với một khởi đầu mới, anh quyết định bắt đầu lại mọi thứ tại một thành phố biên
                                        giới,...
                                    </div>
                                </div>
                            </div>
                            <!-- // Tooltip -->
                            <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
                                <div class="thumb-wrapper ln-tooltip" data-tooltip-content="#series_11016">
                                    <a href="/truyen/11016-a-tale-of-the-secret-saint/c138408-minh-hoa" title="Minh họa">
                                        <div class="a6-ratio">
                                            <div class="content img-in-ratio lazyloaded"
                                                data-bg="https://i.docln.net/lightnovel/covers/s11016-d2afe427-343c-4910-b4cf-94d1ec4fcd37-m.jpg"
                                                style="background-image: url(&quot;https://i.docln.net/lightnovel/covers/s11016-d2afe427-343c-4910-b4cf-94d1ec4fcd37-m.jpg&quot;);">
                                            </div>
                                        </div>
                                    </a>
                                    <div class="thumb-detail">
                                        <div class="thumb_attr chapter-title" title="Minh họa"><a
                                                href="/truyen/11016-a-tale-of-the-secret-saint/c138408-minh-hoa"
                                                title="Minh họa">Minh họa</a></div>
                                        <div class="thumb_attr volume-title">Tập 03</div>
                                    </div>
                                </div>
                                <div class="thumb_attr series-title"><a href="/truyen/11016-a-tale-of-the-secret-saint"
                                        title="A Tale of the Secret Saint">A Tale of the Secret Saint</a></div>
                            </div>

                            <!-- Tooltip -->
                            <div style="display: none">
                                <div id="series_11016">
                                    <div style="margin: 10px 0; width: 250px">
                                        <p style="color: white; font-weight: bold">
                                            A Tale of the Secret Saint
                                        </p>
                                        <p>
                                        </p>
                                        <div>Số từ: 139.900</div>
                                        <div>Lượt xem: 172.233</div>
                                        <div>Lượt thích: 512</div>
                                        <p></p>

                                        Sinh ra trong một gia đình có dòng dõi hiệp sĩ lâu đời, Fia quyết tâm muốn trở thành
                                        một hiệp sĩ giống như anh chị em của mình. Nhưng một lần suýt chết đã đánh thức
                                        những ký ức tiền kiếp của cô khi cò...
                                    </div>
                                </div>
                            </div>
                            <!-- // Tooltip -->
                            <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
                                <div class="thumb-wrapper ln-tooltip" data-tooltip-content="#series_15698">
                                    <a href="/truyen/15698-ai-chuyen-sinh/c141146-chuong-11-tran-dau-dau-tien-cua-ai-phan-ii"
                                        title="Chương 11: Trận đấu đầu tiên của A.I - Phần II">
                                        <div class="a6-ratio">
                                            <div class="content img-in-ratio lazyloaded"
                                                data-bg="https://i.docln.net/lightnovel/covers/s15698-70091f7d-9ed8-4266-8798-c36cb45ee323-m.jpg"
                                                style="background-image: url(&quot;https://i.docln.net/lightnovel/covers/s15698-70091f7d-9ed8-4266-8798-c36cb45ee323-m.jpg&quot;);">
                                            </div>
                                        </div>
                                    </a>
                                    <div class="thumb-detail">
                                        <div class="thumb_attr chapter-title"
                                            title="Chương 11: Trận đấu đầu tiên của A.I - Phần II"><a
                                                href="/truyen/15698-ai-chuyen-sinh/c141146-chuong-11-tran-dau-dau-tien-cua-ai-phan-ii"
                                                title="Chương 11: Trận đấu đầu tiên của A.I - Phần II">Chương 11: Trận đấu
                                                đầu tiên của A.I - Phần II</a></div>
                                        <div class="thumb_attr volume-title">Phần 1: A.I, ngon và mèo</div>
                                    </div>
                                </div>
                                <div class="thumb_attr series-title"><a href="/truyen/15698-ai-chuyen-sinh"
                                        title="A.I Chuyển Sinh Vào Cơ Thể Một Kẻ Vô Dụng, Kết Quả Ra Sao? Một Siêu Công Nghệ Vượt Qua Vạn Vật Trong Thế Giới Ma Pháp Sẽ Ra Đời">A.I
                                        Chuyển Sinh Vào Cơ Thể Một Kẻ Vô Dụng, Kết Quả Ra Sao? Một Siêu Công Nghệ Vượt Qua
                                        Vạn Vật Trong Thế Giới Ma Pháp Sẽ Ra Đời</a></div>
                            </div>

                            <!-- Tooltip -->
                            <div style="display: none">
                                <div id="series_15698">
                                    <div style="margin: 10px 0; width: 250px">
                                        <p style="color: white; font-weight: bold">
                                            A.I Chuyển Sinh Vào Cơ Thể Một Kẻ Vô Dụng, Kết Quả Ra Sao? Một Siêu Công Nghệ
                                            Vượt Qua Vạn Vật Trong Thế Giới Ma Pháp Sẽ Ra Đời
                                        </p>
                                        <p>
                                        </p>
                                        <div>Số từ: 12.128</div>
                                        <div>Lượt xem: 47.421</div>
                                        <div>Lượt thích: 362</div>
                                        <p></p>

                                        Một A.I đến từ một tương lai rất xa đã được chuyển sinh sang dị giới.
                                        Nó được đưa vào cơ thể của một cậu bé quý tộc tên là Qualia, một kẻ bị coi là thất
                                        bại do không giỏi kiếm mà cũng chẳng tinh thông...
                                    </div>
                                </div>
                            </div>
                            <!-- // Tooltip -->
                            <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
                                <div class="thumb-wrapper ln-tooltip" data-tooltip-content="#series_170">
                                    <a href="/truyen/170-absolute-duo/c13034-minh-hoa-illustration-1"
                                        title="Minh Họa Illustration 1.">
                                        <div class="a6-ratio">
                                            <div class="content img-in-ratio lazyload"
                                                data-bg="https://3.bp.blogspot.com/-h5RZaOB8520/WO2vyTQIiHI/AAAAAAAAJ7w/i_7FdhEZWI0/w215/series_170.jpg">
                                            </div>
                                        </div>
                                    </a>
                                    <div class="thumb-detail">
                                        <div class="thumb_attr chapter-title" title="Minh Họa Illustration 1."><a
                                                href="/truyen/170-absolute-duo/c13034-minh-hoa-illustration-1"
                                                title="Minh Họa Illustration 1.">Minh Họa Illustration 1.</a></div>
                                        <div class="thumb_attr volume-title">Tập 1</div>
                                    </div>
                                </div>
                                <div class="thumb_attr series-title"><a href="/truyen/170-absolute-duo"
                                        title="Absolute Duo">Absolute Duo</a></div>
                            </div>

                            <!-- Tooltip -->
                            <div style="display: none">
                                <div id="series_170">
                                    <div style="margin: 10px 0; width: 250px">
                                        <p style="color: white; font-weight: bold">
                                            Absolute Duo
                                        </p>
                                        <p>
                                        </p>
                                        <div>Số từ: 85.244</div>
                                        <div>Lượt xem: 90.690</div>
                                        <div>Lượt thích: 243</div>
                                        <p></p>

                                        《Blaze》 là một loại vũ khí được tạo ra từ sức mạnh ý chí của con người. Tôi, Kokonoe
                                        là một trong số những người có năng lực được cho là trong 1000 người mới có 1 người
                                        sở hữu nó vì thế mà tôi quyết...
                                    </div>
                                </div>
                            </div>
                            <!-- // Tooltip -->
                            <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
                                <div class="thumb-wrapper ln-tooltip" data-tooltip-content="#series_19053">
                                    <a href="/truyen/19053-ac-ma-tro-thanh-than-tai-di-gioi-tien-hoa-phi-nhan-loai/c144474-chuong-93-huong-ve-noi-quyet-chien"
                                        title="Chương 93: Hướng Về Nơi Quyết Chiến.">
                                        <div class="a6-ratio">
                                            <div class="content img-in-ratio lazyload"
                                                data-bg="https://i.hako.vn/ln/series/covers/s19053-1514c3cd-38eb-4b97-b2e0-badfdc37d3ca.jpg">
                                            </div>
                                        </div>
                                    </a>
                                    <div class="thumb-detail">
                                        <div class="thumb_attr chapter-title"
                                            title="Chương 93: Hướng Về Nơi Quyết Chiến."><a
                                                href="/truyen/19053-ac-ma-tro-thanh-than-tai-di-gioi-tien-hoa-phi-nhan-loai/c144474-chuong-93-huong-ve-noi-quyet-chien"
                                                title="Chương 93: Hướng Về Nơi Quyết Chiến.">Chương 93: Hướng Về Nơi Quyết
                                                Chiến.</a></div>
                                        <div class="thumb_attr volume-title">Hồi 5:「QUYẾT CHIẾN」</div>
                                    </div>
                                </div>
                                <div class="thumb_attr series-title"><a
                                        href="/truyen/19053-ac-ma-tro-thanh-than-tai-di-gioi-tien-hoa-phi-nhan-loai"
                                        title="Ác Ma Trở Thành Thần Tại Dị Giới 【Tiến Hóa Phi Nhân Loại】">Ác Ma Trở Thành
                                        Thần Tại Dị Giới 【Tiến Hóa Phi Nhân Loại】</a></div>
                            </div>

                            <!-- Tooltip -->
                            <div style="display: none">
                                <div id="series_19053">
                                    <div style="margin: 10px 0; width: 250px">
                                        <p style="color: white; font-weight: bold">
                                            Ác Ma Trở Thành Thần Tại Dị Giới 【Tiến Hóa Phi Nhân Loại】
                                        </p>
                                        <p>
                                        </p>
                                        <div>Số từ: 10.934</div>
                                        <div>Lượt xem: 6.587</div>
                                        <div>Lượt thích: 90</div>
                                        <p></p>

                                        Một tựa game VRMMORPG mới, “World of Yggdrasia”, đang tuyển chọn những beta tester
                                        từ khắp nơi trên thế giới. Mười ngàn tester đã bắt đầu chuyến phiêu lưu của kiếm và
                                        ma thuật ở một thế giới mới, một...
                                    </div>
                                </div>
                            </div>
                            <!-- // Tooltip -->
                            <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
                                <div class="thumb-wrapper ln-tooltip" data-tooltip-content="#series_12831">
                                    <a href="/truyen/12831-ac-nghich-dai-chien/c100166-chuong-4" title="Chương 4">
                                        <div class="a6-ratio">
                                            <div class="content img-in-ratio lazyload"
                                                data-bg="https://i.docln.net/lightnovel/covers/s12831-337f16bb-857a-4a2d-acda-6fc4d55cfc62-m.jpg">
                                            </div>
                                        </div>
                                    </a>
                                    <div class="thumb-detail">
                                        <div class="thumb_attr chapter-title" title="Chương 4"><a
                                                href="/truyen/12831-ac-nghich-dai-chien/c100166-chuong-4"
                                                title="Chương 4">Chương 4</a></div>
                                        <div class="thumb_attr volume-title">Tập 01 Điệu nhảy của người cướp ngôi vua địa
                                            ngục cùng tội nhân</div>
                                    </div>
                                </div>
                                <div class="thumb_attr series-title"><a href="/truyen/12831-ac-nghich-dai-chien"
                                        title="Ác Nghịch Đại Chiến">Ác Nghịch Đại Chiến</a></div>
                            </div>

                            <!-- Tooltip -->
                            <div style="display: none">
                                <div id="series_12831">
                                    <div style="margin: 10px 0; width: 250px">
                                        <p style="color: white; font-weight: bold">
                                            Ác Nghịch Đại Chiến
                                        </p>
                                        <p>
                                        </p>
                                        <div>Số từ: 13.198</div>
                                        <div>Lượt xem: 38.679</div>
                                        <div>Lượt thích: 400</div>
                                        <p></p>

                                        Mang theo tất cả cái [Ác] để cướp lấy ngai vàng địa ngục.
                                        &nbsp;
                                        Phải làm gì để cứu chuộc linh hồn đã rơi vào địa ngục đây?
                                        &nbsp;
                                        Ohka Sakura, người thiếu nữ bị đẩy xuống tận cùng vực sâu với tấm thân vô tội....
                                    </div>
                                </div>
                            </div>
                            <!-- // Tooltip -->
                            <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
                                <div class="thumb-wrapper ln-tooltip" data-tooltip-content="#series_18341">
                                    <a href="/truyen/18341-ac-nu-800-tuoi-nhap-vao-mot-vi-tieu-thu-nhut-nhat-tan-huong-tuoi-xuan-nhan-ha/c140619-chuong-10-ac-nu-va-con-bup-be-chet-choc-1"
                                        title="Chương 10: Ác nữ và con búp bê chết chóc (1)">
                                        <div class="a6-ratio">
                                            <div class="content img-in-ratio lazyload"
                                                data-bg="https://i.hako.vn/ln/series/covers/s18341-13e6e308-46a7-4f1a-bdd9-10faf6d3421e.jpg">
                                            </div>
                                        </div>
                                    </a>
                                    <div class="thumb-detail">
                                        <div class="thumb_attr chapter-title"
                                            title="Chương 10: Ác nữ và con búp bê chết chóc (1)"><a
                                                href="/truyen/18341-ac-nu-800-tuoi-nhap-vao-mot-vi-tieu-thu-nhut-nhat-tan-huong-tuoi-xuan-nhan-ha/c140619-chuong-10-ac-nu-va-con-bup-be-chet-choc-1"
                                                title="Chương 10: Ác nữ và con búp bê chết chóc (1)">Chương 10: Ác nữ và
                                                con búp bê chết chóc (1)</a></div>
                                        <div class="thumb_attr volume-title">Arc 2: Giọt lệ của chị gái</div>
                                    </div>
                                </div>
                                <div class="thumb_attr series-title"><a
                                        href="/truyen/18341-ac-nu-800-tuoi-nhap-vao-mot-vi-tieu-thu-nhut-nhat-tan-huong-tuoi-xuan-nhan-ha"
                                        title="Ác nữ 800 tuổi nhập vào một vị tiểu thư nhút nhát tận hưởng tuổi xuân nhàn hạ!">Ác
                                        nữ 800 tuổi nhập vào một vị tiểu thư nhút nhát tận hưởng tuổi xuân nhàn hạ!</a>
                                </div>
                            </div>

                            <!-- Tooltip -->
                            <div style="display: none">
                                <div id="series_18341">
                                    <div style="margin: 10px 0; width: 250px">
                                        <p style="color: white; font-weight: bold">
                                            Ác nữ 800 tuổi nhập vào một vị tiểu thư nhút nhát tận hưởng tuổi xuân nhàn hạ!
                                        </p>
                                        <p>
                                        </p>
                                        <div>Số từ: 15.544</div>
                                        <div>Lượt xem: 10.671</div>
                                        <div>Lượt thích: 90</div>
                                        <p></p>

                                        Nora kẻ đã bị phong ấn từ 800 năm trước vì tội đe dọa hủy diệt thế giới bây giờ đang
                                        rất buồn chán. Nhưng một ngày nọ, cô bị đánh thức bởi lời van xin muốn chết của một
                                        cô gái tên Cecily. Sau khi chứn...
                                    </div>
                                </div>
                            </div>
                            <!-- // Tooltip -->
                            <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
                                <div class="thumb-wrapper ln-tooltip" data-tooltip-content="#series_18878">
                                    <a href="/truyen/18878-academys-second-seat/c141055-chuong-05-tiet-hoc-dau-tien-3"
                                        title="Chương 05: Tiết học đầu tiên (3)">
                                        <div class="a6-ratio">
                                            <div class="content img-in-ratio lazyload"
                                                data-bg="https://i.hako.vn/ln/series/covers/s18878-099973b1-8eea-4a81-8146-b131fa6c768d.jpg">
                                            </div>
                                        </div>
                                    </a>
                                    <div class="thumb-detail">
                                        <div class="thumb_attr chapter-title" title="Chương 05: Tiết học đầu tiên (3)"><a
                                                href="/truyen/18878-academys-second-seat/c141055-chuong-05-tiet-hoc-dau-tien-3"
                                                title="Chương 05: Tiết học đầu tiên (3)">Chương 05: Tiết học đầu tiên
                                                (3)</a></div>
                                        <div class="thumb_attr volume-title">WN c1 - c100</div>
                                    </div>
                                </div>
                                <div class="thumb_attr series-title"><a href="/truyen/18878-academys-second-seat"
                                        title="Academy's Second Seat">Academy's Second Seat</a></div>
                            </div>

                            <!-- Tooltip -->
                            <div style="display: none">
                                <div id="series_18878">
                                    <div style="margin: 10px 0; width: 250px">
                                        <p style="color: white; font-weight: bold">
                                            Academy's Second Seat
                                        </p>
                                        <p>
                                        </p>
                                        <div>Số từ: 13.828</div>
                                        <div>Lượt xem: 17.481</div>
                                        <div>Lượt thích: 185</div>
                                        <p></p>

                                        Câu chuyện xoay quanh một anh chàng đã chuyển sinh vào thế giới game mang tên 'Pháp
                                        sư mạnh nhất của học viện ma thuật' tuy nhiên anh lại trở thành đối thủ của nhân vật
                                        chính với thân phận là Rudy Ast...
                                    </div>
                                </div>
                            </div>
                            <!-- // Tooltip -->
                            <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
                                <div class="thumb-wrapper ln-tooltip" data-tooltip-content="#series_13296">
                                    <a href="/truyen/13296-academys-undercover-professor/c102588-chuong-01-tren-duong-den-thu-do-de-quoc"
                                        title="Chương 01: Trên đường đến thủ đô đế quốc">
                                        <div class="a6-ratio">
                                            <div class="content img-in-ratio lazyload"
                                                data-bg="https://i.docln.net/lightnovel/covers/s13296-cc135dc7-e158-47c7-a67e-cb7cc2c910e0-m.jpg">
                                            </div>
                                        </div>
                                    </a>
                                    <div class="thumb-detail">
                                        <div class="thumb_attr chapter-title"
                                            title="Chương 01: Trên đường đến thủ đô đế quốc"><a
                                                href="/truyen/13296-academys-undercover-professor/c102588-chuong-01-tren-duong-den-thu-do-de-quoc"
                                                title="Chương 01: Trên đường đến thủ đô đế quốc">Chương 01: Trên đường đến
                                                thủ đô đế quốc</a></div>
                                        <div class="thumb_attr volume-title">WN</div>
                                    </div>
                                </div>
                                <div class="thumb_attr series-title"><a href="/truyen/13296-academys-undercover-professor"
                                        title="Academy’s Undercover Professor">Academy’s Undercover Professor</a></div>
                            </div>

                            <!-- Tooltip -->
                            <div style="display: none">
                                <div id="series_13296">
                                    <div style="margin: 10px 0; width: 250px">
                                        <p style="color: white; font-weight: bold">
                                            Academy’s Undercover Professor
                                        </p>
                                        <p>
                                        </p>
                                        <div>Số từ: 3.337</div>
                                        <div>Lượt xem: 18.462</div>
                                        <div>Lượt thích: 53</div>
                                        <p></p>

                                        Nhân vật chính của chúng ta là một lính đánh thuê đang trên đường đi đến thủ đô đế
                                        quốc Exileon. Nhưng bất ngờ bị dính vào một cuộc truy sát. Sau những tình huống gây
                                        cấn thì để tránh để bị rắc rối an...
                                    </div>
                                </div>
                            </div>
                            <!-- // Tooltip -->
                            <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
                                <div class="thumb-wrapper ln-tooltip" data-tooltip-content="#series_100">
                                    <a href="/truyen/100-accel-world/c5496-chuong-3" title="Chương 3">
                                        <div class="a6-ratio">
                                            <div class="content img-in-ratio lazyload"
                                                data-bg="https://4.bp.blogspot.com/--os7wMK9P4s/WO2voFt9vWI/AAAAAAAAJ3Y/KWLps1EnLsA/w215/series_100.jpg">
                                            </div>
                                        </div>
                                    </a>
                                    <div class="thumb-detail">
                                        <div class="thumb_attr chapter-title" title="Chương 3"><a
                                                href="/truyen/100-accel-world/c5496-chuong-3" title="Chương 3">Chương
                                                3</a></div>
                                        <div class="thumb_attr volume-title">Tập 2 - Huyết Bão Công Chúa</div>
                                    </div>
                                </div>
                                <div class="thumb_attr series-title"><a href="/truyen/100-accel-world"
                                        title="Accel World">Accel World</a></div>
                            </div>

                            <!-- Tooltip -->
                            <div style="display: none">
                                <div id="series_100">
                                    <div style="margin: 10px 0; width: 250px">
                                        <p style="color: white; font-weight: bold">
                                            Accel World
                                        </p>
                                        <p>
                                        </p>
                                        <div>Số từ: 90.591</div>
                                        <div>Lượt xem: 75.919</div>
                                        <div>Lượt thích: 133</div>
                                        <p></p>

                                        Vào năm 2046, Haruyuki, 1 cậu học sinh mập mạp chỉ vừa vào cấp 2 được nửa năm. Cậu
                                        có những vấn đề mà những mập mạp hay gặp phải như tự ti, bị bắt nạt ... Cậu chỉ biết
                                        trốn vào thế giới ảo, nơi mà tốc...
                                    </div>
                                </div>
                            </div>
                            <!-- // Tooltip -->
                            <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
                                <div class="thumb-wrapper ln-tooltip" data-tooltip-content="#series_557">
                                    <a href="/truyen/557-adolescent-adam/c22538-tap-07-minh-hoa" title="Tập 07 Minh Họa">
                                        <div class="a6-ratio">
                                            <div class="content img-in-ratio lazyload blur"
                                                data-bg="https://3.bp.blogspot.com/-Rb0TcCUYL8A/WO2wSCT7H0I/AAAAAAAAKKE/6hXsl3q_j7g/w215/series_557.jpg">
                                            </div>
                                        </div>
                                    </a>
                                    <div class="thumb-detail">
                                        <div class="thumb_attr chapter-title" title="Tập 07 Minh Họa"><a
                                                href="/truyen/557-adolescent-adam/c22538-tap-07-minh-hoa"
                                                title="Tập 07 Minh Họa">Tập 07 Minh Họa</a></div>
                                        <div class="thumb_attr volume-title">Tập 07 Kissing You</div>
                                    </div>
                                </div>
                                <div class="thumb_attr series-title"><a href="/truyen/557-adolescent-adam"
                                        title="Adolescent Adam">Adolescent Adam</a></div>
                            </div>

                            <!-- Tooltip -->
                            <div style="display: none">
                                <div id="series_557">
                                    <div style="margin: 10px 0; width: 250px">
                                        <p style="color: white; font-weight: bold">
                                            Adolescent Adam
                                        </p>
                                        <p>
                                        </p>
                                        <div>Số từ: 42.899</div>
                                        <div>Lượt xem: 158.595</div>
                                        <div>Lượt thích: 443</div>
                                        <p></p>

                                        Khuyến cáo đây là Ero Novel 18+

                                        Một gia đình nhỏ huyên náo, một nhóm bạn cùng lớp vui nhộn và một chàng trai sinh
                                        vào ngày đầu tiên của năm theo lịch âm với một cuộc sống bình thường như bao người
                                        kh...
                                    </div>
                                </div>
                            </div>
                            <!-- // Tooltip -->
                            <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
                                <div class="thumb-wrapper ln-tooltip" data-tooltip-content="#series_15922">
                                    <a href="/truyen/15922-adventures-of-lord-el-melloi-ii/c132350-prologue"
                                        title="Prologue">
                                        <div class="a6-ratio">
                                            <div class="content img-in-ratio lazyload"
                                                data-bg="https://i.hako.vn/ln/series/covers/s15922-fca03631-ace0-4466-98eb-1b7d4d1aaed0.jpg">
                                            </div>
                                        </div>
                                    </a>
                                    <div class="thumb-detail">
                                        <div class="thumb_attr chapter-title" title="Prologue"><a
                                                href="/truyen/15922-adventures-of-lord-el-melloi-ii/c132350-prologue"
                                                title="Prologue">Prologue</a></div>
                                        <div class="thumb_attr volume-title">Quyển 2: Ma Nhân Biển Lang Thang (Phần đầu)
                                        </div>
                                    </div>
                                </div>
                                <div class="thumb_attr series-title"><a
                                        href="/truyen/15922-adventures-of-lord-el-melloi-ii"
                                        title="Adventures of Lord El-Melloi II">Adventures of Lord El-Melloi II</a></div>
                            </div>

                            <!-- Tooltip -->
                            <div style="display: none">
                                <div id="series_15922">
                                    <div style="margin: 10px 0; width: 250px">
                                        <p style="color: white; font-weight: bold">
                                            Adventures of Lord El-Melloi II
                                        </p>
                                        <p>
                                        </p>
                                        <div>Số từ: 76.251</div>
                                        <div>Lượt xem: 16.613</div>
                                        <div>Lượt thích: 55</div>
                                        <p></p>

                                        Hành trình đi đây đi đó của Lượng...Xin lỗi, nhầm, Waver Velvet hay còn gọi là Lord
                                        El-Melloi II
                                    </div>
                                </div>
                            </div>
                            <!-- // Tooltip -->
                            <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
                                <div class="thumb-wrapper ln-tooltip" data-tooltip-content="#series_17671">
                                    <a href="/truyen/17671-who-killed-the-hero/c136365-pho-thi" title="Phố thị">
                                        <div class="a6-ratio">
                                            <div class="content img-in-ratio lazyload"
                                                data-bg="https://i.hako.vn/ln/series/covers/s17671-85af2563-f079-4c2b-b9db-f384d75af240.jpg">
                                            </div>
                                        </div>
                                    </a>
                                    <div class="thumb-detail">
                                        <div class="thumb_attr chapter-title" title="Phố thị"><a
                                                href="/truyen/17671-who-killed-the-hero/c136365-pho-thi"
                                                title="Phố thị">Phố thị</a></div>
                                        <div class="thumb_attr volume-title">Ai Là Kẻ Sát Hại Anh Hùng?</div>
                                    </div>
                                </div>
                                <div class="thumb_attr series-title"><a href="/truyen/17671-who-killed-the-hero"
                                        title="Ai Là Kẻ Sát Hại Anh Hùng?">Ai Là Kẻ Sát Hại Anh Hùng?</a></div>
                            </div>

                            <!-- Tooltip -->
                            <div style="display: none">
                                <div id="series_17671">
                                    <div style="margin: 10px 0; width: 250px">
                                        <p style="color: white; font-weight: bold">
                                            Ai Là Kẻ Sát Hại Anh Hùng?
                                        </p>
                                        <p>
                                        </p>
                                        <div>Số từ: 1.954</div>
                                        <div>Lượt xem: 15.196</div>
                                        <div>Lượt thích: 148</div>
                                        <p></p>

                                        “Vị Anh Hùng sẽ đánh bại Quỷ Vương đang ở trong ngôi làng này.”
                                        Đó là lời sấm truyền của một nhà tiên tri. Cả dân làng đều hết mực tin vào lời tiên
                                        đoán ấy; sự tồn tại của chàng thiếu niên tinh thông...
                                    </div>
                                </div>
                            </div>
                            <!-- // Tooltip -->
                            <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
                                <div class="thumb-wrapper ln-tooltip" data-tooltip-content="#series_2144">
                                    <a href="/truyen/2144-akaten-no-asuka-onna-yuusha-wa-in-kanni-otsu/c28864-chuong-01nguoi-con-trai-den-tu-the-gioi-khac"
                                        title="Chương 35:Người con trai đến từ thế giới khác">
                                        <div class="a6-ratio">
                                            <div class="content img-in-ratio lazyload blur"
                                                data-bg="https://3.bp.blogspot.com/-zxv7iXMbCUE/Woz7Pj7G0BI/AAAAAAAA_9k/Orn7W7fH4woiRCIQfisYdOKKiJxWt68DgCHMYCw/w215/default.jpg">
                                            </div>
                                        </div>
                                    </a>
                                    <div class="thumb-detail">
                                        <div class="thumb_attr chapter-title"
                                            title="Chương 35:Người con trai đến từ thế giới khác"><a
                                                href="/truyen/2144-akaten-no-asuka-onna-yuusha-wa-in-kanni-otsu/c28864-chuong-01nguoi-con-trai-den-tu-the-gioi-khac"
                                                title="Chương 35:Người con trai đến từ thế giới khác">Chương 35:Người con
                                                trai đến từ thế giới khác</a></div>
                                        <div class="thumb_attr volume-title">Tập 01</div>
                                    </div>
                                </div>
                                <div class="thumb_attr series-title"><a
                                        href="/truyen/2144-akaten-no-asuka-onna-yuusha-wa-in-kanni-otsu"
                                        title="AKATEN NO ASUKA ~ ONNA YUUSHA WA IN KANNI OTSU~">AKATEN NO ASUKA ~ ONNA
                                        YUUSHA WA IN KANNI OTSU~</a></div>
                            </div>

                            <!-- Tooltip -->
                            <div style="display: none">
                                <div id="series_2144">
                                    <div style="margin: 10px 0; width: 250px">
                                        <p style="color: white; font-weight: bold">
                                            AKATEN NO ASUKA ~ ONNA YUUSHA WA IN KANNI OTSU~
                                        </p>
                                        <p>
                                        </p>
                                        <div>Số từ: 1.061</div>
                                        <div>Lượt xem: 129.399</div>
                                        <div>Lượt thích: 578</div>
                                        <p></p>

                                        Kashiwagi Yuuto, người đã chán với cuộc sống của mình, đã chết trong một tai nạn bất
                                        ngờ. Sao cái chết đó,&nbsp;Yuuto được trao cho cái&nbsp;quyền năng(cheat) có thể tạo
                                        ra mọi món&nbsp;đồ&nbsp;ở đẳng cấp Thánh&nbsp;cụ từ một...
                                    </div>
                                </div>
                            </div>
                            <!-- // Tooltip -->
                            <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
                                <div class="thumb-wrapper ln-tooltip" data-tooltip-content="#series_16101">
                                    <a href="/truyen/16101-akatsuki-no-shokanshi-watashi-wo-isekai-shokan-shita-ano-musume-no-koto-o-nani-ga-nan-demo-mamoritai-akatsuki-no-shokanshi-watashi-wo-isekai-shokan-shita-ano-musume-no-koto-o-nani-ga-nan-demo-mamoritai-100-11/c122012-chuong-03-mong-duoc-chieu-co"
                                        title="Chương 03 : Mong Được Chiếu Cố">
                                        <div class="a6-ratio">
                                            <div class="content img-in-ratio lazyload"
                                                data-bg="https://ln.hako.vn/img/nocover.jpg"></div>
                                        </div>
                                    </a>
                                    <div class="thumb-detail">
                                        <div class="thumb_attr chapter-title" title="Chương 03 : Mong Được Chiếu Cố"><a
                                                href="/truyen/16101-akatsuki-no-shokanshi-watashi-wo-isekai-shokan-shita-ano-musume-no-koto-o-nani-ga-nan-demo-mamoritai-akatsuki-no-shokanshi-watashi-wo-isekai-shokan-shita-ano-musume-no-koto-o-nani-ga-nan-demo-mamoritai-100-11/c122012-chuong-03-mong-duoc-chieu-co"
                                                title="Chương 03 : Mong Được Chiếu Cố">Chương 03 : Mong Được Chiếu Cố</a>
                                        </div>
                                        <div class="thumb_attr volume-title">Vol 1: Mở đầu.</div>
                                    </div>
                                </div>
                                <div class="thumb_attr series-title"><a
                                        href="/truyen/16101-akatsuki-no-shokanshi-watashi-wo-isekai-shokan-shita-ano-musume-no-koto-o-nani-ga-nan-demo-mamoritai-akatsuki-no-shokanshi-watashi-wo-isekai-shokan-shita-ano-musume-no-koto-o-nani-ga-nan-demo-mamoritai-100-11"
                                        title="Akatsuki no Shōkanshi ～Watashi wo Isekai Shōkan Shita Ano Musume no Koto o , Nani Ga Nan Demo Mamoritai～">Akatsuki
                                        no Shōkanshi ～Watashi wo Isekai Shōkan Shita Ano Musume no Koto o , Nani Ga Nan Demo
                                        Mamoritai～</a></div>
                            </div>

                            <!-- Tooltip -->
                            <div style="display: none">
                                <div id="series_16101">
                                    <div style="margin: 10px 0; width: 250px">
                                        <p style="color: white; font-weight: bold">
                                            Akatsuki no Shōkanshi ～Watashi wo Isekai Shōkan Shita Ano Musume no Koto o ,
                                            Nani Ga Nan Demo Mamoritai～
                                        </p>
                                        <p>
                                        </p>
                                        <div>Số từ: 6.621</div>
                                        <div>Lượt xem: 14.284</div>
                                        <div>Lượt thích: 47</div>
                                        <p></p>

                                        Sau những năm tháng lẻ loi một mình, Kagaya Rei bỗng nhiên bị triệu hồi tới một thế
                                        giới mới bởi một cô gái tên là Rinna.
                                        Nhờ đó, Rei đã có thể đặt chân tới thế giới của Kiếm và Pháp thuật mà mình hằn...
                                    </div>
                                </div>
                            </div>
                            <!-- // Tooltip -->
                            <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
                                <div class="thumb-wrapper ln-tooltip" data-tooltip-content="#series_2317">
                                    <a href="/truyen/2317-akugyaku-no-black-maria/c31328-chuong-12-ca-doi-tap-hop-chung-ta-co-nhiem-vu"
                                        title="Chương 12 - Cả đội tập hợp ! Chúng ta có nhiệm vụ !">
                                        <div class="a6-ratio">
                                            <div class="content img-in-ratio lazyload"
                                                data-bg="https://1.bp.blogspot.com/-BLtpwNOxjYQ/WuRiVJRy9kI/AAAAAAABKAc/C08_YJNy4bQbc-C0Lt1P-NSPzwZRfoZNwCHMYCw/w215/default.png">
                                            </div>
                                        </div>
                                    </a>
                                    <div class="thumb-detail">
                                        <div class="thumb_attr chapter-title"
                                            title="Chương 12 - Cả đội tập hợp ! Chúng ta có nhiệm vụ !"><a
                                                href="/truyen/2317-akugyaku-no-black-maria/c31328-chuong-12-ca-doi-tap-hop-chung-ta-co-nhiem-vu"
                                                title="Chương 12 - Cả đội tập hợp ! Chúng ta có nhiệm vụ !">Chương 12 - Cả
                                                đội tập hợp ! Chúng ta có nhiệm vụ !</a></div>
                                        <div class="thumb_attr volume-title">Arc I</div>
                                    </div>
                                </div>
                                <div class="thumb_attr series-title"><a href="/truyen/2317-akugyaku-no-black-maria"
                                        title="Akugyaku no Black Maria">Akugyaku no Black Maria</a></div>
                            </div>

                            <!-- Tooltip -->
                            <div style="display: none">
                                <div id="series_2317">
                                    <div style="margin: 10px 0; width: 250px">
                                        <p style="color: white; font-weight: bold">
                                            Akugyaku no Black Maria
                                        </p>
                                        <p>
                                        </p>
                                        <div>Số từ: 18.876</div>
                                        <div>Lượt xem: 54.862</div>
                                        <div>Lượt thích: 191</div>
                                        <p></p>

                                        Mất trí nhớ, sống bảy năm ở thế giới khác. Shizuru là một bác sĩ vào ban ngày và là
                                        một tên sát nhân&nbsp;vào ban đêm.

                                        Một tổ chức đầy những người đẹp điên rồ, một người phụ nữ mù lãnh đạo tổ chức ấy.

                                        Nh...
                                    </div>
                                </div>
                            </div>
                            <!-- // Tooltip -->
                            <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
                                <div class="thumb-wrapper ln-tooltip" data-tooltip-content="#series_11853">
                                    <a href="/truyen/11853-akugyaku-no-black-maria/c99597-chap-7-bao"
                                        title="Chap 7 - Báo cáo">
                                        <div class="a6-ratio">
                                            <div class="content img-in-ratio lazyload"
                                                data-bg="https://i.docln.net/lightnovel/covers/s11853-61c2e3f7-1ac6-47b6-8156-7ba3ad66f5d5-m.jpg">
                                            </div>
                                        </div>
                                    </a>
                                    <div class="thumb-detail">
                                        <div class="thumb_attr chapter-title" title="Chap 7 - Báo cáo"><a
                                                href="/truyen/11853-akugyaku-no-black-maria/c99597-chap-7-bao"
                                                title="Chap 7 - Báo cáo">Chap 7 - Báo cáo</a></div>
                                        <div class="thumb_attr volume-title">Chương 1</div>
                                    </div>
                                </div>
                                <div class="thumb_attr series-title"><a href="/truyen/11853-akugyaku-no-black-maria"
                                        title="Akugyaku no Black Maria">Akugyaku no Black Maria</a></div>
                            </div>

                            <!-- Tooltip -->
                            <div style="display: none">
                                <div id="series_11853">
                                    <div style="margin: 10px 0; width: 250px">
                                        <p style="color: white; font-weight: bold">
                                            Akugyaku no Black Maria
                                        </p>
                                        <p>
                                        </p>
                                        <div>Số từ: 17.722</div>
                                        <div>Lượt xem: 43.506</div>
                                        <div>Lượt thích: 327</div>
                                        <p></p>

                                        Năm lên 12 tuổi, cậu, Shizuru Midouka, bị rơi vào một thế giới khác có tên là『Khu
                                        Vườn Nhỏ』.
                                        Một vùng đất nơi sự tồn tại của các vị thần gần gũi tới mức khả năng thể chất của
                                        những người phụ thuộc v...
                                    </div>
                                </div>
                            </div>
                            <!-- // Tooltip -->
                            <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
                                <div class="thumb-wrapper ln-tooltip" data-tooltip-content="#series_934">
                                    <a href="/truyen/934-akuma-koujo-yurui-akuma-no-monogatari/c68949-4-28-lai-tro-thanh-truyen-thuyet-lan-nua-roi"
                                        title="4-28 Lại trở thành truyền thuyết lần nữa rồi ④">
                                        <div class="a6-ratio">
                                            <div class="content img-in-ratio lazyload"
                                                data-bg="https://i.docln.net/lightnovel/covers/s934-bc7e9f3a-46c5-475f-bc80-d93971f77b42-m.jpg">
                                            </div>
                                        </div>
                                    </a>
                                    <div class="thumb-detail">
                                        <div class="thumb_attr chapter-title"
                                            title="4-28 Lại trở thành truyền thuyết lần nữa rồi ④"><a
                                                href="/truyen/934-akuma-koujo-yurui-akuma-no-monogatari/c68949-4-28-lai-tro-thanh-truyen-thuyet-lan-nua-roi"
                                                title="4-28 Lại trở thành truyền thuyết lần nữa rồi ④">4-28 Lại trở thành
                                                truyền thuyết lần nữa rồi ④</a></div>
                                        <div class="thumb_attr volume-title">Phần 02 - Chương 4 - Thế Giới Thối Nát Tuyệt
                                            Vời (Dị Giới Tesu Thiên)</div>
                                    </div>
                                </div>
                                <div class="thumb_attr series-title"><a
                                        href="/truyen/934-akuma-koujo-yurui-akuma-no-monogatari"
                                        title="Akuma Koujo ~ Yurui Akuma no Monogatari ~">Akuma Koujo ~ Yurui Akuma no
                                        Monogatari ~</a></div>
                            </div>

                            <!-- Tooltip -->
                            <div style="display: none">
                                <div id="series_934">
                                    <div style="margin: 10px 0; width: 250px">
                                        <p style="color: white; font-weight: bold">
                                            Akuma Koujo ~ Yurui Akuma no Monogatari ~
                                        </p>
                                        <p>
                                        </p>
                                        <div>Số từ: 469.303</div>
                                        <div>Lượt xem: 1.259.946</div>
                                        <div>Lượt thích: 1.537</div>
                                        <p></p>

                                        Ác Ma mơ thấy một giấc mộng sống trong kiếp người rồi lại tái sinh làm một đứa trẻ
                                        loài người, vậy cô ấy là người hay Ác ma?
                                        Cốt truyện thú vị, vẻ đẹp của nữ chính (sau khi tái sinh) được miêu tả như...
                                    </div>
                                </div>
                            </div>
                            <!-- // Tooltip -->
                            <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
                                <div class="thumb-wrapper ln-tooltip" data-tooltip-content="#series_5434">
                                    <a href="/truyen/5434-akuma-wa-ikai-de-kami-to-naru/c54197-chuong-09-giao-tiep-dau-tien"
                                        title="Chương 09: Giao tiếp đầu tiên">
                                        <div class="a6-ratio">
                                            <div class="content img-in-ratio lazyload"
                                                data-bg="https://i.docln.net/lightnovel/covers/s5434-bc32e0fc-b00b-44f6-b328-dfc7604dd1b5-m.jpg">
                                            </div>
                                        </div>
                                    </a>
                                    <div class="thumb-detail">
                                        <div class="thumb_attr chapter-title" title="Chương 09: Giao tiếp đầu tiên"><a
                                                href="/truyen/5434-akuma-wa-ikai-de-kami-to-naru/c54197-chuong-09-giao-tiep-dau-tien"
                                                title="Chương 09: Giao tiếp đầu tiên">Chương 09: Giao tiếp đầu tiên</a>
                                        </div>
                                        <div class="thumb_attr volume-title">Arc 1: Đấu tranh</div>
                                    </div>
                                </div>
                                <div class="thumb_attr series-title"><a
                                        href="/truyen/5434-akuma-wa-ikai-de-kami-to-naru"
                                        title="Akuma Wa Ikai De Kami To Naru">Akuma Wa Ikai De Kami To Naru</a></div>
                            </div>

                            <!-- Tooltip -->
                            <div style="display: none">
                                <div id="series_5434">
                                    <div style="margin: 10px 0; width: 250px">
                                        <p style="color: white; font-weight: bold">
                                            Akuma Wa Ikai De Kami To Naru
                                        </p>
                                        <p>
                                        </p>
                                        <div>Số từ: 21.996</div>
                                        <div>Lượt xem: 35.761</div>
                                        <div>Lượt thích: 88</div>
                                        <p></p>

                                        Một VRMMORPG mới, “World of Yggdrasia”, chiêu mộ các beta tester từ khắp mọi nơi
                                        trên thế giới.Mười ngàn testers bắt đầu chuyến phiêu lưu trong một thế giới của kiếm
                                        và ma thuật có kích thước tương tự...
                                    </div>
                                </div>
                            </div>
                            <!-- // Tooltip -->
                            <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
                                <div class="thumb-wrapper ln-tooltip" data-tooltip-content="#series_4435">
                                    <a href="/truyen/4435-akuma-wa-ikai-de-kami-to-naru/c49012-chuong-11-ten-goi-moi"
                                        title="Chương 11 : Tên gọi mới">
                                        <div class="a6-ratio">
                                            <div class="content img-in-ratio lazyload"
                                                data-bg="https://i.docln.net/lightnovel/covers/s4435-9b5ad9fa-d190-4a7d-98a5-147c1d4e20b9-m.jpg">
                                            </div>
                                        </div>
                                    </a>
                                    <div class="thumb-detail">
                                        <div class="thumb_attr chapter-title" title="Chương 11 : Tên gọi mới"><a
                                                href="/truyen/4435-akuma-wa-ikai-de-kami-to-naru/c49012-chuong-11-ten-goi-moi"
                                                title="Chương 11 : Tên gọi mới">Chương 11 : Tên gọi mới</a></div>
                                        <div class="thumb_attr volume-title">Hồi 1: Đấu tranh</div>
                                    </div>
                                </div>
                                <div class="thumb_attr series-title"><a
                                        href="/truyen/4435-akuma-wa-ikai-de-kami-to-naru"
                                        title="Akuma wa ikai de kami to naru">Akuma wa ikai de kami to naru</a></div>
                            </div>

                            <!-- Tooltip -->
                            <div style="display: none">
                                <div id="series_4435">
                                    <div style="margin: 10px 0; width: 250px">
                                        <p style="color: white; font-weight: bold">
                                            Akuma wa ikai de kami to naru
                                        </p>
                                        <p>
                                        </p>
                                        <div>Số từ: 26.870</div>
                                        <div>Lượt xem: 58.612</div>
                                        <div>Lượt thích: 120</div>
                                        <p></p>

                                        Một VRMMORPG mới, “World of Yggdrasia”, chiêu mộ các beta tester từ khắp mọi nơi
                                        trên thế giới.Mười ngàn testers bắt đầu chuyến phiêu lưu trong một thế giới của kiếm
                                        và ma thuật có kích thước tương tự...
                                    </div>
                                </div>
                            </div>
                            <!-- // Tooltip -->
                            <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
                                <div class="thumb-wrapper ln-tooltip" data-tooltip-content="#series_1074">
                                    <a href="/truyen/1074-akuyaku-reijo-ni-koi-wo-shite/c26228-chuong-17-hanh-dong-hanh-dong-hanh-dong"
                                        title="Chương 17: Hành động! Hành động! Hành động!">
                                        <div class="a6-ratio">
                                            <div class="content img-in-ratio lazyload"
                                                data-bg="https://1.bp.blogspot.com/-YgVbBx-HItU/WcOsM5f310I/AAAAAAAAtjU/PAcnt-XZyHgPfsZb5KVMmMWPY6FcMvA7wCHMYCw/w215/default.jpg">
                                            </div>
                                        </div>
                                    </a>
                                    <div class="thumb-detail">
                                        <div class="thumb_attr chapter-title"
                                            title="Chương 17: Hành động! Hành động! Hành động!"><a
                                                href="/truyen/1074-akuyaku-reijo-ni-koi-wo-shite/c26228-chuong-17-hanh-dong-hanh-dong-hanh-dong"
                                                title="Chương 17: Hành động! Hành động! Hành động!">Chương 17: Hành động!
                                                Hành động! Hành động!</a></div>
                                        <div class="thumb_attr volume-title">In the game: Học viện</div>
                                    </div>
                                </div>
                                <div class="thumb_attr series-title"><a
                                        href="/truyen/1074-akuyaku-reijo-ni-koi-wo-shite"
                                        title="Akuyaku Reijo Ni Koi Wo Shite">Akuyaku Reijo Ni Koi Wo Shite</a></div>
                            </div>

                            <!-- Tooltip -->
                            <div style="display: none">
                                <div id="series_1074">
                                    <div style="margin: 10px 0; width: 250px">
                                        <p style="color: white; font-weight: bold">
                                            Akuyaku Reijo Ni Koi Wo Shite
                                        </p>
                                        <p>
                                        </p>
                                        <div>Số từ: 78.269</div>
                                        <div>Lượt xem: 214.468</div>
                                        <div>Lượt thích: 712</div>
                                        <p></p>

                                        Khi lấy lại được ý thức, cậu đã sẵn ở trong thế giới khác. Không hề gặp gỡ nào với
                                        Thần linh, cũng không được ban tặng bất cứ thứ gì, đây chỉ là một lần chuyển sinh
                                        bất ngờ xảy ra. Không còn có đủ thờ...
                                    </div>
                                </div>
                            </div>
                            <!-- // Tooltip -->
                        </main>
                        <div class="pagination-footer">
                            <div class="pagination_wrap">
                                <!--<a href="" class="paging_item paging_prevnext prev  disabled ">Trước</a>-->
                                <a href="https://ln.hako.vn/the-loai/action?page=1"
                                    class="paging_item paging_prevnext prev  disabled ">Đầu</a>

                                <a href="https://ln.hako.vn/the-loai/action?page=1"
                                    class="paging_item page_num  current ">1</a>
                                <a href="https://ln.hako.vn/the-loai/action?page=2" class="paging_item page_num ">2</a>
                                <a href="https://ln.hako.vn/the-loai/action?page=3" class="paging_item page_num ">3</a>
                                <a href="https://ln.hako.vn/the-loai/action?page=4" class="paging_item page_num ">4</a>
                                <a href="https://ln.hako.vn/the-loai/action?page=5" class="paging_item page_num ">5</a>

                                <!--<a href=" https://ln.hako.vn/the-loai/action?page=2 " class="paging_item paging_prevnext next ">Tiếp</a>-->
                                <a href="https://ln.hako.vn/the-loai/action?page=34"
                                    class="paging_item paging_prevnext next ">Cuối</a>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </main>
@endsection

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

    <main id="mainpart" class="project-page" style="min-height: 212px;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="page-breadcrumb">
                        <span class="breadcrum-level"><a href="https://docln.net"><i class="fas fa-home"></i></a></span>
                        <span class="next-icon"><i class="fas fa-chevron-right"></i></span>
                        <span class="breadcrum-level"><a href="https://docln.net">Truyện dịch</a></span>
                    </div>

                </div>
            </div>
        </div>
        <div class="container">
            <div class="row d-block clearfix">
                <div class="col-12 col-lg-9 float-left">
                    <section class="feature-section at-series clear">
                        <main class="section-body">
                            <div class="top-part">
                                <div class="row">
                                    <div class="left-column col-12 col-md-3">
                                        <div class="series-cover">
                                            <div class="series-type">
                                                <span>Truyện dịch</span>
                                            </div>
                                            <div class="a6-ratio">
                                                <div class="content img-in-ratio"
                                                    style="background-image: url('https://i.docln.net/lightnovel/covers/s5184-5c9063be-fe93-45af-b80a-a8c416d91788-m.jpg')">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-9 flex flex-col">
                                        <div class="flex-1">
                                            <div class="series-name-group">
                                                <span class="series-name">
                                                    <a
                                                        href="/truyen/5184-koko-wa-ore-ni-makasete-saki-ni-ike-to-itte-kara-10-nen-ga-tattara-densetsu-ni-natteita">10
                                                        năm sau khi nói câu “Cứ đi đi, ở đây để tôi lo”, tôi đã trở thành
                                                        một huyền thoại</a>
                                                </span>
                                            </div>
                                            <div class="series-information mb-0 flex flex-col">
                                                <div class="series-gernes" x-data="{ more: false }">
                                                    <a class="series-gerne-item"
                                                        href="https://docln.net/the-loai/action">Action</a>
                                                    <a class="series-gerne-item"
                                                        href="https://docln.net/the-loai/adventure">Adventure</a>
                                                    <a class="series-gerne-item"
                                                        href="https://docln.net/the-loai/fantasy">Fantasy</a>
                                                    <a class="series-gerne-item"
                                                        href="https://docln.net/the-loai/harem">Harem</a>
                                                    <a class="series-gerne-item"
                                                        href="https://docln.net/the-loai/magic">Magic</a>
                                                    <a class="series-gerne-item"
                                                        href="https://docln.net/the-loai/slice-of-life">Slice of Life</a>

                                                    <a class="series-gerne-item animation" style="display: none;"
                                                        href="https://docln.net/the-loai/super-power" x-show="more"
                                                        :class="{ 'fade-in': more }">
                                                        Super Power
                                                    </a>
                                                    <a class="series-gerne-item animation" style="display: none;"
                                                        href="https://docln.net/the-loai/web-novel" x-show="more"
                                                        :class="{ 'fade-in': more }">
                                                        Web Novel
                                                    </a>

                                                    <a class="series-gerne-item" x-show="!more" @click="more = true;"><i
                                                            class="fas fa-ellipsis-h"></i></a>
                                                </div>
                                                <div class="info-item">
                                                    <span class="info-name">Tác giả:</span>
                                                    <span class="info-value "><a
                                                            href="https://docln.net/tac-gia/Ezo%20Gingitsune">Ezo
                                                            Gingitsune</a></span>
                                                </div>
                                                <div class="info-item">
                                                    <span class="info-name">Họa sĩ:</span>
                                                    <span class="info-value"><a
                                                            href="https://docln.net/hoa-si/DeeCHA">DeeCHA</a></span>
                                                </div>

                                                <div class="info-item">
                                                    <span class="info-name">Tình trạng:</span>
                                                    <span class="info-value">
                                                        <a href="https://docln.net/truyen-tam-ngung">Tạm ngưng</a>
                                                    </span>
                                                </div>

                                                <div class="flex flex-row self-center md:self-start gap-2">
                                                    <a class="self-center md:self-start rounded-full bg-[#d9534f] mt-3 mb-3 px-4 py-2 text-sm font-semibold text-white shadow-sm hover:bg-red-800 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#d43f3a] justify-center"
                                                        href="/truyen/5184-koko-wa-ore-ni-makasete-saki-ni-ike-to-itte-kara-10-nen-ga-tattara-densetsu-ni-natteita/c58018-chuong-20-di-nhan-nhiem-vu-nao">Đọc
                                                        tiếp</a>

                                                    <div wire:snapshot="{&quot;data&quot;:{&quot;series&quot;:[null,{&quot;class&quot;:&quot;App\\Models\\Series&quot;,&quot;key&quot;:5184,&quot;s&quot;:&quot;mdl&quot;}],&quot;ignored&quot;:false},&quot;memo&quot;:{&quot;id&quot;:&quot;geTuMHXvFad4kUPEOCvi&quot;,&quot;name&quot;:&quot;pub.series.member.notification-ignore-button&quot;,&quot;path&quot;:&quot;truyen\/5184-koko-wa-ore-ni-makasete-saki-ni-ike-to-itte-kara-10-nen-ga-tattara-densetsu-ni-natteita&quot;,&quot;method&quot;:&quot;GET&quot;,&quot;children&quot;:[],&quot;scripts&quot;:[],&quot;assets&quot;:[],&quot;errors&quot;:[],&quot;locale&quot;:&quot;vi&quot;},&quot;checksum&quot;:&quot;ec63d57962a10792a7d640c0b6b58650a3310622703403d020c87ff1df36d6d3&quot;}"
                                                        wire:effects="[]" wire:id="geTuMHXvFad4kUPEOCvi">
                                                        <button
                                                            class="self-center md:self-start rounded-full bg-amber-600 mt-3 mb-3 px-4 py-2 text-sm font-semibold text-white  shadow-sm hover:bg-amber-800 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#d43f3a] justify-center"
                                                            wire:click="handle">
                                                            <i class="fas fa-bullhorn" style="margin-right: 6px;"></i>Tắt
                                                            nhận thông báo
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="side-features flex-none">
                                            <div class="row">
                                                <div class="col-4 col-md feature-item width-auto-xl">
                                                    <a id="collect" class="side-feature-button button-follow followed">
                                                        <span class="block feature-value"><i
                                                                class="fas fa-heart"></i></span>
                                                        <span class="block feature-name"> 759 </span>
                                                    </a>
                                                </div>

                                                <div class="col-4 col-md feature-item width-auto-xl">
                                                    <div class="series-rating rated">
                                                        <a href="https://docln.net/truyen/5184/danh-gia">
                                                            <label for="open-rating"
                                                                class="side-feature-button button-rate">
                                                                <span class="block feature-value"><i
                                                                        class="far fa-star"></i></span>
                                                                <span class="block feature-name">Đánh giá</span>
                                                            </label>
                                                        </a>

                                                    </div>
                                                </div>
                                                <div class="col-4 col-md feature-item width-auto-xl">
                                                    <div class="catalog-icon side-feature-button">
                                                        <span class="block feature-value"><i
                                                                class="fas fa-list"></i></span>
                                                        <span class="block feature-name">Mục lục</span>
                                                    </div>
                                                </div>
                                                <div class="col-4 col-md feature-item width-auto-xl">
                                                    <a href="https://docln.net/truyen/5184-koko-wa-ore-ni-makasete-saki-ni-ike-to-itte-kara-10-nen-ga-tattara-densetsu-ni-natteita#series-comments"
                                                        class="side-feature-button">
                                                        <span class="block feature-value"><i
                                                                class="fas fa-comments"></i></span>
                                                        <span class="block feature-name">Bàn luận</span>
                                                    </a>
                                                </div>
                                                <div class="col-4 col-md feature-item width-auto-xl">
                                                    <label for="open-sharing" class="side-feature-button">
                                                        <span class="block feature-value"><i
                                                                class="fas fa-share-alt"></i></span>
                                                        <span class="block feature-name">Chia sẻ</span>
                                                    </label>
                                                    <input type="checkbox" id="open-sharing">
                                                    <div class="sharing-box">
                                                        <a x-data="" href="#" class="sharing-item"
                                                            @click.prevent="window.navigator.clipboard.writeText('https://docln.net/truyen/5184'); $store.toast.show('Copy thành công!')">Link
                                                            rút gọn</a>
                                                        <a class="sharing-item"
                                                            href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdocln.net%2Ftruyen%2F5184-koko-wa-ore-ni-makasete-saki-ni-ike-to-itte-kara-10-nen-ga-tattara-densetsu-ni-natteita"
                                                            target="_blank"><i class="fab fa-facebook-f"></i></a>
                                                        <a class="sharing-item"
                                                            href="https://twitter.com/intent/tweet?text=10 năm sau khi nói câu “Cứ đi đi, ở đây để tôi lo”, tôi đã trở thành một huyền thoại&amp;url=https%3A%2F%2Fdocln.net%2Ftruyen%2F5184-koko-wa-ore-ni-makasete-saki-ni-ike-to-itte-kara-10-nen-ga-tattara-densetsu-ni-natteita"
                                                            target="_blank"><i class="fab fa-twitter"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="bottom-part">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="row statistic-list">
                                            <div class="col-12 col-md-3 statistic-item block-wide at-mobile">
                                                <div class="statistic-name">Lần cuối</div>
                                                <div class="statistic-value"><time class="timeago"
                                                        title="26/11/2019 17:03:06" datetime="2019-11-26T17:03:06+07:00">5
                                                        năm</time></div>
                                            </div>
                                            <div class="col-4 col-md-3 statistic-item">
                                                <div class="statistic-name">Số từ</div>
                                                <div class="statistic-value">19.387</div>
                                            </div>

                                            <div class="col-4 col-md-3 statistic-item">
                                                <div class="statistic-name">Đánh giá</div>
                                                <div class="statistic-value">0 / <small>0</small></div>
                                            </div>
                                            <div class="col-4 col-md-3 statistic-item">
                                                <div class="statistic-name">Lượt xem</div>
                                                <div class="statistic-value">166.009</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="summary-wrapper other-facts col-12">
                                        <div class="fact-item">
                                            <div class="fact-name">Tên khác:</div>
                                            <div class="fact-value">
                                                <div class="block pad-bottom-5">Koko wa Ore ni Makasete Saki ni Ike to Itte
                                                    kara 10 Nen ga Tattara Densetsu ni Natteita</div>
                                                <div class="block pad-bottom-5">10 Years after saying “Leave this to me and
                                                    go”, I Became a Legend.</div>
                                                <div class="block pad-bottom-5">ここは俺に任せて先に行けと言ってから10年がたったら伝説になっていた。</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="summary-wrapper col-12">
                                        <div class="series-summary">
                                            <h4 class="font-bold">Tóm tắt</h4>
                                            <div class="summary-content">
                                                <p>Tổ Đội Anh Hùng bị tấn công bởi Quân Đoàn quỷ vương với số lượng vô số
                                                    kể, không nghi ngờ gì nữa nếu đối đầu trực tiếp tổ đội sẽ hoàn toàn bị
                                                    tiêu diệt.</p>
                                                <p>Một thành viên trong tổ đội, Pháp Sư mạnh nhất, Rakku quyết định cầm chân
                                                    lũ quỷ để mở đường thoát thân cho đồng đội của mình.</p>
                                                <p>[Đi đi, tôi sẽ ở đây giữ chân bọn chúng]</p>
                                                <p>[Nhưng…]</p>
                                                <p>[Đừng lo, tôi sẽ đuổi theo cậu sau]</p>
                                                <p>Trong khi chiến đấu với quân đoàn quỷ, cậu lĩnh hội kỹ năng「Drain
                                                    Touch」từ lũ quỷ, cậu liên tục chiến đấu không ăn không ngủ.</p>
                                                <p>Lũ quỷ ngày càng mạnh mẽ song Rakku cũng trở nên vượt trội hơn và chiến
                                                    đấu liên tục trong 10 năm cho đến khi không còn một con quỷ nào xuất
                                                    hiện.</p>
                                                <p>Rakku trở lại thủ đô và ngạc nhiên thay. Tên của cậu trở thành đơn vị
                                                    tiền tệ, một bức tượng kỳ vĩ của cậu được dựng lên.</p>
                                                <p>Do cậu liên tục chiến đấu và hấp thụ ma lực từ lũ quỷ nên ngoại hình cậu
                                                    không thay đổi là bao với vẻ ngoài không bằng tuổi, nhưng bên trong là
                                                    sức mạnh của một vị thần Rakku cải trang thành [Chiến Binh] hạng F mặc
                                                    dù khả năng là một [Pháp Sư] cấp S. Cuộc phiêu lưu ở thế giới hòa bình?
                                                    Sẽ bắt đầu ngay bây giờ…</p>
                                            </div>
                                            <div class="summary-more more-state">
                                                <div class="see_more">Xem thêm</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </main>
                    </section>
                </div>
                <div id="rd-sidebar" class="col-12 col-lg-3 float-right">
                    <div class="row top-group">
                        <div class="col-12 no-push push-3-m col-md-6 no-push-l col-lg-12">
                            <section class="series-users">
                                <main>
                                    <div class="series-owner group-banned">
                                        <img width="50px" height="50px"
                                            src="https://i.docln.net/lightnovel/users/ua34603-c1438eb0-d1ac-4cbe-95d3-205c200a738a.jpg"
                                            alt="Poster's avatar">
                                        <div class="series-owner-title">
                                            <span class="series-owner_name"><a href="/thanh-vien/34603">thh</a></span>
                                        </div>
                                    </div>
                                    <div class="fantrans-section">
                                        <div class="fantrans-name">Nhóm dịch</div>
                                        <div class="fantrans-value"><a
                                                href="https://docln.net/nhom-dich/898-urion">Urion</a></div>
                                    </div>
                                    <div class="series-owner_share">
                                        <span class="owner_share-title" title="Tham gia">Tham gia</span>
                                        <a class="ln_info-name" href="/thanh-vien/13929"
                                            style="padding-left: 5px;">Pounder 1</a>,
                                        <a class="ln_info-name" href="/thanh-vien/26769"
                                            style="padding-left: 5px;">Anhkiet2003</a>
                                    </div>
                                    <div class="owner-donate" style="padding: 0">
                                        <!-- <span class="donate-intro">Bạn muốn tiến độ đều hơn ?</span>
                                            <span class="button button-red" onclick="alert('Chức năng đang được hoàn thiện')">Hãy Ủng hộ !!</span> -->
                                    </div>
                                </main>
                            </section>
                        </div>
                    </div>



                    <section class="series-note basic-section gradual-mobile">
                        <header class="sect-header"><span class="sect-title">Chú thích thêm</span><span
                                class="mobile-icon"><i class="fas fa-chevron-down"></i></span></header>
                        <main class="d-lg-block">
                            <div class="long-text" style="word-wrap: break-word;">
                                <p>Link: <a
                                        href="https://www.novelupdates.com/series/koko-wa-ore-ni-makasete-saki-ni-ike-to-itte-kara-10-nen-ga-tattara-densetsu-ni-natteita/"
                                        rel="nofollow noreferrer noopener" target="_blank">Eng</a></p>
                                <p><a href="https://ncode.syosetu.com/n3722ev/" rel="nofollow noreferrer noopener"
                                        target="_blank">Raw</a></p>
                                <p>Nhân lực: Anhkiet2003, Pounder 1, Fushino</p>
                            </div>
                        </main>
                    </section>



                    <section class="basic-section gradual-mobile">
                        <header class="sect-header"><span class="sect-title">Thảo luận</span><span class="mobile-icon"><i
                                    class="fas fa-chevron-down"></i></span></header>
                        <main class="d-lg-block">
                            <div class="text-right pad-10">
                                <a class="button button-green" href="https://docln.net/action/page/create?series_id=5184">
                                    <i class="fas fa-plus"></i> Tạo bài viết
                                </a>
                            </div>
                        </main>
                    </section>

                    <section id="list-vol" class="none list_vol-section">
                        <div class="list-volume-wrapper basic-section">
                            <header class="sect-header"><span class="sect-title">Mục lục</span></header>
                            <span class="list-vol_off">
                                <i class="fas fa-times"></i>
                            </span>
                            <ol class="list-volume unstyled no-margin no-padding">
                                <li data-scrollto="#volume_8778"><span class="list_vol-order">01.</span><span
                                        class="list_vol-title">Web Novel</span></li>
                            </ol>
                        </div>
                    </section>
                </div>
                <div class="col-12 col-lg-9 float-left">
                    <div style="text-align: center; margin: 0 auto 10px auto;">
                    </div>


                    <section class="volume-list at-series basic-section volume-mobile gradual-mobile ">
                        <header id="volume_8778" class="sect-header">
                            <span class="mobile-icon"><i class="fas fa-chevron-down"></i></span>
                            <span class="sect-title">
                                Web Novel
                            </span>
                        </header>
                        <main class="d-lg-block">
                            <div class="row">
                                <div class="col-12 col-md-2">
                                    <div class="volume-cover">
                                        <a
                                            href="/truyen/5184-koko-wa-ore-ni-makasete-saki-ni-ike-to-itte-kara-10-nen-ga-tattara-densetsu-ni-natteita/t8778-web-novel">
                                            <div class="a6-ratio">
                                                <div class="content img-in-ratio"
                                                    style="background-image: url('https://docln.net/img/nocover.jpg')">
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-12 col-md-10">
                                    <ul class="list-chapters at-series">
                                        <li class="">
                                            <div class="chapter-name">


                                                <a href="/truyen/5184-koko-wa-ore-ni-makasete-saki-ni-ike-to-itte-kara-10-nen-ga-tattara-densetsu-ni-natteita/c53691-chuong-07-to-goblin"
                                                    title="Chương 07: Tổ Goblin">Chương 07: Tổ Goblin</a>

                                            </div>
                                            <div class="chapter-time">10/08/2019</div>
                                        </li>
                                        <li class="">
                                            <div class="chapter-name">


                                                <a href="/truyen/5184-koko-wa-ore-ni-makasete-saki-ni-ike-to-itte-kara-10-nen-ga-tattara-densetsu-ni-natteita/c53741-chuong-08-goblin-chua"
                                                    title="Chương 08: Goblin Chúa">Chương 08: Goblin Chúa</a>

                                            </div>
                                            <div class="chapter-time">11/08/2019</div>
                                        </li>
                                        <li class="">
                                            <div class="chapter-name">


                                                <a href="/truyen/5184-koko-wa-ore-ni-makasete-saki-ni-ike-to-itte-kara-10-nen-ga-tattara-densetsu-ni-natteita/c53742-chuong-09-f-rank-vs-goblin-chua"
                                                    title="Chương 09: F-rank VS Goblin Chúa">Chương 09: F-rank VS Goblin
                                                    Chúa</a>

                                            </div>
                                            <div class="chapter-time">11/08/2019</div>
                                        </li>
                                        <li class="">
                                            <div class="chapter-name">


                                                <a href="/truyen/5184-koko-wa-ore-ni-makasete-saki-ni-ike-to-itte-kara-10-nen-ga-tattara-densetsu-ni-natteita/c53831-chuong-10-tinh-canh-cua-shea"
                                                    title="Chương 10: Tình cảnh của Shea">Chương 10: Tình cảnh của
                                                    Shea</a>

                                            </div>
                                            <div class="chapter-time">12/08/2019</div>
                                        </li>
                                        <li class="">
                                            <div class="chapter-name">


                                                <a href="/truyen/5184-koko-wa-ore-ni-makasete-saki-ni-ike-to-itte-kara-10-nen-ga-tattara-densetsu-ni-natteita/c53832-chuong-11-vampire-chua"
                                                    title="Chương 11: Vampire Chúa">Chương 11: Vampire Chúa</a>

                                            </div>
                                            <div class="chapter-time">12/08/2019</div>
                                        </li>
                                        <li class="">
                                            <div class="chapter-name">


                                                <a href="/truyen/5184-koko-wa-ore-ni-makasete-saki-ni-ike-to-itte-kara-10-nen-ga-tattara-densetsu-ni-natteita/c53887-chuong-12-nhung-vi-than-bong-toi"
                                                    title="Chương 12: Những vị thần Bóng tối">Chương 12: Những vị thần Bóng
                                                    tối</a>

                                            </div>
                                            <div class="chapter-time">13/08/2019</div>
                                        </li>
                                        <li class="none">
                                            <div class="chapter-name">


                                                <a href="/truyen/5184-koko-wa-ore-ni-makasete-saki-ni-ike-to-itte-kara-10-nen-ga-tattara-densetsu-ni-natteita/c53992-chuong-13-nhung-nghi-ngo-cua-shea"
                                                    title="Chương 13: Những nghi ngờ của Shea">Chương 13: Những nghi ngờ
                                                    của Shea</a>

                                            </div>
                                            <div class="chapter-time">15/08/2019</div>
                                        </li>
                                        <li class="none">
                                            <div class="chapter-name">


                                                <a href="/truyen/5184-koko-wa-ore-ni-makasete-saki-ni-ike-to-itte-kara-10-nen-ga-tattara-densetsu-ni-natteita/c53993-chuong-14-thu-thap-chien-loi-pham"
                                                    title="Chương 14: Thu thập chiến lợi phẩm">Chương 14: Thu thập chiến
                                                    lợi phẩm</a>

                                            </div>
                                            <div class="chapter-time">15/08/2019</div>
                                        </li>
                                        <li class="none">
                                            <div class="chapter-name">


                                                <a href="/truyen/5184-koko-wa-ore-ni-makasete-saki-ni-ike-to-itte-kara-10-nen-ga-tattara-densetsu-ni-natteita/c56855-chuong-15-giai-quyet-van-de-goblin"
                                                    title="Chương 15: Giải quyết vấn đề Goblin">Chương 15: Giải quyết vấn
                                                    đề Goblin</a>

                                            </div>
                                            <div class="chapter-time">21/10/2019</div>
                                        </li>
                                        <li class="none">
                                            <div class="chapter-name">


                                                <a href="/truyen/5184-koko-wa-ore-ni-makasete-saki-ni-ike-to-itte-kara-10-nen-ga-tattara-densetsu-ni-natteita/c56976-chuong-10"
                                                    title="Chương 16: Cho đến tận lúc về nhà thì vẫn là một chuyến phiêu lưu">Chương
                                                    16: Cho đến tận lúc về nhà thì vẫn là một chuyến phiêu lưu</a>

                                            </div>
                                            <div class="chapter-time">25/10/2019</div>
                                        </li>
                                        <li class="none">
                                            <div class="chapter-name">


                                                <a href="/truyen/5184-koko-wa-ore-ni-makasete-saki-ni-ike-to-itte-kara-10-nen-ga-tattara-densetsu-ni-natteita/c57026-chuong-17-van-de-cua-goran"
                                                    title="Chương 17: Vấn đề của Goran">Chương 17: Vấn đề của Goran</a>

                                            </div>
                                            <div class="chapter-time">26/10/2019</div>
                                        </li>
                                        <li class="none">
                                            <div class="chapter-name">


                                                <a href="/truyen/5184-koko-wa-ore-ni-makasete-saki-ni-ike-to-itte-kara-10-nen-ga-tattara-densetsu-ni-natteita/c57559-chuong-18-hieu-lam-cua-serulis"
                                                    title="Chương 18: Hiểu lầm của Serulis">Chương 18: Hiểu lầm của
                                                    Serulis</a>

                                            </div>
                                            <div class="chapter-time">11/11/2019</div>
                                        </li>
                                        <li class="none">
                                            <div class="chapter-name">


                                                <a href="/truyen/5184-koko-wa-ore-ni-makasete-saki-ni-ike-to-itte-kara-10-nen-ga-tattara-densetsu-ni-natteita/c57698-chuong-19-chien-binh-serulis"
                                                    title="Chương 19: Chiến binh Serulis">Chương 19: Chiến binh Serulis</a>

                                            </div>
                                            <div class="chapter-time">16/11/2019</div>
                                        </li>
                                        <li class="none">
                                            <div class="chapter-name">


                                                <a href="/truyen/5184-koko-wa-ore-ni-makasete-saki-ni-ike-to-itte-kara-10-nen-ga-tattara-densetsu-ni-natteita/c58018-chuong-20-di-nhan-nhiem-vu-nao"
                                                    title="Chương 20: Đi nhận nhiệm vụ nào">Chương 20: Đi nhận nhiệm vụ
                                                    nào</a>

                                            </div>
                                            <div class="chapter-time">26/11/2019</div>
                                        </li>
                                        <div class="mobile-more">
                                            <div class="see_more">
                                                <span>Xem tiếp (9 chương)</span>
                                            </div>
                                        </div>
                                    </ul>
                                </div>
                            </div>
                        </main>
                    </section>



                    <div wire:id="I21J2jiSEoXFzERZsEKv" wire:init="loadRelevantSeries">
                        <section class="basic-section gradual-mobile">
                            <header class="sect-header"><span class="sect-title">Có thể bạn quan tâm</span><span
                                    class="mobile-icon"><i class="fas fa-chevron-down"></i></span></header>
                            <main class="d-lg-block">
                                <ul class="others-list">
                                    <div class="row">
                                        <!--[if BLOCK]><![endif]-->
                                        <li class="col-12 col-6-m">
                                            <div class="others-img no-padding">
                                                <div class="a6-ratio">
                                                    <div class="content img-in-ratio"
                                                        style="background-image: url('https://i.docln.net/lightnovel/covers/s7596-cd32fad4-92a2-42cd-b46a-ea7541ba9d6b-m.jpg')">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="others-info">
                                                <h5 class="others-name"><a
                                                        href="/truyen/7596-10-nam-sau-khi-noi-cau-cu-di-di-o-day-de-toi-lo-toi-da-tro-thanh-mot-huyen-thoai">10
                                                        năm sau khi nói câu “Cứ đi đi, ở đây để tôi lo”, tôi đã trở thành
                                                        một huyền thoại</a></h5>
                                                <small>Nhóm dịch: Gimme what i want!!!</small>
                                                <small>Chapter 23 : Điều cậu ấy bảo vệ.</small>


                                            </div>
                                        </li>
                                        <li class="col-12 col-6-m">
                                            <div class="others-img no-padding">
                                                <div class="a6-ratio">
                                                    <div class="content img-in-ratio"
                                                        style="background-image: url('https://docln.net/img/nocover.jpg')">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="others-info">
                                                <h5 class="others-name"><a
                                                        href="/truyen/13117-bi-em-ke-ban-thuo-nho-va-idol-truong-ghet-bo-nhung-tin-don-ho-noi-ve-toi-cu-tang-len-khong-ngot">Bị
                                                        em kế, bạn thuở nhỏ và Idol trường ghét bỏ, nhưng tin đồn họ nói về
                                                        tôi cứ tăng lên không ngớt</a></h5>
                                                <small>Nhóm dịch: TheGreenhorn Translation</small>
                                                <small>Chương 47: Nhỏ gyaru không nên là đứa cô độc</small>


                                            </div>
                                        </li>
                                        <li class="col-12 col-6-m">
                                            <div class="others-img no-padding">
                                                <div class="a6-ratio">
                                                    <div class="content img-in-ratio"
                                                        style="background-image: url('https://i.docln.net/lightnovel/covers/s10199-9ebdda7d-1552-41b8-8719-0a8d80770a28-m.jpg')">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="others-info">
                                                <h5 class="others-name"><a
                                                        href="/truyen/10199-koko-wa-ore-ni-makasete-saki-ni-ike-to-itte-kara-10-nen-ga-tattara-densetsu-ni-natteita">Đã
                                                        10 năm kể từ khi nói câu "Hãy giao mọi thứ ở đây lại cho tôi, đi
                                                        trước đi", tôi trở thành huyền thoại</a></h5>
                                                <small>Nhóm dịch: Empresses</small>
                                                <small>Chương 11: Vampire chúa</small>


                                            </div>
                                        </li>
                                        <li class="col-12 col-6-m">
                                            <div class="others-img no-padding">
                                                <div class="a6-ratio">
                                                    <div class="content img-in-ratio"
                                                        style="background-image: url('https://i2.docln.net/ln/series/covers/s16873-b952bc1b-2c5f-43c2-ace1-09de4736ce7e.jpg')">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="others-info">
                                                <h5 class="others-name"><a
                                                        href="/truyen/16873-ban-thuo-nho-tro-thanh-than-tuong-noi-tieng-nhung-co-gai-de-thuong-dang-ho-tro-toi">Bạn
                                                        thuở nhỏ trở thành thần tượng nổi tiếng ~ Những cô gái dễ thương ấy
                                                        đang nuông chiều tôi ~</a></h5>
                                                <small>Nhóm dịch: Vin and Zoi</small>
                                                <small>Minh họa LN</small>


                                            </div>
                                        </li>
                                        <!--[if ENDBLOCK]><![endif]-->
                                    </div>
                                </ul>
                                <div class="mobile-more none">
                                    <div class="see_more">
                                        <span>Xem thêm</span>
                                    </div>
                                </div>
                            </main>
                        </section>
                    </div>
                    <section id="series-comments" class="basic-section">
                        <header class="sect-header tab-list">
                            <span class="sect-title tab-title" data-tab-index="1">Tổng bình luận <span
                                    class="comments-count">(428)</span></span>
                        </header>
                        <main id="fbcmt_root" class="comment-wrapper d-lg-block clear">
                            <span style="padding: 10px; display: inline-block;">Báo cáo bình luận không phù hợp ở <a
                                    href="/thao-luan/619-bao-cao-binh-luan" style="color: blue">đây</a></span>
                            <div id="tab-content-1" class="tab-content clear">
                                <section class="ln-comment">
                                    <header>
                                        <h3 class="text-lg font-bold dark:text-white">141 Bình luận </h3>
                                        <!-- <i id="refresh_comment" class="fas fa-refresh" aria-hidden="true" style="margin-left: 10px; font-size: 18px"></i></h3> -->
                                    </header>

                                    <main class="ln-comment-body">
                                        <div id="ln-comment-submit" class="ln-comment-form clear">
                                            <form action="" method="POST" class="comment_form">
                                                <textarea class="comment_content" id="mce_0" style="display: none;" aria-hidden="true"></textarea>
                                                <div role="application" class="tox tox-tinymce"
                                                    style="visibility: hidden; height: 200px;">
                                                    <div class="tox-editor-container">
                                                        <div data-alloy-vertical-dir="toptobottom"
                                                            class="tox-editor-header">
                                                            <div role="group" class="tox-toolbar-overlord">
                                                                <div role="group" class="tox-toolbar__primary">
                                                                    <div title="" role="toolbar"
                                                                        data-alloy-tabstop="true" tabindex="-1"
                                                                        class="tox-toolbar__group"><button
                                                                            aria-label="Emoticons" title="Emoticons"
                                                                            type="button" tabindex="-1"
                                                                            class="tox-tbtn"><span
                                                                                class="tox-icon tox-tbtn__icon-wrap"><svg
                                                                                    width="24" height="24">
                                                                                    <path
                                                                                        d="M9 11c.6 0 1-.4 1-1s-.4-1-1-1a1 1 0 0 0-1 1c0 .6.4 1 1 1zm6 0c.6 0 1-.4 1-1s-.4-1-1-1a1 1 0 0 0-1 1c0 .6.4 1 1 1zm-3 5.5c2.1 0 4-1.5 4.4-3.5H7.6c.5 2 2.3 3.5 4.4 3.5zM12 4a8 8 0 1 0 0 16 8 8 0 0 0 0-16zm0 14.5a6.5 6.5 0 1 1 0-13 6.5 6.5 0 0 1 0 13z"
                                                                                        fill-rule="nonzero"></path>
                                                                                </svg></span></button><button
                                                                            aria-label="Undo" title="Undo"
                                                                            type="button" tabindex="-1"
                                                                            class="tox-tbtn tox-tbtn--disabled"
                                                                            aria-disabled="true"><span
                                                                                class="tox-icon tox-tbtn__icon-wrap"><svg
                                                                                    width="24" height="24">
                                                                                    <path
                                                                                        d="M6.4 8H12c3.7 0 6.2 2 6.8 5.1.6 2.7-.4 5.6-2.3 6.8a1 1 0 0 1-1-1.8c1.1-.6 1.8-2.7 1.4-4.6-.5-2.1-2.1-3.5-4.9-3.5H6.4l3.3 3.3a1 1 0 1 1-1.4 1.4l-5-5a1 1 0 0 1 0-1.4l5-5a1 1 0 0 1 1.4 1.4L6.4 8z"
                                                                                        fill-rule="nonzero"></path>
                                                                                </svg></span></button><button
                                                                            aria-label="Redo" title="Redo"
                                                                            type="button" tabindex="-1"
                                                                            class="tox-tbtn tox-tbtn--disabled"
                                                                            aria-disabled="true"><span
                                                                                class="tox-icon tox-tbtn__icon-wrap"><svg
                                                                                    width="24" height="24">
                                                                                    <path
                                                                                        d="M17.6 10H12c-2.8 0-4.4 1.4-4.9 3.5-.4 2 .3 4 1.4 4.6a1 1 0 1 1-1 1.8c-2-1.2-2.9-4.1-2.3-6.8.6-3 3-5.1 6.8-5.1h5.6l-3.3-3.3a1 1 0 1 1 1.4-1.4l5 5a1 1 0 0 1 0 1.4l-5 5a1 1 0 0 1-1.4-1.4l3.3-3.3z"
                                                                                        fill-rule="nonzero"></path>
                                                                                </svg></span></button></div>
                                                                    <div title="" role="toolbar"
                                                                        data-alloy-tabstop="true" tabindex="-1"
                                                                        class="tox-toolbar__group"><button
                                                                            aria-label="Bold" title="Bold"
                                                                            type="button" tabindex="-1"
                                                                            class="tox-tbtn" aria-pressed="false"><span
                                                                                class="tox-icon tox-tbtn__icon-wrap"><svg
                                                                                    width="24" height="24">
                                                                                    <path
                                                                                        d="M7.8 19c-.3 0-.5 0-.6-.2l-.2-.5V5.7c0-.2 0-.4.2-.5l.6-.2h5c1.5 0 2.7.3 3.5 1 .7.6 1.1 1.4 1.1 2.5a3 3 0 0 1-.6 1.9c-.4.6-1 1-1.6 1.2.4.1.9.3 1.3.6s.8.7 1 1.2c.4.4.5 1 .5 1.6 0 1.3-.4 2.3-1.3 3-.8.7-2.1 1-3.8 1H7.8zm5-8.3c.6 0 1.2-.1 1.6-.5.4-.3.6-.7.6-1.3 0-1.1-.8-1.7-2.3-1.7H9.3v3.5h3.4zm.5 6c.7 0 1.3-.1 1.7-.4.4-.4.6-.9.6-1.5s-.2-1-.7-1.4c-.4-.3-1-.4-2-.4H9.4v3.8h4z"
                                                                                        fill-rule="evenodd"></path>
                                                                                </svg></span></button><button
                                                                            aria-label="Italic" title="Italic"
                                                                            type="button" tabindex="-1"
                                                                            class="tox-tbtn" aria-pressed="false"><span
                                                                                class="tox-icon tox-tbtn__icon-wrap"><svg
                                                                                    width="24" height="24">
                                                                                    <path
                                                                                        d="M16.7 4.7l-.1.9h-.3c-.6 0-1 0-1.4.3-.3.3-.4.6-.5 1.1l-2.1 9.8v.6c0 .5.4.8 1.4.8h.2l-.2.8H8l.2-.8h.2c1.1 0 1.8-.5 2-1.5l2-9.8.1-.5c0-.6-.4-.8-1.4-.8h-.3l.2-.9h5.8z"
                                                                                        fill-rule="evenodd"></path>
                                                                                </svg></span></button><button
                                                                            aria-label="Underline" title="Underline"
                                                                            type="button" tabindex="-1"
                                                                            class="tox-tbtn" aria-pressed="false"><span
                                                                                class="tox-icon tox-tbtn__icon-wrap"><svg
                                                                                    width="24" height="24">
                                                                                    <path
                                                                                        d="M16 5c.6 0 1 .4 1 1v5.5a4 4 0 0 1-.4 1.8l-1 1.4a5.3 5.3 0 0 1-5.5 1 5 5 0 0 1-1.6-1c-.5-.4-.8-.9-1.1-1.4a4 4 0 0 1-.4-1.8V6c0-.6.4-1 1-1s1 .4 1 1v5.5c0 .3 0 .6.2 1l.6.7a3.3 3.3 0 0 0 2.2.8 3.4 3.4 0 0 0 2.2-.8c.3-.2.4-.5.6-.8l.2-.9V6c0-.6.4-1 1-1zM8 17h8c.6 0 1 .4 1 1s-.4 1-1 1H8a1 1 0 0 1 0-2z"
                                                                                        fill-rule="evenodd"></path>
                                                                                </svg></span></button><button
                                                                            aria-label="Strikethrough"
                                                                            title="Strikethrough" type="button"
                                                                            tabindex="-1" class="tox-tbtn"
                                                                            aria-pressed="false"><span
                                                                                class="tox-icon tox-tbtn__icon-wrap"><svg
                                                                                    width="24" height="24">
                                                                                    <g fill-rule="evenodd">
                                                                                        <path
                                                                                            d="M15.6 8.5c-.5-.7-1-1.1-1.3-1.3-.6-.4-1.3-.6-2-.6-2.7 0-2.8 1.7-2.8 2.1 0 1.6 1.8 2 3.2 2.3 4.4.9 4.6 2.8 4.6 3.9 0 1.4-.7 4.1-5 4.1A6.2 6.2 0 0 1 7 16.4l1.5-1.1c.4.6 1.6 2 3.7 2 1.6 0 2.5-.4 3-1.2.4-.8.3-2-.8-2.6-.7-.4-1.6-.7-2.9-1-1-.2-3.9-.8-3.9-3.6C7.6 6 10.3 5 12.4 5c2.9 0 4.2 1.6 4.7 2.4l-1.5 1.1z">
                                                                                        </path>
                                                                                        <path
                                                                                            d="M5 11h14a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2z"
                                                                                            fill-rule="nonzero"></path>
                                                                                    </g>
                                                                                </svg></span></button>
                                                                        <div aria-pressed="false" aria-label="Text color"
                                                                            title="Text color" role="button"
                                                                            aria-haspopup="true" unselectable="on"
                                                                            tabindex="-1" class="tox-split-button"
                                                                            aria-expanded="false"
                                                                            aria-describedby="aria_6641930171451725175311797"
                                                                            style="user-select: none;"><span
                                                                                role="presentation" tabindex="-1"
                                                                                class="tox-tbtn"><span
                                                                                    class="tox-icon tox-tbtn__icon-wrap"><svg
                                                                                        width="24" height="24">
                                                                                        <g fill-rule="evenodd">
                                                                                            <path
                                                                                                id="tox-icon-text-color__color"
                                                                                                d="M3 18h18v3H3z"></path>
                                                                                            <path
                                                                                                d="M8.7 16h-.8a.5.5 0 0 1-.5-.6l2.7-9c.1-.3.3-.4.5-.4h2.8c.2 0 .4.1.5.4l2.7 9a.5.5 0 0 1-.5.6h-.8a.5.5 0 0 1-.4-.4l-.7-2.2c0-.3-.3-.4-.5-.4h-3.4c-.2 0-.4.1-.5.4l-.7 2.2c0 .3-.2.4-.4.4zm2.6-7.6l-.6 2a.5.5 0 0 0 .5.6h1.6a.5.5 0 0 0 .5-.6l-.6-2c0-.3-.3-.4-.5-.4h-.4c-.2 0-.4.1-.5.4z">
                                                                                            </path>
                                                                                        </g>
                                                                                    </svg></span></span><span
                                                                                role="presentation" tabindex="-1"
                                                                                class="tox-tbtn tox-split-button__chevron"><svg
                                                                                    width="10" height="10">
                                                                                    <path
                                                                                        d="M8.7 2.2c.3-.3.8-.3 1 0 .4.4.4.9 0 1.2L5.7 7.8c-.3.3-.9.3-1.2 0L.2 3.4a.8.8 0 0 1 0-1.2c.3-.3.8-.3 1.1 0L5 6l3.7-3.8z"
                                                                                        fill-rule="nonzero"></path>
                                                                                </svg></span><span aria-hidden="true"
                                                                                id="aria_6641930171451725175311797"
                                                                                style="display: none;">To open the popup,
                                                                                press Shift+Enter</span></div>
                                                                    </div>
                                                                    <div title="" role="toolbar"
                                                                        data-alloy-tabstop="true" tabindex="-1"
                                                                        class="tox-toolbar__group"><button
                                                                            aria-label="Insert/edit link"
                                                                            title="Insert/edit link" type="button"
                                                                            tabindex="-1" class="tox-tbtn"
                                                                            aria-pressed="false"><span
                                                                                class="tox-icon tox-tbtn__icon-wrap"><svg
                                                                                    width="24" height="24">
                                                                                    <path
                                                                                        d="M6.2 12.3a1 1 0 0 1 1.4 1.4l-2.1 2a2 2 0 1 0 2.7 2.8l4.8-4.8a1 1 0 0 0 0-1.4 1 1 0 1 1 1.4-1.3 2.9 2.9 0 0 1 0 4L9.6 20a3.9 3.9 0 0 1-5.5-5.5l2-2zm11.6-.6a1 1 0 0 1-1.4-1.4l2-2a2 2 0 1 0-2.6-2.8L11 10.3a1 1 0 0 0 0 1.4A1 1 0 1 1 9.6 13a2.9 2.9 0 0 1 0-4L14.4 4a3.9 3.9 0 0 1 5.5 5.5l-2 2z"
                                                                                        fill-rule="nonzero"></path>
                                                                                </svg></span></button><button
                                                                            aria-label="Insert/edit image"
                                                                            title="Insert/edit image" type="button"
                                                                            tabindex="-1" class="tox-tbtn"
                                                                            aria-pressed="false"><span
                                                                                class="tox-icon tox-tbtn__icon-wrap"><svg
                                                                                    width="24" height="24">
                                                                                    <path
                                                                                        d="M5 15.7l3.3-3.2c.3-.3.7-.3 1 0L12 15l4.1-4c.3-.4.8-.4 1 0l2 1.9V5H5v10.7zM5 18V19h3l2.8-2.9-2-2L5 17.9zm14-3l-2.5-2.4-6.4 6.5H19v-4zM4 3h16c.6 0 1 .4 1 1v16c0 .6-.4 1-1 1H4a1 1 0 0 1-1-1V4c0-.6.4-1 1-1zm6 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"
                                                                                        fill-rule="nonzero"></path>
                                                                                </svg></span></button></div>
                                                                    <div title="" role="toolbar"
                                                                        data-alloy-tabstop="true" tabindex="-1"
                                                                        class="tox-toolbar__group"><button
                                                                            aria-label="Clear formatting"
                                                                            title="Clear formatting" type="button"
                                                                            tabindex="-1" class="tox-tbtn"><span
                                                                                class="tox-icon tox-tbtn__icon-wrap"><svg
                                                                                    width="24" height="24">
                                                                                    <path
                                                                                        d="M13.2 6a1 1 0 0 1 0 .2l-2.6 10a1 1 0 0 1-1 .8h-.2a.8.8 0 0 1-.8-1l2.6-10H8a1 1 0 1 1 0-2h9a1 1 0 0 1 0 2h-3.8zM5 18h7a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2zm13 1.5L16.5 18 15 19.5a.7.7 0 0 1-1-1l1.5-1.5-1.5-1.5a.7.7 0 0 1 1-1l1.5 1.5 1.5-1.5a.7.7 0 0 1 1 1L17.5 17l1.5 1.5a.7.7 0 0 1-1 1z"
                                                                                        fill-rule="evenodd"></path>
                                                                                </svg></span></button></div>
                                                                    <div title="" role="toolbar"
                                                                        data-alloy-tabstop="true" tabindex="-1"
                                                                        class="tox-toolbar__group"><button
                                                                            aria-label="Fullscreen" title="Fullscreen"
                                                                            type="button" tabindex="-1"
                                                                            class="tox-tbtn" aria-pressed="false"><span
                                                                                class="tox-icon tox-tbtn__icon-wrap"><svg
                                                                                    width="24" height="24">
                                                                                    <path
                                                                                        d="M15.3 10l-1.2-1.3 2.9-3h-2.3a.9.9 0 1 1 0-1.7H19c.5 0 .9.4.9.9v4.4a.9.9 0 1 1-1.8 0V7l-2.9 3zm0 4l3 3v-2.3a.9.9 0 1 1 1.7 0V19c0 .5-.4.9-.9.9h-4.4a.9.9 0 1 1 0-1.8H17l-3-2.9 1.3-1.2zM10 15.4l-2.9 3h2.3a.9.9 0 1 1 0 1.7H5a.9.9 0 0 1-.9-.9v-4.4a.9.9 0 1 1 1.8 0V17l2.9-3 1.2 1.3zM8.7 10L5.7 7v2.3a.9.9 0 0 1-1.7 0V5c0-.5.4-.9.9-.9h4.4a.9.9 0 0 1 0 1.8H7l3 2.9-1.3 1.2z"
                                                                                        fill-rule="nonzero"></path>
                                                                                </svg></span></button></div>
                                                                </div>
                                                            </div>
                                                            <div class="tox-anchorbar"></div>
                                                        </div>
                                                        <div class="tox-sidebar-wrap">
                                                            <div class="tox-edit-area"><iframe id="mce_0_ifr"
                                                                    frameborder="0" allowtransparency="true"
                                                                    title="Rich Text Area. Press ALT-0 for help."
                                                                    class="tox-edit-area__iframe"></iframe></div>
                                                            <div role="complementary" class="tox-sidebar">
                                                                <div data-alloy-tabstop="true" tabindex="-1"
                                                                    class="tox-sidebar__slider tox-sidebar--sliding-closed"
                                                                    style="width: 0px;">
                                                                    <div class="tox-sidebar__pane-container"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tox-statusbar">
                                                        <div class="tox-statusbar__text-container">
                                                            <div role="navigation" data-alloy-tabstop="true"
                                                                class="tox-statusbar__path">
                                                                <div role="button" data-index="0" tab-index="-1"
                                                                    aria-level="1" tabindex="-1"
                                                                    class="tox-statusbar__path-item">p</div>
                                                            </div><button type="button" data-alloy-tabstop="true"
                                                                tabindex="-1" class="tox-statusbar__wordcount">0
                                                                words</button>
                                                        </div>
                                                        <div title="Resize" aria-hidden="true"
                                                            class="tox-statusbar__resize-handle"><svg width="10"
                                                                height="10">
                                                                <g fill-rule="nonzero">
                                                                    <path
                                                                        d="M8.1 1.1A.5.5 0 1 1 9 2l-7 7A.5.5 0 1 1 1 8l7-7zM8.1 5.1A.5.5 0 1 1 9 6l-3 3A.5.5 0 1 1 5 8l3-3z">
                                                                    </path>
                                                                </g>
                                                            </svg></div>
                                                    </div>
                                                    <div aria-hidden="true" class="tox-throbber" style="display: none;">
                                                    </div>
                                                </div>
                                                <div class="comment_toolkit clear">
                                                    <input class="button" type="button" value="Đăng bình luận">
                                                </div>
                                            </form>
                                        </div>



                                        <div class="ln-comment-group">
                                            <div id="ln-comment-1867051" class="ln-comment-item mt-3 clear"
                                                data-comment="1867051" data-parent="1867051">
                                                <div class="flex gap-1 max-w-full">
                                                    <div class="w-[50px]">
                                                        <div class="mx-1 my-1">
                                                            <img src="https://i.docln.net/lightnovel/users/ua119731-f84d90bd-d823-4b07-940b-3c20df78b8ca.jpg"
                                                                class="w-full rounded-full">
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="w-full min-w-0 rounded-md bg-gray-100 ps-1 pe-0 pb-1 pt-0 dark:!bg-zinc-800 ">
                                                        <div class="flex min-w-0 flex-col px-2">
                                                            <div class="flex align-top justify-between">
                                                                <div
                                                                    class="flex flex-wrap gap-x-2 gap-y-1 align-middle pt-1">
                                                                    <div class="self-center">
                                                                        <a class="font-bold leading-6 md:leading-7 ln-username "
                                                                            href="/thanh-vien/119731">shiro988</a>
                                                                    </div>
                                                                </div>
                                                                <div class="px-2 md:px-3 md:py-1 text-lg md:text-xl cursor-pointer"
                                                                    x-data="{ show: false }">
                                                                    <div class="" @click="show = !show">
                                                                        <i class="fas fa-angle-down"></i>
                                                                    </div>
                                                                    <div class="ln-comment-toolkit" x-show="show"
                                                                        @click.outside="show = false"
                                                                        style="display: none">


                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ln-comment-content long-text">
                                                                Lại drop drọp r
                                                            </div>
                                                            <div class="comment_see_more expand none">Xem thêm</div>
                                                            <div
                                                                class="flex gap-2 align-bottom text-[13px] visible-toolkit">
                                                                <a href="/truyen/5184-koko-wa-ore-ni-makasete-saki-ni-ike-to-itte-kara-10-nen-ga-tattara-densetsu-ni-natteita?comment_id=1867051#ln-comment-1867051"
                                                                    class="text-slate-500">
                                                                    <time class="timeago" title="07-07-2022 09:10:47"
                                                                        datetime="2022-07-07T09:10:47+07:00">2 năm</time>
                                                                </a>
                                                                <a
                                                                    class="self-center visible-toolkit-item do-like cursor-pointer">
                                                                    <i class="fas fa-thumbs-up me-1"></i>
                                                                    <span class="likecount font-semibold"></span>
                                                                </a>
                                                                <a
                                                                    class="self-center visible-toolkit-item do-reply cursor-pointer">
                                                                    <i class="fas fa-comment me-1"></i>
                                                                    <span class="font-semibold">Trả lời</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                    </main>

                                    <script>
                                        var token = 'jwWx2XZgKdafViWEIuBZwpYwXT8I1GyckmudwpxK';
                                        var comment_type = 'series';
                                        var comment_typeid = '5184';
                                    </script>

                                    <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/5.2.1/tinymce.min.js" referrerpolicy="origin"></script>
                                    <script>
                                        tinymce.init({
                                            selector: 'textarea',
                                            inline: false,
                                            height: 200,
                                            skin: 'oxide',
                                            content_css: 'default',
                                            branding: false,
                                            menubar: false,
                                            contextmenu: false,
                                            entities: '160,nbsp,38,amp,60,lt,62,gt',
                                            paste_word_valid_elements: 'b,strong,i,em,u,s,a,p,br,img',
                                            element_format: 'html',
                                            formats: {
                                                strikethrough: {
                                                    inline: 's',
                                                    remove: 'all'
                                                },
                                                underline: {
                                                    inline: 'u',
                                                    remove: 'all'
                                                },
                                            },
                                            plugins: 'wordcount link image code fullscreen paste emoticons',
                                            toolbar: 'emoticons undo redo | bold italic underline strikethrough forecolor | link image | removeformat | fullscreen'
                                        });
                                    </script>
                                </section>


                            </div>
                        </main>
                    </section>
                </div>
            </div>
        </div>
    </main>
@endsection

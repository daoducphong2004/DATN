@extends('home.layout.master')
@section('content')
    <div class="page-top-group  at-index ">
        <a href="">
            <div class="index-background d-none d-lg-block"
                style="background-image: url('{{ asset('/images/banners/fbg_d.jpg') }}')"></div>
            <div class="index-background d-lg-none"
                style="background-image: url('{{ asset('/images/banners/fbg_m.jpg') }}'); background-size: cover">
            </div>
        </a>
    </div>

    <main
        wire:snapshot="{&quot;data&quot;:{&quot;paginators&quot;:[{&quot;page&quot;:1},{&quot;s&quot;:&quot;arr&quot;}]},&quot;memo&quot;:{&quot;id&quot;:&quot;Wp05RFHWcU5EW5cFuwE8&quot;,&quot;name&quot;:&quot;pub.user.read-history&quot;,&quot;path&quot;:&quot;lich-su-doc&quot;,&quot;method&quot;:&quot;GET&quot;,&quot;children&quot;:[],&quot;scripts&quot;:[],&quot;assets&quot;:[],&quot;errors&quot;:[],&quot;locale&quot;:&quot;vi&quot;},&quot;checksum&quot;:&quot;8849d6a7aec80c7dc5f011de50c0311fce2a8aa27fdefbec083161a005bd08ad&quot;}"
        wire:effects="{&quot;url&quot;:{&quot;paginators.page&quot;:{&quot;as&quot;:&quot;page&quot;,&quot;use&quot;:&quot;push&quot;,&quot;alwaysShow&quot;:false,&quot;except&quot;:null}}}"
        wire:id="Wp05RFHWcU5EW5cFuwE8" id="mainpart" class="browserpage" style="min-height: 212px;">
        <header class="page-title">
            <div class="page-name_wrapper">
                <div class="container">
                    <span class="page-name"><i class="fas fa-circle"></i>Truyện đã đọc</span>
                </div>
            </div>
        </header>

        <div style="text-align: center; margin: 0 auto 10px auto;">
        </div>

        <div class="container">
            <section class="browse-section">
                <main class="sect-body row">
                    <!--[if BLOCK]><![endif]--> <!--[if BLOCK]><![endif]--> <!--[if BLOCK]><![endif]-->
                    <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
                        <div class="thumb-wrapper ln-tooltip">
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
                                        title="Chương 20: Đi nhận nhiệm vụ nào">Chương 20: Đi nhận nhiệm vụ nào</a></div>
                                <div class="thumb_attr volume-title">Web Novel</div>
                                <div class="thumb_title text-center pad-top-10" wire:click="delete(3880277)"
                                    style="cursor: pointer"><i class="fas fa-times"></i> Xóa</div>
                            </div>
                        </div>
                        <div class="thumb_attr series-title"><a
                                href="/truyen/5184-koko-wa-ore-ni-makasete-saki-ni-ike-to-itte-kara-10-nen-ga-tattara-densetsu-ni-natteita"
                                title="10 năm sau khi nói câu “Cứ đi đi, ở đây để tôi lo”, tôi đã trở thành một huyền thoại">10
                                năm sau khi nói câu “Cứ đi đi, ở đây để tôi lo”, tôi đã trở thành một huyền thoại</a></div>
                    </div>
                    <!--[if ENDBLOCK]><![endif]-->
                    <!--[if ENDBLOCK]><![endif]-->
                    <!--[if ENDBLOCK]><![endif]-->
                </main>
            </section>

            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
        </div>
    </main>
@endsection

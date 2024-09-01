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

    <main id="mainpart" class="licensed-list-page">
        <header class="page-title">
            <div class="page-name_wrapper">
                <div class="container">
                    <span class="page-name"><a href="/xuat-ban"><i class="fas fa-circle"></i>Truyện bản quyền</a></span>
                    <div class="right mr-3">
                        <a class="button new-link button-info" href="#sap-phat-hanh">
                            <i class="fas fa-list" style="margin-right: 8px;"></i><span>Sắp phát hành</span>
                        </a>
                    </div>
                </div>
            </div>
        </header>
        <div class="container">
            <div class="row d-block clearfix">
                <div class="col-12 col-lg-3 float-right">
                    <form method="post" action="https://docln.net/xuat-ban">
                        <input type="hidden" name="_token" value="jwWx2XZgKdafViWEIuBZwpYwXT8I1GyckmudwpxK"
                            autocomplete="off">
                        <section class="sub-index-style js-tongtien">
                            <div class="title-wrapper">
                                <div class="section-title">Tổng tiền:</div>
                            </div>
                            <div class="section-content">
                                <div class="select-wrapper" style="font-size: 2.8rem; color: darkcyan">
                                    <strong>93.749.000₫</strong>
                                </div>
                            </div>
                        </section>
                        <section id="search-by-month" class="sub-index-style">
                            <div class="section-content">
                                <div class="select-wrapper">
                                    <div class="row">
                                        <div class="col-7">
                                            <select name="thang">
                                                <option value="0">Chọn tháng</option>
                                                <option value="1">Tháng 1</option>
                                                <option value="2">Tháng 2</option>
                                                <option value="3">Tháng 3</option>
                                                <option value="4">Tháng 4</option>
                                                <option value="5">Tháng 5</option>
                                                <option value="6">Tháng 6</option>
                                                <option value="7">Tháng 7</option>
                                                <option value="8">Tháng 8</option>
                                                <option value="9">Tháng 9</option>
                                                <option value="10">Tháng 10</option>
                                                <option value="11">Tháng 11</option>
                                                <option value="12">Tháng 12</option>
                                            </select>
                                        </div>
                                        <div class="col-5">
                                            <select name="nam">
                                                <option value="0">Năm</option>
                                                <option value="2024">2024</option>
                                                <option value="2023">2023</option>
                                                <option value="2022">2022</option>
                                                <option value="2021">2021</option>
                                                <option value="2020">2020</option>
                                                <option value="2019">2019</option>
                                                <option value="2018">2018</option>
                                                <option value="2017">2017</option>
                                                <option value="2016">2016</option>
                                                <option value="2015">2015</option>
                                                <option value="2014">2014</option>
                                                <option value="2013">2013</option>
                                                <option value="2012">2012</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="submit-wrapper force-block">
                                <input type="submit" class="button inline-block filter-submit button-primary-green"
                                    value="Áp dụng">
                            </div>
                        </section>
                        <section class="sub-index-style">
                            <div class="section-content">
                                <input type="hidden" name="action" value="filter">
                                <div class="keywords-bar clear">
                                    <input class="search-form in" type="text" placeholder="Tối thiểu 2 kí tự"
                                        name="keywords" value="">
                                    <input id="search-go" class="search-go_form search-form submit " type="submit"
                                        value="Tìm">
                                </div>
                            </div>
                        </section>
                        <div class="list-filters none force-block-l">
                            <section class="sub-index-style">
                                <div class="title-wrapper">
                                    <div class="section-title">Nhà phát hành</div>
                                </div>
                                <div class="section-content">
                                    <ul class="filter-type unstyled">
                                        <li>
                                            <input name="nph[]" id="ipm" value="ipm" type="checkbox"><label
                                                for="ipm"> IPM</label>
                                        </li>
                                        <li>
                                            <input name="nph[]" id="thaiha" value="thaiha" type="checkbox"><label
                                                for="thaiha"> Thái Hà Books</label>
                                        </li>
                                        <li>
                                            <input name="nph[]" id="quangvan" value="quangvan" type="checkbox"><label
                                                for="quangvan"> Quảng Văn</label>
                                        </li>
                                        <li>
                                            <input name="nph[]" id="amak" value="amak" type="checkbox"><label
                                                for="amak"> Amak</label>
                                        </li>
                                        <li>
                                            <input name="nph[]" id="sky" value="sky" type="checkbox"><label
                                                for="sky"> Sky Light Novel</label>
                                        </li>
                                        <li>
                                            <input name="nph[]" id="tsuki" value="tsuki" type="checkbox"><label
                                                for="tsuki"> Tsuki Light Novel</label>
                                        </li>
                                        <li>
                                            <input name="nph[]" id="nhanam" value="nhanam" type="checkbox"><label
                                                for="nhanam"> Nhã Nam</label>
                                        </li>
                                        <li>
                                            <input name="nph[]" id="owlbooks" value="owlbooks" type="checkbox"><label
                                                for="owlbooks"> Owlbooks</label>
                                        </li>
                                        <li>
                                            <input name="nph[]" id="kimdong" value="kimdong" type="checkbox"><label
                                                for="kimdong"> Kim Đồng</label>
                                        </li>
                                        <li>
                                            <input name="nph[]" id="tre" value="tre" type="checkbox"><label
                                                for="tre"> Trẻ</label>
                                        </li>
                                        <li>
                                            <input name="nph[]" id="tabooks" value="tabooks" type="checkbox"><label
                                                for="tabooks"> TA Books</label>
                                        </li>
                                        <li>
                                            <input name="nph[]" id="uranix" value="uranix" type="checkbox"><label
                                                for="uranix"> Uranix</label>
                                        </li>
                                        <li>
                                            <input name="nph[]" id="ai" value="ai" type="checkbox"><label
                                                for="ai"> Ai Novel</label>
                                        </li>
                                        <li>
                                            <input name="nph[]" id="shine" value="shine" type="checkbox"><label
                                                for="shine"> Shine Novel</label>
                                        </li>
                                        <li>
                                            <input name="nph[]" id="usagi" value="usagi" type="checkbox"><label
                                                for="usagi"> Usagi Light Novel</label>
                                        </li>
                                        <li>
                                            <input name="nph[]" id="ichi" value="ichi" type="checkbox"><label
                                                for="ichi"> Ichi Light Novel</label>
                                        </li>
                                        <li>
                                            <input name="nph[]" id="orionbooks" value="orionbooks"
                                                type="checkbox"><label for="orionbooks"> Orion Books</label>
                                        </li>
                                    </ul>
                                </div>
                                <div class="submit-wrapper">
                                    <input type="submit" class="button inline-block filter-submit button-primary-green"
                                        value="Áp dụng">
                                </div>
                            </section>

                            <section class="sub-index-style js-tuagoc">
                                <div class="title-wrapper">
                                    <div class="section-title">Tựa gốc</div>
                                </div>
                                <div class="section-content">
                                    <div class="select-wrapper">
                                        <select name="truyen" style="width: 100%;">
                                            <option value="0">Chọn tựa</option>
                                            <option value="02lux">
                                                0.2 Lux no Mahou no Shita de
                                            </option>
                                            <option value="86">
                                                86 -Eighty Six-
                                            </option>
                                            <option value="aynik">
                                                All You Need Is Kill
                                            </option>
                                            <option value="amagi">
                                                Amagi Brilliant Park
                                            </option>
                                            <option value="AmeIris">
                                                Ame no Hi no Iris
                                            </option>
                                            <option value="343242">
                                                Ano Hana ga Saku Oka de, Kimi to Mata Deaetara
                                            </option>
                                            <option value="anohana">
                                                Ano Hi Mita Hana no Namae wo Bokutachi wa Mada Shiranai.
                                            </option>
                                            <option value="another">
                                                Another
                                            </option>
                                            <option value="Aokoi">
                                                Aoi Tsuki no Yoru, Mou ichido Kanojo ni Koi wo Suru
                                            </option>
                                            <option value="arifureta">
                                                Arifureta Shokugyou de Sekai Saikyou
                                            </option>
                                            <option value="arugya">
                                                Aru Hi Totsuzen, Gyaru no Iinazuke ga Dekita
                                            </option>
                                            <option value="bokushinu">
                                                Ashita, Boku wa Shinu, Kimi wa Ikikaeru
                                            </option>
                                            <option value="kimiasu">
                                                Asu, Kimi No Inai Asa Ga Kuru
                                            </option>
                                            <option value="aura">
                                                Aura: Maryuin Kouga Saigo no Tatakai
                                            </option>
                                            <option value="bakatotest">
                                                Baka to Test to Shoukanjuu
                                            </option>
                                            <option value="bakehime">
                                                Bakemonotachi ga Usobuku Koro ni ~ Bakemonohime no Kateikyoushi ~
                                            </option>
                                            <option value="biblia">
                                                Biblia Koshodou no Jiken Techou
                                            </option>
                                            <option value="bokuai">
                                                Boku ga Ai Shita Subete no Kimi e
                                            </option>
                                            <option value="8935235240759">
                                                Boku ga Kimi no namae wo yobu kara
                                            </option>
                                            <option value="8935325013355">
                                                Boku to Kimi no Hankei ni Dake Todoku Mahou
                                            </option>
                                            <option value="boumusu">
                                                Boukensha ni Naritai to Miyako ni Deteitta Musume ga S Rank ni Natteta
                                            </option>
                                            <option value="boutantei">
                                                Boukyaku Tantei Series
                                            </option>
                                            <option value="bukiten">
                                                Bukiyou na Tenshi no Toriatsukai Setsumeisho
                                            </option>
                                            <option value="cgvc">
                                                Bungaku Shoujo
                                            </option>
                                            <option value="bsd">
                                                Bungou Stray Dogs
                                            </option>
                                            <option value="5cms">
                                                Byousoku 5 Centimeter
                                            </option>
                                            <option value="chitose">
                                                Chitose-kun wa Ramune Bin no Naka
                                            </option>
                                            <option value="kuraidoru">
                                                Class no Idol Bishoujo ga, Tonikaku Kyodou Fushin nan desu
                                            </option>
                                            <option value="copcraft">
                                                Cop Craft: Dragnet Mirage Reloaded
                                            </option>
                                            <option value="dantalian">
                                                Dantalian no Shoka
                                            </option>
                                            <option value="danzai">
                                                Danzai no Exceed
                                            </option>
                                            <option value="dal">
                                                Date A Live
                                            </option>
                                            <option value="dale">
                                                Date A Live Encore
                                            </option>
                                            <option value="dear">
                                                Dear
                                            </option>
                                            <option value="dnan">
                                                Death Note: Another Note
                                            </option>
                                            <option value="8935325015496">
                                                Dokusho-girai no tame no tosho-shitsu an'nai
                                            </option>
                                            <option value="dokano">
                                                Dousei kara Hajimaru Otaku Kanojo no Tsukurikata
                                            </option>
                                            <option value="danmachi">
                                                Dungeon ni Deai wo Motomeru no wa Machigatteiru no Darou ka
                                            </option>
                                            <option value="dseeker">
                                                Dungeon Seeker
                                            </option>
                                            <option value="durarara">
                                                Durarara!!
                                            </option>
                                            <option value="echo">
                                                Echo
                                            </option>
                                            <option value="erisse">
                                                Eris no Seihai
                                            </option>
                                            <option value="fz">
                                                Fate/Zero
                                            </option>
                                            <option value="gaikishi">
                                                Gaikotsu Kishi-sama, Tadaima Isekai e Odekakechu
                                            </option>
                                            <option value="gamers">
                                                Gamers!
                                            </option>
                                            <option value="gate">
                                                Gate – Jietai Kare no Chi nite, Kaku Tatakeri
                                            </option>
                                            <option value="gekkou">
                                                Gekkou
                                            </option>
                                            <option value="rabudame">
                                                Genjitsu de Rabukome Dekinai to Dare ga Kimeta?
                                            </option>
                                            <option value="genyuusha">
                                                Genjitsu Shugi Yuusha no Oukoku Saikenki
                                            </option>
                                            <option value="1234">
                                                Ghost Hunt
                                            </option>
                                            <option value="gimai">
                                                Gimai Seikatsu
                                            </option>
                                            <option value="gup">
                                                Girls und Panzer
                                            </option>
                                            <option value="gjbu">
                                                GJ-bu
                                            </option>
                                            <option value="gosick">
                                                Gosick
                                            </option>
                                            <option value="9786043654202">
                                                Hachigatsu no Owari wa Kitto Sekai no Owari ni Nite iru
                                            </option>
                                            <option value="grimgar">
                                                Hai to Gensou no Grimgar
                                            </option>
                                            <option value="deathday">
                                                Happy Death Day
                                            </option>
                                            <option value="haritome">
                                                Hariko no Otome
                                            </option>
                                            <option value="hatamaou">
                                                Hataraku Maou-sama!
                                            </option>
                                            <option value="helloworlddb">
                                                Hello World
                                            </option>
                                            <option value="hikaru">
                                                Hikaru ga Chikyuu ni Itakoro......
                                            </option>
                                            <option value="himitsu">
                                                Himitsu - Kuro no Chikai
                                            </option>
                                            <option value="honzuki">
                                                Honzuki no Gekokujou: Shisho ni Naru Tame ni wa Shudan wo Erandeiraremasen
                                            </option>
                                            <option value="hoshifuru">
                                                Hoshi Furu Yoru Ni Nattara
                                            </option>
                                            <option value="hoshikoe">
                                                Hoshi no Koe
                                            </option>
                                            <option value="hoshikodo">
                                                Hoshi wo Ou Kodomo
                                            </option>
                                            <option value="hyakukou">
                                                Hyakuman Kounen no Chotto Saki
                                            </option>
                                            <option value="inaku">
                                                Inaku Nare, Gunjou
                                            </option>
                                            <option value="dendro">
                                                Infinite Dendrogram
                                            </option>
                                            <option value="89739812458">
                                                In no jitsury okusha ni naritakute!
                                            </option>
                                            <option value="TEIS">
                                                In no jitsury okusha ni naritakute!
                                            </option>
                                            <option value="inobato">
                                                Inou-Battle wa Nichijou-kei no Naka de
                                            </option>
                                            <option value="isemon">
                                                Isekai Monster Breeder ~ Cheat wa Aru kedo, Nonbiri Ikusei Shiteimasu ~
                                            </option>
                                            <option value="isesuma">
                                                Isekai wa Smartphone to Tomo ni
                                            </option>
                                            <option value="ishura">
                                                Ishura
                                            </option>
                                            <option value="IsshunKimi">
                                                Isshun wo Ikiru Kimi wo, Boku wa Eien ni Wasurenai
                                            </option>
                                            <option value="itainoitai">
                                                Itai no Itai no, Tonde Yuke
                                            </option>
                                            <option value="izumo">
                                                Izumo no Ayakashi Hotel ni Shushoku Shimasu
                                            </option>
                                            <option value="tomozaki">
                                                Jaku-chara Tomozaki-kun
                                            </option>
                                            <option value="300en">
                                                Jikyuu San-Byaku En Shinigami
                                            </option>
                                            <option value="jinrou">
                                                Jinrou e no Tensei, Maou no Fukukan
                                            </option>
                                            <option value="jubeca">
                                                Just Because!
                                            </option>
                                            <option value="jbf">
                                                Just Be Friends
                                            </option>
                                            <option value="kamigoro">
                                                Kami Goroshi no Eiyuu to Ermenhilde
                                            </option>
                                            <option value="katanagatari">
                                                Katanagatari
                                            </option>
                                            <option value="callingyou">
                                                Kimi ni Shika Kikoenai
                                            </option>
                                            <option value="8935325014147">
                                                Kimi no Hanashi
                                            </option>
                                            <option value="suizou">
                                                Kimi no Suizou wo Tabetai
                                            </option>
                                            <option value="kiminatsu">
                                                Kimi to Natsu to, Yakusoku to
                                            </option>
                                            <option value="SekaiToki">
                                                Kimi wa Hito Boku wa Shisha. Sekai wa Tokidoki Hikkurikaeru
                                            </option>
                                            <option value="Kimiyaku">
                                                Kimi wa Tsukiyo ni Hikari Kagayaku
                                            </option>
                                            <option value="Kimiai">
                                                Kimi wo Ai Shita Hitori no Boku e
                                            </option>
                                            <option value="kino">
                                                Kino no Tabi
                                            </option>
                                            <option value="kimimatsu">
                                                Kinou no Haru de, Kimi wo Matsu
                                            </option>
                                            <option value="kokuhaku">
                                                Kokuhaku Series
                                            </option>
                                            <option value="amaryllis">
                                                Koori no Kuni no Amaryllis
                                            </option>
                                            <option value="hyouka">
                                                Kotenbu Series
                                            </option>
                                            <option value="Kotonoha">
                                                Kotonoha no Niwa
                                            </option>
                                            <option value="kuiyohei">
                                                Kuitsume Youhei no Gensou Kitan
                                            </option>
                                            <option value="kumo">
                                                Kumo Desu Ga Nani Ka?
                                            </option>
                                            <option value="kumobasho">
                                                Kumo no Mukou, Yakusoku no Basho
                                            </option>
                                            <option value="kusuriya">
                                                Kusuriya no Hitorigoto
                                            </option>
                                            <option value="kyotoanzen">
                                                Kyoto Tashuzoku Anzen Kikou
                                            </option>
                                            <option value="kyoholmes">
                                                Kyoto Teramachi Sanjou no Holmes
                                            </option>
                                            <option value="macaron">
                                                Macaron Daisuki na Onnanoko ga Dounika-Kounika Sennen Ikitsuzukeru Ohanashi
                                            </option>
                                            <option value="dibiet">
                                                Mahouka Koukou no Rettousei
                                            </option>
                                            <option value="mahouiku">
                                                Mahou Shoujo Ikusei Keikaku
                                            </option>
                                            <option value="elaina">
                                                Majo no Tabitabi
                                            </option>
                                            <option value="mvkt">
                                                Maou-sama no Machizukuri! ~Saikyou no Danjon wa Kindai Toshi~
                                            </option>
                                            <option value="maoudore">
                                                Maou no Ore ga Dorei Elf wo Yome ni Shitanda ga, Dou Medereba Ii?
                                            </option>
                                            <option value="conan">
                                                Meitantei Conan
                                            </option>
                                            <option value="3days">
                                                Mikkakan no Koufuku
                                            </option>
                                            <option value="mimizuku">
                                                Mimizuku to Yoru no Ou
                                            </option>
                                            <option value="monbansho">
                                                Monban Shoujo to Amayadori no Nichijou
                                            </option>
                                            <option value="monrabu">
                                                Monku no Tsukeyou ga Nai Rabukome
                                            </option>
                                            <option value="monogatari">
                                                Monogatari Series
                                            </option>
                                            <option value="morimajuu">
                                                Mori no Majyuu ni Hanataba wo
                                            </option>
                                            <option value="2032024">
                                                Nakitai Watashi wa Neko wo Kaburu
                                            </option>
                                            <option value="nanamaken">
                                                Nanatsu no Maken ga Shihai Suru
                                            </option>
                                            <option value="narci">
                                                Narcissu
                                            </option>
                                            <option value="1">
                                                Natsu e no Tonneru, Sayonara no Deguchi
                                            </option>
                                            <option value="nazeuchi">
                                                Naze ka Uchi no Mise ga Isekai ni Teni shitan desu kedo Dare ka Setsumei
                                                Onegaishimasu?
                                            </option>
                                            <option value="neesuki">
                                                Nee, Mou Isso Tsukiacchau? Osananajimi no Bishoujo ni Tanomarete, Camo
                                                Kareshi Hajimemashita
                                            </option>
                                            <option value="netoyome">
                                                Netoge no Yome ga Ninki Idol datta
                                            </option>
                                            <option value="NHK">
                                                NHK ni Youkoso!
                                            </option>
                                            <option value="nidonido">
                                                Nidome no Natsu, Nidoto Aenai Kimi
                                            </option>
                                            <option value="no6">
                                                No. 6
                                            </option>
                                            <option value="8935325012532">
                                                Oni koi kitan nami no oni to shukumei no hime
                                            </option>
                                            <option value="ameyuki">
                                                Ookami Kodomo No Ame To Yuki
                                            </option>
                                            <option value="soigv">
                                                Ookami to Koushinryou
                                            </option>
                                            <option value="orange">
                                                orange
                                            </option>
                                            <option value="oreshura">
                                                Ore no Kanojo to Osananajimi ga Shuraba Sugiru
                                            </option>
                                            <option value="OtomeSurvival">
                                                Otome Game no Heroine de Saikyou Survival
                                            </option>
                                            <option value="otomemob">
                                                Otome Game Sekai wa Mob ni Kibishii Sekai Desu
                                            </option>
                                            <option value="tenshisama">
                                                Otonari no Tenshi-sama ni Itsu no Ma ni ka Dame Ningen ni Sareteita Ken
                                            </option>
                                            <option value="overlord">
                                                Overlord
                                            </option>
                                            <option value="penguin">
                                                Penguin Highway
                                            </option>
                                            <option value="rakudai">
                                                Rakudai Kishi No Cavalry
                                            </option>
                                            <option value="remonster">
                                                Re:Monster
                                            </option>
                                            <option value="rezero">
                                                Re:Zero kara Hajimaru Isekai Seikatsu
                                            </option>
                                            <option value="rikuchise">
                                                Riku to Chise: Sekai wo Kubaru Shounen to Bessou no Shoujo
                                            </option>
                                            <option value="rikuchisei">
                                                Riku to Chisei: Sekai wo Kubaru Shounen to Bessou no Shoujo
                                            </option>
                                            <option value="rivirie">
                                                Riviere to Inori no Kuni
                                            </option>
                                            <option value="ryouhen">
                                                Ryoumin 0-nin Start no Henkyou Ryoushu-sama
                                            </option>
                                            <option value="lolishogi">
                                                Ryuuou no Oshigoto!
                                            </option>
                                            <option value="saekano">
                                                Saenai Heroine no Sodatekata
                                            </option>
                                            <option value="saisha">
                                                Saigo no Isha wa Sakura wo Miagete Kimi wo Omou
                                            </option>
                                            <option value="saipala">
                                                Saihate no Paladin
                                            </option>
                                            <option value="bahamut">
                                                Saijaku Muhai no Bahamut - Undefeated Bahamut Chronicle
                                            </option>
                                            <option value="saijose">
                                                Saijo No Osewa Takane No Hana-Darakena Meimon-Kou De, Gakuin Ichi No
                                                Ojou-Sama (Seikatsu Nouryoku Kaimu) Wo Kagenagara Osewa Suru Koto Ni
                                                Narimashita
                                            </option>
                                            <option value="sakurako">
                                                Sakurako-san no Ashimoto ni wa Shitai ga Umatteiru
                                            </option>
                                            <option value="satomahou">
                                                Satori Sedai no Mahoutsukai
                                            </option>
                                            <option value="worldbreak">
                                                Seiken Tsukai no World Break
                                            </option>
                                            <option value="seigen">
                                                Seirei Gensouki
                                            </option>
                                            <option value="aobuta">
                                                Seishun Buta Yarou Series
                                            </option>
                                            <option value="jyumyou">
                                                Sekai Jyumyou to Saisho no Nanokakan
                                            </option>
                                            <option value="Sekairu">
                                                Sekai wa「」de Michite Iru
                                            </option>
                                            <option value="7suba">
                                                Shichisei no Subaru
                                            </option>
                                            <option value="shimotsuki1">
                                                Shimotsuki wa Mob ga Suki
                                            </option>
                                            <option value="shinikoi">
                                                Shinigami Shoujo to Saigo no Hatsukoi
                                            </option>
                                            <option value="8935086857861">
                                                Shinja Zero no Megami-sama to Hajimeru Isekai Kouryaku
                                            </option>
                                            <option value="ssy">
                                                Shin Sekai Yori
                                            </option>
                                            <option value="thamdinh">
                                                Shitayomi Danshi to Toukou Joshi
                                            </option>
                                            <option value="shokeishojo">
                                                Shokei Shoujo no Virgin Road
                                            </option>
                                            <option value="shunka">
                                                Shunkashuutou Daikousha
                                            </option>
                                            <option value="shuuen">
                                                Shuuen no Shiori
                                            </option>
                                            <option value="sukasuka">
                                                Shuumatsu Nani Shitemasuka? Isogashii desuka? Sukutte Moratte Ii desuka?
                                            </option>
                                            <option value="slime300">
                                                Slime Taoshite 300 Nen, Shiranai Uchi ni Level MAX ni Nattemashita
                                            </option>
                                            <option value="soraosa">
                                                Sora no Aosa wo Shiru Hito yo
                                            </option>
                                            <option value="Soinai">
                                                Soshite, Kimi No Inai Kugatsu Ga Kuru
                                            </option>
                                            <option value="spyroom">
                                                Spy Kyoushitsu
                                            </option>
                                            <option value="suzume">
                                                Suzume no Tojimari
                                            </option>
                                            <option value="Suzu">
                                                Suzumiya Haruhi
                                            </option>
                                            <option value="sao">
                                                Sword Art Online
                                            </option>
                                            <option value="saop">
                                                Sword Art Online Progressive
                                            </option>
                                            <option value="tabideyou">
                                                Tabi ni Deyou, Horobiyuku Sekai no Hate Made
                                            </option>
                                            <option value="taigamori">
                                                Taiga no mori no kari kurashi ~ keiyaku fūfu no Tōō gohan ~
                                            </option>
                                            <option value="tanmoshi">
                                                Tantei wa mou, Shindeiru.
                                            </option>
                                            <option value="tapanya">
                                                Tatakau Panya to Automaton Waitress
                                            </option>
                                            <option value="tenki">
                                                Tenki no Ko
                                            </option>
                                            <option value="tensaiouji">
                                                Tensai Ouji no Akaji Kokka Saisei Jutsu ~Sou da, Baikoku Shiyou~
                                            </option>
                                            <option value="tenseihana">
                                                Tenseisha de Aru Watashi ni Idonde Kuru Mubou de Yubou na Shoujo no Hanashi
                                            </option>
                                            <option value="slimetensei">
                                                Tensei Shitara Slime Datta Ken
                                            </option>
                                            <option value="tsuioku">
                                                Toaru Hikuushi e no Tsuioku
                                            </option>
                                            <option value="index">
                                                Toaru Majutsu no Index
                                            </option>
                                            <option value="gainga">
                                                Tokidoki Bosotto Roshia-go de Dereru Tonari no Arya-san
                                            </option>
                                            <option value="tsw">
                                                Tokyo Stray Wizards
                                            </option>
                                            <option value="satou">
                                                Tonari no Seki no Satou-San
                                            </option>
                                            <option value="Tonigohou">
                                                Tonikaku Imouto ga Hoshii Saikyou no Kyuuketsuki wa Mujikaku Gohoushichuu!
                                            </option>
                                            <option value="torinoko">
                                                Torinoko City
                                            </option>
                                            <option value="tomeikyu">
                                                Tosho Meikyuu
                                            </option>
                                            <option value="tsukimichi">
                                                Tsuki ga Michibiku Isekai Douchuu
                                            </option>
                                            <option value="akureijou">
                                                Tsundere Akuyaku Reijou Liselotte to Jikkyou no Endo-kun to Kaisetsu no
                                                Kobayashi-san
                                            </option>
                                            <option value="uchiage">
                                                Uchiage Hanabi, Shita Kara Miru ka? Yoko Kara Miru ka?
                                            </option>
                                            <option value="uchimusume">
                                                Uchi no Musume no Tame Naraba, Ore Moshikashitara Maou mo Taoserukamo
                                                Shirenai.
                                            </option>
                                            <option value="uchouten">
                                                Uchouten Kazoku
                                            </option>
                                            <option value="umibyou">
                                                Umibe no Byouin de Kanojo to Hanashita Ikutsuka no koto
                                            </option>
                                            <option value="unnamed">
                                                Unnamed Memory
                                            </option>
                                            <option value="urasekai">
                                                Urasekai Picnic
                                            </option>
                                            <option value="hakomari">
                                                Utsuro no Hako to Zero no Maria
                                            </option>
                                            <option value="alexis">
                                                Waga Gyouyuu ni Furueyo Tenchi ~Alexis Teikoku Kouryuuki~
                                            </option>
                                            <option value="heikinyo">
                                                Watashi, Nouryoku wa Heikinchi de tte Itta yo ne!
                                            </option>
                                            <option value="wataoshi">
                                                Watashi no Oshi wa Akuyaku Reijou.
                                            </option>
                                            <option value="watakekkon">
                                                Watashi no Shiawase na Kekkon
                                            </option>
                                            <option value="worldteacher">
                                                World Teacher -Isekaishiki Kyouiku Agent-
                                            </option>
                                            <option value="oregairu">
                                                Yahari Ore no Seishun Rom-Com wa Machigatteiru.
                                            </option>
                                            <option value="tatami">
                                                Yojouhan Shinwa Taikei
                                            </option>
                                            <option value="hamaeki">
                                                Yokohama Eki SF
                                            </option>
                                            <option value="yorubake">
                                                Yoru no Bakemono
                                            </option>
                                            <option value="yoaruke">
                                                Yoru wa Mijikashi Aruke yo Otome
                                            </option>
                                            <option value="youjosenki">
                                                Youjo Senki
                                            </option>
                                            <option value="cote">
                                                Youkoso Jitsuryoku Shijou Shugi no Kyoushitsu e
                                            </option>
                                            <option value="yourname">
                                                Your Name
                                            </option>
                                            <option value="yournameas">
                                                Your Name - Another Side: Earthbound
                                            </option>
                                            <option value="yumenikki">
                                                Yume Nikki: Anata no Yume ni Watashi wa Inai
                                            </option>
                                            <option value="yuujin">
                                                Yuujin Character wa Taihen desu ka?
                                            </option>
                                            <option value="zaregoto">
                                                Zaregoto series
                                            </option>
                                            <option value="ogotokura">
                                                「Omae Gotoki ga Maou ni Kateru to Omou na」 to Yuusha Party wo Tsuihou Sareta
                                                no de, Outo de Kimama ni Kurashitai
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="submit-wrapper">
                                    <input type="submit" class="button inline-block filter-submit button-primary-green"
                                        value="Áp dụng">
                                </div>
                            </section>

                            <section class="sub-index-style">
                                <div class="title-wrapper">
                                    <div class="section-title">Cửa hàng</div>
                                </div>
                                <div class="section-content">
                                    <ul class="filter-type unstyled">
                                        <li>
                                            <input name="cuahang[]" id="tiki" value="tiki" type="checkbox"><label
                                                for="tiki"> Tiki</label>
                                        </li>
                                        <li>
                                            <input name="cuahang[]" id="fahasa" value="fahasa" type="checkbox"><label
                                                for="fahasa"> Fahasa</label>
                                        </li>
                                        <li>
                                            <input name="cuahang[]" id="shopee" value="shopee" type="checkbox"><label
                                                for="shopee"> Shopee</label>
                                        </li>
                                        <li>
                                            <input name="cuahang[]" id="shopee_aff" value="shopee_aff"
                                                type="checkbox"><label for="shopee_aff"> Shopee</label>
                                        </li>
                                        <li>
                                            <input name="cuahang[]" id="hikaru" value="hikaru" type="checkbox"><label
                                                for="hikaru"> Hikaru</label>
                                        </li>
                                        <li>
                                            <input name="cuahang[]" id="pibook" value="pibook" type="checkbox"><label
                                                for="pibook"> Pibook</label>
                                        </li>
                                        <li>
                                            <input name="cuahang[]" id="lazada" value="lazada" type="checkbox"><label
                                                for="lazada"> Lazada</label>
                                        </li>
                                    </ul>
                                </div>
                                <div class="submit-wrapper">
                                    <input type="submit" class="button inline-block filter-submit button-primary-green"
                                        value="Áp dụng">
                                </div>
                            </section>

                            <section class="sub-index-style">
                                <div class="title-wrapper">
                                    <div class="section-title">Đọc thử</div>
                                </div>
                                <div class="section-content">
                                    <ul class="filter-type unstyled">
                                        <li>
                                            <input name="docthu" type="checkbox" id="docthu" value="1"><label
                                                for="docthu">Đọc thử</label>
                                        </li>
                                    </ul>
                                </div>
                                <div class="submit-wrapper">
                                    <input type="submit" class="button inline-block filter-submit button-primary-green"
                                        value="Áp dụng">
                                </div>
                            </section>
                        </div>
                    </form>
                </div>
                <div class="col-12 col-lg-9 float-left">
                    <div class="result-field">
                        <!-- <div class="sorting-modifier">
                                <div class="select-wrapper">
                                    <span>Sắp xếp</span>
                                    <select>
                                        <option>Cũ tới mới</option>
                                        <option>Mắc tới rẻ</option>
                                    </select>
                                </div>
                            </div> -->
                        <!-- <section id="filter-result" class="basic-section noheader-section clear" style="margin-bottom: 0">
                                <main class="sect-body no-padding">
                                    <table class="listext-table has-covers">
                                    <tbody>
                                        <tr>
                                            <th class="col-6 col-6-m col-9-l">Tên tập</th>
                                            <th class="none table-cell-m col-3-m col-3-l">Phát hành</th>
                                        </tr>
                                    <tr>
                                        <td>
                                            <div class="a6-ratio series-cover">
                                                <div class="content img-in-ratio" style="background-image: url('https://1.bp.blogspot.com/--4tbHULTNCI/W8kbRwZbFDI/AAAAAAABsOg/t3VO1n362PkL5hmhsEZ3PwuNdKgsDyCFACHMYCw/w220/default.jpg')"></div>
                                            </div>
                                            <div class="series-name">
                                                <a href="/truyen/3412-con-gai-tuong-lai-tim-den-tan-cua">Con gái tương lai tìm đến tận cửa - Tập 1</a>
                                                <small>Con gái tương lai tìm đến tận cửa</small>
                                            </div>
                                        </td>
                                        <td class="none table-cell-m">
                                            <a href="">Nhã Nam</a>
                                            <small>20/11/2018</small>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="a6-ratio series-cover">
                                                <div class="content img-in-ratio" style="background-image: url('https://3.bp.blogspot.com/-coc62nTZN9M/WO2v-JFMCuI/AAAAAAAAKBE/Kb8JLmHVElw/w220/series_259.jpg')"></div>
                                            </div>
                                            <div class="series-name">
                                                <a href="/truyen/259-kumo-desu-ga-nani-ka">Kumo Desu Ga Nani Ka - Tập 2</a>
                                                <small>Kumo Desu Ga Nani Ka</small>
                                            </div>
                                        </td>
                                        <td class="none table-cell-m">
                                            <a href="">IPM</a>
                                            <small>20/11/2018</small>
                                        </td>
                                    </tr>

                                        </tbody>
                                    </table>
                                </main>
                            </section> -->

                        <section id="licensed-list" class="basic-section has-pagination">
                            <header class="section-title"><span>Hiển thị 10 trong số 852 kết quả</span></header>
                            <main class="sect-body">
                                <article class="listall-item">
                                    <div class="row">
                                        <div class="cover-wrapper col-12 col-md-4">
                                            <div class="series-cover">
                                                <div class="a6-ratio">
                                                    <div class="content img-in-ratio"
                                                        style="background-image: url('https://i2.docln.net/ln/licensed/covers/7a04d009-c628-460b-81e6-8bbcd8a1e696.jpg')">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-8">
                                            <div class="listall-detail">
                                                <h3 class="series-title text-xl font-bold">
                                                    <a class="series-name"
                                                        href="https://docln.net/xuat-ban/852-hanh-trinh-cua-elaina-tap-15">Hành
                                                        Trình Của Elaina - Tập 15</a>
                                                    <span class="publisher-name">
                                                        <a href="https://docln.net/xuat-ban?nph=amak">Amak</a> phát hành
                                                    </span>
                                                </h3>

                                                <section class="mobile-view mobile-toggle">
                                                    <header class="inline-block none-l">Thông tin thêm</header>
                                                    <main class="sect-body none force-block-l">
                                                        <div class="info-list long-text row m-0">
                                                            <div class="info-item col-12 col-md-6">
                                                                <span class="info-name">Tác giả:</span>
                                                                <span class="info-value"><a
                                                                        href="https://docln.net/xuat-ban?tacgia=Shiraishi%20Jougi">Shiraishi
                                                                        Jougi</a></span>
                                                            </div>
                                                            <div class="info-item col-12 col-md-6">
                                                                <span class="info-name">Họa sĩ:</span>
                                                                <span class="info-value"><a
                                                                        href="https://docln.net/xuat-ban?hoasi=Azure">Azure</a></span>
                                                            </div>
                                                            <div class="info-item col-12 col-md-6">
                                                                <span class="info-name">Dịch giả:</span>
                                                                <span class="info-value">
                                                                    <a href="https://docln.net/xuat-ban?dichgia=Ji">Ji</a>
                                                                </span>
                                                            </div>
                                                            <div class="info-item col-12 col-md-6">
                                                                <span class="info-name">Số trang:</span>
                                                                <span class="info-value">332</span>
                                                            </div>
                                                            <div class="info-item col-12 col-md-6">
                                                                <span class="info-name">Ngày phát hành: </span>
                                                                <span class="info-value">25/08/2024</span>
                                                            </div>
                                                            <div class="info-item col-12 col-md-6">
                                                                <span class="info-name">Giá bìa: </span>
                                                                <span class="info-value">125.000đ</span>
                                                            </div>
                                                        </div>
                                                    </main>
                                                </section>
                                                <div class="series-summary">Ngày xửa ngày xưa, có một cô phù thủy tên
                                                    Elaina.
                                                    Cô đang viết nhật ký hành trình dọc theo chuyến du hành khắp thế giới
                                                    bao la của mình.
                                                    Lần này, cô sẽ kể lại những câu chuyện mà cô từng ghi chép.
                                                    Tổng hợp 43 mẩu truyện, bao gồm các ngoại truyện chỉ có trong bản đặc
                                                    biệt hoặc sự kiện theo mùa, cùng...</div>

                                                <div class="store-list">
                                                    <a class="button store-link" style="background-color: #ff5520"
                                                        href="https://shopee.vn/Sách-Hành-Trình-Của-Elaina-Tập-15-i.40470612.28907112532"
                                                        rel="nofollow" target="_blank">Shopee</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <article class="listall-item">
                                    <div class="row">
                                        <div class="cover-wrapper col-12 col-md-4">
                                            <div class="series-cover">
                                                <div class="a6-ratio">
                                                    <div class="content img-in-ratio"
                                                        style="background-image: url('https://i2.docln.net/ln/licensed/covers/84f59234-20f9-41f0-8e4d-5e9a7a75420c.jpg')">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-8">
                                            <div class="listall-detail">
                                                <h3 class="series-title text-xl font-bold">
                                                    <a class="series-name"
                                                        href="https://docln.net/xuat-ban/850-ma-phap-thieu-nu-tap-8">Ma
                                                        Pháp Thiếu Nữ - Tập 8</a>
                                                    <span class="publisher-name">
                                                        <a href="https://docln.net/xuat-ban?nph=usagi">Usagi Light
                                                            Novel</a> phát hành
                                                    </span>
                                                </h3>

                                                <section class="mobile-view mobile-toggle">
                                                    <header class="inline-block none-l">Thông tin thêm</header>
                                                    <main class="sect-body none force-block-l">
                                                        <div class="info-list long-text row m-0">
                                                            <div class="info-item col-12 col-md-6">
                                                                <span class="info-name">Tác giả:</span>
                                                                <span class="info-value"><a
                                                                        href="https://docln.net/xuat-ban?tacgia=Endou%20Asari">Endou
                                                                        Asari</a></span>
                                                            </div>
                                                            <div class="info-item col-12 col-md-6">
                                                                <span class="info-name">Họa sĩ:</span>
                                                                <span class="info-value"><a
                                                                        href="https://docln.net/xuat-ban?hoasi=Marui-no">Marui-no</a></span>
                                                            </div>
                                                            <div class="info-item col-12 col-md-6">
                                                                <span class="info-name">Dịch giả:</span>
                                                                <span class="info-value">
                                                                    <a
                                                                        href="https://docln.net/xuat-ban?dichgia=Rei">Rei</a>
                                                                </span>
                                                            </div>
                                                            <div class="info-item col-12 col-md-6">
                                                                <span class="info-name">Số trang:</span>
                                                                <span class="info-value">380</span>
                                                            </div>
                                                            <div class="info-item col-12 col-md-6">
                                                                <span class="info-name">Ngày phát hành: </span>
                                                                <span class="info-value">09/08/2024</span>
                                                            </div>
                                                            <div class="info-item col-12 col-md-6">
                                                                <span class="info-name">Giá bìa: </span>
                                                                <span class="info-value">159.000đ</span>
                                                            </div>
                                                        </div>
                                                    </main>
                                                </section>
                                                <div class="series-summary">Những trận chiến phép thuật giữa các Ma pháp
                                                    thiếu nữ đang ngày càng trở nên thú vị hơn.
                                                    Snow White vẫn tiếp tục hoạt động với tư cách thợ săn ma pháp thiếu nữ,
                                                    cô hiện giờ giống như ngọc đang trong quá trình mài giũa.
                                                    Trong quá trình tìm kiếm tung tích của Ripple, cô nhận được cuộc gọi từ
                                                    một trong...</div>

                                                <div class="store-list">
                                                    <a class="button store-link" style="background-color: #c92127"
                                                        href="https://www.fahasa.com/ma-phap-thieu-nu-tap-8-ban-dac-biet-tang-kem-bookmark-nhan-vat-postcard-pin-cai-ma-phap-thieu-nu.html?fhs_campaign=CATEGORY"
                                                        rel="nofollow" target="_blank">Fahasa</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <article class="listall-item">
                                    <div class="row">
                                        <div class="cover-wrapper col-12 col-md-4">
                                            <div class="series-cover">
                                                <div class="a6-ratio">
                                                    <div class="content img-in-ratio"
                                                        style="background-image: url('https://i2.docln.net/ln/licensed/covers/f5c92e71-193e-410b-88ee-fc5a7fbcc8b1.jpg')">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-8">
                                            <div class="listall-detail">
                                                <h3 class="series-title text-xl font-bold">
                                                    <a class="series-name"
                                                        href="https://docln.net/xuat-ban/851-to-se-tru-mua-cung-cau">Tớ Sẽ
                                                        Trú Mưa Cùng Cậu</a>
                                                    <span class="publisher-name">
                                                        <a href="https://docln.net/xuat-ban?nph=shine">Shine Novel</a> phát
                                                        hành
                                                    </span>
                                                </h3>

                                                <section class="mobile-view mobile-toggle">
                                                    <header class="inline-block none-l">Thông tin thêm</header>
                                                    <main class="sect-body none force-block-l">
                                                        <div class="info-list long-text row m-0">
                                                            <div class="info-item col-12 col-md-6">
                                                                <span class="info-name">Tác giả:</span>
                                                                <span class="info-value"><a
                                                                        href="https://docln.net/xuat-ban?tacgia=Sushi%20Thunder">Sushi
                                                                        Thunder</a></span>
                                                            </div>
                                                            <div class="info-item col-12 col-md-6">
                                                                <span class="info-name">Họa sĩ:</span>
                                                                <span class="info-value"><a
                                                                        href="https://docln.net/xuat-ban?hoasi=Sogawa">Sogawa</a></span>
                                                            </div>
                                                            <div class="info-item col-12 col-md-6">
                                                                <span class="info-name">Dịch giả:</span>
                                                                <span class="info-value">
                                                                    <a
                                                                        href="https://docln.net/xuat-ban?dichgia=Satoukibi">Satoukibi</a>
                                                                </span>
                                                            </div>
                                                            <div class="info-item col-12 col-md-6">
                                                                <span class="info-name">Số trang:</span>
                                                                <span class="info-value">360</span>
                                                            </div>
                                                            <div class="info-item col-12 col-md-6">
                                                                <span class="info-name">Ngày phát hành: </span>
                                                                <span class="info-value">06/08/2024</span>
                                                            </div>
                                                            <div class="info-item col-12 col-md-6">
                                                                <span class="info-name">Giá bìa: </span>
                                                                <span class="info-value">179.000đ</span>
                                                            </div>
                                                        </div>
                                                    </main>
                                                </section>
                                                <div class="series-summary">Vì những sai lầm của bản thân ở trường cấp hai,
                                                    cùng với vẻ ngoài nhìn như côn đồ nên khi lên cấp ba, Aoki Teru không
                                                    được bạn bè đón nhận. Dù là ở bất kỳ đâu, cậu đều không tìm được một nơi
                                                    chốn dành cho mình.
                                                    Một ngày, cậu tình cờ gặp được Amamori Kokoro, đàn chị học trên cậu một
                                                    khóa đang ngồi tr...</div>

                                                <div class="store-list">
                                                    <a class="button store-link" style="background-color: #c92127"
                                                        href="https://www.fahasa.com/to-se-tru-mua-cung-cau-ban-dac-biet-tang-kem-1-bookmark-2-photocard-bo-goc.html?fhs_campaign=CATEGORY"
                                                        rel="nofollow" target="_blank">Fahasa</a>
                                                    <a class="button store-link" style="background-color: #f78320"
                                                        href="https://www.hikaru.vn/products/to-se-tru-mua-cung-cau"
                                                        rel="nofollow" target="_blank">Hikaru</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <article class="listall-item">
                                    <div class="row">
                                        <div class="cover-wrapper col-12 col-md-4">
                                            <div class="series-cover">
                                                <div class="a6-ratio">
                                                    <div class="content img-in-ratio"
                                                        style="background-image: url('https://i2.docln.net/ln/licensed/covers/f3d84ae5-8163-4a4c-b66f-c1c12e7ee77a.jpg')">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-8">
                                            <div class="listall-detail">
                                                <h3 class="series-title text-xl font-bold">
                                                    <a class="series-name"
                                                        href="https://docln.net/xuat-ban/843-co-nang-shimotsuki-trot-phai-long-nhan-vat-nen-tap-4">Cô
                                                        Nàng Shimotsuki Trót Phải Lòng Nhân Vật Nền - Tập 4</a>
                                                    <span class="publisher-name">
                                                        <a href="https://docln.net/xuat-ban?nph=kimdong">Kim Đồng</a> phát
                                                        hành
                                                    </span>
                                                </h3>

                                                <section class="mobile-view mobile-toggle">
                                                    <header class="inline-block none-l">Thông tin thêm</header>
                                                    <main class="sect-body none force-block-l">
                                                        <div class="info-list long-text row m-0">
                                                            <div class="info-item col-12 col-md-6">
                                                                <span class="info-name">Tác giả:</span>
                                                                <span class="info-value"><a
                                                                        href="https://docln.net/xuat-ban?tacgia=Yagami%20Kagami">Yagami
                                                                        Kagami</a></span>
                                                            </div>
                                                            <div class="info-item col-12 col-md-6">
                                                                <span class="info-name">Họa sĩ:</span>
                                                                <span class="info-value"><a
                                                                        href="https://docln.net/xuat-ban?hoasi=Roha">Roha</a></span>
                                                            </div>
                                                            <div class="info-item col-12 col-md-6">
                                                                <span class="info-name">Dịch giả:</span>
                                                                <span class="info-value">
                                                                    <a
                                                                        href="https://docln.net/xuat-ban?dichgia=Tifa">Tifa</a>
                                                                </span>
                                                            </div>
                                                            <div class="info-item col-12 col-md-6">
                                                                <span class="info-name">Số trang:</span>
                                                                <span class="info-value">340</span>
                                                            </div>
                                                            <div class="info-item col-12 col-md-6">
                                                                <span class="info-name">Ngày phát hành: </span>
                                                                <span class="info-value">02/08/2024</span>
                                                            </div>
                                                            <div class="info-item col-12 col-md-6">
                                                                <span class="info-name">Giá bìa: </span>
                                                                <span class="info-value">115.000đ</span>
                                                            </div>
                                                        </div>
                                                    </main>
                                                </section>
                                                <div class="series-summary">Xin hãy hẹn hò với tớ!
                                                    Vào học kì 3, có một học sinh chuyển trường mới xuất hiện. Cô gái với
                                                    mái tóc hồng và vẻ mặt khó chịu ấy tên là Kurumizawa Kururi. Hóa ra cô
                                                    chính là “người bạn từng thân thiết thuở nhỏ của Koutarou mà cậu cứ nghĩ
                                                    là con trai”! Nghi ngờ về “mối quan hệ mập mờ” của Koutarou và...</div>

                                                <div class="store-list">
                                                    <a class="button store-link" style="background-color: #c92127"
                                                        href="https://www.fahasa.com/co-nang-shimotsuki-trot-phai-long-nhan-vat-nen-tap-4-ban-gioi-han-tang-kem-bookmark-khung-anh-bia-ao-limited.html?fhs_campaign=CATEGORY"
                                                        rel="nofollow" target="_blank">Fahasa</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <article class="listall-item">
                                    <div class="row">
                                        <div class="cover-wrapper col-12 col-md-4">
                                            <div class="series-cover">
                                                <div class="a6-ratio">
                                                    <div class="content img-in-ratio"
                                                        style="background-image: url('https://i2.docln.net/ln/licensed/covers/ce7eb21b-1264-4438-8811-61578c062755.jpg')">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-8">
                                            <div class="listall-detail">
                                                <h3 class="series-title text-xl font-bold">
                                                    <a class="series-name"
                                                        href="https://docln.net/xuat-ban/844-ve-chuyen-toi-chuyen-sinh-thanh-slime-tap-4">Về
                                                        Chuyện Tôi Chuyển Sinh Thành Slime - Tập 4</a>
                                                    <span class="publisher-name">
                                                        <a href="https://docln.net/xuat-ban?nph=sky">Sky Light Novel</a>
                                                        phát hành
                                                    </span>
                                                </h3>

                                                <section class="mobile-view mobile-toggle">
                                                    <header class="inline-block none-l">Thông tin thêm</header>
                                                    <main class="sect-body none force-block-l">
                                                        <div class="info-list long-text row m-0">
                                                            <div class="info-item col-12 col-md-6">
                                                                <span class="info-name">Tác giả:</span>
                                                                <span class="info-value"><a
                                                                        href="https://docln.net/xuat-ban?tacgia=Fuse">Fuse</a></span>
                                                            </div>
                                                            <div class="info-item col-12 col-md-6">
                                                                <span class="info-name">Họa sĩ:</span>
                                                                <span class="info-value"><a
                                                                        href="https://docln.net/xuat-ban?hoasi=Mitz%20Vah">Mitz
                                                                        Vah</a></span>
                                                            </div>
                                                            <div class="info-item col-12 col-md-6">
                                                                <span class="info-name">Dịch giả:</span>
                                                                <span class="info-value">
                                                                    <a
                                                                        href="https://docln.net/xuat-ban?dichgia=Th%C3%B9y%20Linh">Thùy
                                                                        Linh</a>
                                                                </span>
                                                            </div>
                                                            <div class="info-item col-12 col-md-6">
                                                                <span class="info-name">Số trang:</span>
                                                                <span class="info-value">552</span>
                                                            </div>
                                                            <div class="info-item col-12 col-md-6">
                                                                <span class="info-name">Ngày phát hành: </span>
                                                                <span class="info-value">31/07/2024</span>
                                                            </div>
                                                            <div class="info-item col-12 col-md-6">
                                                                <span class="info-name">Giá bìa: </span>
                                                                <span class="info-value">175.000đ</span>
                                                            </div>
                                                        </div>
                                                    </main>
                                                </section>
                                                <div class="series-summary">Đã vài tháng đã trôi qua kể từ lúc Milim rời
                                                    đi, Liên minh Jura Tempest trải qua chuỗi ngày êm đềm và yên ả cứ thế
                                                    tiếp nối ngày này sang tháng nọ. Giữa lúc ấy, sứ giả do Ma vương kiêm
                                                    Thú vương Carrion phái đến đã xuất hiện.
                                                    “Mỗi bên hãy phái cử đoàn sứ giả để xác định xem liệu việc tạo dựng quan
                                                    h...</div>

                                                <div class="store-list">
                                                    <a class="button store-link" style="background-color: #c92127"
                                                        href="https://www.fahasa.com/ve-chuyen-toi-chuyen-sinh-thanh-slime-tap-4-tang-kem-bookmark-postcard.html"
                                                        rel="nofollow" target="_blank">Fahasa</a>
                                                    <a class="button store-link" style="background-color: #f78320"
                                                        href="https://www.hikaru.vn/products/ve-chuyen-toi-chuyen-sinh-thanh-slime-tap-4"
                                                        rel="nofollow" target="_blank">Hikaru</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <article class="listall-item">
                                    <div class="row">
                                        <div class="cover-wrapper col-12 col-md-4">
                                            <div class="series-cover">
                                                <div class="a6-ratio">
                                                    <div class="content img-in-ratio"
                                                        style="background-image: url('https://i2.docln.net/ln/licensed/covers/c8a5d61c-26ad-4d70-88c4-120c08ec7a86.jpg')">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-8">
                                            <div class="listall-detail">
                                                <h3 class="series-title text-xl font-bold">
                                                    <a class="series-name"
                                                        href="https://docln.net/xuat-ban/842-riviere-va-dat-nuoc-cua-loi-cau-nguyen-tap-1">Riviere
                                                        Và Đất Nước Của Lời Cầu Nguyện - Tập 1</a>
                                                    <span class="publisher-name">
                                                        <a href="https://docln.net/xuat-ban?nph=amak">Amak</a> phát hành
                                                    </span>
                                                </h3>

                                                <section class="mobile-view mobile-toggle">
                                                    <header class="inline-block none-l">Thông tin thêm</header>
                                                    <main class="sect-body none force-block-l">
                                                        <div class="info-list long-text row m-0">
                                                            <div class="info-item col-12 col-md-6">
                                                                <span class="info-name">Tác giả:</span>
                                                                <span class="info-value"><a
                                                                        href="https://docln.net/xuat-ban?tacgia=Shiraishi%20Jougi">Shiraishi
                                                                        Jougi</a></span>
                                                            </div>
                                                            <div class="info-item col-12 col-md-6">
                                                                <span class="info-name">Họa sĩ:</span>
                                                                <span class="info-value"><a
                                                                        href="https://docln.net/xuat-ban?hoasi=Azure">Azure</a></span>
                                                            </div>
                                                            <div class="info-item col-12 col-md-6">
                                                                <span class="info-name">Dịch giả:</span>
                                                                <span class="info-value">
                                                                    <a
                                                                        href="https://docln.net/xuat-ban?dichgia=Beast666">Beast666</a>
                                                                </span>
                                                            </div>
                                                            <div class="info-item col-12 col-md-6">
                                                                <span class="info-name">Số trang:</span>
                                                                <span class="info-value">344</span>
                                                            </div>
                                                            <div class="info-item col-12 col-md-6">
                                                                <span class="info-name">Ngày phát hành: </span>
                                                                <span class="info-value">30/07/2024</span>
                                                            </div>
                                                            <div class="info-item col-12 col-md-6">
                                                                <span class="info-name">Giá bìa: </span>
                                                                <span class="info-value">139.000đ</span>
                                                            </div>
                                                        </div>
                                                    </main>
                                                </section>
                                                <div class="series-summary">Ở quốc đảo Kururunervia - Đất nước của Lời cầu
                                                    nguyện, khi đang đau khổ vì không tìm được việc làm, McMillia đã vô tình
                                                    gặp Riviere - bà chủ tiệm đồ cổ Riviere, với năng lực hóa giải lời
                                                    nguyền trên những Nguyện vật mang sức mạnh kỳ lạ. Sau khi được mời vào
                                                    làm trợ thủ tại tiệm, hai người cùng nhau...</div>

                                                <div class="store-list">
                                                    <a class="button store-link" style="background-color: #c92127"
                                                        href="https://www.fahasa.com/riviere-va-dat-nuoc-cua-loi-cau-nguyen-tap-1-riviere-and-the-nation-of-the-prayer-tang-kem-1-bookmark-1-postcard-hai-mat-3-card-bo-goc-nhu-ngoc-trai-1-photostrip.html?fhs_campaign=CATEGORY"
                                                        rel="nofollow" target="_blank">Fahasa</a>
                                                    <a class="button store-link" style="background-color: #f78320"
                                                        href="https://www.hikaru.vn/products/riviere-va-dat-nuoc-cua-loi-cau-nguyen-tap-1-riviere-and-the-nation-of-the-prayer-ngoai-truyen-cua-elaina"
                                                        rel="nofollow" target="_blank">Hikaru</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <article class="listall-item">
                                    <div class="row">
                                        <div class="cover-wrapper col-12 col-md-4">
                                            <div class="series-cover">
                                                <div class="a6-ratio">
                                                    <div class="content img-in-ratio"
                                                        style="background-image: url('https://i2.docln.net/ln/licensed/covers/b0645af6-7f73-4dd5-8f0d-a48a1e0c971d.jpg')">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-8">
                                            <div class="listall-detail">
                                                <h3 class="series-title text-xl font-bold">
                                                    <a class="series-name"
                                                        href="https://docln.net/xuat-ban/841-date-a-live-tap-15">Date A
                                                        Live - Tập 15</a>
                                                    <span class="publisher-name">
                                                        <a href="https://docln.net/xuat-ban?nph=amak">Amak</a> phát hành
                                                    </span>
                                                </h3>

                                                <section class="mobile-view mobile-toggle">
                                                    <header class="inline-block none-l">Thông tin thêm</header>
                                                    <main class="sect-body none force-block-l">
                                                        <div class="info-list long-text row m-0">
                                                            <div class="info-item col-12 col-md-6">
                                                                <span class="info-name">Tác giả:</span>
                                                                <span class="info-value"><a
                                                                        href="https://docln.net/xuat-ban?tacgia=Tachibana%20Koushi">Tachibana
                                                                        Koushi</a></span>
                                                            </div>
                                                            <div class="info-item col-12 col-md-6">
                                                                <span class="info-name">Họa sĩ:</span>
                                                                <span class="info-value"><a
                                                                        href="https://docln.net/xuat-ban?hoasi=Tsunako">Tsunako</a></span>
                                                            </div>
                                                            <div class="info-item col-12 col-md-6">
                                                                <span class="info-name">Dịch giả:</span>
                                                                <span class="info-value">
                                                                    <a
                                                                        href="https://docln.net/xuat-ban?dichgia=T%C3%A0i%20Th%E1%BB%8Bnh">Tài
                                                                        Thịnh</a>
                                                                </span>
                                                            </div>
                                                            <div class="info-item col-12 col-md-6">
                                                                <span class="info-name">Số trang:</span>
                                                                <span class="info-value">344</span>
                                                            </div>
                                                            <div class="info-item col-12 col-md-6">
                                                                <span class="info-name">Ngày phát hành: </span>
                                                                <span class="info-value">22/07/2024</span>
                                                            </div>
                                                            <div class="info-item col-12 col-md-6">
                                                                <span class="info-name">Giá bìa: </span>
                                                                <span class="info-value">128.000đ</span>
                                                            </div>
                                                        </div>
                                                    </main>
                                                </section>
                                                <div class="series-summary">Hoshimiya Mukuro, Tinh linh trôi nổi trên không
                                                    gian vũ trụ bao la đã đóng kín trái tim của chính mình bằng sức mạnh của
                                                    Thiên thần. Itsuka Shidou sau mọi nỗ lực muốn giúp đỡ đã bị cự tuyệt
                                                    hoàn toàn, cậu đã vứt bỏ do dự mà leo lên cỗ “Fraxinus” thế hệ mới, cùng
                                                    với sự giúp sức của các Tinh linh khá...</div>

                                                <div class="store-list">
                                                    <a class="button store-link" style="background-color: #c92127"
                                                        href="https://www.fahasa.com/date-a-live-tap-15-mukuro-family-tang-kem-2-bookmark-1-set-card-doi.html?fhs_campaign=CATEGORY"
                                                        rel="nofollow" target="_blank">Fahasa</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <article class="listall-item">
                                    <div class="row">
                                        <div class="cover-wrapper col-12 col-md-4">
                                            <div class="series-cover">
                                                <div class="a6-ratio">
                                                    <div class="content img-in-ratio"
                                                        style="background-image: url('https://i2.docln.net/ln/licensed/covers/5d5256f7-2500-48f5-81ee-967709bd73e5.jpg')">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-8">
                                            <div class="listall-detail">
                                                <h3 class="series-title text-xl font-bold">
                                                    <a class="series-name"
                                                        href="https://docln.net/xuat-ban/840-hoi-chung-tuoi-thanh-xuan-tap-10">Hội
                                                        Chứng Tuổi Thanh Xuân - Tập 10</a>
                                                    <span class="publisher-name">
                                                        <a href="https://docln.net/xuat-ban?nph=kimdong">Kim Đồng</a> phát
                                                        hành
                                                    </span>
                                                </h3>

                                                <section class="mobile-view mobile-toggle">
                                                    <header class="inline-block none-l">Thông tin thêm</header>
                                                    <main class="sect-body none force-block-l">
                                                        <div class="info-list long-text row m-0">
                                                            <div class="info-item col-12 col-md-6">
                                                                <span class="info-name">Tác giả:</span>
                                                                <span class="info-value"><a
                                                                        href="https://docln.net/xuat-ban?tacgia=Kamoshida%20Hajime">Kamoshida
                                                                        Hajime</a></span>
                                                            </div>
                                                            <div class="info-item col-12 col-md-6">
                                                                <span class="info-name">Họa sĩ:</span>
                                                                <span class="info-value"><a
                                                                        href="https://docln.net/xuat-ban?hoasi=Mizoguchi%20Keeji">Mizoguchi
                                                                        Keeji</a></span>
                                                            </div>
                                                            <div class="info-item col-12 col-md-6">
                                                                <span class="info-name">Dịch giả:</span>
                                                                <span class="info-value">
                                                                    <a
                                                                        href="https://docln.net/xuat-ban?dichgia=C%C3%A1o">Cáo</a>
                                                                </span>
                                                            </div>
                                                            <div class="info-item col-12 col-md-6">
                                                                <span class="info-name">Số trang:</span>
                                                                <span class="info-value">324</span>
                                                            </div>
                                                            <div class="info-item col-12 col-md-6">
                                                                <span class="info-name">Ngày phát hành: </span>
                                                                <span class="info-value">12/07/2024</span>
                                                            </div>
                                                            <div class="info-item col-12 col-md-6">
                                                                <span class="info-name">Giá bìa: </span>
                                                                <span class="info-value">105.000đ</span>
                                                            </div>
                                                        </div>
                                                    </main>
                                                </section>
                                                <div class="series-summary">Những năm tháng cấp ba không thể nào quên rồi
                                                    cũng kết thúc, Sakuta và các bạn trở thành sinh viên đại học. Không lâu
                                                    sau đó, vào một ngày đầu thu, khi cậu đang trải qua những ngày tháng êm
                                                    đềm… “Ban nãy là Uzuki thật hả?”
                                                    Biểu hiện của trưởng nhóm thần tượng “Sweet Bullet” Uzuki có gì đó hơi
                                                    kì quặ...</div>

                                                <div class="store-list">
                                                    <a class="button store-link" style="background-color: #c92127"
                                                        href="https://www.fahasa.com/hoi-chung-tuoi-thanh-xuan-tap-10-ban-gioi-han-tang-kem-standee-ivory-camera-card.html?fhs_campaign=CATEGORY"
                                                        rel="nofollow" target="_blank">Fahasa</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <article class="listall-item">
                                    <div class="row">
                                        <div class="cover-wrapper col-12 col-md-4">
                                            <div class="series-cover">
                                                <div class="a6-ratio">
                                                    <div class="content img-in-ratio"
                                                        style="background-image: url('https://i2.docln.net/ln/licensed/covers/dc996194-77d2-49da-8f31-23cb79c8d873.jpg')">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-8">
                                            <div class="listall-detail">
                                                <h3 class="series-title text-xl font-bold">
                                                    <a class="series-name"
                                                        href="https://docln.net/xuat-ban/839-pha-dao-di-gioi-cung-nu-than-khong-tin-do-tap-3-cong-chua-bang-tac-mau-lanh">Phá
                                                        Đảo Dị Giới Cùng Nữ Thần Không Tín Đồ - Tập 3: Công Chúa Băng Tạc
                                                        Máu Lạnh</a>
                                                    <span class="publisher-name">
                                                        <a href="https://docln.net/xuat-ban?nph=orionbooks">Orion Books</a>
                                                        phát hành
                                                    </span>
                                                </h3>

                                                <section class="mobile-view mobile-toggle">
                                                    <header class="inline-block none-l">Thông tin thêm</header>
                                                    <main class="sect-body none force-block-l">
                                                        <div class="info-list long-text row m-0">
                                                            <div class="info-item col-12 col-md-6">
                                                                <span class="info-name">Tác giả:</span>
                                                                <span class="info-value"><a
                                                                        href="https://docln.net/xuat-ban?tacgia=Oosaki%20Airu">Oosaki
                                                                        Airu</a></span>
                                                            </div>
                                                            <div class="info-item col-12 col-md-6">
                                                                <span class="info-name">Họa sĩ:</span>
                                                                <span class="info-value"><a
                                                                        href="https://docln.net/xuat-ban?hoasi=Tam-U">Tam-U</a></span>
                                                            </div>
                                                            <div class="info-item col-12 col-md-6">
                                                                <span class="info-name">Dịch giả:</span>
                                                                <span class="info-value">
                                                                    <a
                                                                        href="https://docln.net/xuat-ban?dichgia=Th%C3%BAy%20L%C6%B0%C6%A1ng">Thúy
                                                                        Lương</a>
                                                                </span>
                                                            </div>
                                                            <div class="info-item col-12 col-md-6">
                                                                <span class="info-name">Số trang:</span>
                                                                <span class="info-value">296</span>
                                                            </div>
                                                            <div class="info-item col-12 col-md-6">
                                                                <span class="info-name">Ngày phát hành: </span>
                                                                <span class="info-value">10/07/2024</span>
                                                            </div>
                                                            <div class="info-item col-12 col-md-6">
                                                                <span class="info-name">Giá bìa: </span>
                                                                <span class="info-value">100.000đ</span>
                                                            </div>
                                                        </div>
                                                    </main>
                                                </section>
                                                <div class="series-summary">Sau khi chuyển sinh đến một thế giới khác,
                                                    Makoto Takatsuki, một người chơi RPG lão luyện, đã dành thời gian của
                                                    mình để tập luyện và nâng cấp kỹ năng. Gần một năm đã trôi qua kể từ khi
                                                    Makoto trở thành một nhà thám hiểm, và cuối cùng cậu đã đạt cấp độ 20 và
                                                    xếp hạng Sắt. Đây vốn là một chuyện đáng...</div>

                                                <div class="store-list">
                                                    <a class="button store-link" style="background-color: #c92127"
                                                        href="https://www.fahasa.com/pha-dao-di-gioi-cung-nu-than-khong-tin-do-tap-3-cong-chua-bang-tac-mau-lanh-tang-kem-bookmark-poster-a3.html?fhs_campaign=CATEGORY"
                                                        rel="nofollow" target="_blank">Fahasa</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <article class="listall-item">
                                    <div class="row">
                                        <div class="cover-wrapper col-12 col-md-4">
                                            <div class="series-cover">
                                                <div class="a6-ratio">
                                                    <div class="content img-in-ratio"
                                                        style="background-image: url('https://i2.docln.net/ln/licensed/covers/ffa00372-1b1e-46d9-a819-8e93773444a2.jpg')">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-8">
                                            <div class="listall-detail">
                                                <h3 class="series-title text-xl font-bold">
                                                    <a class="series-name"
                                                        href="https://docln.net/xuat-ban/848-doi-anh-trong-mua-xuan-ngay-hom-qua">Đợi
                                                        Anh Trong Mùa Xuân Ngày Hôm Qua</a>
                                                    <span class="publisher-name">
                                                        <a href="https://docln.net/xuat-ban?nph=thaiha">Thái Hà Books</a>
                                                        phát hành
                                                    </span>
                                                </h3>

                                                <section class="mobile-view mobile-toggle">
                                                    <header class="inline-block none-l">Thông tin thêm</header>
                                                    <main class="sect-body none force-block-l">
                                                        <div class="info-list long-text row m-0">
                                                            <div class="info-item col-12 col-md-6">
                                                                <span class="info-name">Tác giả:</span>
                                                                <span class="info-value"><a
                                                                        href="https://docln.net/xuat-ban?tacgia=Hachimoku%20Mei">Hachimoku
                                                                        Mei</a></span>
                                                            </div>
                                                            <div class="info-item col-12 col-md-6">
                                                                <span class="info-name">Họa sĩ:</span>
                                                                <span class="info-value"><a
                                                                        href="https://docln.net/xuat-ban?hoasi=Kukka">Kukka</a></span>
                                                            </div>
                                                            <div class="info-item col-12 col-md-6">
                                                                <span class="info-name">Dịch giả:</span>
                                                                <span class="info-value">
                                                                    <a
                                                                        href="https://docln.net/xuat-ban?dichgia=Nguy%E1%BB%85n%20Th%E1%BB%8B%20Thu%20H%E1%BA%B1ng">Nguyễn
                                                                        Thị Thu Hằng</a>
                                                                </span>
                                                            </div>
                                                            <div class="info-item col-12 col-md-6">
                                                                <span class="info-name">Số trang:</span>
                                                                <span class="info-value">350</span>
                                                            </div>
                                                            <div class="info-item col-12 col-md-6">
                                                                <span class="info-name">Ngày phát hành: </span>
                                                                <span class="info-value">29/06/2024</span>
                                                            </div>
                                                            <div class="info-item col-12 col-md-6">
                                                                <span class="info-name">Giá bìa: </span>
                                                                <span class="info-value">119.000đ</span>
                                                            </div>
                                                        </div>
                                                    </main>
                                                </section>
                                                <div class="series-summary">Khi tiếng loa lúc 6h chiều vang lên bài
                                                    Greensleeves, ý thức của Kanae thực hiện bước nhảy thời gian.
                                                    Funami Kanae, người bỏ nhà ra đi từ Tokyo đến hòn đảo Sodeshima xa xôi
                                                    nơi cậu từng sống, bị cuốn vào một hiện tượng gọi là “Rollback” đưa cậu
                                                    ngược dòng về quá khứ. Giữa khoảng thời gian hỗn loạn n...</div>

                                                <div class="store-list">
                                                    <a class="button store-link" style="background-color: #c92127"
                                                        href="https://www.fahasa.com/doi-anh-trong-mua-xuan-ngay-hom-qua-tang-kem-postcard.html?fhs_campaign=CATEGORY"
                                                        rel="nofollow" target="_blank">Fahasa</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </main>
                            <div class="pagination-footer">
                                <div class="pagination_wrap">
                                    <!--<a href="" class="paging_item paging_prevnext prev  disabled ">Trước</a>-->
                                    <a href="https://docln.net/xuat-ban?page=1"
                                        class="paging_item paging_prevnext prev  disabled ">Đầu</a>

                                    <a href="https://docln.net/xuat-ban?page=1"
                                        class="paging_item page_num  current ">1</a>
                                    <a href="https://docln.net/xuat-ban?page=2" class="paging_item page_num ">2</a>
                                    <a href="https://docln.net/xuat-ban?page=3" class="paging_item page_num ">3</a>
                                    <a href="https://docln.net/xuat-ban?page=4" class="paging_item page_num ">4</a>
                                    <a href="https://docln.net/xuat-ban?page=5" class="paging_item page_num ">5</a>

                                    <!--<a href=" https://docln.net/xuat-ban?page=2 " class="paging_item paging_prevnext next ">Tiếp</a>-->
                                    <a href="https://docln.net/xuat-ban?page=86"
                                        class="paging_item paging_prevnext next ">Cuối</a>
                                </div>
                            </div>
                        </section>

                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

@extends('home.layout.master')
@section('title')
Truyện xuất bản trong tháng
@endsection
@section('content')
    <div class="page-top-group  at-index ">
        @include('partials.banner')
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
                                        @foreach ($publishingCompanys as $company)
                                        <li>
                                            <input name="nph[]" id="ipm" value="ipm" type="checkbox"><label
                                                for="ipm"> {{$company->name}}</label>
                                        </li>
                                          @endforeach
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

                                @foreach ($copyrights as $copyright)
                                    <article class="listall-item">
                                        <div class="row">
                                            <div class="cover-wrapper col-12 col-md-4">
                                                <div class="series-cover">
                                                    <div class="a6-ratio">
                                                        <div class="content img-in-ratio"
                                                            style="background-image: url('{{ $copyright->cover }}')">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12 col-md-8">
                                                <div class="listall-detail">
                                                    <h3 class="series-title text-xl font-bold">
                                                        <a class="series-name" href="#">{{ $copyright->title }}</a>
                                                        <span class="publisher-name">
                                                            @foreach ($publishingCompanys as $company)
                                                                <a href="#">{{ $company->name }}</a> phát hành
                                                            @endforeach
                                                        </span>
                                                    </h3>

                                                    <section class="mobile-view mobile-toggle">
                                                        <header class="inline-block none-l">Thông tin thêm</header>
                                                        <main class="sect-body none force-block-l">
                                                            <div class="info-list long-text row m-0">
                                                                <div class="info-item col-12 col-md-6">
                                                                    <span class="info-name">Tác giả:</span>
                                                                    <span
                                                                        class="info-value">{{ $copyright->author }}</span>
                                                                </div>
                                                                <div class="info-item col-12 col-md-6">
                                                                    <span class="info-name">Họa sĩ:</span>
                                                                    <span
                                                                        class="info-value">{{ $copyright->painter }}</span>
                                                                </div>
                                                                <div class="info-item col-12 col-md-6">
                                                                    <span class="info-name">Dịch giả:</span>
                                                                    <span
                                                                        class="info-value">{{ $copyright->translater }}</span>
                                                                </div>
                                                                <div class="info-item col-12 col-md-6">
                                                                    <span class="info-name">Số trang:</span>
                                                                    <span class="info-value">{{ $copyright->nop }}</span>
                                                                </div>
                                                                <div class="info-item col-12 col-md-6">
                                                                    <span class="info-name">Ngày phát hành: </span>
                                                                    <span
                                                                        class="info-value">{{ $copyright->created_at->format('d/m/Y') }}</span>
                                                                </div>
                                                                <div class="info-item col-12 col-md-6">
                                                                    <span class="info-name">Giá bìa:</span>
                                                                    <span
                                                                        class="info-value">{{ $copyright->price }}đ</span>
                                                                </div>
                                                            </div>
                                                        </main>
                                                    </section>

                                                    <div class="series-summary">{{ $copyright->summary }}</div>
                                                    <div class="store-list">
                                                        @foreach ($poss as $pos)
                                                                <a class="button store-link"
                                                                    style="background-color: #ff5520"
                                                                    href="{{ $pos->link }}" rel="nofollow"
                                                                    target="_blank">{{ $pos->name }}</a>
                                                        @endforeach
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                @endforeach




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

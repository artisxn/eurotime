@extends('layouts.app')

@section('content')
    @include('front.partials.header')
    <!-- End Header -->
    <section id="content">
        <div class="content-page">
            <div class="container">
                <div class="content-about">
                    <h2 class="title30 play-font text-uppercase dark font-bold">o nama</h2>
                    <p class="desc">Danas, sat predstavlja lični pečat, stil života, stav, odluku svakog pojedinca koji teži tome da samostalno kreira ono što mu je dato rođenjem – svoje vreme.</p>
                    <p class="blockquote">
                        <a href="{route('index'}"><strong>Eurotime </strong></a>se svrstava među lidere na našem tržištu u domenu ponude i plasmana ručnih satova
                        najboljih svetskih proizvođača.
                        Firma Eurotime je ekskluzivni distributer renomiranih svetskih brendova: <strong>Lee Copeer, Quantum i Belmond</strong>.
                        Eurotime je privatna kompanija osnovana 2006. godine , na tržištu  prisutna dugi niz godina čija je misija I moto da svakim segmentom poslovanja prezentuje izuzetno visok kvalitet ponude finih ručnih
                        satova.
                    </p>
                    <p class="blockquote">
                        Takodje u svom programu imamo i narukvice za satove od različitih materijala: kože, metala,
                        gume, silikona - poznatog španskog proizvodjača <strong>PIERO MAGLI</strong>.

                        Time + kompanija je takodje u našem sastavu, posluje u Crnoj Gori više od tri decenije i
                        ekskuluzivni je distributer renomiranih brendova kao što su: Jacques Lemans, Suunto, Timex,
                        Chronotech, Casio, Sweet Years, Roccobarocco, GF Ferre, U-Boat, Louis Erard, TAG Heuer,
                        Invicta, Elite, Baraka itd...

                        Specijalizovani servis u Podgorici je ponos ove firme, gde kažu da mogu izaći u susret svim
                        zahtevima ljubitelja satova.

                    </p>
                    <div class="banner-watches">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="watches-thumb text-center">
                                        <img src="./images/index/LC06769.062.jpg" alt="" class="push" />
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="watches-info">
                                        <h2 class="title48 play-font dark">Lee Cooper Satovi</h2>
                                        <h2 class="title48 play-font font-bold text-uppercase dark">Dizajn za<br> moderan nacin zivljenja</h2>
                                        <h3 class="title30 play-font font-ight dark">Commander's Watch</h3>
                                        <ul class="list-inline-block watches-button">
                                            <li>Uživanje u trenucima je umetnost življenja. Nasi satovi čine jedinstvene trenutke još lepšim. Naši satovi stvaraju evociraju emocije i stavljaju osmeh na vaše lice uz svaki pogled na zglob. Satovi <strong>Lee Copeer,Quantum i Belmond</strong> predstavljaju satove visokog kvaliteta koji kombinuju živost i stil.
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Banner Watches -->

                    <div class="about-why-choise">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <h2 class="title18 play-font text-uppercase dark  font-bold">Zasto izabrati nase satove</h2>
                                <div class="about-accordion toggle-tab">
                                    <div class="item-toggle-tab active">
                                        <div class="toggle-tab-title"><span class="bg-color"><i class="fa fa-get-pocket"></i></span><h2 class="dark">DISTRIBUTIVNA MREZA</h2></div>
                                        <p class="desc toggle-tab-content">Pored sopstvene radnje i show room-a, veleprodaje i servisa u kojima je moguće naći naš celokupan asortiman, možemo se pohvaliti sa odlično razvijenom distributivnom mrežom širom Srbije koja obuhvata preko stotinu prodajnih mesta naših partnera u zemlji.</p>
                                    </div>
                                    <div class="item-toggle-tab">
                                        <div class="toggle-tab-title"><span class="bg-color"><i class="fa fa-get-pocket"></i></span><h2 class="dark">SERVIS</h2></div>
                                        <p class="desc toggle-tab-content"> Specijalizovani servis je ponos ove firme, gde kažu da mogu izaći u susret svim zahtevima ljubitelja satova.</p>
                                    </div>
                                    <div class="item-toggle-tab">
                                        <div class="toggle-tab-title"><span class="bg-color"><i class="fa fa-get-pocket"></i></span><h2 class="dark">OUTLET</h2></div>
                                        <p class="desc toggle-tab-content"> Outlet Time Square-Prvi outlet u Srbiji gde vas očekuju poznati brendovi, koji su svakog dana na popustu od 30% do 70%.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="banner-adv overlay-image zoom-image">
                                    <a href="#" class="adv-thumb-link"><img src="images/page/img-about.jpg" alt="" /></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Choise -->
                    <div class="about-client">
                        <h2 class="title18 play-font text-uppercase dark  font-bold">Zasto ljudi vole nase satove</h2>
                        <div class="about-client-slider">
                            <div class="wrap-item" data-autoplay="true" data-pagination="false" data-itemscustom="[[0,1],[560,2],[990,3]]">
                                <div class="item-about-client">
                                    <div class="client-thumb"><a href="#"><img src="/images/testemonials/av1.jpg" alt="" /></a></div>
                                    <div class="client-info">
                                        <p class="desc">Sitna zadovoljstva kriju se u pazljivo odabaranim detaljima koji krase kolekcije najnovijih satova brenda Lee cooper,Belmond I Qantum.</p>
                                        <h3 class="title14 text-uppercase play-font"><a href="#" class="dark">Vincent Vanilla</a></h3>
                                        <span class="silver">Srecna musterija</span>
                                    </div>
                                </div>
                                <div class="item-about-client">
                                    <div class="client-thumb"><a href="#"><img src="/images/testemonials/av2.jpg" alt="" /></a></div>
                                    <div class="client-info">
                                        <p class="desc">Uvek je zadovoljstvo kupovati kvalitetne satove u Eurotime prodavnicama!</p>
                                        <h3 class="title14 text-uppercase play-font"><a href="#" class="dark">Gregor Red</a></h3>
                                        <span class="silver">Lojalna musterija</span>
                                    </div>
                                </div>
                                <div class="item-about-client">
                                    <div class="client-thumb"><a href="#"><img src="/images/testemonials/av3.jpg" alt="" /></a></div>
                                    <div class="client-info">
                                        <p class="desc">Servis i usluga je  profesionalna</p>
                                        <h3 class="title14 text-uppercase play-font"><a href="#" class="dark">Alexander Green</a></h3>
                                        <span class="silver">Zadovoljna musterije</span>
                                    </div>
                                </div>
                                <div class="item-about-client">
                                    <div class="client-thumb"><a href="#"><img src="/images/testemonials/av6.jpg" alt="" /></a></div>
                                    <div class="client-info">
                                        <p class="desc">Satovi Lee Copeer,Quantum i Belmond predstavljaju satove visokog kvaliteta koji kombinuju živost i stil.</p>
                                        <h3 class="title14 text-uppercase play-font"><a href="#" class="dark">Vincent Vanilla</a></h3>
                                        <span class="silver">Srecna musterija</span>
                                    </div>
                                </div>
                                <div class="item-about-client">
                                    <div class="client-thumb"><a href="#"><img src="images/testemonials/av5.jpg" alt="" /></a></div>
                                    <div class="client-info">
                                        <p class="desc">Uživanje u trenucima je umetnost življenja</p>
                                        <h3 class="title14 text-uppercase play-font"><a href="#" class="dark">Gregor Red</a></h3>
                                        <span class="silver">Lojalna musterija</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Client -->
                    <div class="about-service">
                        <div class="row">
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="item-about-service text-center white" style="background:#f4ca49">
                                    <a href="#" class="wobble-horizontal"><i class="fa fa-gift"></i></a>
                                    <h2 class="title30">Outlet Time Square-Prvi outlet u Srbiji gde vas očekuju poznati brendovi, koji su svakog dana na popustu od 30% do 70%.
                                    </h2>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="item-about-service text-center white" style="background:#ff607c">
                                    <a href="#" class="wobble-horizontal"><i class="fa fa-home"></i></a>
                                    <h2 class="title30">Preko stotinu prodajnih mesta naših partnera u zemlji.</h2>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="item-about-service text-center white" style="background:#37436d">
                                    <a href="#" class="wobble-horizontal"><i class="fa fa-life-bouy"></i></a>
                                    <h2 class="title30">Specijalizovani servis je ponos ove firme, gde se izlazi u susret svim zahtevima ljubitelja satova.
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Content -->
    @include('front.partials.footer')
    {{--    <!-- End Footer -->--}}
    @include('front.partials.wishlist')
    {{--    <!-- End Wishlist Mask -->--}}
    @include('front.partials.loading-center')
@endsection

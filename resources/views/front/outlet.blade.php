@extends('layouts.app')

@section('content')
    @include('front.partials.header')
    <!-- End Header -->
    <section id="content">
        <div class="banner-watches">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="watches-thumb text-center">
                            <img src="/images/outlet/outlet-pano.jpg" alt="" class="push"/>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="watches-info">
                            <h2 class="title48 play-font font-bold text-uppercase dark">Outlet</h2>
                            <h2 class="title48 play-font dark"> U našoj specijalizovanoj
                                prodavnici uvek možete računati na izvanrednu i profesionalnu uslugu i inspirativno
                                okruženje.</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Banner Watches -->
        @include('front.partials-index.brand-slider')
        <div class="product-compare-lightbox">
            <div class="table-responsive">
                <table class="table compare-product-table">
                    <tr class="compare-img">
                        <td><a href="#"><img src="/images/outlet/outlet-salon-1.jpg" alt=""></a></td>
                        <td><a href="#"><img src="/images/outlet/outlet-salon-2.jpg" alt=""></a></td>
                        <td><a href="#"><img src="/images/outlet/outlet-salon-3.jpg" alt=""></a></td>
                    </tr>
                    <tr class="compare-img">
                        <td><a href="#"><img src="/images/outlet/outlet-salon-4.jpg" alt=""></a></td>
                        <td><a href="#"><img src="/images/outlet/outlet-salon-5.jpg" alt=""></a></td>
                        <td><a href="#"><img src="/images/outlet/outlet-salon-7.jpg" alt=""></a></td>
                    </tr>
                    <tr class="compare-img">
                        <td><a href="#"><img src="/images/outlet/outlet-salon-9.jpg" alt=""></a></td>
                        <td><a href="#"><img src="/images/outlet/outlet-salon-10.jpg" alt=""></a></td>
                        <td><a href="#"><img src="/images/outlet/outlet-salon-11.jpg" alt=""></a></td>
                    </tr>
                    <tr class="compare-img">
                        <td><a href="#"><img src="/images/outlet/outlet-salon-13.jpg" alt=""></a></td>
                        <td><a href="#"><img src="/images/outlet/outlet-salon-15.jpg" alt=""></a></td>
                        <td><a href="#"><img src="/images/outlet/outlet-salon-16.jpg" alt=""></a></td>
                    </tr>
                    <tr class="compare-img">
                        <td><a href="#"><img src="/images/outlet/outlet-salon-19.jpg" alt=""></a></td>
                        <td><a href="#"><img src="/images/outlet/outlet-salon-21.jpg" alt=""></a></td>
                        <td><a href="#"><img src="/images/outlet/outlet-salon-23.jpg" alt=""></a></td>
                    </tr>
                </table>
            </div>
        </div>
        Savremeni dizajn, rešenja prilagođeni su nasoj radnji i elegantne vitrine su deo koncepta prodavnice u kojojima cete naci aranžmane proizvoda svih svedskih brendova: Lee Cooper,Quantum, Belmond,Timex, D&G, Elite, Roccobarocco, Sweet Years i mnogi drugi …..
        Razlog vise da nas posetite I saradjujete sa nama je izuzetna kolekcija rucnih satova po veoma povoljnim cenama!

        <div class="block-trend-favourite">
            <div class="container">
                <div class="intro-box4 text-center text-uppercase">
                    <h3 class="title18 dark play-font font-normal">trend design</h3>
                    <h2 class="title30 dark play-font font-bold">Design is favorite</h2>
                    <a href="#" class="link-arrow dark">Shop all</a>
                </div>
                <div class="list-trend-design">
                    <div class="item-trend-design">
                        <div class="trend-design-thumb banner-adv zoom-out fade-in-out">
                            <a href="#" class="adv-thumb-link">
                                <img src="/images/outlet/outlet-1.jpg" alt=""/>
                                <img src="/images/outlet/outlet-1.jpg" alt=""/>
                            </a>
                        </div>
                        <div class="trend-design-info">
                            <h2 class="title30 play-font dark">Dizahn</h2>
                            <p class="desc opaci dark">Savremeni dizajn, rešenja prilagođeni su nasoj radnji i elegantne vitrine su deo koncepta prodavnice u kojojima cete naci aranžmane proizvoda svih svedskih brendova: Lee Cooper,Quantum, Belmond,Timex, D&G, Elite, Roccobarocco, Sweet Years i mnogi drugi..</p>
                            <a href="#" class="shop-button bg-white border">Proizvodi</a>
                        </div>
                    </div>
                    <div class="item-trend-design">
                        <div class="trend-design-thumb banner-adv zoom-out fade-in-out">
                            <a href="#" class="adv-thumb-link">
                                <img src="/images/outlet/outlet-1.jpg" alt=""/>
                                <img src="/images/outlet/outlet-1.jpg" alt=""/>
                            </a>
                        </div>
                        <div class="trend-design-info">
                            <h2 class="title30 play-font dark">About-Turn</h2>
                            <p class="desc opaci dark">On the wave-edged caseback, the stripes of the Commander’s naval
                                insignia are featured on the rotor of the new OMEGA Calibre 2507. There is also a
                                central 9mm "bullet" design which adds to the 007 touch. The stainless steel model is
                                limited to just 7,007 pieces.</p>
                            <a href="#" class="shop-button bg-white border">discover products</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Favourite -->
        <div class="block-video-parallax text-center">
            <div class="info-video-parallax">
                <a href="#" class="video-button"></a>
                <h2 class="font-bold title30 play-font white text-uppercase">Parallax background video</h2>
            </div>
            <video class="video-parallax" loop muted>
                <source src="images/video/omega.mp4" type="video/mp4">
            </video>
        </div>
        <!-- End Video Parallax -->
    </section>
    <!-- End Content -->
    @include('front.partials.footer')
    {{--    <!-- End Footer -->--}}
    @include('front.partials.wishlist')
    {{--    <!-- End Wishlist Mask -->--}}
    @include('front.partials.loading-center')
@endsection

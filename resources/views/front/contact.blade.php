@extends('layouts.app')

@section('content')
    @include('front.partials.header')
    <!-- End Header -->
    <section id="content">
        <div class="content-page">
            <div class="container">
                <div class="content-about content-contact-page">
                    <h2 class="title30 play-font dark font-bold text-uppercase">Kontakt</h2>
                    <div class="contact-google-map bg-white border">
                        <div id="map" class="map-custom"></div>
                        <script>
                            function initMap() {
                                var myLatLng = {lat: 44.815627, lng: 20.465487};

                                var map = new google.maps.Map(document.getElementById('map'), {
                                    zoom: 14,
                                    center: myLatLng
                                });

                                var marker = new google.maps.Marker({
                                    position: myLatLng,
                                    map: map,
                                });
                            }
                        </script>
                        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCfmjIRw1NCiZ5CUIFYYi8QQGw85Zvx2t8&callback=initMap" async defer></script>
                    </div>
                    <!-- End Google Map -->
                    <div class="contact-page-info blockquote">
                        <div class="row">
                            <div class="col-md-5 col-sm-12 col-xs-12">
                             <h3>Srbija</h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-5 col-sm-12 col-xs-12">
                                <div class="contact-box contact-address-box">
                                    <span class="dark"><i class="fa fa-home"></i></span>
                                    <label class="title16 dark">ADRESA:</label>
                                    <p class="desc">EUROTIME D.O.O, Makedonska 35/1, 11 000 Beograd, Srbija</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-7 col-xs-12">
                                <div class="contact-box">
                                    <span class="dark"><i class="fa fa-phone"></i></span>
                                    <ul class="list-inline-block">
                                        <li>
                                            <label class="title16 dark">Telefoni:</label>
                                        </li>
                                        <li>
                                            <span class="dark">+381 11 3373 180</span>
                                            <span class="dark">+381 11 3373 180</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="contact-box">
                                    <span class="dark"><i class="fa fa-print"></i></span>
                                    <ul class="list-inline-block">
                                        <li>
                                            <label class="title16 dark">Fax:</label>
                                        </li>
                                        <li>
                                            <span class="dark">+381 11 3373 180</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-5 col-xs-12">
                                <div class="contact-box contact-email-box">
                                    <span class="dark"><i class="fa fa-envelope"></i></span>
                                    <label class="title16 dark">e-mail:</label>
                                    <p class="desc"><a href="#" class="dark">office@eurotime.rs</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="contact-page-info blockquote">
                        <div class="row">
                            <div class="col-md-5 col-sm-12 col-xs-12">
                                <h3>Crna Gora</h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-5 col-sm-12 col-xs-12">
                                <div class="contact-box contact-address-box">
                                    <span class="dark"><i class="fa fa-home"></i></span>
                                    <label class="title16 dark">ADRESA:</label>
                                    <p class="desc">EUROTIME D.O.O, Trg Nezavisnosti bb, 11 000 Podgorica, Crna Goran</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-7 col-xs-12">
                                <div class="contact-box">
                                    <span class="dark"><i class="fa fa-phone"></i></span>
                                    <ul class="list-inline-block">
                                        <li>
                                            <label class="title16 dark">Telefoni:</label>
                                        </li>
                                        <li>
                                            <span class="dark">+382 67 221441</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="contact-box">
                                    <span class="dark"><i class="fa fa-print"></i></span>
                                    <ul class="list-inline-block">
                                        <li>
                                            <label class="title16 dark">Fax:</label>
                                        </li>
                                        <li>
                                            <span class="dark">+382 67 243383</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-5 col-xs-12">
                                <div class="contact-box contact-email-box">
                                    <span class="dark"><i class="fa fa-envelope"></i></span>
                                    <label class="title16 dark">e-mail:</label>
                                    <p class="desc"><a href="#" class="dark">timeplus@t-com.me</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Contact Info -->
                    <div class="contact-form-faq">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="contact-form-page">
                                    <h2 class="title18 dark font-bold text-uppercase play-font">Kontakt Forma</h2>
                                    <form class="contact-form">
                                        <p class="contact-name">
                                            <input class="dark border" onblur="if (this.value=='') this.value = this.defaultValue" onfocus="if (this.value==this.defaultValue) this.value = ''" value="Ime*" type="text">
                                        </p>
                                        <p class="contact-email">
                                            <input class="dark border" onblur="if (this.value=='') this.value = this.defaultValue" onfocus="if (this.value==this.defaultValue) this.value = ''" value="Email*" type="text">
                                        </p>
                                        <p class="contact-message">
                                            <textarea class="dark border" onblur="if (this.value=='') this.value = this.defaultValue" onfocus="if (this.value==this.defaultValue) this.value = ''" cols="30" rows="10">Poruka*</textarea>
                                        </p>
                                        <p class="contact-submit">
                                            <input  class="shop-button white bg-dark" type="submit" value="Posalji">
                                        </p>
                                    </form>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="contact-faq">
                                    <h2 class="title18 dark font-bold text-uppercase play-font">FAQs</h2>
                                    <div class="contact-accordion toggle-tab">
                                        <div class="item-toggle-tab active">
                                            <h2 class="toggle-tab-title dark">Gde mogu popraviti sat?</h2>
                                            <p class="desc toggle-tab-content dark opaci">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid animi archi tecto aspernatur assumenda cum inventore labore magnam </p>
                                        </div>
                                        <div class="item-toggle-tab">
                                            <h2 class="toggle-tab-title dark">Radno vreme prodavnica?</h2>
                                            <p class="desc toggle-tab-content dark opaci">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid animi archi tecto aspernatur assumenda cum inventore labore magnam </p>
                                        </div>
                                        <div class="item-toggle-tab">
                                            <h2 class="toggle-tab-title dark">Kolika je grarancija?</h2>
                                            <p class="desc toggle-tab-content dark opaci">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid animi archi tecto aspernatur assumenda cum inventore labore magnam </p>
                                        </div>
                                        <div class="item-toggle-tab">
                                            <h2 class="toggle-tab-title dark">Da li radite zamenu?</h2>
                                            <p class="desc toggle-tab-content dark opaci">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid animi archi tecto aspernatur assumenda cum inventore labore magnam </p>
                                        </div>
                                        <div class="item-toggle-tab">
                                            <h2 class="toggle-tab-title dark">Kada su raspordaje?</h2>
                                            <p class="desc toggle-tab-content dark opaci">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid animi archi tecto aspernatur assumenda cum inventore labore magnam </p>
                                        </div>
                                        <div class="item-toggle-tab">
                                            <h2 class="toggle-tab-title dark">Radno vreme otuleta</h2>
                                            <p class="desc toggle-tab-content dark opaci">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid animi archi tecto aspernatur assumenda cum inventore labore magnam </p>
                                        </div>
                                    </div>
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

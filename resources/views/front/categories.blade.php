@extends('layouts.app')

@section('content')
    @include('front.partials.header')
    <!-- End Header -->
    <section id="content">
        <div class="wrap-shop-banner">
            <div class="banner-slider banner-slider2 banner-slider-shop bg-slider parallax-slider">
                <div class="wrap-item" data-transition="fade" data-navigation="true" data-itemscustom="[[0,1]]">
                    <div class="item-slider item-slider2">
                        <div class="banner-thumb">
                            <a href="#"><img src="images/shop/full1.jpg" alt="" /></a>
                        </div>
                        <div class="banner-info animated text-center" data-animated="zoomIn">
                            <h2 class="title48 play-font font-normal text-uppercase white">up to <strong>45%</strong> off</h2>
                            <h3 class="title18 play-font font-italic white">This unique jewelry is handcrafted on the beautiful island of Nantucket using fine silver and semi precious stones.</h3>
                            <a href="#" class="border-button white title18">Shop now</a>
                        </div>
                    </div>
                    <div class="item-slider item-slider2">
                        <div class="banner-thumb">
                            <a href="#"><img src="images/shop/full2.jpg" alt="" /></a>
                        </div>
                        <div class="banner-info animated text-center" data-animated="bounceIn">
                            <h2 class="title48 play-font font-normal text-uppercase white">Jewelry collection</h2>
                            <h3 class="title18 play-font font-italic white">This unique jewelry is handcrafted on the beautiful island of Nantucket using fine silver and semi precious stones.</h3>
                            <a href="#" class="border-button white title18">Shop now</a>
                        </div>
                    </div>
                    <div class="item-slider item-slider2">
                        <div class="banner-thumb">
                            <a href="#"><img src="images/shop/full3.jpg" alt="" /></a>
                        </div>
                        <div class="banner-info animated text-center" data-animated="tada">
                            <h2 class="title48 play-font font-normal text-uppercase white">happy new year</h2>
                            <h3 class="title18 play-font font-italic white"><strong>up to 70% all items</strong><br>Two for Joy Jewelry creates meaningful jewelry "of the </h3>
                            <a href="#" class="border-button white title18">Shop now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Shop Banner -->
        <div class="wrap-bread-crumb">
            <div class="container">
                <div class="bread-crumb">
                    <a href="#">Home</a>
                    <a href="#">Shop</a>
                    <strong>Clothing</strong>
                </div>
            </div>
        </div>
        <!-- End Bread Crumb -->
        <div class="content-page">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="sidebar sidebar-left">
                            <div class="widget widget-category">
                                <h2 class="widget-title title14 font-bold play-font text-uppercase dark">Categories</h2>
                                <div class="widget-content">
                                    <ul class="list-category-toggle toggle-tab list-none">
                                        <li class="item-toggle-tab active">
                                            <a href="#" class="toggle-tab-title">Clothing</a>
                                            <ul class="toggle-tab-content list-none">
                                                <li><a href="#">For Men’s <span>25</span></a></li>
                                                <li><a href="#">For Men’s <span>09</span></a></li>
                                                <li><a href="#">Accessories <span>37</span></a></li>
                                            </ul>
                                        </li>
                                        <li class="item-toggle-tab">
                                            <a href="#" class="toggle-tab-title">Baggage</a>
                                            <ul class="toggle-tab-content list-none">
                                                <li><a href="#">For Men’s <span>25</span></a></li>
                                                <li><a href="#">For Men’s <span>09</span></a></li>
                                                <li><a href="#">Accessories <span>37</span></a></li>
                                            </ul>
                                        </li>
                                        <li class="item-toggle-tab">
                                            <a href="#" class="toggle-tab-title">Shoes</a>
                                            <ul class="toggle-tab-content list-none">
                                                <li><a href="#">For Men’s <span>25</span></a></li>
                                                <li><a href="#">For Men’s <span>09</span></a></li>
                                                <li><a href="#">Accessories <span>37</span></a></li>
                                            </ul>
                                        </li>
                                        <li class="item-toggle-tab">
                                            <a href="#" class="toggle-tab-title">Jewelry</a>
                                            <ul class="toggle-tab-content list-none">
                                                <li><a href="#">For Men’s <span>25</span></a></li>
                                                <li><a href="#">For Men’s <span>09</span></a></li>
                                                <li><a href="#">Accessories <span>37</span></a></li>
                                            </ul>
                                        </li>
                                        <li class="item-toggle-tab">
                                            <a href="#" class="toggle-tab-title">Rain Coat</a>
                                            <ul class="toggle-tab-content list-none">
                                                <li><a href="#">For Men’s <span>25</span></a></li>
                                                <li><a href="#">For Men’s <span>09</span></a></li>
                                                <li><a href="#">Accessories <span>37</span></a></li>
                                            </ul>
                                        </li>
                                        <li class="item-toggle-tab">
                                            <a href="#" class="toggle-tab-title">Suitcase</a>
                                            <ul class="toggle-tab-content list-none">
                                                <li><a href="#">For Men’s <span>25</span></a></li>
                                                <li><a href="#">For Men’s <span>09</span></a></li>
                                                <li><a href="#">Accessories <span>37</span></a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- End Widget -->
                            <div class="widget widget-price">
                                <h2 class="widget-title title14 font-bold play-font text-uppercase dark">Price</h2>
                                <div class="widget-content">
                                    <div class="range-filter">
                                        <div class="slider-range">
                                            <span class="min-price"></span>
                                            <span class="max-price"></span>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- End Widget -->
                            <div class="widget widget-color">
                                <h2 class="widget-title title14 font-bold play-font text-uppercase dark">colors</h2>
                                <div class="widget-content">
                                    <ul class="list-none list-attr">
                                        <li><a href="#"><i style="background-color:#000000"></i> Black<span>03</span></a></li>
                                        <li><a href="#" class="active" data-color="#1476c6"><i style="background-color:#1476c6"></i>Blue<span>05</span></a></li>
                                        <li><a href="#"><i style="background-color:#5be5ee"></i>Cyan<span>13</span></a></li>
                                        <li><a href="#"><i style="background-color:#e36d55"></i>Beige<span>05</span></a></li>
                                        <li><a href="#"><i style="background-color:#ff1b1b"></i>Red<span>07</span></a></li>
                                        <li><a href="#"><i style="background-color:#f1ca2d"></i>Yellow<span>05</span></a></li>
                                        <li><a href="#"><i style="background-color:#ffffff"></i>White<span>05</span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- End Widget -->
                            <div class="widget widget-attr">
                                <h2 class="widget-title title14 font-bold play-font text-uppercase dark">Size</h2>
                                <div class="widget-content">
                                    <ul class="list-none list-attr">
                                        <li><a href="#">29"<span>05</span></a></li>
                                        <li><a href="#" class="active">30"<span>03</span></a></li>
                                        <li><a href="#">31"<span>13</span></a></li>
                                        <li><a href="#">32"<span>05</span></a></li>
                                        <li><a href="#">XS<span>07</span></a></li>
                                        <li><a href="#">S<span>05</span></a></li>
                                        <li><a href="#">M<span>05</span></a></li>
                                        <li><a href="#">L<span>04</span></a></li>
                                        <li><a href="#">XL<span>08</span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- End Widget -->
                            <div class="widget widget-attr">
                                <h2 class="widget-title title14 font-bold play-font text-uppercase dark">Material</h2>
                                <div class="widget-content">
                                    <ul class="list-none list-attr">
                                        <li><a href="#">Cotton<span>05</span></a></li>
                                        <li><a href="#" class="active">Wool<span>03</span></a></li>
                                        <li><a href="#">Lycra<span>13</span></a></li>
                                        <li><a href="#">Polyester<span>05</span></a></li>
                                        <li><a href="#">Leather<span>07</span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- End Widget -->
                            <div class="widget widget-attr">
                                <h2 class="widget-title title14 font-bold play-font text-uppercase dark">Manufacturer</h2>
                                <div class="widget-content">
                                    <ul class="list-none list-attr">
                                        <li><a href="#">Gucci<span>05</span></a></li>
                                        <li><a href="#" class="active">Panda<span>03</span></a></li>
                                        <li><a href="#">Mango<span>13</span></a></li>
                                        <li><a href="#">Fendi<span>05</span></a></li>
                                        <li><a href="#">Lacoste<span>07</span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- End Widget -->
                            <div class="widget widget-tags">
                                <h2 class="widget-title title14 font-bold text-uppercase play-font">Tags</h2>
                                <ul class="list-none wg-list-tags">
                                    <li><a href="#">$25</a></li>
                                    <li><a href="#">$400</a></li>
                                    <li><a href="#">Fashion</a></li>
                                    <li><a href="#">Electronic</a></li>
                                    <li><a href="#">Beauty</a></li>
                                    <li><a href="#">Sale</a></li>
                                </ul>
                            </div>
                            <!-- End Widget -->
                            <div class="widget widget-search">
                                <h2 class="widget-title title14 font-bold text-uppercase play-font">Search</h2>
                                <form class="wg-search-form" method="get">
                                    <input type="text" name="s" placeholder="Search.." />
                                    <input type="submit" value=""/>
                                </form>
                            </div>
                            <!-- End Widget -->
                        </div>
                    </div>
                    <div class="col-md-9 col-sm-8 col-xs-12">
                        <div class="content-blog-page">
                            <div class="title-page">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h2 class="title30 font-bold text-uppercase pull-left play-font dark">Grid View</h2>
                                        <ul class="sort-pagi-bar list-inline-block pull-right">
                                            <li>
                                                <div class="sort-by">
                                                    <span class="gray">Sort:</span>
                                                    <div class="select-box inline-block">
                                                        <select>
                                                            <option value="">Default Sorting</option>
                                                            <option value="">Price Higher</option>
                                                            <option value="">Price Lower</option>
                                                            <option value="">Name Asc</option>
                                                            <option value="">Name Desc</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="dropdown-box show-by">
                                                    <a href="#" class="dropdown-link"><span class="gray">Per Page:</span><span class="silver">12</span></a>
                                                    <ul class="dropdown-list list-none">
                                                        <li><a href="#">12</a></li>
                                                        <li><a href="#">16</a></li>
                                                        <li><a href="#">20</a></li>
                                                        <li><a href="#">24</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="view-type">
                                                    <span class="gray">View As:</span>
                                                    <a href="#" class="grid-view active"><i class="fa fa-th-large"></i></a>
                                                    <a href="#" class="list-view"><i class="fa fa-reorder"></i></a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- End Title Page -->
                            <div class="product-grid-view">
                                <div class="row">
                                    <div class="col-md-4 col-sm-6 col-xs-6">
                                        <div class="item-product item-product4 text-center border">
                                            <div class="product-thumb">
                                                <a href="#" class="product-thumb-link zoom-thumb"><img src="images/photos/jewelry/dark-light-jewelry-01.jpg" alt=""></a>
                                                <a href="quick-view.html" class="quickview-link fancybox.iframe title12 round white"><i class="fa fa-search"></i></a>
                                            </div>
                                            <div class="product-info">
                                                <h3 class="title14 product-title"><a href="#" class="black">Blue ring in ged palladium</a></h3>
                                                <div class="product-price title14 play-font">
                                                    <del class="silver">$601.00</del>
                                                    <ins class="black title18">$400.67</ins>
                                                </div>
                                                <ul class="wrap-rating list-inline-block">
                                                    <li>
                                                        <div class="product-rate">
                                                            <div class="product-rating" style="width:100%"></div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <span class="rate-number silver">(5.0)</span>
                                                    </li>
                                                </ul>
                                                <div class="product-extra-link4 title18">
                                                    <a href="compare-product.html" class="compare-link inline-block black fancybox fancybox.iframe"><i class="icon ion-ios-loop-strong"></i><span class="title10 white text-uppercase">Compare</span></a>
                                                    <a href="#" class="addcart-link black inline-block"><i class="icon ion-bag"></i><span class="title10 white text-uppercase">Add to cart</span></a>
                                                    <a href="#" class="wishlist-link black inline-block"><i class="icon ion-android-favorite-outline"></i><span class="title10 white text-uppercase">Wishlist</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-xs-6">
                                        <div class="item-product item-product4 text-center border">
                                            <div class="product-thumb">
                                                <a href="#" class="product-thumb-link zoom-thumb"><img src="images/photos/jewelry/dark-light-jewelry-02.jpg" alt=""></a>
                                                <a href="quick-view.html" class="quickview-link fancybox.iframe title12 round white"><i class="fa fa-search"></i></a>
                                            </div>
                                            <div class="product-info">
                                                <h3 class="title14 product-title"><a href="#" class="black">Blue ring in ged palladium</a></h3>
                                                <div class="product-price title14 play-font">
                                                    <del class="silver">$601.00</del>
                                                    <ins class="black title18">$400.67</ins>
                                                </div>
                                                <ul class="wrap-rating list-inline-block">
                                                    <li>
                                                        <div class="product-rate">
                                                            <div class="product-rating" style="width:100%"></div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <span class="rate-number silver">(5.0)</span>
                                                    </li>
                                                </ul>
                                                <div class="product-extra-link4 title18">
                                                    <a href="compare-product.html" class="compare-link inline-block black fancybox fancybox.iframe"><i class="icon ion-ios-loop-strong"></i><span class="title10 white text-uppercase">Compare</span></a>
                                                    <a href="#" class="addcart-link black inline-block"><i class="icon ion-bag"></i><span class="title10 white text-uppercase">Add to cart</span></a>
                                                    <a href="#" class="wishlist-link black inline-block"><i class="icon ion-android-favorite-outline"></i><span class="title10 white text-uppercase">Wishlist</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-xs-6">
                                        <div class="item-product item-product4 text-center border">
                                            <div class="product-thumb">
                                                <a href="#" class="product-thumb-link zoom-thumb"><img src="images/photos/jewelry/dark-light-jewelry-03.jpg" alt=""></a>
                                                <a href="quick-view.html" class="quickview-link fancybox.iframe title12 round white"><i class="fa fa-search"></i></a>
                                            </div>
                                            <div class="product-info">
                                                <h3 class="title14 product-title"><a href="#" class="black">Blue ring in ged palladium</a></h3>
                                                <div class="product-price title14 play-font">
                                                    <del class="silver">$601.00</del>
                                                    <ins class="black title18">$400.67</ins>
                                                </div>
                                                <ul class="wrap-rating list-inline-block">
                                                    <li>
                                                        <div class="product-rate">
                                                            <div class="product-rating" style="width:100%"></div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <span class="rate-number silver">(5.0)</span>
                                                    </li>
                                                </ul>
                                                <div class="product-extra-link4 title18">
                                                    <a href="compare-product.html" class="compare-link inline-block black fancybox fancybox.iframe"><i class="icon ion-ios-loop-strong"></i><span class="title10 white text-uppercase">Compare</span></a>
                                                    <a href="#" class="addcart-link black inline-block"><i class="icon ion-bag"></i><span class="title10 white text-uppercase">Add to cart</span></a>
                                                    <a href="#" class="wishlist-link black inline-block"><i class="icon ion-android-favorite-outline"></i><span class="title10 white text-uppercase">Wishlist</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-xs-6">
                                        <div class="item-product item-product4 text-center border">
                                            <div class="product-thumb">
                                                <a href="#" class="product-thumb-link zoom-thumb"><img src="images/photos/jewelry/dark-light-jewelry-04.jpg" alt=""></a>
                                                <a href="quick-view.html" class="quickview-link fancybox.iframe title12 round white"><i class="fa fa-search"></i></a>
                                            </div>
                                            <div class="product-info">
                                                <h3 class="title14 product-title"><a href="#" class="black">Blue ring in ged palladium</a></h3>
                                                <div class="product-price title14 play-font">
                                                    <del class="silver">$601.00</del>
                                                    <ins class="black title18">$400.67</ins>
                                                </div>
                                                <ul class="wrap-rating list-inline-block">
                                                    <li>
                                                        <div class="product-rate">
                                                            <div class="product-rating" style="width:100%"></div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <span class="rate-number silver">(5.0)</span>
                                                    </li>
                                                </ul>
                                                <div class="product-extra-link4 title18">
                                                    <a href="compare-product.html" class="compare-link inline-block black fancybox fancybox.iframe"><i class="icon ion-ios-loop-strong"></i><span class="title10 white text-uppercase">Compare</span></a>
                                                    <a href="#" class="addcart-link black inline-block"><i class="icon ion-bag"></i><span class="title10 white text-uppercase">Add to cart</span></a>
                                                    <a href="#" class="wishlist-link black inline-block"><i class="icon ion-android-favorite-outline"></i><span class="title10 white text-uppercase">Wishlist</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-xs-6">
                                        <div class="item-product item-product4 text-center border">
                                            <div class="product-thumb">
                                                <a href="#" class="product-thumb-link zoom-thumb"><img src="images/photos/jewelry/dark-light-jewelry-05.jpg" alt=""></a>
                                                <a href="quick-view.html" class="quickview-link fancybox.iframe title12 round white"><i class="fa fa-search"></i></a>
                                            </div>
                                            <div class="product-info">
                                                <h3 class="title14 product-title"><a href="#" class="black">Blue ring in ged palladium</a></h3>
                                                <div class="product-price title14 play-font">
                                                    <del class="silver">$601.00</del>
                                                    <ins class="black title18">$400.67</ins>
                                                </div>
                                                <ul class="wrap-rating list-inline-block">
                                                    <li>
                                                        <div class="product-rate">
                                                            <div class="product-rating" style="width:100%"></div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <span class="rate-number silver">(5.0)</span>
                                                    </li>
                                                </ul>
                                                <div class="product-extra-link4 title18">
                                                    <a href="compare-product.html" class="compare-link inline-block black fancybox fancybox.iframe"><i class="icon ion-ios-loop-strong"></i><span class="title10 white text-uppercase">Compare</span></a>
                                                    <a href="#" class="addcart-link black inline-block"><i class="icon ion-bag"></i><span class="title10 white text-uppercase">Add to cart</span></a>
                                                    <a href="#" class="wishlist-link black inline-block"><i class="icon ion-android-favorite-outline"></i><span class="title10 white text-uppercase">Wishlist</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-xs-6">
                                        <div class="item-product item-product4 text-center border">
                                            <div class="product-thumb">
                                                <a href="#" class="product-thumb-link zoom-thumb"><img src="images/photos/jewelry/dark-light-jewelry-06.jpg" alt=""></a>
                                                <a href="quick-view.html" class="quickview-link fancybox.iframe title12 round white"><i class="fa fa-search"></i></a>
                                            </div>
                                            <div class="product-info">
                                                <h3 class="title14 product-title"><a href="#" class="black">Blue ring in ged palladium</a></h3>
                                                <div class="product-price title14 play-font">
                                                    <del class="silver">$601.00</del>
                                                    <ins class="black title18">$400.67</ins>
                                                </div>
                                                <ul class="wrap-rating list-inline-block">
                                                    <li>
                                                        <div class="product-rate">
                                                            <div class="product-rating" style="width:100%"></div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <span class="rate-number silver">(5.0)</span>
                                                    </li>
                                                </ul>
                                                <div class="product-extra-link4 title18">
                                                    <a href="compare-product.html" class="compare-link inline-block black fancybox fancybox.iframe"><i class="icon ion-ios-loop-strong"></i><span class="title10 white text-uppercase">Compare</span></a>
                                                    <a href="#" class="addcart-link black inline-block"><i class="icon ion-bag"></i><span class="title10 white text-uppercase">Add to cart</span></a>
                                                    <a href="#" class="wishlist-link black inline-block"><i class="icon ion-android-favorite-outline"></i><span class="title10 white text-uppercase">Wishlist</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-xs-6">
                                        <div class="item-product item-product4 text-center border">
                                            <div class="product-thumb">
                                                <a href="#" class="product-thumb-link zoom-thumb"><img src="images/photos/jewelry/dark-light-jewelry-07.jpg" alt=""></a>
                                                <a href="quick-view.html" class="quickview-link fancybox.iframe title12 round white"><i class="fa fa-search"></i></a>
                                            </div>
                                            <div class="product-info">
                                                <h3 class="title14 product-title"><a href="#" class="black">Blue ring in ged palladium</a></h3>
                                                <div class="product-price title14 play-font">
                                                    <del class="silver">$601.00</del>
                                                    <ins class="black title18">$400.67</ins>
                                                </div>
                                                <ul class="wrap-rating list-inline-block">
                                                    <li>
                                                        <div class="product-rate">
                                                            <div class="product-rating" style="width:100%"></div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <span class="rate-number silver">(5.0)</span>
                                                    </li>
                                                </ul>
                                                <div class="product-extra-link4 title18">
                                                    <a href="compare-product.html" class="compare-link inline-block black fancybox fancybox.iframe"><i class="icon ion-ios-loop-strong"></i><span class="title10 white text-uppercase">Compare</span></a>
                                                    <a href="#" class="addcart-link black inline-block"><i class="icon ion-bag"></i><span class="title10 white text-uppercase">Add to cart</span></a>
                                                    <a href="#" class="wishlist-link black inline-block"><i class="icon ion-android-favorite-outline"></i><span class="title10 white text-uppercase">Wishlist</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-xs-6">
                                        <div class="item-product item-product4 text-center border">
                                            <div class="product-thumb">
                                                <a href="#" class="product-thumb-link zoom-thumb"><img src="images/photos/jewelry/dark-light-jewelry-08.jpg" alt=""></a>
                                                <a href="quick-view.html" class="quickview-link fancybox.iframe title12 round white"><i class="fa fa-search"></i></a>
                                            </div>
                                            <div class="product-info">
                                                <h3 class="title14 product-title"><a href="#" class="black">Blue ring in ged palladium</a></h3>
                                                <div class="product-price title14 play-font">
                                                    <del class="silver">$601.00</del>
                                                    <ins class="black title18">$400.67</ins>
                                                </div>
                                                <ul class="wrap-rating list-inline-block">
                                                    <li>
                                                        <div class="product-rate">
                                                            <div class="product-rating" style="width:100%"></div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <span class="rate-number silver">(5.0)</span>
                                                    </li>
                                                </ul>
                                                <div class="product-extra-link4 title18">
                                                    <a href="compare-product.html" class="compare-link inline-block black fancybox fancybox.iframe"><i class="icon ion-ios-loop-strong"></i><span class="title10 white text-uppercase">Compare</span></a>
                                                    <a href="#" class="addcart-link black inline-block"><i class="icon ion-bag"></i><span class="title10 white text-uppercase">Add to cart</span></a>
                                                    <a href="#" class="wishlist-link black inline-block"><i class="icon ion-android-favorite-outline"></i><span class="title10 white text-uppercase">Wishlist</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-xs-6">
                                        <div class="item-product item-product4 text-center border">
                                            <div class="product-thumb">
                                                <a href="#" class="product-thumb-link zoom-thumb"><img src="images/photos/jewelry/dark-light-jewelry-09.jpg" alt=""></a>
                                                <a href="quick-view.html" class="quickview-link fancybox.iframe title12 round white"><i class="fa fa-search"></i></a>
                                            </div>
                                            <div class="product-info">
                                                <h3 class="title14 product-title"><a href="#" class="black">Blue ring in ged palladium</a></h3>
                                                <div class="product-price title14 play-font">
                                                    <del class="silver">$601.00</del>
                                                    <ins class="black title18">$400.67</ins>
                                                </div>
                                                <ul class="wrap-rating list-inline-block">
                                                    <li>
                                                        <div class="product-rate">
                                                            <div class="product-rating" style="width:100%"></div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <span class="rate-number silver">(5.0)</span>
                                                    </li>
                                                </ul>
                                                <div class="product-extra-link4 title18">
                                                    <a href="compare-product.html" class="compare-link inline-block black fancybox fancybox.iframe"><i class="icon ion-ios-loop-strong"></i><span class="title10 white text-uppercase">Compare</span></a>
                                                    <a href="#" class="addcart-link black inline-block"><i class="icon ion-bag"></i><span class="title10 white text-uppercase">Add to cart</span></a>
                                                    <a href="#" class="wishlist-link black inline-block"><i class="icon ion-android-favorite-outline"></i><span class="title10 white text-uppercase">Wishlist</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-xs-6">
                                        <div class="item-product item-product4 text-center border">
                                            <div class="product-thumb">
                                                <a href="#" class="product-thumb-link zoom-thumb"><img src="images/photos/jewelry/dark-light-jewelry-10.jpg" alt=""></a>
                                                <a href="quick-view.html" class="quickview-link fancybox.iframe title12 round white"><i class="fa fa-search"></i></a>
                                            </div>
                                            <div class="product-info">
                                                <h3 class="title14 product-title"><a href="#" class="black">Blue ring in ged palladium</a></h3>
                                                <div class="product-price title14 play-font">
                                                    <del class="silver">$601.00</del>
                                                    <ins class="black title18">$400.67</ins>
                                                </div>
                                                <ul class="wrap-rating list-inline-block">
                                                    <li>
                                                        <div class="product-rate">
                                                            <div class="product-rating" style="width:100%"></div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <span class="rate-number silver">(5.0)</span>
                                                    </li>
                                                </ul>
                                                <div class="product-extra-link4 title18">
                                                    <a href="compare-product.html" class="compare-link inline-block black fancybox fancybox.iframe"><i class="icon ion-ios-loop-strong"></i><span class="title10 white text-uppercase">Compare</span></a>
                                                    <a href="#" class="addcart-link black inline-block"><i class="icon ion-bag"></i><span class="title10 white text-uppercase">Add to cart</span></a>
                                                    <a href="#" class="wishlist-link black inline-block"><i class="icon ion-android-favorite-outline"></i><span class="title10 white text-uppercase">Wishlist</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-xs-6">
                                        <div class="item-product item-product4 text-center border">
                                            <div class="product-thumb">
                                                <a href="#" class="product-thumb-link zoom-thumb"><img src="images/photos/jewelry/dark-light-jewelry-11.jpg" alt=""></a>
                                                <a href="quick-view.html" class="quickview-link fancybox.iframe title12 round white"><i class="fa fa-search"></i></a>
                                            </div>
                                            <div class="product-info">
                                                <h3 class="title14 product-title"><a href="#" class="black">Blue ring in ged palladium</a></h3>
                                                <div class="product-price title14 play-font">
                                                    <del class="silver">$601.00</del>
                                                    <ins class="black title18">$400.67</ins>
                                                </div>
                                                <ul class="wrap-rating list-inline-block">
                                                    <li>
                                                        <div class="product-rate">
                                                            <div class="product-rating" style="width:100%"></div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <span class="rate-number silver">(5.0)</span>
                                                    </li>
                                                </ul>
                                                <div class="product-extra-link4 title18">
                                                    <a href="compare-product.html" class="compare-link inline-block black fancybox fancybox.iframe"><i class="icon ion-ios-loop-strong"></i><span class="title10 white text-uppercase">Compare</span></a>
                                                    <a href="#" class="addcart-link black inline-block"><i class="icon ion-bag"></i><span class="title10 white text-uppercase">Add to cart</span></a>
                                                    <a href="#" class="wishlist-link black inline-block"><i class="icon ion-android-favorite-outline"></i><span class="title10 white text-uppercase">Wishlist</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-xs-6">
                                        <div class="item-product item-product4 text-center border">
                                            <div class="product-thumb">
                                                <a href="#" class="product-thumb-link zoom-thumb"><img src="images/photos/jewelry/dark-light-jewelry-12.jpg" alt=""></a>
                                                <a href="quick-view.html" class="quickview-link fancybox.iframe title12 round white"><i class="fa fa-search"></i></a>
                                            </div>
                                            <div class="product-info">
                                                <h3 class="title14 product-title"><a href="#" class="black">Blue ring in ged palladium</a></h3>
                                                <div class="product-price title14 play-font">
                                                    <del class="silver">$601.00</del>
                                                    <ins class="black title18">$400.67</ins>
                                                </div>
                                                <ul class="wrap-rating list-inline-block">
                                                    <li>
                                                        <div class="product-rate">
                                                            <div class="product-rating" style="width:100%"></div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <span class="rate-number silver">(5.0)</span>
                                                    </li>
                                                </ul>
                                                <div class="product-extra-link4 title18">
                                                    <a href="compare-product.html" class="compare-link inline-block black fancybox fancybox.iframe"><i class="icon ion-ios-loop-strong"></i><span class="title10 white text-uppercase">Compare</span></a>
                                                    <a href="#" class="addcart-link black inline-block"><i class="icon ion-bag"></i><span class="title10 white text-uppercase">Add to cart</span></a>
                                                    <a href="#" class="wishlist-link black inline-block"><i class="icon ion-android-favorite-outline"></i><span class="title10 white text-uppercase">Wishlist</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="pagi-nav text-right">
                                    <a href="#" class="current">1</a>
                                    <a href="#">2</a>
                                    <a href="#">3</a>
                                    <a href="#" class="next"><i class="fa fa-angle-right"></i></a>
                                </div>
                                <!-- End Paginav -->
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


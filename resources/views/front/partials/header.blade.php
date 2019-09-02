<header id="header">
    <div class="top-header bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="hot-news pull-left">
                        <h2 class="title14 text-uppercase white inline-block font-bold">Novosti</h2>
                        <div class="hot-news-slider inline-block">
                            <div class="wrap-item" data-autoplay="true" data-itemscustom="[[0,1]]"
                                 data-pagination="false" data-navigation="true">
                                <div class="item">
                                    <h3 class="title14"><a href="#" class="white">Lorem ipsum dolor consectetu</a></h3>
                                </div>
                                <div class="item">
                                    <h3 class="title14"><a href="#" class="white">Lorem ipsum dolor consectetu</a></h3>
                                </div>
                                <div class="item">
                                    <h3 class="title14"><a href="#" class="white">Lorem ipsum dolor consectetu</a></h3>
                                </div>
                                <div class="item">
                                    <h3 class="title14"><a href="#" class="white">Lorem ipsum dolor consectetu</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <ul class="top-total-info list-inline-block pull-right">
                        <li>
                            <p class="desc white call-phone title12"><i class="fa fa-volume-control-phone"></i><span
                                    class="title14">+381 11 3373 180</span></p>
                        </li>
                        <li>
                            <div class="top-social-network">
                                <a href="#" class="title12 white inline-block round"><i class="fa fa-facebook"></i></a>
                                <a href="#" class="title12 white inline-block round"><i class="fa fa-twitter"></i></a>
                                <a href="#" class="title12 white inline-block round"><i
                                        class="fa fa-pinterest-p"></i></a>
                            </div>
                        </li>
                        <li>
                            <a href="#" class="title12 white link-account"><i class="fa fa-user"></i><span
                                    class="title14">My Account</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Top Header -->
    <div class="header2 bg-white">
        <div class="main-header2">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <div class="logo logo1 pull-left">
                            <a href="index.html">
                                {{--                                <span class="logo-icon title24 round white bg-dark"><i class="fa fa-diamond"></i></span>--}}
                                {{--                                <strong class="play-font font-italic title30 dark text-uppercase">BW-</strong>--}}
                                {{--                                <span class="play-font font-italic font-normal title30 dark">Store</span>--}}
                                <a href="#" class="adv-thumb-link"><img src="images/logo/logo.png" alt=""
                                                                        style="height: 50px"></a>
                            </a>
                        </div>
                        <!-- End logo -->
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        {{--                        <p class="desc free-order pull-right dark">Free delivery order over <strong>$100</strong></p>--}}
                    </div>
                    <div class="col-md-6 col-sm-8 col-xs-12">
                        <form method="get" class="search-form form-round">
                            <div class="dropdown-box">
                                <a href="javascript:void(0)" class="dropdown-link">Kategorije</a>
                                <ul class="list-none dropdown-list">
                                    <li><a href="#">Lee Cooper</a></li>
                                    <li><a href="#">Quantum</a></li>
                                    <li><a href="#">Belmond</a></li>
                                </ul>
                            </div>
                            <input type="text" name="s" placeholder="Pretrazi proizvode...">
                            <div class="submit-form">
                                <input type="submit" value="">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Main Nav -->
        <div class="header-nav2">
            <div class="container">
                <div class="row">
                    <div class="col-md-9 col-sm-8 col-xs-12">
                        <nav class="main-nav main-nav1 pull-left">
                            <ul>
                                <li>
                                    <a href="{{route('index')}}">Home</a>
                                </li>
                                <li class="menu-item-has-children has-mega-menu">
                                    <a href="#">Prodavnica</a>
                                    <div class="mega-menu full-mega-menu">
                                        <div class="content-mega-menu">
                                            <div class="row">
                                                <div class="col-md-3 col-sm-4 col-xs-12">
                                                    <div class="mega-list-cat">
                                                        <h2 class="title18 font-bold text-uppercase play-font">
                                                            Kategorije</h2>
                                                        <ul class="list-none">
                                                            @foreach($categories as $category)
                                                                <li><a href="">{{Str::title($category->name)}}</a></li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-4 col-xs-12">
                                                    <div class="mega-list-cat">
                                                        <h2 class="title18 font-bold text-uppercase play-font">
                                                            Brendovi</h2>
                                                        <ul class="list-none">
                                                            @foreach($brands as $brand)
                                                                <li><a href="">{{Str::title($brand->name)}}</a></li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-4 col-xs-12">
                                                    <div class="mega-list-cat">
                                                        <h2 class="title18 font-bold text-uppercase play-font">Tip</h2>
                                                        <ul class="list-none">
                                                            @foreach($types as $type)
                                                                <li><a href="">{{Str::title($type->name)}}</a></li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-4 col-xs-12">
                                                    <div class="mega-list-cat">
                                                        <h2 class="title18 font-bold text-uppercase play-font">
                                                            Jos...</h2>
                                                        <ul class="list-none">
                                                            <li><a href="{{route('outlet')}}">Outlet</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 hidden-sm col-xs-12">
                                                    <div class="mega-menu-thumb banner-adv zoom-image line-scale"><a
                                                            href="#" class="adv-thumb-link"><img
                                                                src="images/blog/menu.jpg" alt=""></a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="{{route('blog')}}">Blog</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{route('post')}}">Blog 1</a></li>
                                        <li><a href="{{route('service')}}">Blog 2</a></li>
                                        <li><a href="{{route('service')}}">Blog 3</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="{{route('about')}}">O nama</a>
                                </li>
                                <li>
                                    <a href="{{route('service')}}">Servis</a>
                                </li>
                                <li>
                                    <a href="{{route('contact')}}">Kontakt</a>
                                </li>
                            </ul>
                            <a href="#" class="toggle-mobile-menu"><span></span></a>
                        </nav>
                        <!-- End Main Nav -->
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <ul class="wrap-cart-top2 list-inline-block pull-right">
                            <li>
                                <a href="#" class="title18 compare-link" title="Compare"><span class="dark"><i
                                            class="icon ion-ios-loop-strong"></i></span></a>
                            </li>
                            <li>
                                <a href="#" class="title18 wishlist-link" title="Wishlist"><span class="dark"><i
                                            class="icon ion-android-favorite-outline"></i></span><sup
                                        class="title10 round white bg-dark">0</sup></a>
                            </li>
                            <li>
                                <div class="mini-cart-box mini-cart1 aside-box">
                                    <a class="mini-cart-link" href="cart.html" title="Cart">
                                        <span class="mini-cart-icon title18 dark"><i class="icon ion-bag"></i></span>
                                        <span class="mini-cart-text">
												<span class="mini-cart-number">4</span>
												<span class="mini-cart-total-price hidden">$80.00</span>
											</span>
                                    </a>
                                    <div class="mini-cart-content text-left">
                                        <h2 class="title18 font-bold">(4) ITEMS IN MY CART</h2>
                                        <div class="list-mini-cart-item">
                                            <div class="product-mini-cart table-custom">
                                                <div class="product-thumb">
                                                    <a href="detail.html" class="product-thumb-link"><img alt=""
                                                                                                          src="images/photos/glasses/dl-store-glasse-01.jpg"></a>
                                                </div>
                                                <div class="product-info">
                                                    <h3 class="title14 product-title play-font"><a href="#">D&L SO REAL
                                                            POP SUNGLASSES pink</a></h3>
                                                    <div class="mini-cart-qty">
                                                        <span>1 x $40.00</span>
                                                    </div>
                                                </div>
                                                <div class="product-delete text-right">
                                                    <a href="#" class="remove-product"><i class="fa fa-trash"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-mini-cart table-custom">
                                                <div class="product-thumb">
                                                    <a href="detail.html" class="product-thumb-link"><img alt=""
                                                                                                          src="images/photos/glasses/dl-store-glasse-03.jpg"></a>
                                                </div>
                                                <div class="product-info">
                                                    <h3 class="title14 product-title play-font"><a href="#">D&L SO REAL
                                                            POP SUNGLASSES Yellow</a></h3>
                                                    <div class="mini-cart-qty">
                                                        <span>1 x $40.00</span>
                                                    </div>
                                                </div>
                                                <div class="product-delete text-right">
                                                    <a href="#" class="remove-product"><i class="fa fa-trash"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-mini-cart table-custom">
                                                <div class="product-thumb">
                                                    <a href="detail.html" class="product-thumb-link"><img alt=""
                                                                                                          src="images/photos/glasses/dl-store-glasse-10.jpg"></a>
                                                </div>
                                                <div class="product-info">
                                                    <h3 class="title14 product-title play-font"><a href="#">D&L SO REAL
                                                            POP SUNGLASSES black</a></h3>
                                                    <div class="mini-cart-qty">
                                                        <span>1 x $40.00</span>
                                                    </div>
                                                </div>
                                                <div class="product-delete text-right">
                                                    <a href="#" class="remove-product"><i class="fa fa-trash"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-mini-cart table-custom">
                                                <div class="product-thumb">
                                                    <a href="detail.html" class="product-thumb-link"><img alt=""
                                                                                                          src="images/photos/glasses/dl-store-glasse-02.jpg"></a>
                                                </div>
                                                <div class="product-info">
                                                    <h3 class="title14 product-title play-font"><a href="#">D&L so real
                                                            pop sunglass blue</a></h3>
                                                    <div class="mini-cart-qty">
                                                        <span>1 x $40.00</span>
                                                    </div>
                                                </div>
                                                <div class="product-delete text-right">
                                                    <a href="#" class="remove-product"><i class="fa fa-trash"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mini-cart-total text-uppercase title18 font-bold clearfix">
                                            <span class="pull-left">TOTAL</span>
                                            <strong
                                                class="pull-right color play-font mini-cart-total-price">$160.00</strong>
                                        </div>
                                        <div class="mini-cart-button">
                                            <a class="mini-cart-view shop-button" href="#">View cart </a>
                                            <a class="mini-cart-checkout shop-button" href="#">Checkout</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Header Nav -->
    </div>
</header>
<!-- End Header -->

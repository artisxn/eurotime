@extends('layouts.app')

@section('content')
    @include('front.partials.header')
    <!-- End Header -->
    <section id="content">
        <div class="wrap-bread-crumb">
            <div class="container">
                <div class="bread-crumb">
                    <a href="#">Home</a>
                    <a href="#">Shop</a>
                    <span>Clothing</span>
                </div>
            </div>
        </div>
        <!-- End Bread Crumb -->
        <div class="content-page">
            <div class="container">
                <div class="row">
                   @include('front.partials.sidebar')
                    <div class="col-md-9 col-sm-8 col-xs-12">
                        <div class="content-blog-page">
                            <div class="blog-list-view">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="item-post item-post-list">
                                            <div class="row">
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <div class="post-thumb banner-adv zoom-image overlay-image">
                                                        <a href="#" class="adv-thumb-link"><img src="images/blog/post.jpg" alt=""></a>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <div class="post-info">
                                                        <h3 class="title24 font-bold play-font text-uppercase post-title"><a href="#" class="dark">Post fomat - Slide</a></h3>
                                                        <ul class="list-inline-block post-meta-data">
                                                            <li><i class="fa fa-user gray"></i><a href="#" class="silver">Admin</a></li>
                                                            <li><i class="fa fa-comment gray"></i><a href="#comment" class="silver">5</a></li>
                                                            <li><i class="fa fa-calendar gray"></i><span class="silver">Dec.09.2018</span></li>
                                                            <li><i class="fa fa-folder gray"></i><a href="#" class="silver">Fashion</a></li>
                                                            <li><i class="fa fa-tag gray"></i><a href="#" class="silver">Look</a> <a href="#" class="silver"> Shoes </a> <a href="#" class="silver">Style</a> <a href="#" class="silver">Women's</a> <a href="#" class="silver">Smart Phone </a></li>
                                                        </ul>
                                                        <p class="desc dark opaci">Our urban and streetwear fashion place is no Old Navy, Banana Republic or a Walmart clothing store, God forbid. We've quickly become the Iowa's and Midwest's biggest online retailers. And it's all thanks to our founder's Janine and her store's team great tastes thanks to their remarkable</p>
                                                        <a href="#" class="shop-button dark">Read more</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="item-post item-post-list">
                                            <div class="row">
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <div class="post-thumb banner-adv zoom-image overlay-image">
                                                        <a href="#" class="adv-thumb-link"><img src="images/blog/post.jpg" alt=""></a>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <div class="post-info">
                                                        <h3 class="title24 font-bold play-font text-uppercase post-title"><a href="#" class="dark">Post fomat - Slide</a></h3>
                                                        <ul class="list-inline-block post-meta-data">
                                                            <li><i class="fa fa-user gray"></i><a href="#" class="silver">Admin</a></li>
                                                            <li><i class="fa fa-comment gray"></i><a href="#comment" class="silver">5</a></li>
                                                            <li><i class="fa fa-calendar gray"></i><span class="silver">Dec.09.2018</span></li>
                                                            <li><i class="fa fa-folder gray"></i><a href="#" class="silver">Fashion</a></li>
                                                            <li><i class="fa fa-tag gray"></i><a href="#" class="silver">Look</a> <a href="#" class="silver"> Shoes </a> <a href="#" class="silver">Style</a> <a href="#" class="silver">Women's</a> <a href="#" class="silver">Smart Phone </a></li>
                                                        </ul>
                                                        <p class="desc dark opaci">Our urban and streetwear fashion place is no Old Navy, Banana Republic or a Walmart clothing store, God forbid. We've quickly become the Iowa's and Midwest's biggest online retailers. And it's all thanks to our founder's Janine and her store's team great tastes thanks to their remarkable</p>
                                                        <a href="#" class="shop-button dark">Read more</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="item-post item-post-list">
                                            <div class="row">
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <div class="post-thumb banner-adv zoom-image overlay-image">
                                                        <a href="#" class="adv-thumb-link"><img src="images/blog/post.jpg" alt=""></a>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <div class="post-info">
                                                        <h3 class="title24 font-bold play-font text-uppercase post-title"><a href="#" class="dark">Post fomat - Slide</a></h3>
                                                        <ul class="list-inline-block post-meta-data">
                                                            <li><i class="fa fa-user gray"></i><a href="#" class="silver">Admin</a></li>
                                                            <li><i class="fa fa-comment gray"></i><a href="#comment" class="silver">5</a></li>
                                                            <li><i class="fa fa-calendar gray"></i><span class="silver">Dec.09.2018</span></li>
                                                            <li><i class="fa fa-folder gray"></i><a href="#" class="silver">Fashion</a></li>
                                                            <li><i class="fa fa-tag gray"></i><a href="#" class="silver">Look</a> <a href="#" class="silver"> Shoes </a> <a href="#" class="silver">Style</a> <a href="#" class="silver">Women's</a> <a href="#" class="silver">Smart Phone </a></li>
                                                        </ul>
                                                        <p class="desc dark opaci">Our urban and streetwear fashion place is no Old Navy, Banana Republic or a Walmart clothing store, God forbid. We've quickly become the Iowa's and Midwest's biggest online retailers. And it's all thanks to our founder's Janine and her store's team great tastes thanks to their remarkable</p>
                                                        <a href="#" class="shop-button dark">Read more</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="item-post item-post-list">
                                            <div class="row">
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <div class="post-thumb banner-adv zoom-image overlay-image">
                                                        <a href="#" class="adv-thumb-link"><img src="images/blog/post.jpg" alt=""></a>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <div class="post-info">
                                                        <h3 class="title24 font-bold play-font text-uppercase post-title"><a href="#" class="dark">Post fomat - Slide</a></h3>
                                                        <ul class="list-inline-block post-meta-data">
                                                            <li><i class="fa fa-user gray"></i><a href="#" class="silver">Admin</a></li>
                                                            <li><i class="fa fa-comment gray"></i><a href="#comment" class="silver">5</a></li>
                                                            <li><i class="fa fa-calendar gray"></i><span class="silver">Dec.09.2018</span></li>
                                                            <li><i class="fa fa-folder gray"></i><a href="#" class="silver">Fashion</a></li>
                                                            <li><i class="fa fa-tag gray"></i><a href="#" class="silver">Look</a> <a href="#" class="silver"> Shoes </a> <a href="#" class="silver">Style</a> <a href="#" class="silver">Women's</a> <a href="#" class="silver">Smart Phone </a></li>
                                                        </ul>
                                                        <p class="desc dark opaci">Our urban and streetwear fashion place is no Old Navy, Banana Republic or a Walmart clothing store, God forbid. We've quickly become the Iowa's and Midwest's biggest online retailers. And it's all thanks to our founder's Janine and her store's team great tastes thanks to their remarkable</p>
                                                        <a href="#" class="shop-button dark">Read more</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="item-post item-post-list">
                                            <div class="row">
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <div class="post-thumb banner-adv zoom-image overlay-image">
                                                        <a href="#" class="adv-thumb-link"><img src="images/blog/post.jpg" alt=""></a>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <div class="post-info">
                                                        <h3 class="title24 font-bold play-font text-uppercase post-title"><a href="#" class="dark">Post fomat - Slide</a></h3>
                                                        <ul class="list-inline-block post-meta-data">
                                                            <li><i class="fa fa-user gray"></i><a href="#" class="silver">Admin</a></li>
                                                            <li><i class="fa fa-comment gray"></i><a href="#comment" class="silver">5</a></li>
                                                            <li><i class="fa fa-calendar gray"></i><span class="silver">Dec.09.2018</span></li>
                                                            <li><i class="fa fa-folder gray"></i><a href="#" class="silver">Fashion</a></li>
                                                            <li><i class="fa fa-tag gray"></i><a href="#" class="silver">Look</a> <a href="#" class="silver"> Shoes </a> <a href="#" class="silver">Style</a> <a href="#" class="silver">Women's</a> <a href="#" class="silver">Smart Phone </a></li>
                                                        </ul>
                                                        <p class="desc dark opaci">Our urban and streetwear fashion place is no Old Navy, Banana Republic or a Walmart clothing store, God forbid. We've quickly become the Iowa's and Midwest's biggest online retailers. And it's all thanks to our founder's Janine and her store's team great tastes thanks to their remarkable</p>
                                                        <a href="#" class="shop-button dark">Read more</a>
                                                    </div>
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


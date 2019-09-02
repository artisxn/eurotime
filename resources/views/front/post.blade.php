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
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="sidebar sidebar-left">
                            <div class="widget widget-category">
                                <h2 class="widget-title title14 dark font-bold play-font text-uppercase">Categories</h2>
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
                            <div class="widget widget-recent-post">
                                <h2 class="widget-title title14 dark font-bold text-uppercase play-font">Recent Posts</h2>
                                <ul class="list-none wg-list-posts">
                                    <li>
                                        <div class="item-post item-post-wg table-custom">
                                            <div class="post-thumb banner-adv zoom-image overlay-image"><a href="#" class="adv-thumb-link"><img src="images/photos/blog/dark-light-store-blog-01.jpg" alt="" /></a></div>
                                            <div class="post-info">
                                                <h3 class="post-title title14  play-font"><a href="#" class="dark">Posst fomat - Slide</a></h3>
                                                <span class="comment-count silver title12"><i class="fa fa-comment gray"></i>5 Comments</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="item-post item-post-wg table-custom">
                                            <div class="post-thumb banner-adv zoom-image overlay-image"><a href="#" class="adv-thumb-link"><img src="images/photos/blog/dark-light-store-blog-02.jpg" alt="" /></a></div>
                                            <div class="post-info">
                                                <h3 class="post-title title14  play-font"><a href="#" class="dark">Posst fomat - Slide</a></h3>
                                                <span class="comment-count silver title12"><i class="fa fa-comment gray"></i>5 Comments</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="item-post item-post-wg table-custom">
                                            <div class="post-thumb banner-adv zoom-image overlay-image"><a href="#" class="adv-thumb-link"><img src="images/photos/blog/dark-light-store-blog-03.jpg" alt="" /></a></div>
                                            <div class="post-info">
                                                <h3 class="post-title title14  play-font"><a href="#" class="dark">Posst fomat - Slide</a></h3>
                                                <span class="comment-count silver title12"><i class="fa fa-comment gray"></i>5 Comments</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="item-post item-post-wg table-custom">
                                            <div class="post-thumb banner-adv zoom-image overlay-image"><a href="#" class="adv-thumb-link"><img src="images/photos/blog/dark-light-store-blog-04.jpg" alt="" /></a></div>
                                            <div class="post-info">
                                                <h3 class="post-title title14  play-font"><a href="#" class="dark">Posst fomat - Slide</a></h3>
                                                <span class="comment-count silver title12"><i class="fa fa-comment gray"></i>5 Comments</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="item-post item-post-wg table-custom">
                                            <div class="post-thumb banner-adv zoom-image overlay-image"><a href="#" class="adv-thumb-link"><img src="images/photos/blog/dark-light-store-blog-05.jpg" alt="" /></a></div>
                                            <div class="post-info">
                                                <h3 class="post-title title14  play-font"><a href="#" class="dark">Posst fomat - Slide</a></h3>
                                                <span class="comment-count silver title12"><i class="fa fa-comment gray"></i>5 Comments</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!-- End Widget -->
                            <div class="widget widget-tags">
                                <h2 class="widget-title dark title14 font-bold text-uppercase play-font">Tags</h2>
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
                            <div class="widget dark widget-search">
                                <h2 class="widget-title title14 font-bold text-uppercase play-font play-font">Search</h2>
                                <form class="wg-search-form" method="get">
                                    <input type="text" name="s" placeholder="Search.." />
                                    <input type="submit" value=""/>
                                </form>
                            </div>
                            <!-- End Widget -->
                        </div>
                    </div>
                    <div class="col-md-9 col-sm-8 col-xs-12">
                        <div class="content-single-blog">
                            <div class="single-post-thumb banner-adv">
                                <img src="images/blog/single1.jpg" alt="" />
                            </div>
                            <!-- End Single Post Thumb -->
                            <div class="content-post-default">
                                <h2 class="title30 text-uppercase play-font">Post fomat - Slide</h2>
                                <ul class="list-inline-block post-meta-data">
                                    <li><i class="fa fa-user gray"></i><a href="#" class="silver">Admin</a></li>
                                    <li><i class="fa fa-comment gray"></i><a href="#comment" class="silver">5</a></li>
                                    <li><i class="fa fa-calendar gray"></i><span class="silver">Dec.09.2018</span></li>
                                    <li><i class="fa fa-folder gray"></i><a href="#" class="silver">Fashion</a></li>
                                    <li><i class="fa fa-tag gray"></i><a href="#" class="silver">Look</a> <a href="#" class="silver"> Shoes </a> <a href="#" class="silver">Style</a> <a href="#" class="silver">Women's</a> <a href="#" class="silver">Smart Phone </a></li>
                                </ul>
                                <p class="desc">Our urban and streetwear fashion place is no Old Navy, Banana Republic or a Walmart clothing store, God forbid. We've quickly become the Iowa's and Midwest's biggest online retailers. And it's all thanks to our founder's Janine and her store's team great tastes thanks to their remarkable</p>
                                <p class="desc">Lommodo ligula eget dolor. Aenean massa. Cum sociis que penatibus et magnis dis parturient montes lorem, nascetur ridiculus mus. Donec quam felis, ultricies nec pellentesque eu, pretium quis, sem. Nulla onsequat massa quis enim. Donec pede justo fringilla vel aliquet nec vulputate eget. Lorem ispum dolore siamet ipsum dolor rturient montes  ispum dolore siamet ipsum dolo.</p>
                                <div class="block-quote">
                                    <p class="desc">You will never be happy if you continue to search for what happiness consists of. You will never live if you are looking for the meaning of life.</p>
                                    <h3 class="title14 text-uppercase play-font font-bold"><a href="#" class="black">Admin - Viet Travel</a></h3>
                                </div>
                                <p class="desc">Aenean massa. Cum sociis que penatibus et magnis dis parturient montes lorem, nascetur ridiculus mus. Donec quam felis, ultricies nec pellentesque eu, pretium quis, sem. Nulla onsequat massa quis enim. Donec pede justo fringilla vel aliquet nec vulputate eget. Lorem ispum dolore siamet ipsum dolor rturient montes  ispum dolore siamet ipsum dolo.  Parturient montes lorem, nascetur ridiculus </p>
                                <div class="single-intro-travel">
                                    <div class="row">
                                        <div class="col-md-5 col-sm-12">
                                            <img src="images/blog/single2.jpg" alt="" />
                                        </div>
                                        <div class="col-md-7 col-sm-12">
                                            <h2 class="title14 font-bold play-font text-uppercase">Travel Asia</h2>
                                            <p class="desc">Cum sociis que penatibus et magnis dis parturient montes lorem, nascetur ridiculus mus. Donec quam felis, ultricies nec pellentesque eu, pretium quis, sem. Nulla onsequat massa quis enim. Donec pede justo fringilla vel aliquet nec vulputate eget. Lorem ispum dolore siamet ipsum dolor rturient montes  ispum dolore siamet ipsum dolo.
                                                Mauris fringilla, arcu ut tempus ullamcorper, metus risus tincidunt risus, ac fermentum mauris turpis at enim. Mauris fringilla, arcu ut tempus ullamcorper, metus risus tincidunt risus, ac fermentum mauris turpis at enim. </p>
                                        </div>
                                    </div>
                                </div>
                                <p class="desc">Donec quam felis, ultricies nec pellentesque eu, pretium quis, sem. Nulla onsequat massa quis enim. Donec pede justo fringilla vel aliquet nec vulputate eget. Lorem ispum dolore siamet ipsum dolor rturient montes  ispum dolore siamet ipsum dolo.</p>
                                <h3 class="title14 font-bold play-font text-uppercase">What to Expect</h3>
                                <p class="desc">Curabitur blandit tempus porttitor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras mattis consectetur purus sit amet fermentum. Etiam porta sem malesuada magna mollis euismod. Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                                <ul class="list-none single-list-link">
                                    <li><a href="#">Ipsum Amet Mattis Pellentesque</a></li>
                                    <li><a href="#">Ultricies Vehicula Mollis Vestibulum Fringilla</a></li>
                                    <li><a href="#">Condimentum Sollicitudin Fusce Vestibulum Ultricies</a></li>
                                    <li><a href="#">Sollicitudin Consectetur Quam Ligula Vehicula</a></li>
                                    <li><a href="#">Cursus Pharetra Purus Porta Parturient</a></li>
                                    <li><a href="#">Risus Malesuada Tellus Porta Commodo</a></li>
                                </ul>
                                <div class="single-list-adv">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-4 col-xs-12">
                                            <div class="banner-adv zoom-image overlay-image">
                                                <a href="#" class="adv-thumb-link"><img src="images/blog/post1.jpg" alt="" /></a>
                                            </div>
                                            <p class="desc">Curabitur blandit tempus porttitor. Lorem </p>
                                        </div>
                                        <div class="col-md-4 col-sm-4 col-xs-12">
                                            <div class="banner-adv zoom-image overlay-image">
                                                <a href="#" class="adv-thumb-link"><img src="images/blog/post2.jpg" alt="" /></a>
                                            </div>
                                            <p class="desc">Etiam malesuada magna mollis euis. Lorem ipsum dolor sit amet</p>
                                        </div>
                                        <div class="col-md-4 col-sm-4 col-xs-12">
                                            <div class="banner-adv zoom-image overlay-image">
                                                <a href="#" class="adv-thumb-link"><img src="images/blog/post3.jpg" alt="" /></a>
                                            </div>
                                            <p class="desc">Risus Malesuada Tellus Porta Commodo</p>
                                        </div>
                                    </div>
                                </div>
                                <p class="desc">We’ll meet at 4 p.m. at our hotel in Luzern (Lucerne) for a “Welcome to Switzerland” meeting. Then we’ll take a meandering evening walk through Switzerland’s most charming lakeside town, and get acquainted with one another over dinner together. Sleep in Luzern (2 nights). No bus. Walking: light.</p>
                            </div>
                            <!-- End content Default -->
                            <div class="single-info-author table-custom">
                                <div class="author-thumb">
                                    <a href="#"><img class="round" src="images/blog/av1.jpg" alt=""></a>
                                </div>
                                <div class="author-info">
                                    <span class="silver">Written By</span>
                                    <h3 class="title14 font-bold text-uppercase play-font"><a href="#" class="black">Fanbong Pham</a></h3>
                                    <p class="desc">Hey there. My name is Penci. I was born with the love for traveling. I also love taking photos with </p>
                                    <div class="author-social">
                                        <a href="#" class="silver"><i class="fa fa-pinterest"></i></a>
                                        <a href="#" class="silver"><i class="fa fa-twitter"></i></a>
                                        <a href="#" class="silver"><i class="fa fa-facebook"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- End Author info -->
                            <div class="post-control">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                        <h3 class="title14 text-left"><a href="#" class="prev-post"><i class="fa fa-angle-left"></i> <span>A Video Blog Post</span></a></h3>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                        <h3 class="title14 text-right"><a href="#" class="next-post"> <span>Just another post</span><i class="fa fa-angle-right"></i> </a></h3>
                                    </div>
                                </div>
                            </div>
                            <!-- End Post Control -->
                            <div class="single-related-post">
                                <h2 class="title18 font-bold text-uppercase title-single-related-post play-font">YOU MIGHT ALSO LIKE <a href="#">More From Author</a></h2>
                                <div class="post-slider post-slider1 related-post-slider">
                                    <div class="wrap-item" data-pagination="false" data-itemscustom="[[0,1],[640,2],[990,3]]">
                                        <div class="item-post item-post-grid">
                                            <div class="post-thumb banner-adv zoom-image overlay-image">
                                                <a href="#" class="adv-thumb-link"><img src="images/photos/blog/dark-light-store-blog-01.jpg" alt=""></a>
                                            </div>
                                            <div class="post-info">
                                                <h3 class="title18 play-font font-italic post-title"><a href="#" class="dark">Slide image Post format</a></h3>
                                                <ul class="list-inline-block post-meta-data">
                                                    <li><a href="#comment" class="dark opacity"><i class="fa fa-comment"></i>5 Comments</a></li>
                                                    <li><span class="dark opacity"><i class="fa fa-calendar"></i>Dec.09.2018</span></li>
                                                </ul>
                                                <p class="desc dark opaci">Phasellus ut condimentum diam, eget tempus lorem. Morbi bibendum est quis arcu posuere condimentum. </p>
                                                <a href="#" class="shop-button">Read more</a>
                                            </div>
                                        </div>
                                        <div class="item-post item-post-grid">
                                            <div class="post-thumb banner-adv zoom-image overlay-image">
                                                <a href="#" class="adv-thumb-link"><img src="images/photos/blog/dark-light-store-blog-02.jpg" alt=""></a>
                                            </div>
                                            <div class="post-info">
                                                <h3 class="title18 play-font font-italic post-title"><a href="#" class="dark">Slide image Post format</a></h3>
                                                <ul class="list-inline-block post-meta-data">
                                                    <li><a href="#comment" class="dark opacity"><i class="fa fa-comment"></i>5 Comments</a></li>
                                                    <li><span class="dark opacity"><i class="fa fa-calendar"></i>Dec.09.2018</span></li>
                                                </ul>
                                                <p class="desc dark opaci">Phasellus ut condimentum diam, eget tempus lorem. Morbi bibendum est quis arcu posuere condimentum. </p>
                                                <a href="#" class="shop-button">Read more</a>
                                            </div>
                                        </div>
                                        <div class="item-post item-post-grid">
                                            <div class="post-thumb banner-adv zoom-image overlay-image">
                                                <a href="#" class="adv-thumb-link"><img src="images/photos/blog/dark-light-store-blog-03.jpg" alt=""></a>
                                            </div>
                                            <div class="post-info">
                                                <h3 class="title18 play-font font-italic post-title"><a href="#" class="dark">Slide image Post format</a></h3>
                                                <ul class="list-inline-block post-meta-data">
                                                    <li><a href="#comment" class="dark opacity"><i class="fa fa-comment"></i>5 Comments</a></li>
                                                    <li><span class="dark opacity"><i class="fa fa-calendar"></i>Dec.09.2018</span></li>
                                                </ul>
                                                <p class="desc dark opaci">Phasellus ut condimentum diam, eget tempus lorem. Morbi bibendum est quis arcu posuere condimentum. </p>
                                                <a href="#" class="shop-button">Read more</a>
                                            </div>
                                        </div>
                                        <div class="item-post item-post-grid">
                                            <div class="post-thumb banner-adv zoom-image overlay-image">
                                                <a href="#" class="adv-thumb-link"><img src="images/photos/blog/dark-light-store-blog-04.jpg" alt=""></a>
                                            </div>
                                            <div class="post-info">
                                                <h3 class="title18 play-font font-italic post-title"><a href="#" class="dark">Slide image Post format</a></h3>
                                                <ul class="list-inline-block post-meta-data">
                                                    <li><a href="#comment" class="dark opacity"><i class="fa fa-comment"></i>5 Comments</a></li>
                                                    <li><span class="dark opacity"><i class="fa fa-calendar"></i>Dec.09.2018</span></li>
                                                </ul>
                                                <p class="desc dark opaci">Phasellus ut condimentum diam, eget tempus lorem. Morbi bibendum est quis arcu posuere condimentum. </p>
                                                <a href="#" class="shop-button">Read more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Post Slider -->
                            </div>
                            <!-- End Related Post -->
                            <div class="blog-comment-detail">
                                <h2 class="title18 text-uppercase font-bold play-font">2 THOUGHTS ON “A SIMPLE BLOG POST”</h2>
                                <ol class="comment-list list-none">
                                    <li>
                                        <div class="item-comment table-custom">
                                            <div class="comment-thumb"><a href="#"><img class="round" src="images/shop/author1.jpg" alt=""></a></div>
                                            <div class="comment-info">
                                                <a href="#" class="author-name font-bold black play-font">Mr Amson</a><span class="black play-font">says:</span>
                                                <p class="desc">Hi, this is a comment.<br>To delete a comment, just log in and view the post's comments. There you will have the option to edit or delete them.</p>
                                                <span class="silver">Feb 26, 2017 </span>
                                                <a href="#" class="reply-button">Reply</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="item-comment table-custom">
                                            <div class="comment-thumb"><a href="#"><img class="round" src="images/shop/author2.jpg" alt=""></a></div>
                                            <div class="comment-info">
                                                <a href="#" class="author-name font-bold black play-font">Mr Kenlly</a><span class="black play-font">says:</span>
                                                <p class="desc">Hi, this is a comment.<br>To delete a comment, just log in and view the post's comments. There you will have the option to edit or delete them.</p>
                                                <span class="silver">Feb 26, 2017 </span>
                                                <a href="#" class="reply-button">Reply</a>
                                            </div>
                                        </div>
                                    </li>
                                </ol>
                            </div>
                            <!-- End Blog Comment -->
                            <div class="reply-comment">
                                <h2 class="title18 text-uppercase play-font font-bold">LEAVE A REPLY</h2>
                                <p class="desc silver">Your email address will not be published. Required fields are marked *</p>
                                <form class="contact-form">
                                    <p class="contact-name">
                                        <input class="border" onblur="if (this.value=='') this.value = this.defaultValue" onfocus="if (this.value==this.defaultValue) this.value = ''" value="User name*" type="text">
                                    </p>
                                    <p class="contact-email">
                                        <input class="border" onblur="if (this.value=='') this.value = this.defaultValue" onfocus="if (this.value==this.defaultValue) this.value = ''" value="Email*" type="text">
                                    </p>
                                    <p class="contact-message">
                                        <textarea class="border" onblur="if (this.value=='') this.value = this.defaultValue" onfocus="if (this.value==this.defaultValue) this.value = ''" cols="30" rows="10">Your comment*</textarea>
                                    </p>
                                    <p class="contact-submit">
                                        <input class="shop-button bg-dark" type="submit" value="Post a comment">
                                    </p>
                                </form>
                            </div>
                            <!-- End Reply Comment -->
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

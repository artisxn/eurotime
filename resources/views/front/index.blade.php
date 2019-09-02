@extends('layouts.app')

@section('content')
    @include('front.partials.header')
    <section id="content">
        @include('front.partials-index.video-parallax')
        @include('front.partials-index.store-product')
        @include('front.partials-index.end-banner-slider')
        @include('front.partials-index.brand-slider')
        @include('front.partials-index.banner-watches')
        @include('front.partials-index.block-cat3')
    </section>
    @include('front.partials.footer')
    @include('front.partials.wishlist')
    @include('front.partials.loading-center')
@endsection

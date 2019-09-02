@extends('layouts.app')

@section('content')
    @include('front.partials.header')
    <!-- End Header -->
    <div id="content">
        <div class="content-page">
            <div class="container">
                <div class="content-404">
                    <img src="images/page/404.png" alt="" />
                </div>
            </div>
        </div>
    </div>
    <!-- End Content -->
    @include('front.partials.footer')
    {{--    <!-- End Footer -->--}}
    @include('front.partials.wishlist')
    {{--    <!-- End Wishlist Mask -->--}}
    @include('front.partials.loading-center')
@endsection

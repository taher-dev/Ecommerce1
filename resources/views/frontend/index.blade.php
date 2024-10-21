@extends('frontend.partials.master')

@section('title', 'Home')


@section('quick-view')
    <!-- Quick view -->
    <x-frontend.products.quick-view />
    <!-- End Quick view -->
@endsection

@section('content')
    <main class="main">
        <!-- Hero Slider -->
        <x-frontend.products.hero-slider />
        <!--End hero slider-->

        <!--Category slider-->
        <x-frontend.products.category-slider />
        <!--End category slider-->

        <!--Banners-->
        <x-frontend.products.banners />
        <!--End banners-->

        <!--Products Tabs-->
        <x-frontend.products.product-tabs />
        <!--End Products Tabs-->

        <!--Best Sales-->
        <x-frontend.products.best-sales />
        <!--End Best Sales-->

        <!-- TV Category -->
        <x-frontend.products.tv-category />
        <!--End TV Category -->

        <!-- Tshirt Category -->
        <x-frontend.products.tshirt-category />
        <!--End Tshirt Category -->

        <!-- Computer Category -->
        <x-frontend.products.computer-category />
        <!--End Computer Category -->

        <!--Hot Deals-->
        <x-frontend.products.hot-deals />
        <!--End Hot Deals -->

        <!--Vendor List -->
        <x-frontend.products.vendor-list />
        <!--End Vendor List -->
    </main>
@endsection

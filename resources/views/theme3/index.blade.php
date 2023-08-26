@extends('layouts.app3')

@section('content')
    <!-- Start Header Area -->
    @include('theme3.component.header')
    <!-- End Header Area -->

    <!-- start banner Area -->
    @include('theme3.component.banner')
    <!-- End banner Area -->

    <!-- start features Area -->
    @include('theme3.component.features')
    <!-- end features Area -->

    <!-- Start category Area -->
    @include('theme3.component.category')
    <!-- End category Area -->

    <!-- start product Area -->
    @include('theme3.component.product')
    <!-- end product Area -->

    <!-- Start exclusive deal Area -->
    @include('theme3.component.deal')
    <!-- End exclusive deal Area -->

    <!-- Start brand Area -->
    @include('theme3.component.brand')
    <!-- End brand Area -->

    <!-- Start related-product Area -->
    @include('theme3.component.related')
    <!-- End related-product Area -->

    <!-- start footer Area -->
    @include('theme3.component.footer')
    <!-- End footer Area -->
@endsection

@extends('layouts.front')
<?php
//Global Variable
//echo config('globalvar.doller');

global_function();

?>
@section('title')
    Welcome to E-Shop
@endsection
@section('content')
    @include('layouts.inc.slider')
    <div class="py-5">
        <div class="container">
            <div class="row">
                <h2> Trending Products </h2>
                <div class="owl-carousel trending-carousel owl-theme">
                    @foreach ($trending_product as $item)
                        <div class="item">
                            <div class="card">
                                <img src="{{ asset('assets/uploads/product/' . $item->image) }}" alt="Product Image" />
                                <div class="card-body">
                                    <h5> {{ $item->name }}</h5>
                                    <span class="float-start">{{ $item->selling_price }} </span>
                                    <span class="float-end"><s> {{ $item->original_price }} </s></span>

                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </div>
    </div>
    <div class="py-5">
        <div class="container">
            <div class="row">
                <h2> Popular Products </h2>
                <div class="owl-carousel trending-carousel owl-theme">
                    @foreach ($popular_category as $item)
                    <a href="{{ url('view-category/'.$item->slug)}}">
                        <div class="item">
                            <div class="card">
                                <img src="{{ asset('assets/uploads/category/' . $item->image) }}" alt="Product Image" />
                                <div class="card-body">
                                    <h5> {{ $item->name }}</h5>
                                    <p>
                                        {{ $item->description }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </a>
                    @endforeach
                </div>

            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $('.trending-carousel').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            dots:false,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 4
                }
            }
        })
    </script>
@endsection

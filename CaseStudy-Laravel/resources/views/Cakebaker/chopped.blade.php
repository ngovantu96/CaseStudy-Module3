@extends('Cakebaker.layout.master')
@section('page-title','trang chu')
@section('content')

    <!--================End Main Header Area =================-->
    <section class="banner_area">
        <div class="container">
            <div class="banner_text">
                <h3>Các Loại Bánh</h3>
            </div>
        </div>
    </section>
    <!--================End Main Header Area =================-->
    <!--================Blog Main Area =================-->
    <section class="our_cakes_area p_100">
        <div class="container">
            <div class="main_title">
                <h2>Bánh Mỳ Và Các Loại</h2>
                <h5>Đồ Ăn Nhanh</h5>
            </div>
            <div class="cake_feature_row row">
                @foreach($cakeCoppeds as $cakeCopped)
                    <div class="col-lg-3 col-md-4 col-6">
                        <div class="cake_feature_item">
                                <a href="{{ route('product-detail',$cakeCopped->id) }}">
                                    <div class="cake_img">
                                        <img src="{{ asset('storage/'.substr($cakeCopped->image_product,7)) }}" alt="" width="255px" height="200px">
                                    </div>
                                </a>
                            <div class="cake_text">
                                <h4>{{number_format($cakeCopped->price)}}đ</h4>
                                <h3>{{$cakeCopped->name}}</h3>
                                <a class="pest_btn" href="{{ route('add.cart',$cakeCopped->id) }}">Thêm vào giỏ</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!--================End Blog Main Area =================-->
    <!--================Special Recipe Area =================-->
    <section class="special_recipe_area">
        <div class="container">
            <div class="special_recipe_slider owl-carousel">
                <div class="item">
                    <div class="media">
                        <div class="d-flex">
                            <img src="{{ asset('Cake-Baker/img/recipe/recipe-1.png') }}" alt="">
                        </div>
                        <div class="media-body">
                            <h4>Công Thức Làm Bánh</h4>
                            <p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi equatur uis autem vel eum.</p>
                            <a class="w_view_btn" href="#">Xem Chi Tiết</a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="media">
                        <div class="d-flex">
                            <img src="{{ asset('Cake-Baker/img/recipe/recipe-1.png') }}" alt="">
                        </div>
                        <div class="media-body">
                            <h4>Công Thức Làm Bánh</h4>
                            <p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi equatur uis autem vel eum.</p>
                            <a class="w_view_btn" href="#">View Details</a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="media">
                        <div class="d-flex">
                            <img src="{{ asset('Cake-Baker/img/recipe/recipe-1.png') }}" alt="">
                        </div>
                        <div class="media-body">
                            <h4>Special Recipe</h4>
                            <p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi equatur uis autem vel eum.</p>
                            <a class="w_view_btn" href="#">View Details</a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="media">
                        <div class="d-flex">
                            <img src="{{ asset('Cake-Baker/img/recipe/recipe-1.png') }}" alt="">
                        </div>
                        <div class="media-body">
                            <h4>Special Recipe</h4>
                            <p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi equatur uis autem vel eum.</p>
                            <a class="w_view_btn" href="#">View Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Special Recipe Area =================-->

@endsection

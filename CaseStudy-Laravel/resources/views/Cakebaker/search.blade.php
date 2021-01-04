@extends('Cakebaker.layout.master')
@section('page-title','trang chu')
@section('content')
   

    <!--================End Main Header Area =================-->
    <section class="banner_area">
        <div class="container">
            <div class="banner_text">
                <h3>Kết Quả Tìm Kiếm</h3>
            </div>
        </div>
    </section>
    <!--================End Main Header Area =================-->
    <!--================Blog Main Area =================-->
    <section class="our_cakes_area p_100">
        <div class="container">
        
        @if(count($results) > 0)
            <div class="main_title">
                <h2>Sản Phẩm Mà Bạn Muốn Tìm</h2>
            </div>
            <div class="cake_feature_row row">
                @foreach($results as $result)
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="cake_feature_item">
                        <a href="{{ route('product-detail',$result->id) }}">
                            <div class="cake_img">
                                <img src="{{ asset('storage/'.substr($result->image_product,7)) }}" alt="">
                            </div>
                        </a>
                        <div class="cake_text">
                            <h4>{{ number_format($result->price) }}đ</h4>
                            <h3>{{$result->name}}</h3>
                            <a class="pest_btn" href="{{ route('add.cart',$result->id) }}">Thêm vào giỏ</a>
                        </div>
                    </div>
                </div>
                    @endforeach
            </div>
        </div>
        @else
        <div class="main_title text-center">
                <h2>Không tìm thấy sản phẩm.</h2>
            </div>
        @endif
    </section>
    <!--================End Blog Main Area =================-->
    
@endsection

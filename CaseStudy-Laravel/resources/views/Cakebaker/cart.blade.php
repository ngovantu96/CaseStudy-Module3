@extends('Cakebaker.layout.master')
@section('page-title','trang chu')
@section('content')
    <!--================End Main Header Area =================-->
    <section class="banner_area">
        <div class="container">
            <div class="banner_text">
                <h3>Giỏ Hàng Của Bạn</h3>
            </div>
        </div>
    </section>
    <!--================End Main Header Area =================-->

    <!--================Cart Table Area =================-->
    <section class="cart_table_area p_100">
        <div class="container">
            @if($cart)
            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Hình Ảnh</th>
                        <th scope="col">Tên Sản Phẩm</th>
                        <th scope="col">Giá</th>
                        <th scope="col">Số Lượng</th>
                        <th scope="col">Thành Tiền</th>
                        <th scope="col" class="text-center">Xoá</th>
                    </tr>
                    </thead>
                    @foreach($cart->products as $item)
                    <tbody>
                    <tr>
                        <td>
                            <img src="{{ asset('storage/'.substr($item['productInfo']->image_product,7)) }}" alt="" height="50px" width="70px">
                        </td>
                        <td>{{ $item['productInfo']->name }}</td>
                        <td>{{ number_format($item['productInfo']->price) }}đ</td>
                        <td>
                            <div class="header-quanty-cart">
                                  <div class=""><a href="{{ route('minus.cart',$item['productInfo']->id) }}" class="ml-2"><span class="minus">-</span></a>
                                      <span class="ml-2">{{ $item['qty'] }}</span>
                                      <a href="{{ route('add.cart',$item['productInfo']->id) }}" class="ml-2"><span class="plus">+</span></a>
                                  </div>
                            </div>
                        </td>
                        <td>{{ number_format( $item['price'])  }}đ</td>
                        <td><a href="{{ route('delete.cart',$item['productInfo']->id) }}" onclick="return confirm('bạn có muốn xóa không ?')">X</a></td>
                    </tr>
                    </tbody>
                    @endforeach
                </table>
            </div>
            <div class="row cart_total_inner">
                <div class="col-lg-7"></div>
                <div class="col-lg-5">
                    <div class="cart_total_text">
                        <div class="cart_head">
                            Đơn Hàng Của Bạn
                        </div>
                        <div class="total">
                            <h4>Tổng Tiền <span>{{ number_format($cart->totalPrice) }}đ</span></h4>
                        </div>
                        <div class="cart_footer">
                            <a class="pest_btn" href="{{ route('show.check-out') }}">Thanh Toán</a>
                        </div>
                    </div>
                </div>
            </div>
            @else
            <div class="row">
                <div class="col-12">
                    <h2>Giỏ Hàng Của Bạn Trống...! <a href="{{ route('home') }}">Quay Lại Trang Chủ Để  Mua Hàng.</a></h2>
                </div>
                <div class="col-12 text-center">
                    <img src="{{ asset('images/cart-null.png') }}" alt="">
                </div>
            </div>
            @endif
        </div>
    </section>
    <!--================End Cart Table Area =================-->
@endsection

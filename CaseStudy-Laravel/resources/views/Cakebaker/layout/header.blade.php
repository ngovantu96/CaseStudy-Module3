<!--================Main Header Area =================-->
<header class="main_header_area">
    <div class="top_header_area row m0">
        <div class="container">
            <div class="float-left">
                <a href="tell:+18004567890"><i class="fas fa-phone-square-alt"></i> + (1800) 456 7890</a>
                <a href="mainto:cakebaker@gmail.com"><i class="far fa-envelope" aria-hidden="true"></i>cakebakery@gamil.com</a>
            </div>
            <div class="float-right">
                <ul class="h_social list_style">
                    <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                </ul>
                <ul class="h_search list_style">
                    <li class="shop_cart"><a href="{{ route('show.cart') }}"><i class="fas fa-cart-plus"></i></a><span class="qty-cart text-center">{{ session('Cart') ? session('Cart')->totalQuanty :  " " }}</span></li>
                    <li><a class="popup-with-zoom-anim" href="#test-search"><i class="fas fa-search"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="main_menu_area">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="{{route('home')}}">
                    <img src="{{ asset('Cake-Baker/img/logo.png') }}" alt="">
                    <img src="{{ asset('Cake-Baker/img/logo-2.png') }}" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="my_toggle_menu">
                            	<span></span>
                            	<span></span>
                            	<span></span>
                            </span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="active"><a  href="{{ route('home') }}" >Trang Chủ</a></li>
                        <li><a href="cake.html">Giới Thiệu</a></li>
                        <li class="dropdown submenu">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Sản Phẩm</a>
                            <ul class="dropdown-menu">
                                <li><a href="{{ route('cake-baker') }}">Caker Bakers</a></li>
                                <li><a href="{{ route('birth-day') }}">Bánh Sinh Nhật</a></li>
                                <li><a href="{{ route('chopped') }}">Bánh Mỳ & Các Loại</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="navbar-nav justify-content-end">
{{--                        <li class="dropdown submenu">--}}
{{--                            <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Pages</a>--}}
{{--                            <ul class="dropdown-menu">--}}
{{--                                <li><a href="service.html">Services</a></li>--}}
{{--                                <li class="dropdown submenu">--}}
{{--                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Gallery</a>--}}
{{--                                    <ul class="dropdown-menu">--}}
{{--                                        <li><a href="portfolio.html">-  Gallery Classic</a></li>--}}
{{--                                        <li><a href="portfolio-full-width.html">-  Gallery Full width</a></li>--}}
{{--                                    </ul>--}}
{{--                                </li>--}}
{{--                                <li><a href="faq.html">Faq</a></li>--}}
{{--                                <li><a href="what-we-make.html">What we make</a></li>--}}
{{--                                <li><a href="special.html">Special Recipe</a></li>--}}
{{--                                <li><a href="404.html">404 page</a></li>--}}
{{--                                <li><a href="comming-soon.html">Coming Soon page</a></li>--}}
{{--                            </ul>--}}
{{--                        </li>--}}
                        <li class="dropdown submenu">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Blog</a>
{{--                            <ul class="dropdown-menu">--}}
{{--                                <li><a href="blog.html">Blog with sidebar</a></li>--}}
{{--                                <li><a href="blog-2column.html">Blog 2 column</a></li>--}}
{{--                                <li><a href="single-blog.html">Blog details</a></li>--}}
{{--                            </ul>--}}
                        </li>
                        <li class="dropdown submenu">
                            <a  href="{{ route('shop') }}">Shop</a>
                        </li>
                        <li><a href="">Liên Hệ</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>
<!--================End Main Header Area =================-->

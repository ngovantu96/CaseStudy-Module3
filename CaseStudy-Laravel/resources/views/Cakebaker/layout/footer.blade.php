<!--================Footer Area =================-->
<footer class="footer_area">
    <div class="footer_widgets">
        <div class="container">
            <div class="row footer_wd_inner">
                <div class="col-lg-3 col-6">
                    <aside class="f_widget f_about_widget">
                        <img src="{{ asset('Cake-Baker/img/footer-logo.png') }}" alt="">
                        <h2>Mạng Xã Hội</h2>
                        <p>Kết Nối Với Chúng Tôi</p>
                        <ul class="nav">
                            <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-google-plus"></i></a></li>
                        </ul>
                    </aside>
                </div>
                <div class="col-lg-3 col-6">
                    <aside class="f_widget f_link_widget">
                        <div class="f_title">
                            <h3>Liên Kết Nhanh</h3>
                        </div>
                        <ul class="list_style">
                            <li><a href="#">Đăng Kí Tài Khoản</a></li>
                            <li><a href="#">Xem Đơn Hàng</a></li>
                            <li><a href="#">Chính Sách Bảo Mật</a></li>
                            <li><a href="#">Điều Khoản & Điều Kiện</a></li>
                        </ul>
                    </aside>
                </div>
                <div class="col-lg-3 col-6">
                    <aside class="f_widget f_link_widget">
                        <div class="f_title">
                            <h3>Thời Gian Làm Việc</h3>
                        </div>
                        <ul class="list_style">
                            <li><a href="#">T2. :  T6.: 8 am - 8 pm</a></li>
                            <li><a href="#">T7. : 9am - 4pm</a></li>
                            <li><a href="#">CN. : Nghỉ</a></li>
                        </ul>
                    </aside>
                </div>
                <div class="col-lg-3 col-6">
                    <aside class="f_widget f_contact_widget">
                        <div class="f_title">
                            <h3>Thông Tin Liên Lạc</h3>
                        </div>
                        <h4>(1800) 574 9687</h4>
                        <p>Cake-Baker Store <br />256, Trường Chinh, Tp Huế</p>
                        <h5>cakebaker@gmail.com</h5>
                    </aside>
                </div>
            </div>
        </div>
    </div>
    <div class="footer_copyright">
        <div class="container">
            <div class="copyright_inner">
                <div class="text-center">
                    <h5><a target="_blank" href="">
                            Bản Quyền Thuộc Van Tu Bakery © Copyright 2020. Thiết kế bởi Van Tu
                        </a></h5>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--================End Footer Area =================-->


<!--================Search Box Area =================-->
<div class="search_area zoom-anim-dialog mfp-hide" id="test-search">
    <div class="search_box_inner">
        <h3>Search</h3>
        <div class="input-group">
        <form action="{{ route('search')}}" method="post">
        @csrf
            <input type="text" class="form-control" placeholder="Search for..." name="search">
            <span class="input-group-btn">
            <button class="btn btn-default" type="button"><i class="icon icon-Search"></i></button>
            </span>
        </form>
        </div>
    </div>
</div>

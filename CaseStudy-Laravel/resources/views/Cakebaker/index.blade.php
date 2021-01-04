@extends('Cakebaker.layout.master')
@section('page-title','trang chu')
@section('content')
    <!--================Slider Area =================-->
    <section class="main_slider_area">
        <div id="main_slider" class="rev_slider" data-version="5.3.1.6">
            <ul>
                <li data-index="rs-1587" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="300"  data-thumb="img/home-slider/slider-1.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Creative" data-param1="01" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="{{ asset('Cake-Baker/img/home-slider/slider-1.jpg') }}"  alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="5" class="rev-slidebg" data-no-retina>

                    <!-- LAYER NR. 1 -->
                    <div class="slider_text_box">
                        <div class="tp-caption tp-resizeme first_text"
                             data-x="['left','left','left','15','15']" data-hoffset="['0','0','0','0']"
                             data-y="['top','top','top','top']" data-voffset="['175','175','125','165','160']"
                             data-fontsize="['65','65','65','40','30']"
                             data-lineheight="['80','80','80','50','40']"
                             data-width="['800','800','800','500']"
                             data-height="none"
                             data-whitespace="normal"
                             data-type="text"
                             data-responsive_offset="on"
                             data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]"
                             data-textAlign="['left','left','left','left']">Bánh Chất Lượng ... <br /> Thơm, Ngon & An Toàn</div>

                        <div class="tp-caption tp-resizeme secand_text"
                             data-x="['left','left','left','15','15']" data-hoffset="['0','0','0','0']"
                             data-y="['top','top','top','top']" data-voffset="['345','345','300','300','250']"
                             data-fontsize="['20','20','20','20','16']"
                             data-lineheight="['28','28','28','28']"
                             data-width="['640','640','640','640','350']"
                             data-height="none"
                             data-whitespace="normal"
                             data-type="text"
                             data-responsive_offset="on"
                             data-transform_idle="o:1;"
                             data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:[100%];s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]">
                            Chúng Tôi Rất Trân Trọng Sự Lựa Chọn Mua Hàng Của Quý Vị...
                        </div>

                        <div class="tp-caption tp-resizeme slider_button"
                             data-x="['left','left','left','15','15']" data-hoffset="['0','0','0','0']"
                             data-y="['top','top','top','top']" data-voffset="['435','435','390','390','360']"
                             data-fontsize="['14','14','14','14']"
                             data-lineheight="['46','46','46','46']"
                             data-width="none"
                             data-height="none"
                             data-whitespace="nowrap"
                             data-type="text"
                             data-responsive_offset="on"
                             data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:[100%];s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]">
                            <a class="main_btn" href="#">chi tiết</a>
                        </div>
                    </div>
                </li>
                <li data-index="rs-1588" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="300"  data-thumb="img/home-slider/slider-2.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Creative" data-param1="01" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="{{ asset('Cake-Baker/img/home-slider/slider-2.jpg') }}"  alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="5" class="rev-slidebg" data-no-retina>
                    <!-- LAYERS -->
                    <!-- LAYERS -->

                    <!-- LAYER NR. 1 -->
                    <div class="slider_text_box">
                        <div class="tp-caption tp-resizeme first_text"
                             data-x="['left','left','left','15','15']" data-hoffset="['0','0','0','0']"
                             data-y="['top','top','top','top']" data-voffset="['175','175','125','165','160']"
                             data-fontsize="['65','65','65','40','30']"
                             data-lineheight="['80','80','80','50','40']"
                             data-width="['800','800','800','500']"
                             data-height="none"
                             data-whitespace="normal"
                             data-type="text"
                             data-responsive_offset="on"
                             data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]"
                             data-textAlign="['left','left','left','left']">Cake Bakery ... <br /> Làm Ra Sản Phẩm Ngon</div>

                        <div class="tp-caption tp-resizeme secand_text"
                             data-x="['left','left','left','15','15']" data-hoffset="['0','0','0','0']"
                             data-y="['top','top','top','top']" data-voffset="['345','345','300','300','250']"
                             data-fontsize="['20','20','20','20','16']"
                             data-lineheight="['28','28','28','28']"
                             data-width="['640','640','640','640','350']"
                             data-height="none"
                             data-whitespace="normal"
                             data-type="text"
                             data-responsive_offset="on"
                             data-transform_idle="o:1;"
                             data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:[100%];s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]">
                            Em cũng chỉ là con gái thôi, buồn là ăn mà không ăn là buồn.
                        </div>

                        <div class="tp-caption tp-resizeme slider_button"
                             data-x="['left','left','left','15','15']" data-hoffset="['0','0','0','0']"
                             data-y="['top','top','top','top']" data-voffset="['435','435','390','390','360']"
                             data-fontsize="['14','14','14','14']"
                             data-lineheight="['46','46','46','46']"
                             data-width="none"
                             data-height="none"
                             data-whitespace="nowrap"
                             data-type="text"
                             data-responsive_offset="on"
                             data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:[100%];s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]">
                            <a class="main_btn" href="#">chi tiết</a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <!--================End Slider Area =================-->

    <!--================Welcome Area =================-->
    <section class="welcome_bakery_area">
        <div class="container">
            <div class="welcome_bakery_inner p_100">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="main_title">
                            <h2>Chào mừng đến với tiệm bánh của chúng tôi</h2>
                            <p>Nghề làm bánh không chỉ có vị ngọt,
                                để trở thành những đầu bếp bánh chuyên nghiệp, những ai theo đuổi nghề cũng đều phải trải qua một quá trình học hỏi, rèn luyện và thử thách gian nan nhưng hương vị ngọt ngào của hạnh phúc sẽ đến với những ai dám sống và theo đuổi đam mê của mình.</p>
                        </div>
                        <div class="welcome_left_text">
                            <p>Cũng không có ai yêu hoặc theo đuổi hoặc mong muốn có được nỗi đau của chính mình, bởi vì đó là nỗi đau,
                                nhưng bởi vì đôi khi xảy ra những hoàn cảnh mà sự vất vả và đau đớn có thể mang lại cho anh ta một số niềm vui lớn. Để lấy một ví dụ tầm thường, ai trong chúng ta cũng từng tập thể dục vất vả.</p>
                            <a class="pink_btn" href="#">Xem Nhiều Hơn</a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="welcome_img">
                            <img class="img-fluid" src="{{ asset('Cake-Baker/img/cake-feature/welcome-right.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="cake_feature_inner">
                <div class="main_title">
                    <h2>Bánh Mới Cập Nhật</h2>
                    <h5>Thơm ngon và chất lượng</h5>
                </div>
                <div class="cake_feature_slider owl-carousel">
                    @foreach($productNews as $productNew)
                    <div class="item">
                        <div class="cake_feature_item">
                           <a href="{{ route('product-detail',$productNew->id) }}">
                               <div class="cake_img">
                                   <img src="{{ asset('storage/'.substr($productNew->image_product,7)) }}" alt="" width="253px" height="200px">
                               </div>
                           </a>
                            <div class="cake_text">
                                <h4>{{ number_format($productNew->price) }}đ</h4>
                                <h3>{{ $productNew->name }}</h3>
                                <a class="pest_btn" href="{{ route('add.cart',$productNew->id) }}">Thêm vào giỏ</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!--================End Welcome Area =================-->
    <!--================Special Recipe Area ================
    . =-->
    <section class="special_recipe_area">
        <div class="container">
            <div class="special_recipe_slider owl-carousel">
                @foreach($categories as $category)
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
                @endforeach
            </div>
        </div>
    </section>
    <!--================End Special Recipe Area =================-->

    <!--================Service Area =================-->
    <section class="service_area">
        <div class="container">
            <div class="single_w_title">
                <h2>Dịch Vụ Mà Chúng Tôi Cung Cấp</h2>
            </div>
            <div class="row service_inner">
                <div class="col-lg-4 col-6">
                    <div class="service_item">
                        <i class="flaticon-food-2"></i>
                        <h4>Bánh Ngọt</h4>
                        <p>Ăn miếng bánh, uống chút trà. cầm tay và muốn là "Nhà" của nhau...</p>
                    </div>
                </div>
                <div class="col-lg-4 col-6">
                    <div class="service_item">
                        <i class="flaticon-food-1"></i>
                        <h4>Bánh Sinh Nhật</h4>
                        <p>Một chiếc bánh sinh nhật đẹp chỉ khi nào nó đem lại niềm vui cho người nhận.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-6">
                    <div class="service_item">
                        <i class="flaticon-food"></i>
                        <h4>Bánh Mỳ & Bánh Mặn</h4>
                        <p>Bánh mì quá phê, ngon tê đầu lưỡi.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Service Area =================-->

    <!--================Discover Menu Area =================-->
    <section class="discover_menu_area">
        <div class="discover_menu_inner">
            <div class="container">
                <div class="main_title">
                    <h2>Bánh Nổi Bật</h2>
                    <h5>Lựa chọn một loại bánh phù hợp để thưởng thức...</h5>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="discover_item_inner">
                            <div class="discover_item">
                                <h4>Bánh Cupcake-01</h4>
                                <p>Chocolate puding, vanilla, fruite rasberry jam milk <span>20,000đ</span></p>
                            </div>
                            <div class="discover_item">
                                <h4>Bánh Cupcake-02</h4>
                                <p>Chocolate puding, vanilla, fruite rasberry jam milk <span>20,000đ</span></p>
                            </div>
                            <div class="discover_item">
                                <h4>Bánh Cupcake-03</h4>
                                <p>Chocolate puding, vanilla, fruite rasberry jam milk <span>20,000đ</span></p>
                            </div>
                            <div class="discover_item">
                                <h4>Bánh Cupcake-04</h4>
                                <p>Chocolate puding, vanilla, fruite rasberry jam milk <span>20,000đ</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="discover_item_inner">
                            <div class="discover_item">
                                <h4>Bánh Cupcake-05</h4>
                                <p>Chocolate puding, vanilla, fruite rasberry jam milk <span>20,000đ</span></p>
                            </div>
                            <div class="discover_item">
                                <h4>Bánh Cupcake-06</h4>
                                <p>Chocolate puding, vanilla, fruite rasberry jam milk <span>20,000đ</span></p>
                            </div>
                            <div class="discover_item">
                                <h4>Bánh Cupcake-07</h4>
                                <p>Chocolate puding, vanilla, fruite rasberry jam milk <span>20,000đ</span></p>
                            </div>
                            <div class="discover_item">
                                <h4>Bánh Cupcake-08</h4>
                                <p>Chocolate puding, vanilla, fruite rasberry jam milk <span>20,000đ</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Discover Menu Area =================-->

    <!--================Client Says Area =================-->
    <section class="client_says_area p_100">
        <div class="container">
            <div class="client_says_inner">
                <div class="c_says_title">
                    <h2>Khách Hàng Nói Gì....</h2>
                </div>
                <div class="client_says_slider owl-carousel">
                    <div class="item">
                        <div class="media">
                            <div class="d-flex">
                                <img src="{{ asset('Cake-Baker/img/client/client-1.png') }}" alt="">
                                <h3>“</h3>
                            </div>
                            <div class="media-body">
                                <p>Cake-Baker Không làm bạn thất vọng. Những chiếc bánh rất ngon và đúng mùi vị mà tôi thích.</p>
                                <h5>Tùng Nguyễn</h5>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="media">
                            <div class="d-flex">
                                <img src="{{ asset('Cake-Baker/img/client/client-1.png') }}" alt="">
                            </div>
                            <div class="media-body">
                                <p>Hãy yêu ai đó thật lòn và chân thành. Với tôi tình yêu và sự chân thành đã dành cho Cake-Baker.</p>
                                <h5>Nam-kun</h5>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="media">
                            <div class="d-flex">
                                <img src="{{ asset('Cake-Baker/img/client/client-1.png') }}" alt="">
                            </div>
                            <div class="media-body">
                                <p>Uy tín và chất lượng là nhũng gì mà Cake-Baker đem lạ cho bạn..</p>
                                <h5>- Quang-Ruby</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Client Says Area =================-->

    <!--================Latest News Area =================-->
    <section class="latest_news_area p_100">
        <div class="container">
            <div class="main_title">
                <h2>Blog Và Cách Làm Bánh</h2>
                <h5>Trở Thành Người Hướng Dẫn Và Trợ Giúp Bạn... </h5>
            </div>
            <div class="row latest_news_inner">
                <div class="col-lg-4 col-md-6">
                    <div class="l_news_image">
                        <div class="l_news_img">
                            <img class="img-fluid" src="{{ asset('Cake-Baker/img/blog/latest-news/l-news-1.jpg') }}" alt="">
                        </div>
                        <div class="l_news_hover">
                            <a href="#"><h5>Oct 15, 2016</h5></a>
                            <a href="#"><h4>Nanotechnology immersion along the information</h4></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="l_news_item">
                        <div class="l_news_img">
                            <img class="img-fluid" src="{{ asset('Cake-Baker/img/blog/latest-news/l-news-2.jpg') }}" alt="">
                        </div>
                        <div class="l_news_text">
                            <a href="#"><h5>Oct 15, 2016</h5></a>
                            <a href="#"><h4>Nanotechnology immersion along the information</h4></a>
                            <p>Lorem ipsum dolor sit amet, cons ectetur elit. Vestibulum nec odios Suspe ndisse cursus mal suada faci lisis. Lorem ipsum dolor sit ametion ....</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="l_news_item">
                        <div class="l_news_img">
                            <img class="img-fluid" src="{{ asset('Cake-Baker/img/blog/latest-news/l-news-3.jpg') }}" alt="">
                        </div>
                        <div class="l_news_text">
                            <a href="#"><h5>Oct 15, 2016</h5></a>
                            <a href="#"><h4>Nanotechnology immersion along the information</h4></a>
                            <p>Lorem ipsum dolor sit amet, cons ectetur elit. Vestibulum nec odios Suspe ndisse cursus mal suada faci lisis. Lorem ipsum dolor sit ametion ....</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Latest News Area =================-->
@endsection

@extends('client.layout.master')

@section('title', 'Trang chủ')
@section('body')

<div class="pos_home_section">
    <div class="row">
        <!--banner slider start-->
        <div class="col-12">
            <div class="banner_slider slider_two">
                <div class="slider_active owl-carousel">
                    <div class="single_slider" style="background-image: url(client/img/slider/slider_2.png)">
                        <div class="slider_content">
                            <div class="slider_content_inner">
                                <h1>THỜI TRANG TRẺ EM ĐA DẠNG</h1>
                                <p>Có rất nhiều loại quần áo phù hợp với từng trẻ em từ nam tới nữ.</p>
                                <a href="#">Mua Ngay</a>
                            </div>
                        </div>
                    </div>
                    <div class="single_slider" style="background-image: url(client/img/slider/slide_4.png)">
                        <div class="slider_content">
                            <div class="slider_content_inner">
                                <h1>THỜI TRANG TRẺ EM ĐA DẠNG</h1>
                                <p>Có rất nhiều loại quần áo phù hợp với từng trẻ em từ nam tới nữ.</p>
                                <a href="#">Mua Ngay</a>
                            </div>
                        </div>
                    </div>
                    <div class="single_slider" style="background-image: url(client/img/slider/slider_3.png)">
                        <div class="slider_content">
                            <div class="slider_content_inner">
                                <h1>THỜI TRANG TRẺ EM ĐA DẠNG</h1>
                                <p>Có rất nhiều loại quần áo phù hợp với từng trẻ em từ nam tới nữ.</p>
                                <a href="#">Mua Ngay</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--banner slider start-->
        </div>
    </div>

    <!--brand logo strat-->
    <div class="brand_logo brand_two">
        <div class="block_title">
            <h3>Bé gái</h3>
        </div>
        <div class="row">
            <div class="brand_active owl-carousel">
                <div class="col-lg-2">
                    <div class="single_brand">
                        <a href="#"><img src="client\img\brand\brand1.jpg" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="single_brand">
                        <a href="#"><img src="client\img\brand\brand2.jpg" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="single_brand">
                        <a href="#"><img src="client\img\brand\brand3.jpg" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="single_brand">
                        <a href="#"><img src="client\img\brand\brand4.jpg" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="single_brand">
                        <a href="#"><img src="client\img\brand\brand5.jpg" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="single_brand">
                        <a href="#"><img src="client\img\brand\brand6.jpg" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--brand logo end-->
    <!--brand logo strat-->
    <div class="brand_logo brand_two">
        <div class="block_title">
            <h3>Bé trai</h3>
        </div>
        <div class="row">
            <div class="brand_active owl-carousel">
                <div class="col-lg-2">
                    <div class="single_brand">
                        <a href="#"><img src="client\img\brand\brand1.jpg" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="single_brand">
                        <a href="#"><img src="client\img\brand\brand2.jpg" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="single_brand">
                        <a href="#"><img src="client\img\brand\brand3.jpg" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="single_brand">
                        <a href="#"><img src="client\img\brand\brand4.jpg" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="single_brand">
                        <a href="#"><img src="client\img\brand\brand5.jpg" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="single_brand">
                        <a href="#"><img src="client\img\brand\brand6.jpg" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--brand logo end-->
    <!--new product area start-->
    <div class="new_product_area product_two">
        <div class="row">
            <div class="col-12">
                <div class="block_title">
                    <h3> sản phẩm mới</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="single_p_active owl-carousel">
                <div class="col-lg-3">
                    <div class="single_product">
                        <div class="product_thumb">
                            <a href="single-product.html"><img src="client\img\product\product1.jpg" alt=""></a>
                            <div class="img_icone">
                                <img src="client\img\cart\span-new.png" alt="">
                            </div>
                            <div class="product_action">
                                <a href="#"> <i class="fa fa-shopping-cart"></i> Thêm vào giỏ</a>
                            </div>
                        </div>
                        <div class="product_content">
                            <span class="product_price">200.000đ</span>
                            <h3 class="product_title"><a href="single-product.html">Áo khoác nam con vịt</a></h3>
                        </div>
                        <div class="product_info">
                            <ul>
                                <li><a href="#" title=" Thêm ưu thích ">Thêm ưu thích</a>
                                </li>
                                <li><a href="#" data-toggle="modal" data-target="#modal_box"
                                        title="Xem Chi Tiết">Xem Chi Tiết</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="single_product">
                        <div class="product_thumb">
                            <a href="single-product.html"><img src="client\img\product\product2.jpg" alt=""></a>
                            <div class="hot_img">
                                <img src="client\img\cart\span-hot.png" alt="">
                            </div>
                            <div class="product_action">
                                <a href="#"> <i class="fa fa-shopping-cart"></i> Thêm vào giỏ</a>
                            </div>
                        </div>
                        <div class="product_content">
                            <span class="product_price">200.000đ</span>
                            <h3 class="product_title"><a href="single-product.html">Áo khoác nam con vịt</a></h3>
                        </div>
                        <div class="product_info">
                            <ul>
                                <li><a href="#" title=" Thêm ưu thích ">Thêm ưu thích</a>
                                </li>
                                <li><a href="#" data-toggle="modal" data-target="#modal_box"
                                        title="Xem Chi Tiết">Xem Chi Tiết</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="single_product">
                        <div class="product_thumb">
                            <a href="single-product.html"><img src="client\img\product\product3.jpg" alt=""></a>
                            <div class="img_icone">
                                <img src="client\img\cart\span-new.png" alt="">
                            </div>
                            <div class="product_action">
                                <a href="#"> <i class="fa fa-shopping-cart"></i> Thêm vào giỏ</a>
                            </div>
                        </div>
                        <div class="product_content">
                            <span class="product_price">200.000đ</span>
                            <h3 class="product_title"><a href="single-product.html">Áo khoác nam con vịt</a></h3>
                        </div>
                        <div class="product_info">
                            <ul>
                                <li><a href="#" title=" Thêm ưu thích ">Thêm ưu thích</a>
                                </li>
                                <li><a href="#" data-toggle="modal" data-target="#modal_box"
                                        title="Xem Chi Tiết">Xem Chi Tiết</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="single_product">
                        <div class="product_thumb">
                            <a href="single-product.html"><img src="client\img\product\product4.jpg"
                                    alt=""></a>
                            <div class="hot_img">
                                <img src="client\img\cart\span-hot.png" alt="">
                            </div>
                            <div class="product_action">
                                <a href="#"> <i class="fa fa-shopping-cart"></i> Thêm vào giỏ</a>
                            </div>
                        </div>
                        <div class="product_content">
                            <span class="product_price">200.000đ</span>
                            <h3 class="product_title"><a href="single-product.html">Áo khoác nam con vịt</a></h3>
                        </div>
                        <div class="product_info">
                            <ul>
                                <li><a href="#" title=" Thêm ưu thích ">Thêm ưu thích</a>
                                </li>
                                <li><a href="#" data-toggle="modal" data-target="#modal_box"
                                        title="Xem Chi Tiết">Xem Chi Tiết</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="single_product">
                        <div class="product_thumb">
                            <a href="single-product.html"><img src="client\img\product\product6.jpg"
                                    alt=""></a>
                            <div class="img_icone">
                                <img src="client\img\cart\span-new.png" alt="">
                            </div>
                            <div class="product_action">
                                <a href="#"> <i class="fa fa-shopping-cart"></i> Thêm vào giỏ</a>
                            </div>
                        </div>
                        <div class="product_content">
                            <span class="product_price">$50.00</span>
                            <h3 class="product_title"><a href="single-product.html">Áo khoác nam con vịt</a></h3>

                        </div>
                        <div class="product_info">
                            <ul>
                                <li><a href="#" title=" Thêm ưu thích ">Thêm ưu thích</a>
                                </li>
                                <li><a href="#" data-toggle="modal" data-target="#modal_box"
                                        title="Xem Chi Tiết">Xem Chi Tiết</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--new product area start-->

    <!--banner area start-->
    <div class="banner_area banner_two">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="single_banner">
                    <a href="#"><img src="client\img\banner\banner7.jpg" alt=""></a>
                    <div class="banner_title">
                        <p>Lên đến <span> 40%</span> off</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single_banner">
                    <a href="#"><img src="client\img\banner\banner8.jpg" alt=""></a>
                    <div class="banner_title title_2">
                        <p>Giảm tới <span> 30%</span></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single_banner">
                    <a href="#"><img src="client\img\banner\banner11.jpg" alt=""></a>
                    <div class="banner_title title_3">
                        <p>Giảm tới <span> 30%</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--banner area end-->

    <!--featured product area start-->
    <div class="new_product_area product_two">
        <div class="row">
            <div class="col-12">
                <div class="block_title">
                    <h3> Sản phẩm nổi bật</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="single_p_active owl-carousel">
                <div class="col-lg-3">
                    <div class="single_product">
                        <div class="product_thumb">
                            <a href="single-product.html"><img src="client\img\product\product7.jpg"
                                    alt=""></a>
                            <div class="img_icone">
                                <img src="client\img\cart\span-new.png" alt="">
                            </div>
                            <div class="product_action">
                                <a href="#"> <i class="fa fa-shopping-cart"></i> Thêm vào giỏ</a>
                            </div>
                        </div>
                        <div class="product_content">
                            <span class="product_price">$50.00</span>
                            <h3 class="product_title"><a href="single-product.html">Áo khoác nam con vịt</a></h3>

                        </div>
                        <div class="product_info">
                            <ul>
                                <li><a href="#" title=" Thêm ưu thích ">Thêm ưu thích</a>
                                </li>
                                <li><a href="#" data-toggle="modal" data-target="#modal_box"
                                    title="Xem Chi Tiết">Xem Chi Tiết</a></li>
                                </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="single_product">
                        <div class="product_thumb">
                            <a href="single-product.html"><img src="client\img\product\product8.jpg"
                                    alt=""></a>
                            <div class="hot_img">
                                <img src="client\img\cart\span-hot.png" alt="">
                            </div>
                            <div class="product_action">
                                <a href="#"> <i class="fa fa-shopping-cart"></i> Thêm vào giỏ</a>
                            </div>
                        </div>
                        <div class="product_content">
                            <span class="product_price">$40.00</span>
                            <h3 class="product_title"><a href="single-product.html">Áo khoác nam con vịt</a></h3>

                        </div>
                        <div class="product_info">
                            <ul>
                                <li><a href="#" title=" Thêm ưu thích ">Thêm ưu thích</a>
                                </li>
                                <li><a href="#" data-toggle="modal" data-target="#modal_box"
                                    title="Xem Chi Tiết">Xem Chi Tiết</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="single_product">
                        <div class="product_thumb">
                            <a href="single-product.html"><img src="client\img\product\product9.jpg"
                                    alt=""></a>
                            <div class="img_icone">
                                <img src="client\img\cart\span-new.png" alt="">
                            </div>
                            <div class="product_action">
                                <a href="#"> <i class="fa fa-shopping-cart"></i> Thêm vào giỏ</a>
                            </div>
                        </div>
                        <div class="product_content">
                            <span class="product_price">$60.00</span>
                            <h3 class="product_title"><a href="single-product.html">Áo khoác nam con vịt</a></h3>

                        </div>
                        <div class="product_info">
                            <ul>
                                <li><a href="#" title=" Thêm ưu thích ">Thêm ưu thích</a>
                                </li>
                                <li><a href="#" data-toggle="modal" data-target="#modal_box"
                                    title="Xem Chi Tiết">Xem Chi Tiết</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                
              
            </div>
        </div>
    </div>
    <!--featured product area start-->

    <!--blog area start-->
    <div class="blog_area blog_two">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="single_blog">
                    <div class="blog_thumb">
                        <a href="blog-details.html"><img src="client\img\blog\blog3.jpg" alt=""></a>
                    </div>
                    <div class="blog_content">
                        <div class="blog_post">
                            <ul>
                                <li>
                                    <a href="#">Tin tức khuyến mãi</a>
                                </li>
                            </ul>
                        </div>
                        <h3><a href="blog-details.html">When an unknown took a galley of type.</a></h3>
                        <p>Distinctively simplify dynamic resources whereas prospective core
                            competencies. Objectively pursue multidisciplinary human capital for
                            interoperable.</p>
                        <div class="post_footer">
                            <div class="post_meta">
                                <ul>
                                    <li>Jun 20, 2018</li>
                                    <li>3 Comments</li>
                                </ul>
                            </div>
                            <div class="Read_more">
                                <a href="blog-details.html">Xem thêm <i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single_blog">
                    <div class="blog_thumb">
                        <a href="blog-details.html"><img src="client\img\blog\blog4.jpg" alt=""></a>
                    </div>
                    <div class="blog_content">
                        <div class="blog_post">
                            <ul>
                                <li>
                                    <a href="#">Tin tức thời trang</a>
                                </li>
                            </ul>
                        </div>
                        <h3><a href="blog-details.html">When an unknown took a galley of type.</a></h3>
                        <p>Distinctively simplify dynamic resources whereas prospective core
                            competencies. Objectively pursue multidisciplinary human capital for
                            interoperable.</p>
                        <div class="post_footer">
                            <div class="post_meta">
                                <ul>
                                    <li>Jun 20, 2018</li>
                                    <li>3 Comments</li>
                                </ul>
                            </div>
                            <div class="Read_more">
                                <a href="blog-details.html">Xem thêm <i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single_blog">
                    <div class="blog_thumb">
                        <a href="blog-details.html"><img src="client\img\blog\blog1.jpg" alt=""></a>
                    </div>
                    <div class="blog_content">
                        <div class="blog_post">
                            <ul>
                                <li>
                                    <a href="#">Tin tức cửa hàng</a>
                                </li>
                            </ul>
                        </div>
                        <h3><a href="blog-details.html">When an unknown took a galley of type.</a></h3>
                        <p>Distinctively simplify dynamic resources whereas prospective core
                            competencies. Objectively pursue multidisciplinary human capital for
                            interoperable.</p>
                        <div class="post_footer">
                            <div class="post_meta">
                                <ul>
                                    <li>Jun 20, 2018</li>
                                    <li>3 Comments</li>
                                </ul>
                            </div>
                            <div class="Read_more">
                                <a href="blog-details.html">Xem thêm <i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!--blog area end-->

    
</div>

@endsection
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title') | NIZI SHOP</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="client\img\favicon.png">

    <!-- all css here -->
    <link rel="stylesheet" href="client/css/bootstrap.min.css">
    <link rel="stylesheet" href="client/css/plugin.css">
    <link rel="stylesheet" href="client/css/bundle.css">
    <link rel="stylesheet" href="client/css/style.css">
    <link rel="stylesheet" href="client/css/responsive.css">
    <script src="client/js/vendor/modernizr-2.8.3.min.js"></script>

   
</head>



<body>
    <!-- Add your site or application content here -->

    <!--pos page start-->
    <div class="pos_page">
        <div class="container">
            <!--pos page inner-->
            <div class="pos_page_inner">
                <!--header area -->
                <div class="header_area">
                    <!--header top-->
                    <div class="header_top">
                        <div class="row align-items-center">
                            <div class="col-lg-6 col-md-6">

                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="header_links">
                                    <ul>
                                        <li><a href="{{ route('dangnhap') }}" title="Đăng nhập">Đăng nhập</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--header top end-->

                    <!--header middel-->
                    <div class="header_middel">
                        <div class="row align-items-center">
                            <!--logo start-->
                            <div class="col-lg-3 col-md-3">
                                <div class="logo">
                                    <a href="{{ route('trangchu') }}"><img src="client\img\logo\logo.jpg.png"
                                            alt=""></a>
                                </div>
                            </div>
                            <!--logo end-->
                            <div class="col-lg-9 col-md-9">
                                <div class="header_right_info">
                                    <div class="search_bar">
                                        <form action="#">
                                            <input placeholder="Tìm kiếm..." type="text">
                                            <button type="submit"><i class="fa fa-search"></i></button>
                                        </form>
                                    </div>
                                    <div class="shopping_cart">
                                        <a href="#"><i class="fa fa-shopping-cart"></i> 2Items - $209.44 <i
                                                class="fa fa-angle-down"></i></a>

                                        <!--mini cart-->
                                        <div class="mini_cart">
                                            <div class="cart_item">
                                                <div class="cart_img">
                                                    <a href=""><img src="client\img\cart\cart.jpg"
                                                            alt=""></a>
                                                </div>
                                                <div class="cart_info">
                                                    <a href="#">lorem ipsum dolor</a>
                                                    <span class="cart_price">$115.00</span>
                                                    <span class="quantity">Qty: 1</span>
                                                </div>
                                                <div class="cart_remove">
                                                    <a title="Remove this item" href="#"><i
                                                            class="fa fa-times-circle"></i></a>
                                                </div>
                                            </div>
                                            <div class="cart_item">
                                                <div class="cart_img">
                                                    <a href="#"><img src="client\img\cart\cart2.jpg"
                                                            alt=""></a>
                                                </div>
                                                <div class="cart_info">
                                                    <a href="#">Quisque ornare dui</a>
                                                    <span class="cart_price">$105.00</span>
                                                    <span class="quantity">Qty: 1</span>
                                                </div>
                                                <div class="cart_remove">
                                                    <a title="Remove this item" href="#"><i
                                                            class="fa fa-times-circle"></i></a>
                                                </div>
                                            </div>
                                            <div class="shipping_price">
                                                <span> Shipping </span>
                                                <span> $7.00 </span>
                                            </div>
                                            <div class="total_price">
                                                <span> total </span>
                                                <span class="prices"> $227.00 </span>
                                            </div>
                                            <div class="cart_button">
                                                <a href=""> Chi tiết giỏ hàng</a>
                                                <a href="checkout.html"> Check out</a>
                                            </div>
                                        </div>
                                        <!--mini cart end-->
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!--header middel end-->
                    <div class="header_bottom">
                        <div class="row">
                            <div class="col-12">
                                <div class="main_menu_inner">
                                    <div class="main_menu d-none d-lg-block">
                                        <nav>
                                            <ul>
                                                <li class="active"><a href="{{ route('trangchu') }}">Trang chủ</a></li>


                                                <li><a href="{{ route('sanpham') }}">Quần áo bé gái</a>
                                                    <div class="mega_menu">
                                                        <div class="mega_top fix">
                                                            <div class="mega_items">
                                                                <ul>
                                                                    @foreach ($loaisanpham as $loai)
                                                                        @if ($loai->gioitinh == 1)
                                                                            <!-- 1 cho bé gái -->
                                                                            <li><a
                                                                                    href="#">{{ $loai->ten }}</a>
                                                                            </li>
                                                                        @endif
                                                                    @endforeach
                                                                </ul>
                                                            </div>

                                                        </div>
                                                        {{-- <div class="mega_bottom fix">
                                                            <div class="mega_thumb">
                                                                <a href="#"><img
                                                                        src="client\img\banner\banner1.jpg"
                                                                        alt=""></a>
                                                            </div>
                                                            <div class="mega_thumb">
                                                                <a href="#"><img
                                                                        src="client\img\banner\banner2.jpg"
                                                                        alt=""></a>
                                                            </div>
                                                        </div> --}}
                                                    </div>
                                                </li>
                                                <li><a href="{{ route('sanpham') }}">Quần áo bé trai</a>
                                                    <div class="mega_menu">
                                                        <div class="mega_top fix">
                                                            <div class="mega_top fix">
                                                                <div class="mega_items">
                                                                    <ul>
                                                                        @foreach ($loaisanpham as $loai)
                                                                            @if ($loai->gioitinh == 0)
                                                                                <!-- 0 cho bé trai -->
                                                                                <li><a
                                                                                        href="#">{{ $loai->ten }}</a>
                                                                                </li>
                                                                            @endif
                                                                        @endforeach
                                                                    </ul>

                                                                </div>

                                                            </div>

                                                        </div>

                                                    </div>
                                                </li>


                                                <li><a href="{{ route('tintuc') }}">Tin tức</a>
                                                    <div class="mega_menu jewelry">
                                                        <div class="mega_items jewelry">
                                                            <ul>
                                                                @foreach ($loaitintuc as $loai)
                                                                    <li><a href="#">{{ $loai->ten }}</a></li>
                                                                @endforeach
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li><a href="{{ route('lienhe') }}">Liên hệ</a></li>
                                                <li><a href="{{ route('gioithieu') }}">Giới thiệu </a></li>

                                            </ul>
                                        </nav>
                                    </div>

                                    <div class="mobile-menu d-lg-none">
                                        <nav>
                                            <ul>
                                                <li><a href="index.html">Trang chủ</a></li>

                                                <li><a href="#">Thời trang bé gái</a>
                                                    <div>
                                                        <div>
                                                            <div>
                                                                <h3><a href="#">Tops</a></h3>
                                                                <ul>
                                                                    <li><a href="#">Evening</a></li>
                                                                    <li><a href="#">Long Sleeved</a></li>
                                                                    <li><a href="#">Shrot Sleeved</a></li>
                                                                    <li><a href="#">Tanks and Camis</a></li>
                                                                    <li><a href="#">Sleeveless</a></li>
                                                                    <li><a href="#">Sleeveless</a></li>
                                                                </ul>
                                                            </div>
                                                            <div>
                                                                <a href="#"><img
                                                                        src="client\img\banner\banner3.jpg"
                                                                        alt=""></a>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </li>
                                                <li><a href="#">Thời trang bé trai</a>
                                                    <div>
                                                        <div>
                                                            <div>
                                                                <h3><a href="#">Rings</a></h3>
                                                                <ul>
                                                                    <li><a href="#">Platinum Rings</a></li>
                                                                    <li><a href="#">Gold Ring</a></li>
                                                                    <li><a href="#">Silver Ring</a></li>
                                                                    <li><a href="#">Tungsten Ring</a></li>
                                                                    <li><a href="#">Sweets</a></li>
                                                                </ul>
                                                            </div>
                                                            <div>
                                                                <h3><a href="#">Bands</a></h3>
                                                                <ul>
                                                                    <li><a href="#">Platinum Bands</a></li>
                                                                    <li><a href="#">Gold Bands</a></li>
                                                                    <li><a href="#">Silver Bands</a></li>
                                                                    <li><a href="#">Silver Bands</a></li>
                                                                    <li><a href="#">Sweets</a></li>
                                                                </ul>
                                                            </div>
                                                            <div>
                                                                <a href="#"><img
                                                                        src="client\img\banner\banner3.jpg"
                                                                        alt=""></a>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </li>

                                                <li><a href="#">pages</a>
                                                    <div>
                                                        <div>
                                                            <div>
                                                                <h3><a href="#">Column1</a></h3>
                                                                <ul>
                                                                    <li><a href="portfolio.html">Portfolio</a></li>
                                                                    <li><a href="portfolio-details.html">single
                                                                            portfolio </a></li>
                                                                    <li><a href="about.html">About Us </a></li>
                                                                    <li><a href="about-2.html">About Us 2</a></li>
                                                                    <li><a href="services.html">Service </a></li>
                                                                    <li><a href="my-account.html">my account </a></li>
                                                                </ul>
                                                            </div>
                                                            <div>
                                                                <h3><a href="#">Column2</a></h3>
                                                                <ul>
                                                                    <li><a href="blog.html">Blog </a></li>
                                                                    <li><a href="blog-details.html">Blog Details </a>
                                                                    </li>
                                                                    <li><a href="blog-fullwidth.html">Blog
                                                                            FullWidth</a></li>
                                                                    <li><a href="blog-sidebar.html">Blog Sidebar</a>
                                                                    </li>
                                                                    <li><a href="faq.html">Frequently Questions</a>
                                                                    </li>
                                                                    <li><a href="404.html">404</a></li>
                                                                </ul>
                                                            </div>
                                                            <div>
                                                                <h3><a href="#">Column3</a></h3>
                                                                <ul>
                                                                    <li><a href="contact.html">Contact</a></li>
                                                                    <li><a href="cart.html">cart</a></li>
                                                                    <li><a href="checkout.html">Checkout </a></li>
                                                                    <li><a href="wishlist.html">Wishlist</a></li>
                                                                    <li><a href="login.html">Login</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>

                                                <li><a href="">Tin tức</a>
                                                    <div>
                                                        <div>
                                                            <ul>
                                                                <li><a href="blog-details.html">blog details</a></li>
                                                                <li><a href="blog-fullwidth.html">blog fullwidth</a>
                                                                </li>
                                                                <li><a href="blog-sidebar.html">blog sidebar</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li><a href="">Liên hệ</a></li>

                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--header end -->


                @yield('body')




                <!--footer area start-->
                <div class="footer_area">
                    <div class="footer_top">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <div class="footer_widget">
                                        <h3>Về chúng tôi</h3>
                                        <p>NIZI SHOP chuyên về các loại mặt hàng thời trang cho bé nhỏ.</p>
                                        <div class="footer_widget_contect">
                                            <p><i class="fa fa-map-marker" aria-hidden="true"></i> 180 Cao Lỗ, Phường
                                                8, Quận 8, TPHCM</p>

                                            <p><i class="fa fa-mobile" aria-hidden="true"></i> (099) 313 222 4444</p>
                                            <a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i>
                                                DH51903588@stu.edu.vn </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <div class="footer_widget">
                                        <h3>Thông tin</h3>
                                        <ul>

                                            <li><a href="">Về chúng tôi</a></li>
                                            <li><a href="#">Chính sách vận chuyển</a></li>
                                            <li><a href="#">Chính sách đổi trả</a></li>
                                            <li><a href="#">Liên hệ</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <div class="footer_widget">
                                        <h3>Sản phẩm</h3>
                                        <ul>
                                            <li><a href="#">Tất cả sản phẩm</a></li>
                                            <li><a href="#">Sản phẩm nổi bật</a></li>
                                            <li><a href="#">Sản phẩm mới</a></li>
                                            <li><a href="#">Sản phẩm Sale</a></li>

                                        </ul>
                                    </div>
                                </div>
                                {{-- <div class="col-lg-3 col-md-6 col-sm-6">
                                    <div class="footer_widget">
                                        <h3>extras</h3>
                                        <ul>
                                            <li><a href="#"> Brands</a></li>
                                            <li><a href="#"> Gift Vouchers </a></li>
                                            <li><a href="#"> Affiliates </a></li>
                                            <li><a href="#"> Specials </a></li>
                                            <li><a href="#"> Privacy policy </a></li>
                                        </ul>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                    <div class="footer_bottom">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-lg-6 col-md-6">
                                    <div class="copyright_area">

                                        <p>Copyright &copy; 2024 <a href="#">NGUYỄN TRUNG HIẾU</a>. All rights
                                            reserved.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="footer_social text-right">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                                            <li><a href="#"><i class="fa fa-google" aria-hidden="true"></i></a>
                                            </li>

                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--footer area end-->

                <!-- modal area start -->
                <div class="modal fade" id="modal_box" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <div class="modal_body">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-5 col-md-5 col-sm-12">
                                            <div class="modal_tab">
                                                <div class="tab-content" id="pills-tabContent">
                                                    <div class="tab-pane fade show active" id="tab1"
                                                        role="tabpanel">
                                                        <div class="modal_tab_img">
                                                            <a href="#"><img
                                                                    src="client\img\product\product13.jpg"
                                                                    alt=""></a>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="tab2" role="tabpanel">
                                                        <div class="modal_tab_img">
                                                            <a href="#"><img
                                                                    src="client\img\product\product14.jpg"
                                                                    alt=""></a>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="tab3" role="tabpanel">
                                                        <div class="modal_tab_img">
                                                            <a href="#"><img
                                                                    src="client\img\product\product15.jpg"
                                                                    alt=""></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal_tab_button">
                                                    <ul class="nav product_navactive" role="tablist">
                                                        <li>
                                                            <a class="nav-link active" data-toggle="tab"
                                                                href="#tab1" role="tab" aria-controls="tab1"
                                                                aria-selected="false"><img
                                                                    src="client\img\cart\cart17.jpg"
                                                                    alt=""></a>
                                                        </li>
                                                        <li>
                                                            <a class="nav-link" data-toggle="tab" href="#tab2"
                                                                role="tab" aria-controls="tab2"
                                                                aria-selected="false"><img
                                                                    src="client\img\cart\cart18.jpg"
                                                                    alt=""></a>
                                                        </li>
                                                        <li>
                                                            <a class="nav-link button_three" data-toggle="tab"
                                                                href="#tab3" role="tab" aria-controls="tab3"
                                                                aria-selected="false"><img
                                                                    src="client\img\cart\cart19.jpg"
                                                                    alt=""></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-7 col-md-7 col-sm-12">
                                            <div class="modal_right">
                                                <div class="modal_title mb-10">
                                                    <h2>Handbag feugiat</h2>
                                                </div>
                                                <div class="modal_price mb-10">
                                                    <span class="new_price">$64.99</span>
                                                    <span class="old_price">$78.99</span>
                                                </div>
                                                <div class="modal_content mb-10">
                                                    <p>Short-sleeved blouse with feminine draped sleeve detail.</p>
                                                </div>
                                                <div class="modal_size mb-15">
                                                    <h2>size</h2>
                                                    <ul>
                                                        <li><a href="#">s</a></li>
                                                        <li><a href="#">m</a></li>
                                                        <li><a href="#">l</a></li>
                                                        <li><a href="#">xl</a></li>
                                                        <li><a href="#">xxl</a></li>
                                                    </ul>
                                                </div>
                                                <div class="modal_add_to_cart mb-15">
                                                    <form action="#">
                                                        <input min="0" max="100" step="2"
                                                            value="1" type="number">
                                                        <button type="submit">add to cart</button>
                                                    </form>
                                                </div>
                                                <div class="modal_description mb-15">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                        eiusmod
                                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                                                        minim veniam,
                                                    </p>
                                                </div>
                                                <div class="modal_social">
                                                    <h2>Share this product</h2>
                                                    <ul>
                                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-google-plus"></i></a>
                                                        </li>
                                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- modal area end -->




                <!-- all js here -->
                <script src="client/js/vendor/jquery-1.12.0.min.js"></script>
                <script src="client/js/popper.js"></script>
                <script src="client/js/bootstrap.min.js"></script>
                <script src="client/js/ajax-mail.js"></script>
                <script src="client/js/plugins.js"></script>
                <script src="client/js/main.js"></script>
</body>

</html>

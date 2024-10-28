@extends('client.layout.master')

@section('title', 'Sản phẩm')
@section('body')
    <div class="pos_page">
        <div class="container">
            <!--pos page inner-->
            <div class="pos_page_inner">

                <!--breadcrumbs area start-->
                <div class="breadcrumbs_area">
                    <div class="row">
                        <div class="col-12">
                            <div class="breadcrumb_content">
                                <ul>
                                    <li><a href="{{ route('trangchu') }}">Trang chủ</a></li>
                                    <li><i class="fa fa-angle-right"></i></li>
                                    <li>Sản phẩm</li>
                                </ul>

                            </div>
                        </div>
                    </div>
                </div>
                <!--breadcrumbs area end-->

                <!--pos home section-->
                <div class=" pos_home_section">
                    <div class="row pos_home">
                        <div class="col-lg-3 col-md-12">
                            <!--layere categorie"-->
                            <div class="sidebar_widget shop_c">
                                <div class="categorie__titile">
                                    <h4>Danh mục sản phẩm</h4>
                                </div>
                                <div class="layere_categorie">
                                    <ul>
                                        <li>
                                            <input id="acces" type="checkbox">
                                            <label for="acces">Accessories<span>(1)</span></label>
                                        </li>
                                        <li>
                                            <input id="dress" type="checkbox">
                                            <label for="dress">Dresses <span>(2)</span></label>
                                        </li>
                                        <li>
                                            <input id="tops" type="checkbox">
                                            <label for="tops">Tops<span>(3)</span></label>
                                        </li>
                                        <li>
                                            <input id="bag" type="checkbox">
                                            <label for="bag">HandBags<span>(4)</span></label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!--layere categorie end-->

                            <!--color area start-->
                            <div class="sidebar_widget color">
                                <h2>Màu</h2>
                                <div class="widget_color">
                                    <ul>
                                        <li><a href="#">Đen <span>(10)</span></a></li>
                                        <li><a href="#">Vàng <span>(12)</span></a></li>
                                        <li> <a href="#">Hồng <span>(14)</span></a></li>
                                        <li><a href="#">Xanh lá <span>(15)</span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <!--color area end-->

                            <!--price slider start-->
                            <div class="sidebar_widget price">
                                <h2>Giá</h2>
                                <div class="ca_search_filters">

                                    <input type="text" name="text" id="amount">
                                    <div id="slider-range"></div>
                                </div>
                            </div>
                            <!--price slider end-->
                        </div>
                        <div class="col-lg-9 col-md-12">
                            <!--banner slider start-->
                            <div class="banner_slider mb-35">
                                <img src="client\img\banner\bannner10.jpg" alt="">
                            </div>
                            <!--banner slider start-->

                            <!--shop toolbar start-->
                            <div class="shop_toolbar mb-35">

                                <div class="list_button">
                                    <ul class="nav" role="tablist">
                                        <li>
                                            <a class="active" data-toggle="tab" href="#large" role="tab"
                                                aria-controls="large" aria-selected="true"><i
                                                    class="fa fa-th-large"></i></a>
                                        </li>
                                        <li>
                                            <a data-toggle="tab" href="#list" role="tab" aria-controls="list"
                                                aria-selected="false"><i class="fa fa-th-list"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="page_amount">
                                    <p>Hiển thị từ 1–9 của 21 kết quả</p>
                                </div>

                                <div class="select_option">
                                    <form action="#">
                                        <label>Sắp xếp</label>
                                        <select name="orderby" id="short">
                                            <option selected="" value="1">Mới nhất</option>
                                            <option value="1">Cũ nhất</option>
                                            <option value="1">Giá: Thấp nhất</option>
                                            <option value="1">Giá: Cao nhấy</option>
                                            <option value="1">Giá tăng dần </option>
                                            <option value="1">Giá giảm dần</option>

                                        </select>
                                    </form>
                                </div>
                            </div>
                            <!--shop toolbar end-->

                            <!--shop tab product-->
                            <div class="shop_tab_product">
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="large" role="tabpanel">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-6">
                                                <div class="single_product">
                                                    <div class="product_thumb">
                                                        <a href="single-product.html"><img
                                                                src="client\img\product\product1.jpg" alt=""></a>
                                                        <div class="img_icone">
                                                            <img src="client\img\cart\span-new.png" alt="">
                                                        </div>
                                                        <div class="product_action">
                                                            <a href="#"> <i class="fa fa-shopping-cart"></i> Thêm vào
                                                                giỏ</a>
                                                        </div>
                                                    </div>
                                                    <div class="product_content">
                                                        <span class="product_price">$50.00</span>
                                                        <h3 class="product_title"><a href="single-product.html">Curabitur
                                                                sodales</a></h3>
                                                    </div>
                                                    <div class="product_info">
                                                        <ul>
                                                            <li><a href="#" title=" Thêm vào yêu thích">Thêm vào yêu
                                                                    thích</a></li>
                                                            <li><a href="#" data-toggle="modal"
                                                                    data-target="#modal_box" title="Xem nhanh">Xem
                                                                    nhanh</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <div class="single_product">
                                                    <div class="product_thumb">
                                                        <a href="single-product.html"><img
                                                                src="client\img\product\product2.jpg" alt=""></a>
                                                        <div class="hot_img">
                                                            <img src="client\img\cart\span-hot.png" alt="">
                                                        </div>
                                                        <div class="product_action">
                                                            <a href="#"> <i class="fa fa-shopping-cart"></i> Thêm
                                                                vào giỏ</a>

                                                        </div>
                                                    </div>
                                                    <div class="product_content">
                                                        <span class="product_price">$40.00</span>
                                                        <h3 class="product_title"><a href="single-product.html">Quisque
                                                                ornare dui</a></h3>
                                                    </div>
                                                    <div class="product_info">
                                                        <ul>
                                                            <li><a href="#" title=" Thêm vào yêu thích">Thêm vào yêu
                                                                    thích</a></li>

                                                            <li><a href="#" data-toggle="modal"
                                                                    data-target="#modal_box" title="Xem nhanh">Xem
                                                                    nhanh</a></li>

                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="list" role="tabpanel">
                                        <div class="product_list_item mb-35">
                                            <div class="row align-items-center">
                                                <div class="col-lg-4 col-md-6 col-sm-6">
                                                    <div class="product_thumb">
                                                        <a href="single-product.html"><img
                                                                src="client\img\product\product2.jpg" alt=""></a>
                                                        <div class="hot_img">
                                                            <img src="client\img\cart\span-hot.png" alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-8 col-md-6 col-sm-6">
                                                    <div class="list_product_content">
                                                        <div class="product_ratting">
                                                            <ul>
                                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="list_title">
                                                            <h3><a href="single-product.html">Lorem ipsum dolor</a></h3>
                                                        </div>
                                                        <p class="design"> in quibusdam accusantium qui nostrum
                                                            consequuntur, officia, quidem ut placeat. Officiis, incidunt eos
                                                            recusandae! Facilis aliquam vitae blanditiis quae perferendis
                                                            minus eligendi</p>

                                                        <p class="compare">
                                                           
                                                        </p>
                                                        <div class="content_price">
                                                            <span>$118.00</span>
                                                            <span class="old-price">$130.00</span>
                                                        </div>
                                                        <div class="add_links">
                                                            <ul>
                                                                <li><a href="#" title="Thêm vào giỏ"><i
                                                                            class="fa fa-shopping-cart"
                                                                            aria-hidden="true"></i></a></li>
                                                                <li><a href="#" title="Thêm vào yêu thích"><i
                                                                            class="fa fa-heart"
                                                                            aria-hidden="true"></i></a></li>
                                                                <li><a href="#" data-toggle="modal"
                                                                        data-target="#modal_box" title="Xem nhanh"><i
                                                                            class="fa fa-eye" aria-hidden="true"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product_list_item mb-35">
                                            <div class="row align-items-center">
                                                <div class="col-lg-4 col-md-6 col-sm-6">
                                                    <div class="product_thumb">
                                                        <a href="single-product.html"><img
                                                                src="client\img\product\product3.jpg" alt=""></a>
                                                        <div class="img_icone">
                                                            <img src="client\img\cart\span-new.png" alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-8 col-md-6 col-sm-6">
                                                    <div class="list_product_content">
                                                        <div class="product_ratting">
                                                            <ul>
                                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="list_title">
                                                            <h3><a href="single-product.html">Quisque ornare dui</a></h3>
                                                        </div>
                                                        <p class="design"> in quibusdam accusantium qui nostrum
                                                            consequuntur, officia, quidem ut placeat. Officiis, incidunt eos
                                                            recusandae! Facilis aliquam vitae blanditiis quae perferendis
                                                            minus eligendi</p>

                                                        <p class="compare">
                                                            
                                                        </p>
                                                        <div class="content_price">
                                                            <span>$118.00</span>
                                                            <span class="old-price">$130.00</span>
                                                        </div>
                                                        <div class="add_links">
                                                            <ul>
                                                                <li><a href="#" title="Thêm vào giỏ"><i
                                                                    class="fa fa-shopping-cart"
                                                                    aria-hidden="true"></i></a></li>
                                                        <li><a href="#" title="Thêm vào yêu thích"><i
                                                                    class="fa fa-heart"
                                                                    aria-hidden="true"></i></a></li>
                                                        <li><a href="#" data-toggle="modal"
                                                                data-target="#modal_box" title="Xem nhanh"><i
                                                                    class="fa fa-eye" aria-hidden="true"></i></a>
                                                        </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                       
                                    </div>

                                </div>
                            </div>
                            <!--shop tab product end-->

                            <!--pagination style start-->
                            <div class="pagination_style">
                                <div class="item_page">
                                    <form action="#">
                                        <label for="page_select">Hiển thị</label>
                                        <select id="page_select">
                                            <option value="1">9</option>
                                            <option value="2">10</option>
                                            <option value="3">11</option>
                                        </select>
                                        <span>kết quả trên trang</span>
                                    </form>
                                </div>
                                <div class="page_number">
                                    <span>Trang: </span>
                                    <ul>
                                        <li>«</li>
                                        <li class="current_number">1</li>
                                        <li><a href="#">2</a></li>
                                        <li>»</li>
                                    </ul>
                                </div>
                            </div>
                            <!--pagination style end-->
                        </div>
                    </div>
                </div>
                <!--pos home section end-->
            </div>
            <!--pos page inner end-->
        </div>
    </div>
@endsection

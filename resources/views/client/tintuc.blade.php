@extends('client.layout.master')

@section('title', 'Tin tức')
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
                                <li>Tin tức</li>
                            </ul>
        
                        </div>
                    </div>
                </div>
            </div>
            <!--breadcrumbs area end-->

            <!--blog area start-->
            <div class="blog_area">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="single_blog">
                            <div class="blog_thumb">
                                <a href="blog-details.html"><img src="assets\img\blog\blog3.jpg" alt=""></a>
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
                                <p>Distinctively simplify dynamic resources whereas prospective core competencies.
                                    Objectively pursue multidisciplinary human capital for interoperable.</p>
                                <div class="post_footer">
                                    <div class="post_meta">
                                        <ul>
                                            <li>20 Tháng 9, 2024</li>
                                            <li>3 Bình luận</li>
                                        </ul>
                                    </div>
                                    <div class="Read_more">
                                        <a href="blog-details.html">Xem thêm <i
                                                class="fa fa-angle-double-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                </div>
            </div>
            <!--blog area end-->

            <!--pagination style start-->
            <div class="blog_pagination">
                <div class="row">
                    <div class="col-12">
                        <div class="page_number">
                            <span>Pages: </span>
                            <ul>
                                <li>«</li>
                                <li class="current_number">1</li>
                                <li><a href="#">2</a></li>
                                <li>»</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--pagination style end-->


        </div>
        <!--pos page inner end-->
    </div>
</div>
@endsection

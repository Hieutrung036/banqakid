@extends('client.layout.master')

@section('title', 'Chi tiết giỏ hàng')
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
                        <li>Chi tiết giỏ hàng</li>
                    </ul>

                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->




                <!--shopping cart area start -->
                <div class="shopping_cart_area">
                    <form action="#">
                        <div class="row">
                            <div class="col-12">
                                <div class="table_desc">
                                    <div class="cart_page table-responsive">
                                        <table>
                                            <thead>
                                                <tr>
                                                    <th class="product_remove">Xóa</th>
                                                    <th class="product_thumb">Hình ảnh</th>
                                                    <th class="product_name">Tên sản phẩm</th>
                                                    <th class="product-price">Giá</th>
                                                    <th class="product_quantity">Số lượng</th>
                                                    <th class="product_total">tổng tiền</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="product_remove"><a href="#"><i
                                                                class="fa fa-trash-o"></i></a></td>
                                                    <td class="product_thumb"><a href="#"><img
                                                                src="client\img\cart\cart17.jpg" alt=""></a></td>
                                                    <td class="product_name"><a href="#">Handbag fringilla</a></td>
                                                    <td class="product-price">£65.00</td>
                                                    <td class="product_quantity"><input min="0" max="100"
                                                            value="1" type="number"></td>
                                                    <td class="product_total">£130.00</td>


                                                </tr>

                                                <tr>
                                                    <td class="product_remove"><a href="#"><i
                                                                class="fa fa-trash-o"></i></a></td>
                                                    <td class="product_thumb"><a href="#"><img
                                                                src="client\img\cart\cart18.jpg" alt=""></a></td>
                                                    <td class="product_name"><a href="#">Handbags justo</a></td>
                                                    <td class="product-price">£90.00</td>
                                                    <td class="product_quantity"><input min="0" max="100"
                                                            value="1" type="number"></td>
                                                    <td class="product_total">£180.00</td>


                                                </tr>
                                               

                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="cart_submit">
                                        <button type="submit">Cập nhật giỏ hàng</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--coupon code area start-->
                        <div class="coupon_area">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="coupon_code">
                                        <h3>Mã giảm giá</h3>
                                        <div class="coupon_inner">
                                            <p>Nhập mã sản phẩm.</p>
                                            <input placeholder="Mã giảm giá" type="text">
                                            <button type="submit">Xác nhận</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="coupon_code">
                                        <h3>Tổng tiền</h3>
                                        <div class="coupon_inner">
                                            <div class="cart_subtotal">
                                                <p>Tổng tiền</p>
                                                <p class="cart_amount">£215.00</p>
                                            </div>
                                            <div class="cart_subtotal ">
                                                <p>Phí ship</p>
                                                <p class="cart_amount"><span>Giá cố định:</span> £255.00</p>
                                            </div>
                                            <a href="#">Chi phí vận chuyển</a>

                                            <div class="cart_subtotal">
                                                <p>Tổng</p>
                                                <p class="cart_amount">£215.00</p>
                                            </div>
                                            <div class="checkout_btn">
                                                <a href="#">Tiến thành thanh toán</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--coupon code area end-->
                    </form>
                </div>
                <!--shopping cart area end -->

            </div>
            <!--pos page inner end-->
        </div>
    </div>
    <!--pos page end-->

@endsection

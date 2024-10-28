@extends('admin.layout.indexmain')
@section('title', 'Chi tiết sản phẩm')

@section('body')
    <h1 style="font-size: 20px">CHI TIẾT SẢN PHẨM</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
            <li class="breadcrumb-item">Quản lý sản phẩm</li>
            <li class="breadcrumb-item active">Chi tiết sản phẩm</li>
        </ol>
    </nav>
    <a href="{{ route('admin.sanpham') }}" class="btn btn-success">
        🡠 Quay lại
    </a>
    @if (session('success'))
        <div id="success-alert" class="alert alert-success alert-dismissible fade show position-fixed top-0 end-0 m-3"
            role="alert" style="z-index: 1055;">
            {{ session('success') }}
        </div>
    @endif

    @if ($errors->any())
        <div id="error-popup" class="alert alert-danger" style="position: fixed; top: 20px; right: 20px; z-index: 1000;">
            <ul style="list-style: none; padding: 0; margin: 0;">
                @foreach ($errors->all() as $error)
                    <li>{{ rtrim($error, '.') }}</li> <!-- Xóa dấu chấm ở cuối -->
                @endforeach
            </ul>
        </div>
    @endif
    <div class="modal fade" id="add-product" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Thêm màu và kích thước</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('admin.chitietsanpham.store') }}" method="POST">
                        @csrf
                        <div class="mb-3 row">
                            <label for="ten" class="col-sm-3 col-form-label">Tên sản phẩm</label>
                            <div class="col-sm-9">
                                <select id="idsp" name="idsp" required class="form-control">

                                    <option value="{{ $sanpham->idsp }}">{{ $sanpham->ten }}</option>
                                </select>
                            </div>
                        </div>


                        <div class="mb-3 row">
                            <label for="idm" class="col-sm-3 col-form-label">Màu</label>
                            <div class="col-sm-9">
                                <select id="idm" name="idm" required class="form-control">
                                    <option value="">Chọn màu</option>
                                    @foreach ($mau as $m)
                                        <option value="{{ $m->idm }}">{{ $m->ten }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="idkt" class="col-sm-3 col-form-label">Kích thước</label>
                            <div class="col-sm-9">
                                <select id="idkt" name="idkt" required class="form-control">
                                    <option value="">Chọn kích thước</option>
                                    @foreach ($kichthuoc as $kt)
                                        <option value="{{ $kt->idkt }}">{{ $kt->ten }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        
                        <div class="mb-3 row">
                            <label for="soluong" class="col-sm-3 col-form-label">Số lượng</label>
                            <div class="col-sm-9">
                                <input id="soluong" type="text" class="form-control" name="soluong" required
                                    placeholder="Nhập số lượng" />
                            </div>
                        </div>



                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                            <button type="submit" class="btn btn-primary">Lưu</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="product-details">
        <table class="table table-form" id="dataTable" width="100%" cellspacing="0">
            <tr>
                <td width="200px">Tên sản phẩm:</td>
                <td colspan="2">{{ $sanpham->ten }}</td>
            </tr>
            <tr>
                <td>Mô tả:</td>
                <td colspan="2">{{ $sanpham->mota }}</td>
            </tr>
            <tr>
                <td>Giá:</td>
                <td colspan="2">{{ number_format($sanpham->gia, 0, ',', ',') }} VND</td>
            </tr>

            <tr>
                <td>Chất liệu:</td>
                <td colspan="2">{{ $sanpham->chatlieu }}</td>

            </tr>
            <tr>
                <td>Số lượng:</td>
                <td colspan="2">
                    @php
                        $tongSoLuong = 0;
                    @endphp
                    @foreach ($sanpham->chitietsanpham as $ctsp)
                        @php
                            $tongSoLuong += $ctsp->soluong;
                        @endphp
                    @endforeach
                    {{ $tongSoLuong }} cái
                </td>

            </tr>
            <tr>
                <td>Đánh giá:</td>
                <td colspan="2">0</td>
                {{-- <td colspan="2">
                    @php
                        $tongsosao = 0;
                        $totalReviews = 0;
                        foreach ($sanpham->chitietsanpham as $chitietdanhgia) {
                            $totalReviews += $chitietdanhgia->danhgia->count();
                        }
                    @endphp
                    @foreach ($sanpham->chitietsanpham as $sanpham)
                        @foreach ($sanpham->danhgia as $danhgia)
                            @php
                                $tongsosao += $danhgia->Sosao;
                            @endphp
                        @endforeach
                    @endforeach
                    @php
                        if ($totalReviews > 0) {
                            $trungbinh = number_format($tongsosao / $totalReviews, 1);
                            $whole_star = floor($trungbinh); 
                            $fraction_star = $trungbinh - $whole_star; 
                        } else {
                            $trungbinh = 0;
                        }
                    @endphp
                    {{ $trungbinh }}/5 sao, {{ $totalReviews }} lượt đánh giá
                </td> --}}

            </tr>
            <tr>
                <td>Màu:</td>
                <td>
                    @php
                        $uniqueColors = [];
                    @endphp
                    @foreach ($sanpham->chitietsanpham as $chitietsanpham)
                        @php
                            $colorName = $chitietsanpham->mau->ten;
                            if (!in_array($colorName, $uniqueColors)) {
                                $uniqueColors[] = $colorName;
                            }
                        @endphp
                    @endforeach

                    @foreach ($uniqueColors as $color)
                        {{ $color }},
                    @endforeach
                </td>

                <td rowspan="2" width="150px" valign="middle" align="center">
                    <button type="button" class="btn btn-warning" data-bs-toggle="modal">
                        <a href="{{ route('admin.chitietsanpham1', $sanpham->idsp) }}"> Xem</a>
                    </button>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add-product">
                        Thêm
                    </button>
                </td>
            </tr>
            <tr>
                <td>Kích thước:</td>
                <td>
                    @php
                        $uniqueSizes = [];
                    @endphp
                    @foreach ($sanpham->chitietsanpham as $chitietsanpham)
                        @php
                            $sizeName = $chitietsanpham->kichthuoc->ten;
                            if (!in_array($sizeName, $uniqueSizes)) {
                                $uniqueSizes[] = $sizeName;
                            }
                        @endphp
                    @endforeach
                    @foreach ($uniqueSizes as $size)
                        {{ $size }},
                    @endforeach
                </td>

            </tr>
            <tr>
                <td>Loại sản phẩm:</td>
                <td colspan="2"> {{ $sanpham->loaisanpham->ten }}</td>

            </tr>
            <tr>
                <td>Thương hiệu:</td>
                <td colspan="2"> {{ $sanpham->thuonghieu->ten }}</td>

            </tr>
            <tr>
                <td>Giảm giá:</td>
                <td colspan="2"> {{ $sanpham->giamgia->phantram }}%</td>

            </tr>
            <tr>
                <td>Hình chính:</td>
                <td colspan="2">tý làm</td>

            </tr>
            <tr>
                <td>Hình phụ:</td>
                <td colspan="2">tý làm</td>

            </tr>
        </table>
    </div>
@endsection

@section('search')
    <form action="" method="GET" class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        <div class="input-group">

        </div>
    </form>
@endsection

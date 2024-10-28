@extends('admin.layout.indexmain')
@section('title', 'Tin tức')

@section('body')
    <h1 style="font-size: 20px">TIN TỨC</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Trang chủ</a></li>
            <li class="breadcrumb-item">Quản lý tin tức</li>
            <li class="breadcrumb-item active">Danh sách tin tức</li>
        </ol>
    </nav>
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
    <!-- Nút mở popup -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add-product">
        Thêm tin tức
    </button>

    <!-- popup thêm người dùng -->
    <div class="modal fade" id="add-product" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Thêm tin tức</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('admin.tintuc.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="tieude" class="form-label">Tiêu đề</label>
                            <input id="tieude" type="text" class="form-control" name="tieude" required
                                placeholder="Nhập tiêu đề" />
                        </div>

                        <div class="mb-3">
                            <label for="noidung" class="form-label">Nội dung</label>
                            <textarea id="noidung" class="form-control" name="noidung" rows="5" placeholder="Nhập nội dung bài viết"
                                required></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="image" class="form-label">Hình ảnh</label>
                            <input id="image" type="file" class="form-control" name="image[]" accept="image/*"
                                multiple required />
                        </div>


                        <div class="mb-3">
                            <label for="idltt" class="form-label">Loại tin tức</label>
                            <select id="idltt" name="idltt" required class="form-control">
                                <option value="">Chọn loại tin tức</option>
                                @foreach ($loaitintuc as $ltt)
                                    <option value="{{ $ltt->idltt }}">{{ $ltt->ten }} </option>
                                @endforeach
                            </select>
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


    <div>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tiêu đề</th>
                    <th>Ngày đăng</th>
                    <th>Loại tin tức</th>
                    <th>Thao tác</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tintuc as $tt)
                    <tr>
                        <td>{{ $loop->iteration + ($tintuc->currentPage() - 1) * $tintuc->perPage() }}</td>
                        <td>{{ $tt->tieude }}</td>
                        <td>{{ \Carbon\Carbon::parse($tt->ngaydang)->format('Y-m-d') }}</td>
                        <td>{{ $tt->loaitintuc->ten }}</td>
                        <td>
                            <!-- Nút Sửa -->
                            <button class="btn btn-warning" data-bs-toggle="modal"
                                data-bs-target="#edit-modal-{{ $tt->idtt }}">Sửa</button>
                            <!-- Popup sửa tin tức -->
                            <div class="modal fade" id="edit-modal-{{ $tt->idtt }}" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Sửa tin tức</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{ route('admin.mau.update', $tt->idtt) }}" method="POST"
                                                enctype="multipart/form-data">
                                                @csrf
                                                @method('PUT')

                                                <div class="mb-3">
                                                    <label for="tieude" class="form-label">Tiêu đề</label>
                                                    <input id="tieude" type="text" class="form-control" name="ten"
                                                        value="{{ $tt->tieude }}" required
                                                        placeholder="Nhập tên tiêu đề" />
                                                </div>

                                                <div class="mb-3">
                                                    <label for="noidung" class="form-label">Nội dung</label>
                                                    <textarea id="noidung" class="form-control" name="noidung" rows="4" required placeholder="Nhập mô tả">{{ $tt->noidung }}</textarea>
                                                </div>

                                                <div class="mb-3">
                                                    <label for="image" class="form-label">Hình ảnh</label>
                                                    <!-- Hiển thị hình ảnh cũ nếu có -->
                                                    @if ($tt->hinhanh) <!-- Giả sử $tt->hinhanh là trường chứa đường dẫn hình ảnh -->
                                                        <div>
                                                            <img src="{{ asset('uploads/' . $tt->hinhanh->duongdan) }}" alt="Hình ảnh hiện tại" style="max-width: 100%; height: auto;" />
                                                        </div>
                                                    @endif
                                                    <input id="image" type="file" class="form-control" name="image[]" accept="image/*" multiple />
                                                </div>

                                                <div class="mb-3">
                                                    <label for="idltt" class="form-label">Loại tin tức</label>
                                                    <select id="idltt" name="idltt" required class="form-control">
                                                        <option value="">Chọn loại tin tức</option>
                                                        @foreach ($loaitintuc as $ltt)
                                                            <option value="{{ $ltt->idltt }}"
                                                                {{ $tt->idltt == $ltt->idltt ? 'selected' : '' }}>
                                                                {{ $ltt->ten }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>

                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Đóng</button>
                                                    <button type="submit" class="btn btn-primary">Lưu</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <!-- Nút Xóa -->
                            <form action="{{ route('admin.tintuc.destroy', $tt->idtt) }}" method="POST"
                                style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                    data-bs-target="#delete-modal-{{ $tt->idtt }}">Xóa</button>

                                <!-- Popup xác nhận xóa -->
                                <div class="modal fade" id="delete-modal-{{ $tt->idtt }}" tabindex="-1"
                                    aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Xác nhận xóa</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                Bạn có chắc chắn muốn xóa tin tức này không?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Hủy</button>
                                                <button type="submit" class="btn btn-danger">Xóa</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </td>
                    </tr>
                @endforeach


            </tbody>
        </table>
        <nav aria-label="Page navigation">
            <ul class="pagination justify-content-center">
                {{ $tintuc->links('vendor.pagination.bootstrap-4') }}
            </ul>
        </nav>
    </div>

@endsection


@section('search')
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Tìm kiếm tin tức..." aria-label="Search"
                aria-describedby="basic-addon2">
            <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </div>
    </form>
@endsection

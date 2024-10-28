@extends('admin.layout.indexmain')
@section('title', 'Người dùng')

@section('body')
    <h1 style="font-size: 20px">NGƯỜI DÙNG</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Trang chủ</a></li>
            <li class="breadcrumb-item">Quản lý người dùng</li>
            <li class="breadcrumb-item active">Danh sách người dùng</li>
        </ol>
    </nav>

    <!-- Nút mở popup -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add-product">
        Thêm người dùng
    </button>

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
    <!-- popup thêm người dùng -->
    <div class="modal fade" id="add-product" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Thêm người dùng</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('admin.nguoidung.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3 row">
                            <label for="ten" class="col-sm-3 col-form-label">Tên người dùng</label>
                            <div class="col-sm-9">
                                <input id="ten" type="text" class="form-control" name="ten" required
                                    placeholder="Nhập tên người dùng" />
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="sdt" class="col-sm-3 col-form-label">Số điện thoại</label>
                            <div class="col-sm-9">
                                <input id="sdt" type="text" class="form-control" name="sdt" required
                                    placeholder="Nhập số điện thoại" />
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="email" class="col-sm-3 col-form-label">Email</label>
                            <div class="col-sm-9">
                                <input id="email" type="text" class="form-control" name="email" required
                                    placeholder="Nhập email" />
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="matkhau" class="col-sm-3 col-form-label">Mật khẩu</label>
                            <div class="col-sm-9">
                                <input id="matkhau" type="password" class="form-control" name="matkhau"
                                    autocomplete="matkhau" placeholder="Nhập mật khẩu" />
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="role" class="col-sm-3 col-form-label">Quyền</label>
                            <div class="col-sm-9">
                                <select id="quyen" name="quyen" required class="form-control">
                                    <option value="0">Khách hàng</option>
                                    <option value="1">Nhân viên</option>
                                    <option value="2">Quản trị viên</option>
                                </select>
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

    <div>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tên người dùng</th>
                    <th>Số điện thoại</th>
                    <th>Email</th>
                    <th>Quyền</th>
                    <th>Thao tác</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($nguoidung as $nd)
                    <tr>
                        <td>{{ $loop->iteration + ($nguoidung->currentPage() - 1) * $nguoidung->perPage() }}</td>
                        <td>{{ $nd->ten }}</td>
                        <td>0{{ $nd->sdt }}</td>
                        <td>{{ $nd->email }}</td>
                        <td>
                            @if ($nd->quyen == 2)
                                Quản trị viên
                            @elseif($nd->quyen == 1)
                                Nhân viên
                            @else
                                Khách hàng
                            @endif
                        </td>
                        <td>
                            <!-- Nút Sửa -->
                             <button class="btn btn-warning" data-bs-toggle="modal"
                                data-bs-target="#edit-modal-{{ $nd->idnd }}">Sửa</button>
                            <!-- Popup sửa màu -->
                            <div class="modal fade" id="edit-modal-{{ $nd->idnd }}" tabindex="-1"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Sửa người dùng</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{ route('admin.nguoidung.update', $nd->idnd) }}" method="POST">
                                                @csrf
                                                @method('PUT')
                                                <div class="mb-3 row">
                                                    <label for="ten" class="col-sm-3 col-form-label">Tên người dùng</label>
                                                    <div class="col-sm-9">
                                                        <input id="ten" type="text" class="form-control" name="ten" value="{{ $nd->ten }}"  required placeholder="Nhập tên người dùng" />
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <label for="sdt" class="col-sm-3 col-form-label">Số điện thoại</label>
                                                    <div class="col-sm-9">
                                                        <input id="sdt" type="text" class="form-control" name="sdt" value="{{ $nd->sdt }}"  required placeholder="Nhập số điện thoại" />
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <label for="email" class="col-sm-3 col-form-label">Email</label>
                                                    <div class="col-sm-9">
                                                        <input id="email" type="text" class="form-control" name="email" value="{{ $nd->email }}"  required placeholder="Nhập email" />
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <label for="role" class="col-sm-3 col-form-label">Quyền</label>
                                                    <div class="col-sm-9">
                                                        <select id="quyen" name="quyen" required class="form-control">
                                                            <option value="0" {{ $nd->quyen == 0 ? 'selected' : '' }}>Khách hàng</option>
                                                            <option value="1" {{ $nd->quyen == 1 ? 'selected' : '' }}>Nhân viên</option>
                                                            <option value="2" {{ $nd->quyen == 2 ? 'selected' : '' }}>Quản trị viên</option>
                                                        </select>
                                                    </div>
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
                            <form action="{{ route('admin.nguoidung.destroy', $nd->idnd) }}" method="POST"
                                style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                    data-bs-target="#delete-modal-{{ $nd->idnd }}">Xóa</button>

                                <!-- Popup xác nhận xóa -->
                                <div class="modal fade" id="delete-modal-{{ $nd->idnd }}" tabindex="-1"
                                    aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Xác nhận xóa</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                Bạn có chắc chắn muốn xóa người dùng này không?
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

        <!-- Hiển thị phân trang -->
        <nav aria-label="Page navigation">
            <ul class="pagination justify-content-center">
                {{ $nguoidung->links('vendor.pagination.bootstrap-4') }}
            </ul>
        </nav>
    </div>



@endsection


@section('search')

    <form action="{{ route('admin.nguoidung.search') }}" method="GET"
        class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        <div class="input-group">
            <input type="text" name="query" class="form-control" placeholder="Tìm kiếm người dùng..."
                aria-label="Search" aria-describedby="basic-addon2">
            <div class="input-group-append">
                <button class="btn btn-primary" type="submit">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </div>
    </form>
@endsection

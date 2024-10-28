@extends('admin.layout.indexmain')

@section('body')
    <h1 style="font-size: 20px">ĐƠN HÀNG</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Trang chủ</a></li>
            <li class="breadcrumb-item">Quản lý đơn hàng</li>
            <li class="breadcrumb-item active">Danh sách đơn hàng</li>
        </ol>
    </nav>

    <!-- Nút mở popup -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add-product">
        Thêm đơn hàng
    </button>

    <!-- popup thêm người dùng -->
    <div class="modal fade" id="add-product" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Thêm đơn hàng </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="userForm">
                        <div class="mb-3">
                            <label for="ten" class="form-label">Tên khách hàng</label>
                            <select id="Quyen" name="Quyen" required class="form-control">
                                <option value="0">Khách hàng</option>
                                <option value="2">Nhân viên</option>
                                <option value="1">Quản trị viên</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="role" class="form-label">Giảm giá</label>
                            <select id="Quyen" name="Quyen" required class="form-control">
                                <option value="0">Khách hàng</option>
                                <option value="2">Nhân viên</option>
                                <option value="1">Quản trị viên</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="role" class="form-label">Trạng thái</label>
                            <select id="Quyen" name="Quyen" required class="form-control">
                                <option value="0">Khách hàng</option>
                                <option value="2">Nhân viên</option>
                                <option value="1">Quản trị viên</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="role" class="form-label">Thanh toán</label>
                            <select id="Quyen" name="Quyen" required class="form-control">
                                <option value="0">Khách hàng</option>
                                <option value="2">Nhân viên</option>
                                <option value="1">Quản trị viên</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="startDate" class="form-label">Ngày đặt hàng</label>
                            <input id="startDate" type="date" class="form-control" name="startDate" required
                                autocomplete="off" />
                        </div>
                        <div class="mb-3">
                            <label for="endDate" class="form-label">Ngày nhận hàng</label>
                            <input id="endDate" type="date" class="form-control" name="endDate" required
                                autocomplete="off" />
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
    <!-- popup sửa người dùng -->
    <div class="modal fade" id="edit-user" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Chỉnh sửa đơn hàng</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="userForm">
                        <div class="mb-3">
                            <label for="ten" class="form-label">Tên khách hàng</label>
                            <select id="Quyen" name="Quyen" required class="form-control">
                                <option value="0">Khách hàng</option>
                                <option value="2">Nhân viên</option>
                                <option value="1">Quản trị viên</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="role" class="form-label">Giảm giá</label>
                            <select id="Quyen" name="Quyen" required class="form-control">
                                <option value="0">Khách hàng</option>
                                <option value="2">Nhân viên</option>
                                <option value="1">Quản trị viên</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="role" class="form-label">Trạng thái</label>
                            <select id="Quyen" name="Quyen" required class="form-control">
                                <option value="0">Khách hàng</option>
                                <option value="2">Nhân viên</option>
                                <option value="1">Quản trị viên</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="role" class="form-label">Thanh toán</label>
                            <select id="Quyen" name="Quyen" required class="form-control">
                                <option value="0">Khách hàng</option>
                                <option value="2">Nhân viên</option>
                                <option value="1">Quản trị viên</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="startDate" class="form-label">Ngày đặt hàng</label>
                            <input id="startDate" type="date" class="form-control" name="startDate" required
                                autocomplete="off" />
                        </div>
                        <div class="mb-3">
                            <label for="endDate" class="form-label">Ngày nhận hàng</label>
                            <input id="endDate" type="date" class="form-control" name="endDate" required
                                autocomplete="off" />
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
                    <th>Tên khách hàng</th>
                    <th>Số lượng sản phẩm</th>
                    <th>Tổng tiền</th>
                    <th>Ngày đặt</th>
                    <th>Ngày nhận</th>
                    <th>Phương thức thanh toán</th>
                    <th>Trạng thái đơn hàng</th>
                    <th >Thao tác</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <tr>
                    <td>1</td>
                    <td>Áo sơ mi</td>
                    <td>1</td>
                    <td>Áo sơ mi</td>
                    <td>afjkahfj jhajfhajfhaj hjafhjahfjahfjahfjahfjahjf fajhjfahjfa</td>

                    <td>Áo sơ mi</td>
                    <td>afjkahfj jhajfhajfhaj hjafhjahfjahfjahfjahfjahjf fajhjfahjfa</td>

                    <td>10</td>

                    <td>
                        <button class="delete">Xóa</button>
                        <button class="edit" data-bs-toggle="modal" data-bs-target="#edit-user">Sửa</button>
                    </td>
                </tr>
                
            </tbody>
        </table>
        <div class="pagination">
            <ul>
                <li><a href="#">«</a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">»</a></li>
            </ul>
        </div>
    </div>
@endsection


@section('search')
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Tìm kiếm địa chỉ..." aria-label="Search"
                aria-describedby="basic-addon2">
            <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </div>
    </form>
@endsection

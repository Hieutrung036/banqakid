@extends('admin.layout.indexmain')

@section('body')
    <h1 style="font-size: 20px">TRẠNG THÁI ĐƠN HÀNG</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Trang chủ</a></li>
            <li class="breadcrumb-item">Quản lý đơn hàng</li>
            <li class="breadcrumb-item active">Trạng thái đơn hàng</li>
        </ol>
    </nav>

    <!-- Nút mở popup -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add-product">
        Thêm trạng thái đơn hàng
    </button>

    <!-- popup thêm người dùng -->
    <div class="modal fade" id="add-product" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Thêm trạng thái đơn hàng</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="userForm">
                            <div class="mb-3">
                                <label for="title" class="form-label">Trạng thái đơn hàng</label>
                                <input id="title" type="text" class="form-control" name="title" required
                                       placeholder="Nhập trạng thái" />
                            </div>
                           
                            <div class="mb-3">
                                <label for="content" class="form-label">Mô tả</label>
                                <textarea id="content" class="form-control" name="content" rows="5" placeholder="Nhập nội dung bài viết" required></textarea>
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
                            <label for="title" class="form-label">Trạng thái đơn hàng</label>
                            <input id="title" type="text" class="form-control" name="title" required
                                   placeholder="Nhập trạng thái" />
                        </div>
                       
                        <div class="mb-3">
                            <label for="content" class="form-label">Mô tả</label>
                            <textarea id="content" class="form-control" name="content" rows="5" placeholder="Nhập nội dung bài viết" required></textarea>
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
                            <th>Tên</th>
                            <th>Mô tả</th>
                    <th >Thao tác</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <tr>
                    <td>1</td>
                    <td>Áo sơ mi</td>
                   
                    <td>afjkahfj jhajfhajfhaj hjafhjahfjahfjahfjahfjahjf fajhjfahjfa</td>

                

          

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
            <input type="text" class="form-control" placeholder="Tìm kiếm trạng thái đơn hàng..." aria-label="Search"
                aria-describedby="basic-addon2">
            <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </div>
    </form>
@endsection

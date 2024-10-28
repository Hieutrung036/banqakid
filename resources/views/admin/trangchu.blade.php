@extends('admin.layout.indexmain')
@section('title', 'Trang chủ')

@section('body')
<h1 style="font-size: 20px">TRANG CHỦ</h1>


<h4>XIN CHÀO : QUẢN TRỊ VIÊN</h4>


@endsection


@section('search')
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Tìm kiếm..." aria-label="Search"
                aria-describedby="basic-addon2">
            <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </div>
    </form>
@endsection

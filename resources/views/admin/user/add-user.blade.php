@extends('admin.layout.master')
@extends('admin.layout.header')
@section('content')
    <div class="container-fluid">
        <h1 class="mt-4">Thêm nhân viên</h1>

        <div class="card mb-4">
            <div class="card-body" style="margin: 20px">
                <form action="{{ route('postAdd-user') }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label>Tên Đầy Đủ</label>
                        <input class="form-control" name=" full_name" type="text">
                    </div>
                    <div class="form-group">
                        <label>Tạo Tên Đăng Nhập</label>
                        <input class="form-control" name="user_name" type="text">
                    </div>
                    <div class="form-group">
                        <div class="col-md-5">
                            <label class="control-label" for="avatar">Ảnh đại diện:</label>
                            <input type="file" name="avatar" id="avatar" class="dropify">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Cấp Quản Lý</label>
                        <select class="form-control" name=" role_id">
                            <option value="0">Quản trị viên</option>
                            <option value="1">Nhân viên</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Tạo Mật Khẩu</label>
                        <input class="form-control" name="password" type="password">
                    </div>
                    <div class="form-group">
                        <label>Nhập Lại Mật Khẩu</label>
                        <input class="form-control" name="password2" type="password">
                    </div>
                    <button type="submit" value="Save" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>
    <script src="{{ asset('admin_asset/libs/dropify/dropify.min.js') }}"></script>
@endsection

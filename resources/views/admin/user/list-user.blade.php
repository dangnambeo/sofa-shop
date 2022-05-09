
@extends('admin.layout.master')
@section('content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h4 class="page-title">Danh sách nhân nhiên</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->
    <div class="row">
        <div class="col-12">
            <div class="card-box table-responsive">
                <table id="datatable" class="table table-bordered  dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                    <tr align="center">
                        <th>Mã Người Dùng</th>
                        <th>Tên Đầy Đủ</th>
                        <th>Tên Đăng Nhập</th>
                        <th>Số điện thoại</th>
                        <th>Cấp Quản Lý</th>
                        <th style="text-align: center">
                            <a class="btn btn-primary waves-effect waves-light btn-xs"
                               href="{{ route('getAdd-user') }}">
                                <i class="fas fa-user-plus"></i> Thêm nhân viên
                            </a>
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $i = 1; ?>
                    @foreach ($user as $list)
                        <tr>
                            <td style="text-align: center">{{ $i }}</td>
                            <td style="text-align: center">{{ $list->full_name }}</td>
                            <td style="text-align: center">{{ $list->user_name }}</td>
                            <td style="text-align: center">{{ $list->phone }}</td>
                            <td style="text-align: center">
                                {{ $list->role_id }}
                            </td>
                            <td style="text-align: center">
                                <a class="btn btn-facebook waves-effect waves-light btn-xs"
                                   href="{{ route('edit-staff',$list->id) }}">
                                    <i class="typcn typcn-edit"></i> Sửa
                                </a>
                                <a class="btn btn-pinterest waves-effect waves-light btn-xs delete"
                                   href="#"
                                   data-confirm="Bạn có muốn xóa người dùng">
                                    <i class=" typcn typcn-times"></i> Xóa
                                </a>
                            </td>

                        </tr>
                        <?php $i++; ?>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection

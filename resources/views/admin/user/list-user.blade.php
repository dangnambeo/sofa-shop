
@extends('admin.layout.master')
@section('content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Abstack</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                        <li class="breadcrumb-item active">Datatable</li>
                    </ol>
                </div>
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
                        <th>Ảnh Đại Diện</th>
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
                            <td>{{ $i }}</td>
                            <td>{{ $list->full_name }}</td>
                            <td>{{ $list->user_name }}</td>
                            <td>
                                @if ($list->avatar == null)
                                    <p style="color: red;font-weight: bold">Bạn chưa thêm ảnh đại diện</p>
                                @else
                                    <img class="rounded" alt="64x64" src="{{ asset($list->avatar) }}"
                                         style="width: 100px; height: 66px;">

                                @endif
                            </td>
                            <td>
                                {{ $list->role_id }}
                            </td>
                            <td style="text-align: center">
                                <a class="btn btn-facebook waves-effect waves-light btn-xs"
                                   href="{{ route('EditUser', $list->user_id) }}">
                                    <i class="typcn typcn-edit"></i> Sửa
                                </a>
                                <a class="btn btn-pinterest waves-effect waves-light btn-xs delete"
                                   href="{{ route('DelUser', $list->user_id) }}"
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

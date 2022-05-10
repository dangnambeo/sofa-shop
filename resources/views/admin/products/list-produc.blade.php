@extends('admin.layout.master')
@section('content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h4 class="page-title">Danh sách Sản phâm</h4>
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
                        <th style="text-align: center">STT</th>
                        <th style="text-align: center">Tên sản phẩm</th>
                        <th style="text-align: center">Hình ảnh</th>
                        <th style="text-align: center">Giá sản phẩm</th>
                        <th style="text-align: center">Số lượng</th>
                        <th style="text-align: center">Loại hàng</th>
                        <th style="text-align: center">Ưu đãi</th>
                        <th style="text-align: center">
                            <a type="button" class="btn btn-sm btn-info waves-effect waves-light" data-toggle="modal" data-target="#exampleModalScrollable">
                                <i class=" fas fa-plus"></i> Thêm Chuyên mục
                            </a>
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $i = 1; ?>
                    @foreach ($cate as $list)
                        <tr>
                            <td style="text-align: center">{{ $i }}</td>

                            <td style="text-align: center">
                                <a class="btn btn-facebook waves-effect waves-light btn-xs"
                                   href="#">
                                    <i class="typcn typcn-edit"></i> Sửa
                                </a>
                                <a class="btn btn-pinterest waves-effect waves-light btn-xs delete"
                                   href="#"
                                   data-confirm="Bạn có muốn xóa chuyên mục, các sản phẩm liên quan cũng sẽ bị xóa theo">
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

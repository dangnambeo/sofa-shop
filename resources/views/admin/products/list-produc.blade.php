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
                        <th style="text-align: center">Số lượng ( Bộ )</th>
                        <th style="text-align: center">Danh mục</th>
                        <th style="text-align: center">Ưu đãi</th>
                        <th style="text-align: center">
                            <a class="btn btn-primary waves-effect waves-light btn-xs" href="{{ route('add-products') }}">
                                <i class=" fas fa-plus"></i> Thêm Sản phẩm
                            </a>
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $i = 1; ?>
                    @foreach ($sp as $list)
                        <tr>
                            <td style="text-align: center; line-height: 4">{{ $i }}</td>
                            <td style="text-align: center; line-height: 4">{{ $list ->name}}</td>
                            <td style="text-align: center">
                                <img class="rounded" alt="64x64" src="{{ asset($list->img) }}"
                                     style="width: 100px; height: 66px;">
                            </td>
                            <td style="text-align: center; line-height: 4">{{ number_format($list ->price) }} <span>₫</span> </td>
                            <td style="text-align: center; line-height: 4">{{ $list ->quantity }}</td>
                            <td style="text-align: center; line-height: 4">{{ $list->category->cate_tittle }}</td>
                            <td style="text-align: center; line-height: 4">
                                @if($list->discount_id != Null)
                                    {{ $list->discount ->percent }}%
                                @endif
                            </td>
                            <td style="text-align: center; line-height: 4">
                                <a class="btn btn-facebook waves-effect waves-light btn-xs"
                                   href="{{ route('products-edit',$list->id) }}">
                                    <i class="typcn typcn-edit"></i> Sửa
                                </a>
                                <a class="btn btn-pinterest waves-effect waves-light btn-xs delete"
                                   href="{{ route('del-products',$list->id) }}"
                                   data-confirm="Bạn có chắc chán muốn xóa sản phẩm">
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

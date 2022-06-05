@extends('admin.layout.master')
@section('content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h4 class="page-title">Danh sách danh mục</h4>
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
                        <th style="text-align: center">Mã đơn hàng</th>
                        <th style="text-align: center">
                            Hành động
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $i = 1; ?>
                    @foreach ($bill as $list)
                        <tr>
                            <td style="text-align: center">{{ $i }}</td>
                            <td style="text-align: center"># {{ $list->id }}</td>
                            <td style="text-align: center">
                                <a class="btn btn-success waves-effect waves-light btn-xs"
                                   href="#">
                                    <i class="typcn typcn-eye"></i> Xem chi tiết
                                </a>
                                <a class="btn btn-pinterest waves-effect waves-light btn-xs delete"
                                   href="{{ route('del-cate',$list->id) }}"
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
    <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
        <form action="{{ route('post-add-cate') }}" method="POST" class="modal-dialog modal-dialog-scrollable" role="document">
            {{ csrf_field() }}
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalScrollableTitle">Thêm mới danh mục:</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="cate_tittle">Tên danh mục:</label>
                        <input class="form-control" id="cate_tittle" name="cate_tittle" type="text">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                    <button type="submit" value="save"  class="btn btn-primary">Lưu</button>
                </div>
            </div>
        </form>
    </div>
@endsection
@extends('admin.layout.master')
@extends('admin.layout.header')
@section('content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h4 class="page-title">Bảng điều khiển</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">

        <div class="col-xl-3 col-md-6">
            <div class="card widget-box-one border border-primary bg-soft-primary">
                <div class="card-body">
                    <div class="float-right avatar-lg rounded-circle mt-3">
                        <i class="mdi mdi-chart-areaspline font-30 widget-icon rounded-circle avatar-title text-primary"></i>
                    </div>
                    <div class="wigdet-one-content">
                        <p class="m-0 text-uppercase font-weight-bold text-muted" title="Statistics">Đơn hàng đã đặt</p>
                        <h2><span data-plugin="counterup">{{ $bill->Count('id') }}</span></h2>
                    </div>
                </div>
            </div>
        </div>
        <!-- end col -->

        <div class="col-xl-3 col-md-6">
            <div class="card widget-box-one border border-warning bg-soft-warning">
                <div class="card-body">
                    <div class="float-right avatar-lg rounded-circle mt-3">
                        <i class="mdi mdi-layers font-30 widget-icon rounded-circle avatar-title text-warning"></i>
                    </div>
                    <div class="wigdet-one-content">
                        <p class="m-0 text-uppercase font-weight-bold text-muted" title="User This Month">Đơn hàng trong ngày</p>
                        <h2><span data-plugin="counterup">{{ $bill_day->count('id') }} </span></h2>

                    </div>
                </div>
            </div>
        </div>
        <!-- end col -->

        <div class="col-xl-3 col-md-6">
            <div class="card widget-box-one border border-danger bg-soft-danger">
                <div class="card-body">
                    <div class="float-right avatar-lg rounded-circle mt-3">
                        <i class="mdi mdi-av-timer font-30 widget-icon rounded-circle avatar-title text-danger"></i>
                    </div>
                    <div class="wigdet-one-content">
                        <p class="m-0 text-uppercase font-weight-bold text-muted" title="Statistics">Đơn hàng trong tháng</p>
                        <h2><span data-plugin="counterup">{{ $bill_month->count('id') }}</span></h2>

                    </div>
                </div>
            </div>
        </div>
        <!-- end col -->

        <div class="col-xl-3 col-md-6">
            <div class="card widget-box-one border border-success bg-soft-success">
                <div class="card-body">
                    <div class="float-right avatar-lg rounded-circle mt-3">
                        <i class="mdi mdi-account-convert font-30 widget-icon rounded-circle avatar-title text-success"></i>
                    </div>
                    <div class="wigdet-one-content">
                        <p class="m-0 text-uppercase font-weight-bold text-muted" title="User Today">Đơn hàng giao thành công</p>
                        <h2><span data-plugin="counterup">{{ $bill->where('status',2)->Count('id') }}</span></h2>

                    </div>
                </div>
            </div>
        </div>
        <!-- end col -->
    </div>
    <div class="row">

        <div class="col-lg-4">
            <div class="card-box">
                <h4 class="header-title mb-4">Messages</h4>

                <div class="inbox-widget slimscroll" style="max-height: 360px;">
                    <a href="#">
                        <div class="inbox-item">
                            <div class="inbox-item-img"><img src="assets/images/users/avatar-1.jpg" class="rounded-circle" alt=""></div>
                            <p class="inbox-item-author">Chadengle</p>
                            <p class="inbox-item-text font-12">Hey! there I'm available...</p>
                            <p class="inbox-item-date">13:40 PM</p>
                        </div>
                    </a>
                    <a href="#">
                        <div class="inbox-item">
                            <div class="inbox-item-img"><img src="assets/images/users/avatar-2.jpg" class="rounded-circle" alt=""></div>
                            <p class="inbox-item-author">Tomaslau</p>
                            <p class="inbox-item-text font-12">I've finished it! See you so...</p>
                            <p class="inbox-item-date">13:34 PM</p>
                        </div>
                    </a>
                    <a href="#">
                        <div class="inbox-item">
                            <div class="inbox-item-img"><img src="assets/images/users/avatar-3.jpg" class="rounded-circle" alt=""></div>
                            <p class="inbox-item-author">Stillnotdavid</p>
                            <p class="inbox-item-text font-12">This theme is awesome!</p>
                            <p class="inbox-item-date">13:17 PM</p>
                        </div>
                    </a>
                    <a href="#">
                        <div class="inbox-item">
                            <div class="inbox-item-img"><img src="assets/images/users/avatar-4.jpg" class="rounded-circle" alt=""></div>
                            <p class="inbox-item-author">Kurafire</p>
                            <p class="inbox-item-text font-12">Nice to meet you</p>
                            <p class="inbox-item-date">12:20 PM</p>
                        </div>
                    </a>
                    <a href="#">
                        <div class="inbox-item">
                            <div class="inbox-item-img"><img src="assets/images/users/avatar-5.jpg" class="rounded-circle" alt=""></div>
                            <p class="inbox-item-author">Shahedk</p>
                            <p class="inbox-item-text font-12">Hey! there I'm available...</p>
                            <p class="inbox-item-date">10:15 AM</p>
                        </div>
                    </a>
                    <a href="#">
                        <div class="inbox-item">
                            <div class="inbox-item-img"><img src="assets/images/users/avatar-6.jpg" class="rounded-circle" alt=""></div>
                            <p class="inbox-item-author">Adhamdannaway</p>
                            <p class="inbox-item-text font-12">This theme is awesome!</p>
                            <p class="inbox-item-date">9:56 AM</p>
                        </div>
                    </a>
                    <a href="#">
                        <div class="inbox-item">
                            <div class="inbox-item-img"><img src="assets/images/users/avatar-8.jpg" class="rounded-circle" alt=""></div>
                            <p class="inbox-item-author">Arashasghari</p>
                            <p class="inbox-item-text font-12">Hey! there I'm available...</p>
                            <p class="inbox-item-date">10:15 AM</p>
                        </div>
                    </a>
                    <a href="#">
                        <div class="inbox-item">
                            <div class="inbox-item-img"><img src="assets/images/users/avatar-9.jpg" class="rounded-circle" alt=""></div>
                            <p class="inbox-item-author">Joshaustin</p>
                            <p class="inbox-item-text font-12">I've finished it! See you so...</p>
                            <p class="inbox-item-date">9:56 AM</p>
                        </div>
                    </a>
                </div>

            </div>
            <!-- end card -->
        </div>
        <!-- end col -->

        <div class="col-lg-8">
            <div class="card-box">
                <h4 class="header-title mb-4">Sản phẩm bán chạy</h4>

                <div class="table-responsive">
                    <table class="table table table-hover m-0">
                        <thead>
                        <tr>
                            <th>Mã sản phẩm</th>
                            <th>Tên sản phẩm</th>
                            <th>Sô lượng</th>
                            <th>Giá bán</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($sp_bill as $list)
                        <tr>
                                <th>
                                    {{ $list->id }}
                                </th>
                                <td>{{ $list ->name}}</td>
                                <td>{{ ($list ->quantity)-($list->sl_ban) }}</td>
                                <td>{{ number_format($list ->price) }} <span>₫</span> </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>
                <!-- table-responsive -->
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->

    </div>
    <!-- end row -->
@endsection

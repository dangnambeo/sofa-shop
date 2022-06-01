@extends('shop-page.layout.master')
@extends('shop-page.layout.header')
@section('banner')
    <div class="banner">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
            <div class="carousel-indicators">
                <?php $i =0; ?>
                @foreach ($slide as $banner)
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{$i}}"  aria-label="Slide 1" @if ($i==0)
                            class="active" aria-current="true"
                            @endif></button>
                    <?php $i++; ?>
                @endforeach
            </div>
            <div class="carousel-inner">
                <?php $i=0; ?>
                @foreach ($slide as $banner)
                    <div @if ($i==0)
                             class="carousel-item active"
                         @else
                             class="carousel-item"
                        @endif>
                        <img src="{{$banner->img_slide}}" class="d-block w-100" alt="">
                    </div>
                    <?php $i++ ?>
                @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
@endsection
@section('service')
    <div class="section">
        <div class="service">
            <div class="box-container">
                <div class="box">
                    <lord-icon
                            src="https://cdn.lordicon.com/jyijxczt.json"
                            trigger="loop"
                            colors="primary:#3a3347,secondary:#ffc738,tertiary:#ebe6ef,quaternary:#646e78"
                            style="width:80px;height:80px">
                    </lord-icon>
                    <h3>Giao hàng nhanh</h3>
                </div>
                <div class="box">
                    <lord-icon
                            src="https://cdn.lordicon.com/nxvrkirq.json"
                            trigger="loop"
                            colors="primary:#eeaa66"
                            style="width:80px;height:80px">
                    </lord-icon>
                    <h3>Đổi trả trong vòng 1 tháng</h3>
                </div>
                <div class="box">
                    <lord-icon
                            src="https://cdn.lordicon.com/vkweisbr.json"
                            trigger="loop"
                            colors="outline:#121331,primary:#646e78,secondary:#2ca58d,tertiary:#4bb3fd"
                            style="width:80px;height:80px">
                    </lord-icon>
                    <h3>Hỗ trợ 24/7</h3>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('section')
    <div class="section">
        <div class="products">
            <h2 class="heading">
                <a href="">
                    Ghế sofa
                </a>
            </h2>
            <div class="row">
                @foreach($sp_all as $list)
                    <div class="col-md-3 item">
                        <div class="box">
                            <a href="#">
                                <img src="{{ asset($list->img) }}" class="img-products" alt="" srcset="">
                            </a>
                            <div class="box-products">
                                <h5><a href="#">{{ $list->name }}</a></h5>
                                <div class="price">
                                    <span>{{ number_format($list ->price) }}đ</span>
                                </div>
                                <div class="cart">
                                    <a href="">
                                        <lord-icon
                                                src="https://cdn.lordicon.com/rmzhcgbh.json"
                                                trigger="hover"
                                                style="width:40px;height:40px">
                                        </lord-icon>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection

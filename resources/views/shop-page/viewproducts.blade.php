@extends('shop-page.layout.master')
@extends('shop-page.layout.header')
@section('section')
    <div class="section">
        <div class="products-item">
            <h2 class="heading">
                {{ $sp_page->name }}
            </h2>
            <div class="row">
                <div class="col-md-5">
                    <div class="img-products">
                        <img src="{{ asset($sp_page->img) }}" width="100%" alt="" srcset="">
                    </div>
                </div>
                <div class="col-md-7" style="padding: 10px;">
                    <div class="name-products">
                        <h2> {{ $sp_page->name }}</h2>
                    </div>
                    <div class="price-products">
                        @if(($sp_page->discount_id)==Null)
                            <div class="price-items">
                                <div class="span">{{ number_format($sp_page ->price) }} đ</div>
                            </div>
                        @else
                            <div class="price-sale">
                                <span class="old-price">{{ number_format($sp_page ->price) }} đ</span>
                                <span class="sale">{{ $sp_page->discount ->percent }}%</span>
                            </div>
                            <div class="price-items">
                                <div class="span">{{ number_format(($sp_page ->price)-(($sp_page->price)*($sp_page->discount ->percent)/100)) }} đ</div>
                            </div>
                        @endif
                    </div>
                    <div class="cart-produc">
                        <div class="purchase-cart">
                            <a href="">Thêm vào giỏ hàng</a>
                        </div>
                        <div class="purchase-phone">
                  <span class="phone">
                    Gọi đặt mua:
                  </span>
                            <a href="tel:+84123456789">012.3456.789</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section">
        <div class="description" id="flip">
            <h4>
                Mô tả sản phẩm
            </h4>
        </div>
        <div class="main-description" id="panel">
            {!! $sp_page->description !!}
        </div>
    </div>
    <div class="section">
        <div class="products">
            <h2 class="heading">
                <a href="{{ route('viewall') }}">
                    Các sản phẩm khác
                </a>
            </h2>
            <div class="row">
                @foreach($sp_other as $list)
                    <div class="col-md-4">
                        <div class="box">
                            <a href="{{ route('viewproducts',$list->id) }}">
                                <img src="{{ asset($list->img) }}" class="img-products" alt="" srcset="">
                            </a>
                            <div class="box-products">
                                <h5><a href="{{ route('viewproducts',$list->id) }}">{{ $list->name }}</a></h5>
                                <div class="price">
                                    @if(($list->discount_id)==Null)
                                        <span class="price-new">{{ number_format($list ->price) }} đ</span>
                                    @else
                                        <div class="discount-price">
                                            <span class="price-old">{{ number_format($list ->price) }} đ</span>
                                        </div>
                                        <span class="price-new">{{ number_format(($list ->price)-(($list->price)*($list->discount ->percent)/100)) }} đ</span>
                                    @endif
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

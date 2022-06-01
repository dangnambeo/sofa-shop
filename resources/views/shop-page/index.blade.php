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

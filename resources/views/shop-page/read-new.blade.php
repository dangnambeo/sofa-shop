@extends('shop-page.layout.master')
@extends('shop-page.layout.header')
@section('section')
    <div class="section">
        <div class="new">
            <h2 class="heading">
                {{ $new->title }}
            </h2>
            <div class="read-blog">
                  {!! $new->content_news !!}
            </div>
        </div>
    </div>
@endsection

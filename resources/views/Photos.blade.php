@extends('layouts.app')
<link rel="stylesheet" href="{{asset('css\photos.css')}}">
@section('content')
 <div class="container p-4">
    <div class="row">
        <div class="col-lg-4 col-md-12 mb-4 mb-lg-0 ">
            <img
            src="{{asset('img/2h.jpg')}}"
            class="w-100 shadow-1-strong rounded mb-4  news-image""
            alt="">

            <img
            src="{{asset('img/3h.jpg')}}"
            class="w-100 shadow-1-strong rounded mb-4  news-image""
            alt="">
        </div>

        <div class="col-lg-4 mb-4 mb-lg-0 ">
            <img
            src="{{asset('img/4h.jpg')}}"
            class="w-100 shadow-1-strong rounded mb-4  news-image""
            alt="">

            <img
            src="{{asset('img/5h.jpg')}}"
            class="w-100 shadow-1-strong rounded mb-4  news-image""
            alt="">

        </div>

        <div class="col-lg-4 mb-4 mb-lg-0 ">
            <img
            src="{{asset('img/6h.jpg')}}"
            class="w-100 shadow-1-strong rounded mb-4  news-image""
            alt="">

            <img
            src="{{asset('img/7h.jpg')}}"
            class="w-100 shadow-1-strong rounded mb-4  news-image""
            alt="">

            <img
            src="{{asset('img/8h.jpg')}}"
            class="w-100 shadow-1-strong rounded mb-4  news-image""
            alt="">
        </div>
     </div>

</div>
@endsection

@extends('layouts.app')

@section('content')
<section>
<div class="container py-5 text-center">
    <a href="{{route('categories.create')}}"><button class="btn btn-dakr fw-bold fs-4">Добавить категорию</button></a>
    <a href="{{route('products.create')}}"><button class="btn btn-dakr fw-bold fs-4">Добавить товар</button></a>
    <a href="{{route('news.create')}}"><button class="btn btn-dakr fw-bold fs-4">Добавить новость</button></a>
</div>
</section>
@endsection

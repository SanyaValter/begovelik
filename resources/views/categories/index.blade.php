@extends('layouts.app')
@section('content')
    <section>
        @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
        <div class="container text-center">
            <h1 class="fw-bold text-center">Список категорий</h1>
            @foreach ($categories as $category)
                <li class="texs-center fs-4">{{ $category->name }}</li>
            @endforeach
        </div>
    </section>
@endsection

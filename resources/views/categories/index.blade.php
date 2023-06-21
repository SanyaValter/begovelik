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
            <ul style="list-style: none">
                @foreach ($categories as $category)
                <li class="text-center fs-4">{{ $category->name }}
                    <a href="{{ route('categories.delete',$category->id) }}" class="m-3 btn btn-danger">Удалить</a>
                </li>
                @endforeach
            </ul>
        </div>
    </section>
@endsection

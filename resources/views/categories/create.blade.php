@extends('layouts.app')

@section('content')
<section>
    <div class="container">
        <h1 class="text-center">Добавить категорию</h1>
        <form method="POST" action="{{ route('categories.store') }}">
            @csrf
            <div class="form-group">
                <label for="name">Имя категории:</label>
                <input type="text" name="name" id="name" class="form-control">
            </div>
            <div class="py-3">
                <button type="submit" class="btn btn-dark">Добавить</button>
            </div>
            @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
@endif
        </form>
    </div>
</section>
@endsection

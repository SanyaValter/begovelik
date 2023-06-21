@extends('layouts.app')

@section('content')
<section>
    <div class="container">
        <h1 class="text-center">Добавить товар</h1>
        <form method="POST" action="{{ route('products.store') }}" enctype="multipart/form-data">
            @csrf

            <div class="mb-3 fw-bold">
                <label for="name" class="form-label">Имя:</label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>

            <div class="mb-3 fw-bold">
                <label for="text" class="form-label">Описание товара:</label>
                <textarea name="text" id="text" class="form-control" required></textarea>
            </div>

            <div class="mb-3 fw-bold">
                <label for="img" class="form-label">Изображение:</label>
                <input type="file" name="img" id="img" class="form-control-file">
            </div>

            <div class="mb-3 fw-bold">
                <label for="category_id" class="form-label">Категория:</label>
                <select name="category_id" id="category_id" class="form-control" required>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3 fw-bold">
                <label for="price" class="form-label">Цена:</label>
                <input type="number" name="price" id="price" class="form-control" required>
            </div>

            @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
            <button type="submit" class="btn btn-dark">Добавить</button>
        </form>
    </div>
</section>
@endsection

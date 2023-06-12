@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-center">Добавить новость</h1>

        <form method="POST" action="{{ route('news.store') }}" enctype="multipart/form-data">
            @csrf

            <div class="mb-3 fw-bold">
                <label for="name">Название:</label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>

            <div class="mb-3 fw-bold">
                <label for="text">Описание новости:</label>
                <textarea name="text" id="text" class="form-control" required></textarea>
            </div>

            <div class="mb-3 fw-bold">
                <label for="img">Изображение:</label>
                <input type="file" name="img" id="img" class="form-control-file">
            </div>

            <div class="mb-3 fw-bold">
                <label for="date">Дата:</label>
                <input type="date" name="date" id="date" class="form-control" required>
            </div>

            <div class="mb-3 fw-bold">
                <label for="password" class="form-label"><b class="text-danger">Обязвательно</b> введите пароль:</label>
                <input type="password" name="password" id="password" class="form-control" required>
            </div>

           <div class="py-3">
            <button type="submit" class="btn btn-dark">Добавить</button>
           </div>
        </form>
    </div>
@endsection

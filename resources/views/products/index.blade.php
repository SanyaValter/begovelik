@extends('layouts.app')

@section('content')
<section>
    <div class="container">
         @if(session('success'))
            <div class="alert alert-success">
             {{ session('success') }}
        </div>
        @endif
        <table class="table">
            <thead>
                <tr>
                    <th>Имя</th>
                    <th>Описание</th>
                    <th>Категория</th>
                    <th>Цена</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                <tr>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->text }}</td>
                    <td>{{ $product->category->name }}</td>
                    <td>{{ $product->price }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</section>
@endsection

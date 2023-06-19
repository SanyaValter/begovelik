@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="text-center py-3">Авторизация</h2>
    <form class="p-3" action="{{ route('auth') }}" method="POST">
        <div class="mb-3">
        @csrf
          <label for="exampleInputEmail1" class="form-label">Логин</label>
          <input type="text" name="login" class="form-control" id="login">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Пароль</label>
          <input type="password" name="password" class="form-control" id="exampleInputPassword1">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>
@endsection

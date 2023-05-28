@extends('layouts.app')

@section('content')
<div class="container p-3">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header fs-4 ">{{ __('Добро пожаловать') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <p class=" text-dark fs-5 text-center">Каждый зарегистрированный пользователь получает скидку в 10% на следующие покупки.</p>
                </div>
            </div>
            <h4 class="text-center text-danger">Чтобы воспользоваться скидкой, продиктуйте свою почту при оформлении заказа.</h4>
        </div>
        <div>
            <a href="{{route('catalog')}}" class="text-decoration-none"><svg xmlns="http://www.w3.org/2000/svg" class="text-dark" width="28" height="28" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
              </svg><strong class="text-muted">Каталог</strong></a>
        </div>
    </div>
</div>
@endsection

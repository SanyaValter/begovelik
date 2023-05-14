@extends('layouts.app')

@section('content')

<section>
<!--Google map-->
<meta name="csrf-token" content="{{ csrf_token() }}">
<div class="container text-center p-3">
<div id="map-container-google-2" class="z-depth-1-half map-container" style="height: 450px;">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d73181.67255846773!2d73.232821176544!3d55.0269670079816!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x43ab0070707152b1%3A0x6e8ea693d22dd65e!2z0KHQv9C10YbQuNCw0LvRjNC90LDRjyDQvtCx0YnQtdC-0LHRgNCw0LfQvtCy0LDRgtC10LvRjNC90LDRjyDRiNC60L7Qu9CwINC-0YLQutGA0YvRgtC-0LPQviDRgtC40L_QsCDihJYgMTUz!5e0!3m2!1sru!2sru!4v1680469758648!5m2!1sru!2sru" width="900" height="450" style="border:0;border-radius: 25px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
</div>

<!--Google Maps-->
</section>
<section>
    <div class="container">
    <div id="msgSubmit" class=" text-center hidden h1">Обратная связь!</div>
    <strong class="text-muted text-center ">
        Здравствуйте!
Спасибо за то, что обратились к нам за помощью. <br> Мы ценим ваше время и усилия, и поэтому хотим получить от вас обратную связь о нашей работе.
Если у вас есть какие-либо вопросы, предложения или замечания по поводу нашей работы, пожалуйста, не стесняйтесь сообщить нам. Мы всегда готовы выслушать вас и улучшить качество наших услуг.
Мы стараемся обеспечить наших клиентов высококачественными услугами, и ваше мнение очень важно для нас. Мы будем рады услышать от вас любую обратную связь о нашей работе, чтобы улучшить наш сервис и наши процессы.

Спасибо за сотрудничество с нами!
    </strong>
    @if(Session::has('message_sent'))
    <div class="alert alert-success" role="alert">
        {{ Session::get('message_sent') }}
    </div>
@endif
<form id="contact-form" action="{{ route('contact.send') }}" method="post" role="form" class="contact-form">
    @csrf
    <div class="row">
        <div class="col-md-6 form-group">
            <input type="text" name="name" class="name form-control" id="name" placeholder="Имя" required>
        </div>
        <div class="col-md-6 form-group mt-3 mt-md-0">
            <input type="email" class="email form-control" name="email" id="email" placeholder="Email" required>
        </div>
    </div>
    <div class="form-group mt-3">
        <textarea class="message form-control" name="message" rows="5" placeholder="Опишите причину обратной связи" required></textarea>
    </div>
    <div class="text-center"><button type="submit" class="mt-3 btn btn-dark">Отправить</button></div>
</form>
</section>
@endsection

@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{asset('css\main.css')}}">



   <!-- <div class="container py-3" style="max-width:900px;">
           <video  class="rounded " autoplay muted loop id="Video" style="border: radius 20px;">
                <source  src="{{asset('video\Магазин шапок. Обзор (720p).mp4')}}" type="video/mp4">
            </video>
    </div>  -->



    <section>
        <div class="text-center p-3">
        <h3 class="display-4 font-wight-normal text-center">Беговелик в Омске</h3>
        <p class="text-muted fs-4">Набор детей от <b>2</b> до <b>5</b> лет занятия на БЕГОВЕЛАХ!</p>
        <a href="tel:+79045878572" class="btn btn-outline-dark fs-5">Позвонить</a>
        </div>
            <div class="product-device-2 d-none d-md-block positio-relative overflow-hidden text-center">
                <img src="{{asset('img/1.jpg')}}" alt="Шапки"style="max-width:20%;border-radius: 20px"class="">
                <img src="{{asset('img/2.jpg')}}" alt="Шапки"style="max-width:23%;border-radius: 20px"class="">
                <img src="{{asset('img/3.jpg')}}" alt="Шапки"style="max-width:20%;border-radius: 20px"class="">
            </div>
        </div>

        <div class="position-relative overflow-hidden p-3 p-md-3 text-center  fixed-top">
            <div class="col-md-5 my-5  mx-auto" style="border-radius: 20px">
                <h1 class="display-4 font-wight-normal">О компании</h1>
                <p class="lead font-wight-normal">Детский спортивно-оздоровительный клуб "БЕГОВЕЛиК" в Омске приглашает детей от 2 до 5 лет на занятия на беговелах. Наш клуб предлагает физкультурно-оздоровительную работу, спортивные занятия на беговелах и детский фитнес. Тренировки проходят по адресу: Нефтяники (ул. 50 лет профсоюзов 98) СДЮСШОР №8 бмх трасса и на летний период Путилова 2, СДЮСШОР №8 по велосипедному спорту. Первое пробное занятие бесплатно!</p>
            </div>
    </section>

    <section>
        <div class="container">
            <div class="p-3">
            <h2 class="pb-4 mb-4 fst-italic border-bottom " id="News"> Новости и статьи</h2>
            </div>
            <div class="row gx-5">
                    <div class="col-md-6 mb-4">
                        <div class="bg-image hover-overlay ripple shadow-2-strong rounded-5" data-mdb-ripple-color="light">
                            <img src="{{asset('img/4.jpg')}}" class="img-fluid" style="max-width:80%;border-radius: 20px"><a href="#!">
                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div></a>
                    </div>
                </div>

                <div class="col-md-6 mb-4">
                    <span class="badge bg-danger px-2 py-1 shadow-1-strong mb-3">24-09-2022</span>
                        <h4><strong>Сегодня наши дети учавствовали в соревнованиях на беговелах и велосипедах, в рамках XXI городской спартакиады</strong></h4>
                            <p class="text-muted">
                            Сегодня наши дети учавствовали в соревнованиях на беговелах и велосипедах, в рамках XXI городской спартакиады "Спортивный город " по летней программе, посвященной 200-летию образования Омской области.
                            Хочется выразить огромную благодарность организаторам соревнований  [club22831135|СПОРТИВНЫЙ ГОРОД]
                            За возможность юных беговелистов проявить себя.
                            </p>
                    </div>
             </div>

             <div class="row gx-5">
                <div class="col-md-6 mb-4">
                    <div class="bg-image hover-overlay ripple shadow-2-strong rounded-5" data-mdb-ripple-color="light">
                        <img src="{{asset('img/qwe.jpg')}}" class="img-fluid" style="max-width:80%;border-radius: 20px"><a href="#!">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div></a>
                </div>
            </div>

            <div class="col-md-6 mb-4">
                <span class="badge bg-danger px-2 py-1 shadow-1-strong mb-3">15-09-2022</span>
                    <h4><strong>👍🏻Активный ребенок — здоровый ребенок</strong></h4>
                        <p class="text-muted">
                            Катание на беговеле снижает риск появления ожирения и диабета, проблем с сердцем. Также развивается уверенность в себе, умение брать на себя ответственность и принимать самостоятельные решения, критическое мышление и способность анализировать свои действия, маршрут и траектории движения.
                            Хотите проверить?
                        </p>
                </div>
         </div>

             <div class="row gx-5">
                    <div class="col-md-6 mb-4">
                        <div class="bg-image hover-overlay ripple shadow-2-strong rounded-5" data-mdb-ripple-color="light">
                            <img src="{{asset('img/10.jpg')}}" class="img-fluid" style="max-width:80%;border-radius: 20px"><a href="#!">
                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div></a>
                    </div>
                </div>

                <div class="col-md-6 mb-4">
                    <span class="badge bg-danger px-2 py-1 shadow-1-strong mb-3">04-01-2023</span>
                        <h4><strong>Церемония награждения</strong></h4>
                            <p class="text-muted">
                            Торжественная церемония награждения победителей Новогодней беговелогонки 2022
                            </p>
                    </div>
             </div>
        </div>
        <h3 class="text-muted">Больше новостей вы можете найти у нас в группе Вконтакте <a class="text-muted" href="https://vk.com/begomsk"><img src="img/vk.png" width="32" height="32" alt=""></a></h3>
    </section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
@endsection



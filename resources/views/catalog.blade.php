@extends('layouts.app')

@section('content')

    <div class="text-center py-3">
        <a class=" text-decoration-none fw-bold fs-2 aligh-items-center text-dark" href="{{ request()->fullUrlWithQuery(['categories' => null]) }}">Все услуги</a>
    </div>
    <section>
    <div class="container px-4" id="custom-cards">
        <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-3">

        <div class="col">
            <div class="card card-cover  overflow-hidden alight-items-center rounded-4 shadow-lg">
              <div class="d-flex justify-content-center w-100 align-items-center py-2">
                <!-- <a href="{{ request()->fullUrlWithQuery(['category' => 'Subscription']) }}"><img style="max-width: 150; max-height:  150px;" class="card-img-top" src="{{asset('img/9.png')}}" alt="Абонемент"></a> -->
                </div>
              <div class="d-flex flex-column h-100 pb-3 text-white text-shadow-1">
                <h2 class="display-6 lh-1 fw-bold text-dark text-center">  <a class="text-center text-dark text-decoration-none fs-2" href="{{ request()->fullUrlWithQuery(['categories' => '1']) }}">Абонемент</a>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card card-cover  overflow-hidden alight-items-center rounded-4 shadow-lg">
              <div class="d-flex justify-content-center w-100 align-items-center py-2">
                <!-- <a href="{{ request()->fullUrlWithQuery(['category' => 'Free']) }}"><img style="max-width: 150px; max-height:  150px;" class="card-img-top" src="{{asset('img/1234.png')}}" alt="Пробное занятия"></a> -->
                </div>
              <div class="d-flex flex-column h-100 pb-3 text-white text-shadow-1">
                <h2 class="display-6 lh-1 fw-bold text-dark text-center">  <a class="text-center text-dark text-decoration-none fs-2" href="{{ request()->fullUrlWithQuery(['categories' => '2']) }}">Пробное занятие</a>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card card-cover overflow-hidden alight-items-center rounded-4 shadow-lg">
              <div class="d-flex justify-content-center w-100 align-items-center py-2">
               <!-- <a href="{{ request()->fullUrlWithQuery(['category' => 'one-time']) }}"><img style="max-width: 150px; max-height:  150px;" class="card-img-top" src="{{asset('img/caps1.png')}}" alt="Разовое занятие"></a> -->
                </div>
              <div class="d-flex flex-column h-100 pb-3 text-white text-shadow-1">
                <h2 class=" display-6 lh-1 fw-bold text-dark text-center"> <a class="text-center text-dark text-decoration-none fs-2" href="{{ request()->fullUrlWithQuery(['categories' => '3']) }}">Разовое занятие</a>
              </div>
            </div>
          </div>
      </div>
    </section>

 <div class="container py-3">
    <div class="row justify-content-center mb-3">
            <div class="col-md-12 col-xl-10">
    @forelse ($products as $p)
                  <div class="card shadow-0 border my-2 rounded-3">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-md-12 col-lg-3 col-xl-3 mb-4 mb-lg-0">
                          <div class="bg-image hover-zoom ripple rounded ripple-surface">
                            <img style="max-width:100%;border-radius: 10px" src="{{asset('images/'.$p->img)}}">
                              <div class="hover-overlay">
                                <div class="mask" style="background-color: rgba(253, 253, 253, 0.15);"></div>
                              </div>
                            </a>
                          </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-xl-6">
                          <strong class="fs-4">{{$p->name}}</strong>
                          <p class="text-muted mb-4 mb-md-0">
                           {{$p->text}}
                          </p>
                        </div>
                        <div class="col-md-6 col-lg-3 col-xl-3 border-sm-start-none border-start">
                          <div class="d-flex flex-row align-items-center mb-1">
                            <h4 class="mb-1 me-1" >{{$p->price}} ₽</h4>
                          </div>
                          <div class="d-flex flex-column mt-4">
                            <a href="{{route('details',$p->id)}}" class="text-center"><button class="btn btn-link  btn-sm fs-5  text-decoration-none" type="button">Подробнее</button></a>
                            <a class="text-center" href="{{route('order',$p->id)}}"><button class="btn btn-dark btn-sm mt-2 fs-5 " type="submit">Записаться на занятие</button></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
    @empty
    <div class="text-center">
        <strong class="text-center fs-3">Товар скоро будет в наличии.</strong>
          <p class="text-muted">Выберите другую категорию.</p>
    </div>

@endforelse
        </div>
    </div>
</div>
@endsection


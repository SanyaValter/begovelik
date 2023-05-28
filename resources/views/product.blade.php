@extends('layouts.app')

@section('content')
      <div class="container mb-5 mt-3">
        <div class="row d-flex align-items-baseline">
          <div class="col-xl-9">
            <p style="color: #7e8d9f;font-size: 20px;"><strong>БЕГОВЕЛиК</strong></p>
          </div>
        </div>
        <div class="container">
          <div class="col-md-12">
            <div class="text-center">
              <i class="far fa-building fa-4x ms-0" style="color:#8f8061 ;"></i>
            </div>
          </div>

          <div class="row my-2 mx-1 justify-content-center">
            <div class="col-md-2 mb-4 mb-md-0">
              <div class="
                          bg-image
                          ripple
                          rounded-2
                          mb-4
                          overflow-hidden
                          d-block
                          " data-ripple-color="light">
                <img src="{{asset('img/'.$product->img)}}"
                  class="w-100"  alt="Elegant shoes and shirt" />
                <a href="#!">
                  <div class="hover-overlay">
                    <div class="mask" style="background-color: hsla(0, 0%, 98.4%, 0.2)"></div>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-md-7 mb-4 mb-md-0">
              <p class="fw-bold fs-1">{{$product->name}}</p>
              <p class="mb-1">
                <span class="text-muted me-2 fs-3">Описание:</span><span class="fs-4">{{$product->text}}</span>
              </p>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-xl-8">
              <a href="{{route('catalog')}}"><svg xmlns="http://www.w3.org/2000/svg" class="text-dark" width="28" height="28" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
              </svg></a>
            </div>
            <div class="col-xl-3">
              <h2 class="text-black float-start fs-5"><span
                  style="font-size: 25px;">Цена: {{$product->price}} ₽</span></h2>
            </div>
          </div>
        </div>
      </div>

@endsection

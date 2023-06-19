@extends('layouts.app')

@section('content')
    <section>
        <div class="container p-3">
            <div class="row">
                <div class="service-description col-lg-7">
                    <img class="img-fluid shadow rounded-4" width="80%" src="{{ asset('images/' . $product->img) }}" alt="">
                    <p class="fw-bold text-start fs-5 p-3">{{ $product->name }}</b></p>
                </div>
                <div class="service-order col-lg-5">
                    <form action="{{route('order.store')}}" method="post" id="order">
                        @csrf
                        <h3 class="fw-bold">ФОРМА ЗАПИСИ ребенка на занятие</h3>
                        <div class="alert alert-success" id="orderSuccess" style="display: none" role="alert">
                            Спасибо за Ваше обращение в спорт клуб "БЕГОВЕЛИК". <br> Мы свяжемся с Вами в ближайшее время и по телефону сообщим Вам в какое время состоится занятие.
                        </div>
                        <div class="alert alert-danger" id="orderError" style="display: none" role="alert">
                            Похоже что-то пошло не так. Поробуйте позже.
                        </div>
                        <div class="form-group mt-4">
                            <label for="childName" class="form-label fw-bolder">Имя ребенка:</label>
                            <input type="text" name="childName" class="childName form-control" id="childName"
                                placeholder="Введите имя ребенка" required>
                        </div>
                        <div class="form-group mt-4">
                            <label for="nameOfParents" class="form-label fw-bolder">Имя и отчество родителя (мамы или папы,
                                кому звонить)</label>
                            <input type="text" name="nameOfParents" class="name form-control" id="nameOfParents"
                                placeholder="Введите ФИО" required>
                        </div>
                        <div class="form-group mt-3">
                            <label for="year" class="form-label fw-bolder">Сколько лет вашему ребенку?</label>
                            <input type="number" class="year form-control" name="year" id="year"
                                placeholder="Введите возраст ребенка" required>
                        </div>
                        <div class="form-group mt-3">
                            <label for="phone" class="form-label fw-bolder">Телефон</label>
                            <input type="text" class="phone form-control" name="phone" id="phone" maxlength="11" placeholder="Введите номер телефона" required>
                            <span id="phone-error" class="error-message"></span>
                        </div>

                        <div class="form-group mt-3">
                            <label for="email" class="form-label fw-bolder">Email</label>
                            <input type="email" class="email form-control" name="email" id="email" placeholder="Введите электронную почту" required>
                        </div>
                        <div class="row">
                            <div class="form-group mt-3 col-lg-6">
                              <label for="date" class="form-label fw-bolder">Выберите дату записи</label>
                              <input type="date" class="date form-control" name="date" id="date" required>
                            </div>
                          </div>
                          <script>
                            var today = new Date().toISOString().split('T')[0];

                            document.getElementById("date").setAttribute("min", today);
                          </script>
                        <div class="row mt-3">
                            <div class="col-lg-9">
                                <strong class="text-dark">Итого:</strong>
                            </div>
                            <div class="col-lg-3">
                                <strong class="sum text-dark text-end d-block" id="sum">{{ $product->price }}
                                    ₽</strong>
                            </div>
                        </div>
                        <hr>
                        <strong class="text-danger fs-5">Оплата производится на месте!</strong>
                        <div class="py-3">
                            <button id="orderService" class="col-lg-12 btn btn-dark" type="submit">Отправить</button>
                        </div>
                </div>
                </form>
            </div>
        </div>
        </div>
    </section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script src="{{asset('js/Order.js')}}"></script>
@endsection

@extends('layouts.app')

@section('content')
    <section>
        <div class="container p-3">
            <div class="row">
                <div class="service-description col-lg-7">
                    <img class="img-fluid shadow rounded-4" src="{{ asset('img/' . $product->img) }}" alt="">
                    <p class="text-muted text-center fs-5 p-3">{{ $product->text }}</b></p>
                </div>
                <div class="service-order col-lg-5">
                    <form action="{{route('order.store')}}" method="post" id="order">
                        @csrf
                        <h3 class="fw-bold">ФОРМА ЗАПИСИ ребенка на занятие</h3>
                        <div class="alert alert-success" id="orderSuccess" style="display: none" role="alert">
                            Успешно!
                        </div>
                        <div class="alert alert-danger" id="orderError" style="display: none" role="alert">
                            Похоже что-то пошло не так. Поробуйте позже.
                        </div>
                        <div class="form-group mt-4">
                            <label for="childName" class="form-label fw-bolder">Имя ребенка:</label>
                            <input type="text" name="childName" class="childName form-control" id="childName"
                                placeholder="Ваш ответ" required>
                        </div>
                        <div class="form-group mt-4">
                            <label for="surnameСhild" class="form-label fw-bolder">Фамилия ребенка:</label>
                            <input type="text" name="surnameСhild" class="name form-control" id="surnameСhild"
                                placeholder="Ваш ответ" required>
                        </div>
                        <div class="form-group mt-4">
                            <label for="nameOfParents" class="form-label fw-bolder">Имя и отчество родителя (мамы или папы,
                                кому звонить)</label>
                            <input type="text" name="nameOfParents" class="name form-control" id="nameOfParents"
                                placeholder="Ваш ответ" required>
                        </div>
                        <div class="form-group mt-3">
                            <label for="year" class="form-label fw-bolder">Сколько лет Вашему ребенку? (уточните до
                                месяца, пожалуйста, например 2,7 мес)</label>
                            <input type="year" class="year form-control" name="year" id="year"
                                placeholder="Ваш ответ" required>
                        </div>
                        <div class="form-group mt-3">
                            <label for="phone" class="form-label fw-bolder">Телефон</label>
                            <input type="phone" class="phone form-control" name="phone" id="phone" placeholder="+7"
                                data-phone-pattern="" required>
                        </div>
                        <div class="row">
                            <div class="form-group mt-3 col-lg-6">
                                <label for="date" class="form-label fw-bolder">Выберите дату записи</label>
                                <input type="date" class="date form-control" name="date" id="date"
                                    min="2023-05-28" required>
                            </div>
                        </div>
                        {{-- <div class="p-2 mt-3">
                        <strong>В какое время Вам было бы удобней водить ребенка на занятия?</strong>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                            <label class="form-check-label" for="exampleRadios1">
                                Будние дни вечером (18:00, 19:00)
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                            <label class="form-check-label" for="exampleRadios2">
                                Выходные дни утром
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                            <label class="form-check-label" for="exampleRadios2">
                                Любые дни и время
                            </label>
                          </div>
                    </div>
                   <div class="p-2 mt-3">
                    <strong>Разрешено ли ребенку заниматься физической культурой и спортом?</strong>
                    <div class="form-check">
                        <input class="form-check-input position-static" type="radio" name="blankRadio" id="blankRadio1" value="option1" aria-label="...">
                        <label class="form-check-label" for="defaultCheck1">
                            да, педиатр разрешает нам все виды физкультурной-спортивной деятельности
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input position-static" type="radio" name="blankRadio" id="blankRadio2" value="option1" aria-label="...">
                        <label class="form-check-label" for="defaultCheck1">
                            да, но есть противопоказания к выполнению некоторых упражнений
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input position-static" type="radio" name="blankRadio" id="blankRadio3" value="option1" aria-label="...">
                        <label class="form-check-label" for="defaultCheck1">
                            да, но недавно (1-4 мес назад) мы перенесли операцию, болезнь, лежали в стационаре
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input position-static" type="radio" name="blankRadio" id="blankRadio4" value="option1" aria-label="...">
                        <label class="form-check-label" for="defaultCheck1">
                            нет, но очень хотим
                        </label>
                      </div>
                   </div> --}}
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
                        <button id="orderService" class="col-lg-12 btn btn-dark" type="submit">Заказать звонок</button>
                </div>
                </form>
            </div>
        </div>
        </div>
    </section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script src="{{asset('js/Order.js')}}"></script>
@endsection

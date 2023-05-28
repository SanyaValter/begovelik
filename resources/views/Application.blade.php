@extends('layouts.app')

@section('content')
<section>
    <div class="container p-3">
        <div class="row">
            <div class="service-description col-lg-7">
                <img class="img-fluid shadow rounded-4" src="{{asset('img/pngwing.com (2).png')}}" alt="">
                <p class="text-muted text-center fs-5 p-3">Спасибо за Ваше обращение в спорт клуб "БЕГОВЕЛИК". <b>Мы свяжемся с Вами в ближайшее время и по телефону сообщим Вам в какое время состоится занятие.</b></p>
            </div>
            <div class="service-order col-lg-5">
                <h3 class="fw-bold">ФОРМА ЗАПИСИ ребенка на занятие</h3>
                    <div class="form-group mt-4">
                        <label for="name" class="form-label fw-bolder">Имя ребенка:</label>
                        <input type="text" name="name" class="name form-control" id="name" placeholder="Ваш ответ" required="">
                    </div>
                    <div class="form-group mt-4">
                        <label for="Surname" class="form-label fw-bolder">Фамилия ребенка:</label>
                        <input type="text" name="Surname" class="name form-control" id="Surname" placeholder="Ваш ответ" required="">
                    </div>
                    <div class="form-group mt-4">
                        <label for="Surname" class="form-label fw-bolder">Имя и отчество родителя (мамы или папы, кому звонить)</label>
                        <input type="text" name="Surname" class="name form-control" id="Surname" placeholder="Ваш ответ" required="">
                    </div>
                    <div class="form-group mt-3">
                        <label for="year" class="form-label fw-bolder">Сколько лет Вашему ребенку? (уточните до месяца, пожалуйста, например 2,7 мес)</label>
                        <input type="year" class="year form-control" name="year" id="year" placeholder="Ваш ответ" required="">
                    </div>
                    <div class="form-group mt-3">
                        <label for="phone" class="form-label fw-bolder">Телефон</label>
                        <input type="phone" class="phone form-control" name="phone" id="phone" placeholder="+7" data-phone-pattern="" required="">
                    </div>
                    {{-- <div class="row">
                        <div class="form-group mt-3 col-lg-6">
                            <label for="date" class="form-label fw-bolder">Выберите дату и время</label>
                            <input type="date" class="date form-control" name="date" id="date" min="2023-05-28" required="">
                        </div>
                    </div> --}}
                    <div class="p-2">
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
                   <div class="p-2">
                    <strong>Разрешено ли ребенку заниматься физической культурой и спортом?</strong>
                    <div class="form-check">
                        <input class="form-check-input position-static" type="radio" name="blankRadio" id="blankRadio1" value="option1" aria-label="...">
                        <label class="form-check-label" for="defaultCheck1">
                            да, педиатр разрешает нам все виды физкультурной-спортивной деятельности
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input position-static" type="radio" name="blankRadio" id="blankRadio1" value="option1" aria-label="...">
                        <label class="form-check-label" for="defaultCheck1">
                            да, но есть противопоказания к выполнению некоторых упражнений
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input position-static" type="radio" name="blankRadio" id="blankRadio1" value="option1" aria-label="...">
                        <label class="form-check-label" for="defaultCheck1">
                            да, но недавно (1-4 мес назад) мы перенесли операцию, болезнь, лежали в стационаре
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input position-static" type="radio" name="blankRadio" id="blankRadio1" value="option1" aria-label="...">
                        <label class="form-check-label" for="defaultCheck1">
                            нет, но очень хотим
                        </label>
                      </div>
                   </div>
                        <div class="row mt-2">
                            <div class="col-lg-9">
                                <strong class="text-dark">Итого:</strong>
                            </div>
                            <div class="col-lg-3">
                                <strong class="sum text-dark text-end d-block" id="sum">999 ₽</strong>
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
@endsection

@extends('layouts.app')

@section('content')
<section>
<!--Google map-->
<div class=" text-center hidden h1 p-3"><b>Где мы находимся</b></div>
<div class="container ">
    <iframe   style="border-radius: 30px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9158.920383979616!2d73.3140794715129!3d54.97783225215333!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x43ab0192708a4e2f%3A0x47237862c9d5ee08!2z0JrQvtC90YLQuNC90LXQvdGC!5e0!3m2!1sru!2sru!4v1685276463371!5m2!1sru!2sru" width="100%" height="270" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
<!--Google Maps-->
</section>
<section>
    <div class="container px-4 py-3" id="featured-3">
        <h2 class="pb-2 text-center"></h2>
        <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
          <div class="feature col text-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-check-all text-warning" viewBox="0 0 16 16">
                <path d="M8.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L2.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093L8.95 4.992a.252.252 0 0 1 .02-.022zm-.92 5.14.92.92a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 1 0-1.091-1.028L9.477 9.417l-.485-.486-.943 1.179z"/>
              </svg>
            <p class="fs-5"><b>Наш клуб предлагает физкультурно-оздоровительную работу, спортивные занятия на беговелах и велосипедах, детский фитнес.</b></p>
          </div>
          <div class="feature col text-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-geo-alt-fill text-success" viewBox="0 0 16 16">
                <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
              </svg>
            <p class="fs-5"><b>Тренировки проходят согласно расписанию по адресу: Левый берег, Континент 3 этаж Роллердром.</b></p>
          </div>
          <div class="feature col text-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-phone-vibrate text-primary" viewBox="0 0 16 16">
                <path d="M10 3a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h4zM6 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h4a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H6z"/>
                <path d="M8 12a1 1 0 1 0 0-2 1 1 0 0 0 0 2zM1.599 4.058a.5.5 0 0 1 .208.676A6.967 6.967 0 0 0 1 8c0 1.18.292 2.292.807 3.266a.5.5 0 0 1-.884.468A7.968 7.968 0 0 1 0 8c0-1.347.334-2.619.923-3.734a.5.5 0 0 1 .676-.208zm12.802 0a.5.5 0 0 1 .676.208A7.967 7.967 0 0 1 16 8a7.967 7.967 0 0 1-.923 3.734.5.5 0 0 1-.884-.468A6.967 6.967 0 0 0 15 8c0-1.18-.292-2.292-.807-3.266a.5.5 0 0 1 .208-.676zM3.057 5.534a.5.5 0 0 1 .284.648A4.986 4.986 0 0 0 3 8c0 .642.12 1.255.34 1.818a.5.5 0 1 1-.93.364A5.986 5.986 0 0 1 2 8c0-.769.145-1.505.41-2.182a.5.5 0 0 1 .647-.284zm9.886 0a.5.5 0 0 1 .648.284C13.855 6.495 14 7.231 14 8c0 .769-.145 1.505-.41 2.182a.5.5 0 0 1-.93-.364C12.88 9.255 13 8.642 13 8c0-.642-.12-1.255-.34-1.818a.5.5 0 0 1 .283-.648z"/>
              </svg>
            <p class="fs-5"><b>Записать ребенка на занятие вы можете заполнив форму на сайте или позвонив по телефону +7-950-234-11</b></p>
          </div>
        </div>
      </div>
  </section>
  <section>

  </section>
  <section class="py-5">
    <div class="container">
      <h2 class="text-center fw-bold fs-1">Памятка родителям</h2>
      <p class="text-start fs-5"><b>Велоспорт для детей </b>– прекрасная возможность подарить ребенку успешное будущее. Ежедневные тренировки, работа в команде, стремление к победе – все это формирует в ребенке силу воли, лидерские качества и правильные жизненные принципы.</p>
      <p class="text-center fs-5">Более того, занятия подарят здоровье, ведь велоспорт официально признан отличной профилактикой болезней сердца, сосудов, патологий легочной системы и нервных расстройств.</p>

      <h4 class="mt-5 text-danger fs-2 fw-bold">Медицинские противопоказания</h4>
      <ul class="fs-4">
        <li>Врожденные пороки сердца</li>
        <li>Болезни опорно-двигательного аппарата</li>
        <li>Астма</li>
        <li>Заболевания нервной системы</li>
        <li>Болезни глаз</li>
      </ul>
      <p class="fs-5 text-start fw-bold">Также отложить запись на занятие до полного выздоровления нужно при инфекционных и кожных заболеваниях, болезнях дыхательных путей, ЛОР заболеваниях и травмах.</p>

      <h4 class="mt-5 fs-2 text-success fw-bold">Преимущества</h4>
      <ul class="fs-5">
        <li><b>Работа всех мышц.</b> Во время езды на велосипеде задействуются все группы мышц, что обеспечивает гармоничное развитие, подтянутую фигуру и профилактику заболеваний опорно-двигательного аппарата.</li>
        <li><b>Насыщение крови кислородом.</b> Тренировки велосипедистов проходят на свежем воздухе. Насыщение крови кислородом способствует нормализации работы нервной системы, получению положительных эмоций и острой работе головного мозга, повышению выносливости.</li>
        <li><b>Профилактика сердечных болезней.</b> Аэробные нагрузки во время тренировок заставляют сердце перекачивать больший объем крови, что способствует укреплению сердечной мышцы, избавляет от застоев крови и укрепляет сосуды.</li>
        <li><b>Укрепление дыхательной системы.</b> Во время тренировок на велосипеде укрепляется диафрагма, что благотворно влияет на дыхательную способность легких. Не многие знают, что объем легких у велосипедистов сопоставим с объемом легких ныряльщиков (8 литров при обычном объеме в 6 литров).</li>
        <li><b>Укрепление иммунитета.</b> Велоспорт – один из лучших вариантов укрепить иммунитет. Обогащение крови кислородом + тренировки в любую погоду повышают сопротивляемость организма к инфекционным и вирусным заболеваниям в 4-5 раз.</li>
      </ul>
    </div>
  </section>
<section>
    <div class="container py-5">
    <div id="msgSubmit" class=" text-center hidden h1"> <b> Обратная связь!</b></div>
        <p class="text-center fw-bold text-muted fs-5">Поделиться своими впечатлениями о тренировках и задать имеющиеся вопросы можно заполнив форму обратной связи.</p>
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
    <div class="">
        <form>
            <label>
              <input type="checkbox" id="personalDataCheckbox" required>
              <a class="text-decoration-none fw-bold" href="{{route('Treatment')}}">Я даю согласие на обработку моих персональных данных.</a>
            </label>
            <div class="text-center">
                <button type="submit" class="mt-3 btn btn-dark">Отправить</button>
            </div>
          </form>
    </div>
</form>

</section>

@endsection

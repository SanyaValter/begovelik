@extends('layouts.app')

@section('content')
<section>
    <div class="container p-3">
        <h3 class="text-center"> <b>Обработка персональных данных для регистрации на сайте </b><br>
            Настоящий документ описывает правила и процедуры обработки персональных данных при регистрации на нашем веб-сайте. <b>Мы придерживаемся всех применимых законодательных норм и требований о защите данных</b> , включая Общий регламент по защите данных (GDPR) и местные нормы в сфере защиты персональных данных.</h3>
    </div>
    <div class="container">
        <div class="accordion accordion-flush" id="accordionFlushExample">
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed fs-5" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                    <b>Сбор и использование персональных данных</b>
                </button>
              </h2>
              <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body fs-5"><b>1.1.</b> Для регистрации на нашем веб-сайте мы можем запрашивать следующую информацию:
                    Электронную почту и
                    Пароль для входа на сайт
                 <br> <b>1.2.</b> Мы используем предоставленные вами персональные данные только для целей, связанных с предоставлением вам доступа к функциям и сервисам нашего сайта. Мы не передаем ваши данные третьим лицам без вашего предварительного согласия, за исключением случаев, предусмотренных законодательством.</div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed fs-5" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                    <b>Сохранение и защита персональных данных</b>
                </button>
              </h2>
              <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body fs-5"> <b>2.1.</b>Мы предпринимаем все разумные меры для защиты ваших персональных данных от несанкционированного доступа, использования или раскрытия. Мы используем современные технические и организационные меры безопасности, чтобы обеспечить конфиденциальность и целостность ваших данных.

                   <br> <b>2.2.</b>Мы храним ваши персональные данные только в течение необходимого периода для достижения целей, указанных в настоящем документе, или согласно требованиям, установленным применимым законодательством.</div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed fs-5" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                    <b>Права пользователей</b>
                </button>
              </h2>
              <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body fs-5"><b>3.1.</b> Вы имеете право запросить доступ, исправление или удаление ваших персональных данных, а также ограничение их обработки. Вы также можете отозвать свое согласие на обработку данных в любое время.

                    <br> <b>3.2.</b> Вы имеете право подать жалобу в надзорные органы по вопросам защ</div>
              </div>
            </div>
          </div>
    </div>
</section>
@endsection

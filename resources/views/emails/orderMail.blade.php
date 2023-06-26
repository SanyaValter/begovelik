<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>Беговелик - Запись на занятие</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap');

        body{
            font-family: 'Roboto', sans-serif;
        }

    </style>
</head>
<body>
    <div class="container fs-4">
        <h1 class="fw-bold">Беговелик - Запись на занятие</h1>
        <p>Детали вашей записи:</p>
        <p>Благодарим вас за проявленный интерес к нашим занятиям по беговелу. Мы рады сообщить вам, что ваш ребенок
            <strong>{{ $data['childName'] }}</strong> успешно записан на занятие по беговелу.</p>
        <p><strong>Дата занятия:</strong> {{ $data['date'] }} c 18:00 до 19:00</p>
        <p class="text-danger">Место проведения: Континент, Роллердром, 3 этаж </p>
        <p class="text-danger">Оплата производится на месте!</p>
        <p class="text-muted">Мы с нетерпением ждем вашего ребенка в указанную дату. Наши опытные инструкторы обеспечат
            безопасную и интересную обстановку, где ваш ребенок сможет научиться ездить на беговеле и развивать свои
            навыки. Если у вас возникнут вопросы или вам потребуется какая-либо дополнительная информация, не стесняйтесь
            связаться с нами. Мы с удовольствием ответим на все ваши запросы.
        </p>
        <p>
            Спасибо за выбор наших занятий по беговелу. Мы ждем вас и вашего ребенка на занятии!
        </p>
        <p>
            С наилучшими пожеланиями, команда Беговелик.
        </p>
    </div>
</body>
</html>






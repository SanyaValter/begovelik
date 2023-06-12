
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Беговелик</title>
    <style>
        p {
            font-size: 18px;
        }
    </style>
</head>
<body>
    <h1 class="fw-bold">Беговелик</h1>
    <p><strong>Имя ребёнка:</strong> {{$data['childName']}}</p>
    <p><strong>Дата записи:</strong> {{$data['date']}}</p>
    <p class="text-danger">Оплата производится на месте!</p>
    <p class="text-muted">Спасибо, что выбрали нас! Мы с нетерпением ждем вас на занятии</p>
</body>
</html>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/app.css">
    <script src="js/app.js"></script>
    <title>{{ $title ?? 'Animal shelter' }}</title>
</head>
<body>
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 header-item"><a href="" class="header-link">Хочу помочь</a></div>
                <div class="col-sm-4 header-item header-item--middle"><a href="/" class="header-link">Котопёс</a></div>
                <div class="col-sm-4 header-item"><a href="" class="header-link">Меню</a></div>
            </div>
        </div>
    </header>
    <div class="container">
        @yield('content')
    </div>
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-3 footer-item"><a href="" class="footer-link">О нас</a></div>
                <div class="col-sm-3 footer-item"><a href="" class="footer-link">Контакты</a></div>
                <div class="col-sm-3 footer-item"><a href="" class="footer-link">Список участников</a></div>
                <div class="col-sm-3 footer-item"><a href="" class="footer-link">Спонсоры</a></div>
            </div>
        </div>
    </footer>
</body>
</html>
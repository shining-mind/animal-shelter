<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/app.css">
    <title>{{ $title ?? 'Animal shelter' }}</title>
</head>
<body>
    <header class="header">
        <div class="container">
            <nav class="nav">
                <div class="nav-item"><a href="" class="nav-link">Хочу помочь</a></div>
                <div class="nav-item"><a href="/" class="nav-link">Котопёс</a></div>
                <div class="nav-item"><a href="" class="nav-link">Меню</a></div>
            </nav>
        </div>
    </header>
    <div class="container-md">
        <div class="content">
            @yield('content')
        </div>
    </div>
    <footer class="footer">
        <div class="container">
            <nav class="nav">
                <div class="nav-item"><a href="" class="nav-link">О нас</a></div>
                <div class="nav-item"><a href="" class="nav-link">Контакты</a></div>
                <div class="nav-item"><a href="" class="nav-link">Список участников</a></div>
                <div class="nav-item"><a href="" class="nav-link">Спонсоры</a></div>
            </nav>
        </div>
    </footer>
    <script src="js/app.js"></script>
</body>
</html>
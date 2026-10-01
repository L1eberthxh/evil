<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield ('title', "Evil Empire")</title>
    <link rel="stylesheet" href= "{{ asset('css/style.css') }}">
</head>

<body>
    <header class="header">
        <div class="container">
            <div class="row">

                <a href="#" class="logo">
                    <img src="img/evil.jpg"> </img>
                </a>

                <ul class="list">
                    <li><a href="#">Главная</a></li>
                    <li><a href="#">Чем занимаемся</a></li>
                    <li><a href="#">О нас</a></li>
                    <li><a href="#">Отзывы</a></li>
                </ul>

            @auth
                <form method="POST" action="{{ route('logout') }}" style="display:inline;">
            @csrf
                <button type="submit" class="btn">Выйти</button>
                </form>
            @else
                <a href="{{ route('login') }}" class="btn">Войти</a>
            @endauth
            </div>
        </div>
    </header>

    @yield('content')
    
    <footer class="footer">
    <div class="container">
        <div class="footer-row">

            <div class="footer-col">
                <a href="#" class="footer-logo">
                    <img src="img/evil.jpg" >
                </a>
                <p class="footer-desc">
                    Мы делаем мрачные и стильные сайты. Свяжитесь с нами,
                    если хотите что-то необычное.
                </p>
            </div>

            <div class="footer-col">
                <h4>Навигация</h4>
                <ul class="footer-menu">
                    <li><a href="#">Главная</a></li>
                    <li><a href="#">Чем занимаемся</a></li>
                    <li><a href="#">О нас</a></li>
                    <li><a href="#">Отзывы</a></li>
                </ul>
            </div>

            <div class="footer-col">
                <h4>Контакты</h4>
                <ul class="footer-menu">
                    <li><a href="#">info@evil.com</a></li>
                    <li><a href="#">+7 (000) 000-00-00</a></li>
                    <li><a href="#">Telegram</a></li>
                    <li><a href="#">VK</a></li>
                </ul>
            </div>

        </div>

        <div class="footer-bottom">
            <p>2026 EVIL EMPIRE. Все права защищены.</p>
        </div>
    </div>
</footer>
</body>
</html>
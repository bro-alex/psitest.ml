<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Академия трансформации эмоциональных состояний и интеграции личности</title>
    <link rel="stylesheet" href="{{ asset('css/psitest_style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
    <link rel="stylesheet" href="{{ asset('css/landing.css') }}">
</head>
<body>
<div class="body-wrapper">

    <!-- Голова -->
    <div class="header">
        <div class="header-logo-info">
            <div class="logo"></div>
            <div class="info">
                <div class="info-text">Академия трансформации эмоциональных состояний и интеграции личности по методу</div>
                <div class="info-fio">Василия Корнейчука</div>
            </div>
        </div>
        <div class="header-soc">
            <a href="https://vk.com/academtesintegrio" class="header-soc-vk" target="_blanc"></a>
            <a href="https://t.me/psyhotrauma" class="header-soc-telega" target="_blanc"></a>
        </div>
    </div>
    <!-- /Голова -->

    <!-- Тело -->
    <div class="body-wrapper-center">
        <div class="centr-wrapper">

            <div class="centr-wrapper-centr"></div>
            <div class="centr-wrapper-right">
                <div class="centr-wrapper-right-login">
                    <div class="centr-wrapper-right-text-top">Курс Эмоциональная устойчивость</div>
                    <video class="video" width="100%" height="100%" controls="controls" poster="/img/start.jpg">
                        <source src="video/start.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>

                    </video>

                </div>
                <a href="https://psyhotrauma.autoweboffice.ru/?r=ordering/cart/as1&id=1&clean=true&lg=ru" class="centr-wrapper-right-button">ЗАПИСАТЬСЯ НА КОНСУЛЬТАЦИЮ ОНЛАЙН</a>
            </div>
        </div>
    </div>
    <!-- /Тело -->

    <!-- Баннеры -->
    <div class="banners-wrapper">
        <div class="banners"></div>
    </div>
    <!-- /Баннеры -->

    <!-- Блок лекций -->
    <div class="futter-wrapper">
        <div class="futter-top-text">Здесь будет текст</div>
        <div class="futter-navbar">
            <a href="#">Название вкладки</a>
            <a href="#">Название вкладки</a>
            <a href="#">Название вкладки</a>
            <a href="#">Название вкладки</a>
            <a href="#">Название вкладки</a>
        </div>
        <div class="futter-curs-wrapper">
            <div class="futter-curs"></div>
            <div class="futter-curs"></div>
            <div class="futter-curs"></div>
            <div class="futter-curs"></div>
            <div class="futter-curs"></div>
            <div class="futter-curs"></div>
            <div class="futter-curs"></div>
            <div class="futter-curs"></div>
            <div class="futter-curs"></div>
            <div class="futter-curs"></div>
            <div class="futter-curs"></div>
            <div class="futter-curs"></div>
        </div>
    </div>
    <!-- /Блок лекций -->

    <!-- Футтер -->
    <div class="footer-bottom">
        @include('layouts.footer')
    </div>
    <!-- /Футтер -->
</div>

<script src = "js/reg-card-glav.js"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Академия трансформации эмоциональных состояний и интеграции личности</title>
    <link rel="stylesheet" href="{{ asset('css/psitest_style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
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

        <!-- Навигация -->
        <div class="navbar-wrapper">
        <div class="navbar">
            <a href="#" class="navbar-li">Главная</a>
            <div class="navbar-pal"></div>
            <a href="#" class="navbar-li">Курсы и записи</a>
            <div class="navbar-pal"></div>
            <a href="#" class="navbar-li">Онлайн курсы</a>
            <div class="navbar-pal"></div>
            <a href="#" class="navbar-li">Онлайн консультации</a>
            <div class="navbar-pal"></div>
            <a href="#" class="navbar-li">Клуб</a>
            <div class="navbar-pal"></div>
            <a href="#" class="navbar-li">Об авторе</a>
            <div class="navbar-pal"></div>
            <a href="#" class="navbar-li">Бесплатные материалы</a>
            <div class="navbar-pal"></div>
            <a href="#" class="navbar-li">Новости</a>            
        </div>
    </div>
        <!-- /Навигация -->

        <!-- Тело -->
        <div class="body-wrapper-center">
            <div class="centr-wrapper">
                <div class="centr-wrapper-left">
                    <div class="centr-wrapper-left-top">Узнай как негативные сценарии твоих психотравм портят тебе жизнь</div>
                    <div class="centr-wrapper-left-centr">
                        <div class="centr-wrapper-left-centr-text">Пройди тест - узнай какие психотравмы и негативные жизненные сценарии у тебя есть и как можно от них избавиться при помощи</div>
                        <div class="centr-wrapper-left-centr-fio">Василия Корнейчука</div>
                    </div>
                    <div class="centr-wrapper-left-bottom">
                        <a href="#" class="centr-wrapper-left-bottom-button"></a>
                        <div class="centr-wrapper-left-bottom-text">Посмотрите видео-приветствие</div>
                        <a href="{{ route('test') }}" class="centr-wrapper-left-bottom-button2">ПРОЙТИ ТЕСТ</a>
                    </div>
                </div>
                <div class="centr-wrapper-centr"></div>
                <div class="centr-wrapper-right">
                    <div class="centr-wrapper-right-login">
                        @include('layouts.login')
                        @include('layouts.reg')
                    </div>
                    <a href="#" class="centr-wrapper-right-button">ЗАПИСАТЬСЯ НА КОНСУЛЬТАЦИЮ ОНЛАЙН</a>
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
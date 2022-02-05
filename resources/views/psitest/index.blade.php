<!doctype html>
<html lang=ru>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Психологический тест</title>
    <link href="/css/psitest_style.css" rel="stylesheet">
</head>
<body>
<div class="header">
    @include('psitest.includes.header_top')
<div class="body_top">
<div class="container_left">
    <div class="text_top">
        <p>Честно ответь на вопросы теста</p>
        <p>и ты узнаешь с какими</p>
        <p>психотравмами тебе работать</p>
    </div>
    <div class="text_bottom">
<p>Честно отвечай на вопросы ставя оценку от 1 до 10,</p>
        <p>где 10 означает точно про вас, 1 точно не про меня</p>
    </div></div>
    <div class="container_right">
        <form class="form" action="{{ route('UsersResult') }}" method="POST">
        @csrf
            <div class="name">
                <input class="intext" type="text" name="name" required="required" placeholder="Пример: Антонина Фролова" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Введите ваше имя'">
            </div>



            <div class="name">
                <input id="phone" class="intext" type="text" name="phone" required="required" placeholder="Пример: +79091234556" onfocus="this.value = '+'">
            </div>

            <div class="name">
                <input id="email" class="intext" type="text" name="email" required="required" placeholder="Пример: name@mail.ru" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Введите ваш e-mail'">
            </div>
            <div style="margin-bottom: 3%; font-size: 12px; text-align: justify;"><input type="checkbox" checked="checked">Согласие с нашей <a href="policy.html" target="_blank">Политикой</a> защиты персональной информации</div>

            <div class="inbtn">

                <input class="input" type="submit" name="btn_submit_register" value="НАЧАТЬ ТЕСТ">

            </div>


        </form>
    </div>

</div>
    <div class="body_middle">
<div class="body_middle_text">
    <div class="body_middle_text1">Все наши убеждения исходят из тех психологических травм, которые мы получили в детстве</div>
    <div class="body_middle_text2">Утверждения соответствуют пяти травмам, пройдя тест вы узнаете какая из травм ведущая и как освободиться от её сценария.</div>
</div>
<div class="bode_middle_pred">
    <div class="body_middle_img"><img src="/img/pred.png" alt="Предательство"></div>
    <div class="body_middle_tr_text">
        <div class="body_middle_tr_text_zag">Травма Предательства</div>
        <div class="body_middle_tr_text1">Я должен всё контроллировать<br>Никто не сделает работу лучше меня<br>Сложно делигировать<br>Большое напряжение, сложно расслабиться</div>
    </div>
</div>
<div class="bode_middle_otverg">
<div class="body_middle_img"><img src="/img/otverg.png" alt="Отвергнутый"></div>
    <div class="body_middle_tr_text">
    <div class="body_middle_tr_text_zag">Травма Отвергнутого</div>
        <div class="body_middle_tr_text1">Не могу сказать “нет”<br>Мне постоянно необходимо одобрение<br>Душа компании, важно признание общества<br>Мои таланты не замечают и не ценят</div>
    </div>
</div>
<div class="bode_middle_unig">
<div class="body_middle_img"><img src="/img/unig.png" alt="Униженный"></div>
    <div class="body_middle_tr_text">
    <div class="body_middle_tr_text_zag">Травма Униженного</div>
        <div class="body_middle_tr_text1">Низкая самооценка<br>Хочу выглядеть крутым, но не получается<br>Беру много работы и не справляюсь сней<br>Счастье можно заслужить через страдания</div>
    </div>
</div>
<div class="bode_middle_pokin">
<div class="body_middle_img"><img src="/img/pokin.png" alt="Покинутый"></div>
    <div class="body_middle_tr_text">
    <div class="body_middle_tr_text_zag">Травма Покинутого</div>
        <div class="body_middle_tr_text1">Страх одиночества<br>Лишь бы милый рядом был<br>Псевдожертвенность<br>Стремление быть лучше ради кого-то</div>
    </div>
</div>
<div class="bode_middle_nespr">
<div class="body_middle_img"><img src="/img/nespr.png" alt="Несправедливость"></div>
    <div class="body_middle_tr_text">
    <div class="body_middle_tr_text_zag">Травма Несправедливости</div>
        <div class="body_middle_tr_text1">Стараюсь быть удобным, всем угождаю<br>Хотел как лучше... а меня наказывают...<br>Тяжело воспринимаю критику<br>Не люблю конфликты</div>
    </div>
</div>
    </div>
    @include('psitest.includes.footer')
</div>
</body>
</html>

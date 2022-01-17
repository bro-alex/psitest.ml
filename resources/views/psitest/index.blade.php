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
    <div class="header_top">
<div class="logo">
    <div><img src="/img/logo.png" alt="Логотип"></div>
</div>
        <div class="fio">
            <p>Василий Корнейчук</p>
            <p>академия эмоций</p>
        </div>
        <div class="header_title">
            <p>Психотравмы диктуют сценарии нашей жизни.</p>
            <p>Мы думаем, что мы выбираем как нам поступить в конкретной ситуации,</p>
                <p>но часто ранее полученная психотравма сформировала наше</p>
                <p>мышление и пустила нашу жизнь по сценарию с негшативными последствиями</p>
        </div>
        <div class="header_top_container">

            <div class="logo_globe">
                <img src="/img/globe.png" alt="Логотип">
            </div>
            <div class="logo_insta">
                <img src="/img/insta.png" alt="Логотип">
            </div>
        </div>
    </div>
<div class="body_top">
<div class="container_left">
    <div class="text_top">
        <p>Ответь на вопросы теста</p>
        <p>и ты узнаешь с какими</p>
        <p>психотравмами работать тебе</p>
    </div>
    <div class="text_bottom">
<p>Честно отвечай на вопросы ставя оценку от 1 до 10,</p>
        <p>где 10 означает точно про вас, 1 точно не про меня</p>
    </div></div>
    <div class="container_right">
        <form class="form" action="subtest/register.php" method="post" name="form_register"  onsubmit="return (ValidPhone()&&ValidMail())">

            <div class="name">
                <input class="intext" type="text" name="name" required="required" placeholder="Пример: Антонина Фролова" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Введите ваше имя'">
            </div>



            <div class="name">
                <input id="phone" class="intext" type="text" name="telephone" required="required" placeholder="Пример: +79091234556" onfocus="this.value = '+'">
            </div>

            <div class="name">
                <input id="email" class="intext" type="text" name="email" required="required" placeholder="Пример: name@mail.ru" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Введите ваш e-mail'">
            </div>
            <div style="margin-bottom: 3%; font-size: 12px; text-align: justify;"><input type="checkbox" checked="checked">Согласие с нашей <a href="policy.html" target="_blank">Политикой</a> защиты персональной информации</div>

            <div class="inbtn">

                <input class="input" type="submit" name="btn_submit_register" value="НАЧАТЬ ТЕСТ" onClick="ValidMail(); ValidPhone()">

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
    <div class="footer">
<div class="footer_top">
<div class="footer_top_container_photo">
    <div class="fotter_top_photo"><img src="/img/photo.png" alt="Фотография"></div>
</div>
<div class="footer_top_container_text">
    <div class="fotter_top_contact">@korneichuk_vn</div>
    <div class="footer_top_text">Автор трансформационных практик и собственной методики трансформации психотравм. <div class="footer_top_text_1">&ensp;Подробнее об этом в моём авторском курсе "Погружение"</div></div>
</div>
</div>
<div class="footer_bottom">
    <div class="fotter_bottom_zag">ПОЛЕЗНЫЕ СТАТЬИ И ЗАМЕТКИ</div>
    <div class="footer_bottom_container_contaiters">
    <div class="footer_bottom_container1">
        <div class="footer_bottom_container_zag1">Всё о медитации</div>
        <div class="footer_bottom_container_zag2">Читай больше в блоге на сайте:</div>
        <div class="footer_bottom_container_blog">
        <div class="footer_bottom_container_blog_container1">
        <div class="footer_bottom_container_blog_photo"><img src="/img/blog_photo1.png" alt="Фотография"></div>
        <div class="footer_bottom_container_blog_text">Практика Чод и психотравма,  на мой взгляд, очень взаимосвязаны<br><div class="footer_bottom_container_blog_text_1">17 август, 2021</div></div>
</div>
<div class="footer_bottom_container_blog_container2">
        <div class="footer_bottom_container_blog_photo"><img src="/img/blog_photo2.png" alt="Фотография"></div>
        <div class="footer_bottom_container_blog_text">Вся правда о медитации. Почему  не у всех получается  продвинуться в медитациях,<br><div class="footer_bottom_container_blog_text_1">1 сентябрь, 2021</div></div>
</div>
        </div>
    </div>
    <div class="footer_bottom_container2">
    <div class="footer_bottom_container_zag1">Связаться с нами</div>
        <div class="footer_bottom_container_zag2">Контакты:</div>
        <div class="footer_bottom_container_contacts">
        <div class="footer_bottom_container_contacts_telega">
        <div class="footer_bottom_container_contacts_icon"><img src="/img/telega.png" alt="Телеграмм"></div>
        <div class="footer_bottom_container_contacts_contact">AkademiaVK</div>
</div>

<div class="footer_bottom_container_contacts_email">
        <div class="footer_bottom_container_contacts_icon"><img src="/img/email.png" alt="Почта"></div>
        <div class="footer_bottom_container_contacts_contact">v.korneichuk@bk.ru</div>
</div>
<div class="footer_bottom_container_contacts_skype">
        <div class="footer_bottom_container_contacts_icon"><img src="/img/skype.png" alt="Skype"></div>
        <div class="footer_bottom_container_contacts_contact">VKconsultation</div>
</div>
    </div></div>
    <div class="footer_bottom_container_soc">
    <div class="footer_bottom_container_zag1">Мы в соц. сетях:</div>
    <div class="footer_bottom_container_containerSoc">
    <div class="footer_bottom_container_containerSoc_face"><img src="/img/facebook.png" alt="Facebook"></div>
    <div class="footer_bottom_container_containerSoc_youtube"><img src="/img/youtube.png" alt="Youtube"></div>
    <div class="footer_bottom_container_containerSoc_insta"><img src="/img/instagram.png" alt="Instagram"></div>
    <div class="footer_bottom_container_containerSoc_gc"><img src="/img/soundcloud.png" alt="SoundCloud"></div>
    <div class="footer_bottom_container_containerSoc_twitter"><img src="/img/tweet.png" alt="Tweetter"></div>
    <div class="footer_bottom_container_containerSoc_google"><img src="/img/google.png" alt="Google"></div>
    </div></div>
    </div>
    <div class="fotter_bottom_copyright">© Meditation, 2021. All rights reserved</div>
</div>
    </div>
</div>
</body>
</html>

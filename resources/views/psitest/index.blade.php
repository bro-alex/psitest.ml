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
                <p>но часто мы несчастливы, подавлены, не видим выхода...</p>
        </div>
        <div class="header_top_container">
            <div class="logo_phone">
                <img src="/img/phone.png" alt="Логотип">
            </div>
            <div class="phone">
<p>+7 924 148-48-85</p>
            </div>
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

    </div>
    <div class="footer">

    </div>
</div>
</body>
</html>

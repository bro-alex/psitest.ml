<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Психологический тест</title>
    <link href="/css/psitest_style.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/psitest_test_style.css">
</head>
<body>
<div class="header">

@include('psitest.includes.header_top')

<div class="body_test_middle">

<div class="head">
        <div class="head1">
    <form name="test" action="{{ route('TestResult') }}" method="POST">
    @csrf
    <input type="hidden" name="userId" value="<?php echo $resultUserId; ?>">
        <div class="count" style="display: flex; align-items: center;"><div class="count_text">ОСТАЛОСЬ ВОПРОСОВ: </div> <p class="tex"><img src="/img/strelka.png" alt="стрелка"> </p>
            <div id="counter" style="color: rgb(255, 255, 253); font-size: 46px; padding: 15px; font-family: OpenSans-Regular;">50
        </div></div>

        <div id="headTest">
        <div class="aa1" style="display: block;">
        <p><span class="numer">1</span>В детстве я часто испытывал чрезмерный контроль со стороны</p>
        <input type="radio" name="a1" value="1" id="a1"><label for="a1" class="rad">1</label>
        <input type="radio" name="a1" value="2" id="a2"><label for="a2" class="rad">2</label>
        <input type="radio" name="a1" value="3" id="a3"><label for="a3" class="rad">3</label>
        <input type="radio" name="a1" value="4" id="a4"><label for="a4" class="rad">4</label>
        <input type="radio" name="a1" value="5" id="a5"><label for="a5" class="rad">5</label>
        <input type="radio" name="a1" value="6" id="a6"><label for="a6" class="rad">6</label>
        <input type="radio" name="a1" value="7" id="a7"><label for="a7" class="rad">7</label>
        <input type="radio" name="a1" value="8" id="a8"><label for="a8" class="rad">8</label>
        <input type="radio" name="a1" value="9" id="a9"><label for="a9" class="rad">9</label>
        <input type="radio" name="a1" value="10" id="a10"><label for="a10" class="rad">10</label>
        </div>


        <div class="aa2" style="display: block;">
        <p><span class="numer">2</span>Меня в детстве часто одергивали и не разрешали вести себя как хочется</p>
        <input type="radio" name="a2" value="1" id="a11"><label for="a11" class="rad">1</label>
        <input type="radio" name="a2" value="2" id="a12"><label for="a12" class="rad">2</label>
        <input type="radio" name="a2" value="3" id="a13"><label for="a13" class="rad">3</label>
        <input type="radio" name="a2" value="4" id="a14"><label for="a14" class="rad">4</label>
        <input type="radio" name="a2" value="5" id="a15"><label for="a15" class="rad">5</label>
        <input type="radio" name="a2" value="6" id="a16"><label for="a16" class="rad">6</label>
        <input type="radio" name="a2" value="7" id="a17"><label for="a17" class="rad">7</label>
        <input type="radio" name="a2" value="8" id="a18"><label for="a18" class="rad">8</label>
        <input type="radio" name="a2" value="9" id="a19"><label for="a19" class="rad">9</label>
        <input type="radio" name="a2" value="10" id="a20"><label for="a20" class="rad">10</label>
        </div>

        <div class="aa3" style="display: block;">
        <p><span class="numer">3</span>В детстве меня часто публично осуждали и ставили в пример других</p>
        <input type="radio" name="a3" value="1" id="a21"><label for="a21" class="rad">1</label>
        <input type="radio" name="a3" value="2" id="a22"><label for="a22" class="rad">2</label>
        <input type="radio" name="a3" value="3" id="a23"><label for="a23" class="rad">3</label>
        <input type="radio" name="a3" value="4" id="a24"><label for="a24" class="rad">4</label>
        <input type="radio" name="a3" value="5" id="a25"><label for="a25" class="rad">5</label>
        <input type="radio" name="a3" value="6" id="a26"><label for="a26" class="rad">6</label>
        <input type="radio" name="a3" value="7" id="a27"><label for="a27" class="rad">7</label>
        <input type="radio" name="a3" value="8" id="a28"><label for="a28" class="rad">8</label>
        <input type="radio" name="a3" value="9" id="a29"><label for="a29" class="rad">9</label>
        <input type="radio" name="a3" value="10" id="a30"><label for="a30" class="rad">10</label>
        </div>

        <div class="aa4" style="display: block;">
        <p><span class="numer">4</span>Часто, стараясь показать себя с лучшей стороны, взваливаю на себя много работы и не справляюсь с ней</p>
        <input type="radio" name="a4" value="1" id="a31"><label for="a31" class="rad">1</label>
        <input type="radio" name="a4" value="2" id="a32"><label for="a32" class="rad">2</label>
        <input type="radio" name="a4" value="3" id="a33"><label for="a33" class="rad">3</label>
        <input type="radio" name="a4" value="4" id="a34"><label for="a34" class="rad">4</label>
        <input type="radio" name="a4" value="5" id="a35"><label for="a35" class="rad">5</label>
        <input type="radio" name="a4" value="6" id="a36"><label for="a36" class="rad">6</label>
        <input type="radio" name="a4" value="7" id="a37"><label for="a37" class="rad">7</label>
        <input type="radio" name="a4" value="8" id="a38"><label for="a38" class="rad">8</label>
        <input type="radio" name="a4" value="9" id="a39"><label for="a39" class="rad">9</label>
        <input type="radio" name="a4" value="10" id="a40"><label for="a40" class="rad">10</label>
        </div>

        <div class="aa5" style="display: block;">
        <p><span class="numer">5</span>Часто вытесняю свои желания, считая их постыдными и недостойными</p>
        <input type="radio" name="a5" value="1" id="a41"><label for="a41" class="rad">1</label>
        <input type="radio" name="a5" value="2" id="a42"><label for="a42" class="rad">2</label>
        <input type="radio" name="a5" value="3" id="a43"><label for="a43" class="rad">3</label>
        <input type="radio" name="a5" value="4" id="a44"><label for="a44" class="rad">4</label>
        <input type="radio" name="a5" value="5" id="a45"><label for="a45" class="rad">5</label>
        <input type="radio" name="a5" value="6" id="a46"><label for="a46" class="rad">6</label>
        <input type="radio" name="a5" value="7" id="a47"><label for="a47" class="rad">7</label>
        <input type="radio" name="a5" value="8" id="a48"><label for="a48" class="rad">8</label>
        <input type="radio" name="a5" value="9" id="a49"><label for="a49" class="rad">9</label>
        <input type="radio" name="a5" value="10" id="a50"><label for="a50" class="rad">10</label>
        <br><input type="button" value="ДАЛЕЕ"  class="sled" onclick="check5()"></div>

        <div class="aa6" style="display: none;">
        <p><span class="numer">1</span>Тяжело переношу критику</p>
        <input type="radio" name="a6" value="1" id="a51"><label for="a51" class="rad">1</label>
        <input type="radio" name="a6" value="2" id="a52"><label for="a52" class="rad">2</label>
        <input type="radio" name="a6" value="3" id="a53"><label for="a53" class="rad">3</label>
        <input type="radio" name="a6" value="4" id="a54"><label for="a54" class="rad">4</label>
        <input type="radio" name="a6" value="5" id="a55"><label for="a55" class="rad">5</label>
        <input type="radio" name="a6" value="6" id="a56"><label for="a56" class="rad">6</label>
        <input type="radio" name="a6" value="7" id="a57"><label for="a57" class="rad">7</label>
        <input type="radio" name="a6" value="8" id="a58"><label for="a58" class="rad">8</label>
        <input type="radio" name="a6" value="9" id="a59"><label for="a59" class="rad">9</label>
        <input type="radio" name="a6" value="10" id="a60"><label for="a60" class="rad">10</label>
        </div>

        <div class="aa7" style="display: none;">
        <p><span class="numer">2</span>Тяжело дается отстаивать свои границы, так как чувствую вину и стыд</p>
        <input type="radio" name="a7" value="1" id="a61"><label for="a61" class="rad">1</label>
        <input type="radio" name="a7" value="2" id="a62"><label for="a62" class="rad">2</label>
        <input type="radio" name="a7" value="3" id="a63"><label for="a63" class="rad">3</label>
        <input type="radio" name="a7" value="4" id="a64"><label for="a64" class="rad">4</label>
        <input type="radio" name="a7" value="5" id="a65"><label for="a65" class="rad">5</label>
        <input type="radio" name="a7" value="6" id="a66"><label for="a66" class="rad">6</label>
        <input type="radio" name="a7" value="7" id="a67"><label for="a67" class="rad">7</label>
        <input type="radio" name="a7" value="8" id="a68"><label for="a68" class="rad">8</label>
        <input type="radio" name="a7" value="9" id="a69"><label for="a69" class="rad">9</label>
        <input type="radio" name="a7" value="10" id="a70"><label for="a70" class="rad">10</label>
        </div>

        <div class="aa8" style="display: none;">
        <p><span class="numer">3</span>Часто ощущаю несвободу и желание вырваться на волю</p>
        <input type="radio" name="a8" value="1" id="a71"><label for="a71" class="rad">1</label>
        <input type="radio" name="a8" value="2" id="a72"><label for="a72" class="rad">2</label>
        <input type="radio" name="a8" value="3" id="a73"><label for="a73" class="rad">3</label>
        <input type="radio" name="a8" value="4" id="a74"><label for="a74" class="rad">4</label>
        <input type="radio" name="a8" value="5" id="a75"><label for="a75" class="rad">5</label>
        <input type="radio" name="a8" value="6" id="a76"><label for="a76" class="rad">6</label>
        <input type="radio" name="a8" value="7" id="a77"><label for="a77" class="rad">7</label>
        <input type="radio" name="a8" value="8" id="a78"><label for="a78" class="rad">8</label>
        <input type="radio" name="a8" value="9" id="a79"><label for="a79" class="rad">9</label>
        <input type="radio" name="a8" value="10" id="a80"><label for="a80" class="rad">10</label>
        </div>

        <div class="aa9" style="display: none;">
        <p><span class="numer">4</span>Часто, когда ругают других, чувствую виноватым себя тоже</p>
        <input type="radio" name="a9" value="1" id="a81"><label for="a81" class="rad">1</label>
        <input type="radio" name="a9" value="2" id="a82"><label for="a82" class="rad">2</label>
        <input type="radio" name="a9" value="3" id="a83"><label for="a83" class="rad">3</label>
        <input type="radio" name="a9" value="4" id="a84"><label for="a84" class="rad">4</label>
        <input type="radio" name="a9" value="5" id="a85"><label for="a85" class="rad">5</label>
        <input type="radio" name="a9" value="6" id="a86"><label for="a86" class="rad">6</label>
        <input type="radio" name="a9" value="7" id="a87"><label for="a87" class="rad">7</label>
        <input type="radio" name="a9" value="8" id="a88"><label for="a88" class="rad">8</label>
        <input type="radio" name="a9" value="9" id="a89"><label for="a89" class="rad">9</label>
        <input type="radio" name="a9" value="10" id="a90"><label for="a90" class="rad">10</label>
        </div>

        <div class="aa10" style="display: none;">
        <p><span class="numer">5</span>Чутко реагирую на желания значимого для меня человека, при этом часто игнорирую свои собственные</p>
        <input type="radio" name="a10" value="1" id="a91"><label for="a91" class="rad">1</label>
        <input type="radio" name="a10" value="2" id="a92"><label for="a92" class="rad">2</label>
        <input type="radio" name="a10" value="3" id="a93"><label for="a93" class="rad">3</label>
        <input type="radio" name="a10" value="4" id="a94"><label for="a94" class="rad">4</label>
        <input type="radio" name="a10" value="5" id="a95"><label for="a95" class="rad">5</label>
        <input type="radio" name="a10" value="6" id="a96"><label for="a96" class="rad">6</label>
        <input type="radio" name="a10" value="7" id="a97"><label for="a97" class="rad">7</label>
        <input type="radio" name="a10" value="8" id="a98"><label for="a98" class="rad">8</label>
        <input type="radio" name="a10" value="9" id="a99"><label for="a99" class="rad">9</label>
        <input type="radio" name="a10" value="10" id="a100"><label for="a100" class="rad">10</label>
        <br><input type="button" value="ДАЛЕЕ" class="sled" onclick="check10()"></div>

        <div class="aa11" style="display: none;">
        <p><span class="numer">1</span>Предпочитаю не привязываться к материальным вещам, ибо они могут помешать мне убегать когда и куда вздумается. Кажется, будто я и вправду смотрю на все материальное сверху вниз. Редко пользуюсь материальными вещами для удовольствия, полагая такое удовольствие поверхностным. Признаю, что деньги необходимы, но радости они мне не приносят</p>
        <input type="radio" name="b1" value="1" id="b1"><label for="b1" class="rad">1</label>
        <input type="radio" name="b1" value="2" id="b2"><label for="b2" class="rad">2</label>
        <input type="radio" name="b1" value="3" id="b3"><label for="b3" class="rad">3</label>
        <input type="radio" name="b1" value="4" id="b4"><label for="b4" class="rad">4</label>
        <input type="radio" name="b1" value="5" id="b5"><label for="b5" class="rad">5</label>
        <input type="radio" name="b1" value="6" id="b6"><label for="b6" class="rad">6</label>
        <input type="radio" name="b1" value="7" id="b7"><label for="b7" class="rad">7</label>
        <input type="radio" name="b1" value="8" id="b8"><label for="b8" class="rad">8</label>
        <input type="radio" name="b1" value="9" id="b9"><label for="b9" class="rad">9</label>
        <input type="radio" name="b1" value="10" id="b10"><label for="b10" class="rad">10</label>
        </div>


        <div class="aa12" style="display: none;">
        <p><span class="numer">2</span>Считаю, что должен терпеть до конца самые неприятные ситуации, словно у меня нет права дать отпор, во всяком случае, я не вижу вариантов спасения</p>
        <input type="radio" name="b2" value="1" id="b11"><label for="b11" class="rad">1</label>
        <input type="radio" name="b2" value="2" id="b12"><label for="b12" class="rad">2</label>
        <input type="radio" name="b2" value="3" id="b13"><label for="b13" class="rad">3</label>
        <input type="radio" name="b2" value="4" id="b14"><label for="b14" class="rad">4</label>
        <input type="radio" name="b2" value="5" id="b15"><label for="b15" class="rad">5</label>
        <input type="radio" name="b2" value="6" id="b16"><label for="b16" class="rad">6</label>
        <input type="radio" name="b2" value="7" id="b17"><label for="b17" class="rad">7</label>
        <input type="radio" name="b2" value="8" id="b18"><label for="b18" class="rad">8</label>
        <input type="radio" name="b2" value="9" id="b19"><label for="b19" class="rad">9</label>
        <input type="radio" name="b2" value="10" id="b20"><label for="b20" class="rad">10</label>
        </div>

        <div class="aa13" style="display: none;">
        <p><span class="numer">3</span>Трудно высказать свое мнение, когда меня не спрашивают: мне кажется, что собеседники усмотрят в этом конфронтацию и осмеют, обесценят</p>
        <input type="radio" name="b3" value="1" id="b21"><label for="b21" class="rad">1</label>
        <input type="radio" name="b3" value="2" id="b22"><label for="b22" class="rad">2</label>
        <input type="radio" name="b3" value="3" id="b23"><label for="b23" class="rad">3</label>
        <input type="radio" name="b3" value="4" id="b24"><label for="b24" class="rad">4</label>
        <input type="radio" name="b3" value="5" id="b25"><label for="b25" class="rad">5</label>
        <input type="radio" name="b3" value="6" id="b26"><label for="b26" class="rad">6</label>
        <input type="radio" name="b3" value="7" id="b27"><label for="b27" class="rad">7</label>
        <input type="radio" name="b3" value="8" id="b28"><label for="b28" class="rad">8</label>
        <input type="radio" name="b3" value="9" id="b29"><label for="b29" class="rad">9</label>
        <input type="radio" name="b3" value="10" id="b30"><label for="b30" class="rad">10</label>
        </div>

        <div class="aa14" style="display: none;">
        <p><span class="numer">4</span>Я часто не замечаю свои преимущества</p>
        <input type="radio" name="b4" value="1" id="b31"><label for="b31" class="rad">1</label>
        <input type="radio" name="b4" value="2" id="b32"><label for="b32" class="rad">2</label>
        <input type="radio" name="b4" value="3" id="b33"><label for="b33" class="rad">3</label>
        <input type="radio" name="b4" value="4" id="b34"><label for="b34" class="rad">4</label>
        <input type="radio" name="b4" value="5" id="b35"><label for="b35" class="rad">5</label>
        <input type="radio" name="b4" value="6" id="b36"><label for="b36" class="rad">6</label>
        <input type="radio" name="b4" value="7" id="b37"><label for="b37" class="rad">7</label>
        <input type="radio" name="b4" value="8" id="b38"><label for="b38" class="rad">8</label>
        <input type="radio" name="b4" value="9" id="b39"><label for="b39" class="rad">9</label>
        <input type="radio" name="b4" value="10" id="b40"><label for="b40" class="rad">10</label>
        </div>

        <div class="aa15" style="display: none;">
        <p><span class="numer">5</span>Я часто сравниваю себя с кем-то, кто кажется лучше меня из-за чего замыкаюсь и чувствую, что из-за этого меня не примут</p>
        <input type="radio" name="b5" value="1" id="b41"><label for="b41" class="rad">1</label>
        <input type="radio" name="b5" value="2" id="b42"><label for="b42" class="rad">2</label>
        <input type="radio" name="b5" value="3" id="b43"><label for="b43" class="rad">3</label>
        <input type="radio" name="b5" value="4" id="b44"><label for="b44" class="rad">4</label>
        <input type="radio" name="b5" value="5" id="b45"><label for="b45" class="rad">5</label>
        <input type="radio" name="b5" value="6" id="b46"><label for="b46" class="rad">6</label>
        <input type="radio" name="b5" value="7" id="b47"><label for="b47" class="rad">7</label>
        <input type="radio" name="b5" value="8" id="b48"><label for="b48" class="rad">8</label>
        <input type="radio" name="b5" value="9" id="b49"><label for="b49" class="rad">9</label>
        <input type="radio" name="b5" value="10" id="b50"><label for="b50" class="rad">10</label>
        <br><input type="button" value="ДАЛЕЕ" class="sled" onclick="check15()"></div>

        <div class="aa16" style="display: none;">
        <p><span class="numer">1</span>Я часто уверен, что за мой труд не за что платить много</p>
        <input type="radio" name="b6" value="1" id="b51"><label for="b51" class="rad">1</label>
        <input type="radio" name="b6" value="2" id="b52"><label for="b52" class="rad">2</label>
        <input type="radio" name="b6" value="3" id="b53"><label for="b53" class="rad">3</label>
        <input type="radio" name="b6" value="4" id="b54"><label for="b54" class="rad">4</label>
        <input type="radio" name="b6" value="5" id="b55"><label for="b55" class="rad">5</label>
        <input type="radio" name="b6" value="6" id="b56"><label for="b56" class="rad">6</label>
        <input type="radio" name="b6" value="7" id="b57"><label for="b57" class="rad">7</label>
        <input type="radio" name="b6" value="8" id="b58"><label for="b58" class="rad">8</label>
        <input type="radio" name="b6" value="9" id="b59"><label for="b59" class="rad">9</label>
        <input type="radio" name="b6" value="10" id="b60"><label for="b60" class="rad">10</label>
        </div>

        <div class="aa17" style="display: none;">
        <p><span class="numer">2</span>Если мне заплатят, как мне покажется, слишком много я буду чувствовать себя неуютно и спущу деньги</p>
        <input type="radio" name="b7" value="1" id="b61"><label for="b61" class="rad">1</label>
        <input type="radio" name="b7" value="2" id="b62"><label for="b62" class="rad">2</label>
        <input type="radio" name="b7" value="3" id="b63"><label for="b63" class="rad">3</label>
        <input type="radio" name="b7" value="4" id="b64"><label for="b64" class="rad">4</label>
        <input type="radio" name="b7" value="5" id="b65"><label for="b65" class="rad">5</label>
        <input type="radio" name="b7" value="6" id="b66"><label for="b66" class="rad">6</label>
        <input type="radio" name="b7" value="7" id="b67"><label for="b67" class="rad">7</label>
        <input type="radio" name="b7" value="8" id="b68"><label for="b68" class="rad">8</label>
        <input type="radio" name="b7" value="9" id="b69"><label for="b69" class="rad">9</label>
        <input type="radio" name="b7" value="10" id="b70"><label for="b70" class="rad">10</label>
        </div>

        <div class="aa18" style="display: none;">
        <p><span class="numer">3</span>Я часто отказываюсь от борьбы и сопротивления</p>
        <input type="radio" name="b8" value="1" id="b71"><label for="b71" class="rad">1</label>
        <input type="radio" name="b8" value="2" id="b72"><label for="b72" class="rad">2</label>
        <input type="radio" name="b8" value="3" id="b73"><label for="b73" class="rad">3</label>
        <input type="radio" name="b8" value="4" id="b74"><label for="b74" class="rad">4</label>
        <input type="radio" name="b8" value="5" id="b75"><label for="b75" class="rad">5</label>
        <input type="radio" name="b8" value="6" id="b76"><label for="b76" class="rad">6</label>
        <input type="radio" name="b8" value="7" id="b77"><label for="b77" class="rad">7</label>
        <input type="radio" name="b8" value="8" id="b78"><label for="b78" class="rad">8</label>
        <input type="radio" name="b8" value="9" id="b79"><label for="b79" class="rad">9</label>
        <input type="radio" name="b8" value="10" id="b80"><label for="b80" class="rad">10</label>
        </div>

        <div class="aa19" style="display: none;">
        <p><span class="numer">4</span>Я знаю чего хочу, но часто не заявляю об этом, так как боюсь услышать «нет»</p>
        <input type="radio" name="b9" value="1" id="b81"><label for="b81" class="rad">1</label>
        <input type="radio" name="b9" value="2" id="b82"><label for="b82" class="rad">2</label>
        <input type="radio" name="b9" value="3" id="b83"><label for="b83" class="rad">3</label>
        <input type="radio" name="b9" value="4" id="b84"><label for="b84" class="rad">4</label>
        <input type="radio" name="b9" value="5" id="b85"><label for="b85" class="rad">5</label>
        <input type="radio" name="b9" value="6" id="b86"><label for="b86" class="rad">6</label>
        <input type="radio" name="b9" value="7" id="b87"><label for="b87" class="rad">7</label>
        <input type="radio" name="b9" value="8" id="b88"><label for="b88" class="rad">8</label>
        <input type="radio" name="b9" value="9" id="b89"><label for="b89" class="rad">9</label>
        <input type="radio" name="b9" value="10" id="b90"><label for="b90" class="rad">10</label>
        </div>

        <div class="aa20" style="display: none;">
        <p><span class="numer">5</span>Часто ощущаю, что материальное это не важно, стараюсь отстраняться от него, и ставлю духовное выше, признаю деньги, но не считаю их источником удовольствия</p>
        <input type="radio" name="b10" value="1" id="b91"><label for="b91" class="rad">1</label>
        <input type="radio" name="b10" value="2" id="b92"><label for="b92" class="rad">2</label>
        <input type="radio" name="b10" value="3" id="b93"><label for="b93" class="rad">3</label>
        <input type="radio" name="b10" value="4" id="b94"><label for="b94" class="rad">4</label>
        <input type="radio" name="b10" value="5" id="b95"><label for="b95" class="rad">5</label>
        <input type="radio" name="b10" value="6" id="b96"><label for="b96" class="rad">6</label>
        <input type="radio" name="b10" value="7" id="b97"><label for="b97" class="rad">7</label>
        <input type="radio" name="b10" value="8" id="b98"><label for="b98" class="rad">8</label>
        <input type="radio" name="b10" value="9" id="b99"><label for="b99" class="rad">9</label>
        <input type="radio" name="b10" value="10" id="b100"><label for="b100" class="rad">10</label>
        <br><input type="button" value="ДАЛЕЕ" class="sled" onclick="check20()"></div>

        <div class="aa21" style="display: none;">
        <p><span class="numer">1</span>Часто я склонен создавать проблемы, чтобы привлечь к себе внимание: "посмотрите как мне тяжело, я жертва"</p>
        <input type="radio" name="c1" value="1" id="c1"><label for="c1" class="rad">1</label>
        <input type="radio" name="c1" value="2" id="c2"><label for="c2" class="rad">2</label>
        <input type="radio" name="c1" value="3" id="c3"><label for="c3" class="rad">3</label>
        <input type="radio" name="c1" value="4" id="c4"><label for="c4" class="rad">4</label>
        <input type="radio" name="c1" value="5" id="c5"><label for="c5" class="rad">5</label>
        <input type="radio" name="c1" value="6" id="c6"><label for="c6" class="rad">6</label>
        <input type="radio" name="c1" value="7" id="c7"><label for="c7" class="rad">7</label>
        <input type="radio" name="c1" value="8" id="c8"><label for="c8" class="rad">8</label>
        <input type="radio" name="c1" value="9" id="c9"><label for="c9" class="rad">9</label>
        <input type="radio" name="c1" value="10" id="c10"><label for="c10" class="rad">10</label>
        </div>


        <div class="aa22" style="display: none;">
        <p><span class="numer">2</span>Мне часто страшно делать что-то в одиночку, мне нужна поддержка и присутствие кого-нибудь</p>
        <input type="radio" name="c2" value="1" id="c11"><label for="c11" class="rad">1</label>
        <input type="radio" name="c2" value="2" id="c12"><label for="c12" class="rad">2</label>
        <input type="radio" name="c2" value="3" id="c13"><label for="c13" class="rad">3</label>
        <input type="radio" name="c2" value="4" id="c14"><label for="c14" class="rad">4</label>
        <input type="radio" name="c2" value="5" id="c15"><label for="c15" class="rad">5</label>
        <input type="radio" name="c2" value="6" id="c16"><label for="c16" class="rad">6</label>
        <input type="radio" name="c2" value="7" id="c17"><label for="c17" class="rad">7</label>
        <input type="radio" name="c2" value="8" id="c18"><label for="c18" class="rad">8</label>
        <input type="radio" name="c2" value="9" id="c19"><label for="c19" class="rad">9</label>
        <input type="radio" name="c2" value="10" id="c20"><label for="c20" class="rad">10</label>
        </div>

        <div class="aa23" style="display: none;">
        <p><span class="numer">3</span>Стараюсь не замечать недостатки партнера, так как боюсь, что из-за этого он уйдет</p>
        <input type="radio" name="c3" value="1" id="c21"><label for="c21" class="rad">1</label>
        <input type="radio" name="c3" value="2" id="c22"><label for="c22" class="rad">2</label>
        <input type="radio" name="c3" value="3" id="c23"><label for="c23" class="rad">3</label>
        <input type="radio" name="c3" value="4" id="c24"><label for="c24" class="rad">4</label>
        <input type="radio" name="c3" value="5" id="c25"><label for="c25" class="rad">5</label>
        <input type="radio" name="c3" value="6" id="c26"><label for="c26" class="rad">6</label>
        <input type="radio" name="c3" value="7" id="c27"><label for="c27" class="rad">7</label>
        <input type="radio" name="c3" value="8" id="c28"><label for="c28" class="rad">8</label>
        <input type="radio" name="c3" value="9" id="c29"><label for="c29" class="rad">9</label>
        <input type="radio" name="c3" value="10" id="c30"><label for="c30" class="rad">10</label>
        </div>

        <div class="aa24" style="display: none;">
        <p><span class="numer">4</span>Мне сложно даются изменения в жизни, стараюсь жить привычным образом</p>
        <input type="radio" name="c4" value="1" id="c31"><label for="c31" class="rad">1</label>
        <input type="radio" name="c4" value="2" id="c32"><label for="c32" class="rad">2</label>
        <input type="radio" name="c4" value="3" id="c33"><label for="c33" class="rad">3</label>
        <input type="radio" name="c4" value="4" id="c34"><label for="c34" class="rad">4</label>
        <input type="radio" name="c4" value="5" id="c35"><label for="c35" class="rad">5</label>
        <input type="radio" name="c4" value="6" id="c36"><label for="c36" class="rad">6</label>
        <input type="radio" name="c4" value="7" id="c37"><label for="c37" class="rad">7</label>
        <input type="radio" name="c4" value="8" id="c38"><label for="c38" class="rad">8</label>
        <input type="radio" name="c4" value="9" id="c39"><label for="c39" class="rad">9</label>
        <input type="radio" name="c4" value="10" id="c40"><label for="c40" class="rad">10</label>
        </div>

        <div class="aa25" style="display: none;">
        <p><span class="numer">5</span>Часто открываю душу другим людям и верю, что несу ответственность за их счастье</p>
        <input type="radio" name="c5" value="1" id="c41"><label for="c41" class="rad">1</label>
        <input type="radio" name="c5" value="2" id="c42"><label for="c42" class="rad">2</label>
        <input type="radio" name="c5" value="3" id="c43"><label for="c43" class="rad">3</label>
        <input type="radio" name="c5" value="4" id="c44"><label for="c44" class="rad">4</label>
        <input type="radio" name="c5" value="5" id="c45"><label for="c45" class="rad">5</label>
        <input type="radio" name="c5" value="6" id="c46"><label for="c46" class="rad">6</label>
        <input type="radio" name="c5" value="7" id="c47"><label for="c47" class="rad">7</label>
        <input type="radio" name="c5" value="8" id="c48"><label for="c48" class="rad">8</label>
        <input type="radio" name="c5" value="9" id="c49"><label for="c49" class="rad">9</label>
        <input type="radio" name="c5" value="10" id="c50"><label for="c50" class="rad">10</label>
        <br><input type="button" value="ДАЛЕЕ" class="sled" onclick="check25()"></div>

        <div class="aa26" style="display: none;">
        <p><span class="numer">1</span>Мне сложно принимать, что кто-то меня не любит</p>
        <input type="radio" name="c6" value="1" id="c51"><label for="c51" class="rad">1</label>
        <input type="radio" name="c6" value="2" id="c52"><label for="c52" class="rad">2</label>
        <input type="radio" name="c6" value="3" id="c53"><label for="c53" class="rad">3</label>
        <input type="radio" name="c6" value="4" id="c54"><label for="c54" class="rad">4</label>
        <input type="radio" name="c6" value="5" id="c55"><label for="c55" class="rad">5</label>
        <input type="radio" name="c6" value="6" id="c56"><label for="c56" class="rad">6</label>
        <input type="radio" name="c6" value="7" id="c57"><label for="c57" class="rad">7</label>
        <input type="radio" name="c6" value="8" id="c58"><label for="c58" class="rad">8</label>
        <input type="radio" name="c6" value="9" id="c59"><label for="c59" class="rad">9</label>
        <input type="radio" name="c6" value="10" id="c60"><label for="c60" class="rad">10</label>
        </div>

        <div class="aa27" style="display: none;">
        <p><span class="numer">2</span>Болезненно воспринимаю отказы</p>
        <input type="radio" name="c7" value="1" id="c61"><label for="c61" class="rad">1</label>
        <input type="radio" name="c7" value="2" id="c62"><label for="c62" class="rad">2</label>
        <input type="radio" name="c7" value="3" id="c63"><label for="c63" class="rad">3</label>
        <input type="radio" name="c7" value="4" id="c64"><label for="c64" class="rad">4</label>
        <input type="radio" name="c7" value="5" id="c65"><label for="c65" class="rad">5</label>
        <input type="radio" name="c7" value="6" id="c66"><label for="c66" class="rad">6</label>
        <input type="radio" name="c7" value="7" id="c67"><label for="c67" class="rad">7</label>
        <input type="radio" name="c7" value="8" id="c68"><label for="c68" class="rad">8</label>
        <input type="radio" name="c7" value="9" id="c69"><label for="c69" class="rad">9</label>
        <input type="radio" name="c7" value="10" id="c70"><label for="c70" class="rad">10</label>
        </div>

        <div class="aa28" style="display: none;">
        <p><span class="numer">3</span>Боюсь изоляции в коллективе, из-за чего терплю общение, даже если мне оно не нравится</p>
        <input type="radio" name="c8" value="1" id="c71"><label for="c71" class="rad">1</label>
        <input type="radio" name="c8" value="2" id="c72"><label for="c72" class="rad">2</label>
        <input type="radio" name="c8" value="3" id="c73"><label for="c73" class="rad">3</label>
        <input type="radio" name="c8" value="4" id="c74"><label for="c74" class="rad">4</label>
        <input type="radio" name="c8" value="5" id="c75"><label for="c75" class="rad">5</label>
        <input type="radio" name="c8" value="6" id="c76"><label for="c76" class="rad">6</label>
        <input type="radio" name="c8" value="7" id="c77"><label for="c77" class="rad">7</label>
        <input type="radio" name="c8" value="8" id="c78"><label for="c78" class="rad">8</label>
        <input type="radio" name="c8" value="9" id="c79"><label for="c79" class="rad">9</label>
        <input type="radio" name="c8" value="10" id="c80"><label for="c80" class="rad">10</label>
        </div>

        <div class="aa29" style="display: none;">
        <p><span class="numer">4</span>Я уверен, что от меня часто требуют слишком многого</p>
        <input type="radio" name="c9" value="1" id="c81"><label for="c81" class="rad">1</label>
        <input type="radio" name="c9" value="2" id="c82"><label for="c82" class="rad">2</label>
        <input type="radio" name="c9" value="3" id="c83"><label for="c83" class="rad">3</label>
        <input type="radio" name="c9" value="4" id="c84"><label for="c84" class="rad">4</label>
        <input type="radio" name="c9" value="5" id="c85"><label for="c85" class="rad">5</label>
        <input type="radio" name="c9" value="6" id="c86"><label for="c86" class="rad">6</label>
        <input type="radio" name="c9" value="7" id="c87"><label for="c87" class="rad">7</label>
        <input type="radio" name="c9" value="8" id="c88"><label for="c88" class="rad">8</label>
        <input type="radio" name="c9" value="9" id="c89"><label for="c89" class="rad">9</label>
        <input type="radio" name="c9" value="10" id="c90"><label for="c90" class="rad">10</label>
        </div>

        <div class="aa30" style="display: none;">
        <p><span class="numer">5</span>Если мне оказывают помощь в трудных ситуациях, я чувствую благодарность и сильно обижаюсь, если мне никто не помогает</p>
        <input type="radio" name="c10" value="1" id="c91"><label for="c91" class="rad">1</label>
        <input type="radio" name="c10" value="2" id="c92"><label for="c92" class="rad">2</label>
        <input type="radio" name="c10" value="3" id="c93"><label for="c93" class="rad">3</label>
        <input type="radio" name="c10" value="4" id="c94"><label for="c94" class="rad">4</label>
        <input type="radio" name="c10" value="5" id="c95"><label for="c95" class="rad">5</label>
        <input type="radio" name="c10" value="6" id="c96"><label for="c96" class="rad">6</label>
        <input type="radio" name="c10" value="7" id="c97"><label for="c97" class="rad">7</label>
        <input type="radio" name="c10" value="8" id="c98"><label for="c98" class="rad">8</label>
        <input type="radio" name="c10" value="9" id="c99"><label for="c99" class="rad">9</label>
        <input type="radio" name="c10" value="10" id="c100"><label for="c100" class="rad">10</label>
        <br><input type="button" value="ДАЛЕЕ" class="sled" onclick="check30()"></div>

        <div class="aa31" style="display: none;">
        <p><span class="numer">1</span>Я часто люблю скрещивать руки на груди, чтобы быть немного отстраненным</p>
        <input type="radio" name="d1" value="1" id="d1"><label for="d1" class="rad">1</label>
        <input type="radio" name="d1" value="2" id="d2"><label for="d2" class="rad">2</label>
        <input type="radio" name="d1" value="3" id="d3"><label for="d3" class="rad">3</label>
        <input type="radio" name="d1" value="4" id="d4"><label for="d4" class="rad">4</label>
        <input type="radio" name="d1" value="5" id="d5"><label for="d5" class="rad">5</label>
        <input type="radio" name="d1" value="6" id="d6"><label for="d6" class="rad">6</label>
        <input type="radio" name="d1" value="7" id="d7"><label for="d7" class="rad">7</label>
        <input type="radio" name="d1" value="8" id="d8"><label for="d8" class="rad">8</label>
        <input type="radio" name="d1" value="9" id="d9"><label for="d9" class="rad">9</label>
        <input type="radio" name="d1" value="10" id="d10"><label for="d10" class="rad">10</label>
        </div>

        <div class="aa32" style="display: none;">
        <p><span class="numer">2</span>Часто добиваюсь правды и справедливости, исходя из своего понимания об этом</p>
        <input type="radio" name="d2" value="1" id="d11"><label for="d11" class="rad">1</label>
        <input type="radio" name="d2" value="2" id="d12"><label for="d12" class="rad">2</label>
        <input type="radio" name="d2" value="3" id="d13"><label for="d13" class="rad">3</label>
        <input type="radio" name="d2" value="4" id="d14"><label for="d14" class="rad">4</label>
        <input type="radio" name="d2" value="5" id="d15"><label for="d15" class="rad">5</label>
        <input type="radio" name="d2" value="6" id="d16"><label for="d16" class="rad">6</label>
        <input type="radio" name="d2" value="7" id="d17"><label for="d17" class="rad">7</label>
        <input type="radio" name="d2" value="8" id="d18"><label for="d18" class="rad">8</label>
        <input type="radio" name="d2" value="9" id="d19"><label for="d19" class="rad">9</label>
        <input type="radio" name="d2" value="10" id="d20"><label for="d20" class="rad">10</label>
        </div>

        <div class="aa33" style="display: none;">
        <p><span class="numer">3</span>Уверен, что мне часто завидуют</p>
        <input type="radio" name="d3" value="1" id="d21"><label for="d21" class="rad">1</label>
        <input type="radio" name="d3" value="2" id="d22"><label for="d22" class="rad">2</label>
        <input type="radio" name="d3" value="3" id="d23"><label for="d23" class="rad">3</label>
        <input type="radio" name="d3" value="4" id="d24"><label for="d24" class="rad">4</label>
        <input type="radio" name="d3" value="5" id="d25"><label for="d25" class="rad">5</label>
        <input type="radio" name="d3" value="6" id="d26"><label for="d26" class="rad">6</label>
        <input type="radio" name="d3" value="7" id="d27"><label for="d27" class="rad">7</label>
        <input type="radio" name="d3" value="8" id="d28"><label for="d28" class="rad">8</label>
        <input type="radio" name="d3" value="9" id="d29"><label for="d29" class="rad">9</label>
        <input type="radio" name="d3" value="10" id="d30"><label for="d30" class="rad">10</label>
        </div>

        <div class="aa34" style="display: none;">
        <p><span class="numer">4</span>Не люблю отдыхать, если кто-то в это время работает, испытываю вину и начинаю тоже что-то делать</p>
        <input type="radio" name="d4" value="1" id="d31"><label for="d31" class="rad">1</label>
        <input type="radio" name="d4" value="2" id="d32"><label for="d32" class="rad">2</label>
        <input type="radio" name="d4" value="3" id="d33"><label for="d33" class="rad">3</label>
        <input type="radio" name="d4" value="4" id="d34"><label for="d34" class="rad">4</label>
        <input type="radio" name="d4" value="5" id="d35"><label for="d35" class="rad">5</label>
        <input type="radio" name="d4" value="6" id="d36"><label for="d36" class="rad">6</label>
        <input type="radio" name="d4" value="7" id="d37"><label for="d37" class="rad">7</label>
        <input type="radio" name="d4" value="8" id="d38"><label for="d38" class="rad">8</label>
        <input type="radio" name="d4" value="9" id="d39"><label for="d39" class="rad">9</label>
        <input type="radio" name="d4" value="10" id="d40"><label for="d40" class="rad">10</label>
        </div>

        <div class="aa35" style="display: none;">
        <p><span class="numer">5</span>Часто работаю через силу до полного изнеможения, но стараюсь этого не показывать</p>
        <input type="radio" name="d5" value="1" id="d41"><label for="d41" class="rad">1</label>
        <input type="radio" name="d5" value="2" id="d42"><label for="d42" class="rad">2</label>
        <input type="radio" name="d5" value="3" id="d43"><label for="d43" class="rad">3</label>
        <input type="radio" name="d5" value="4" id="d44"><label for="d44" class="rad">4</label>
        <input type="radio" name="d5" value="5" id="d45"><label for="d45" class="rad">5</label>
        <input type="radio" name="d5" value="6" id="d46"><label for="d46" class="rad">6</label>
        <input type="radio" name="d5" value="7" id="d47"><label for="d47" class="rad">7</label>
        <input type="radio" name="d5" value="8" id="d48"><label for="d48" class="rad">8</label>
        <input type="radio" name="d5" value="9" id="d49"><label for="d49" class="rad">9</label>
        <input type="radio" name="d5" value="10" id="d50"><label for="d50" class="rad">10</label>
        <br><input type="button" value="ДАЛЕЕ" class="sled" onclick="check35()"></div>

        <div class="aa36" style="display: none;">
        <p><span class="numer">1</span>Самое главное для меня - это заслужить</p>
        <input type="radio" name="d6" value="1" id="d51"><label for="d51" class="rad">1</label>
        <input type="radio" name="d6" value="2" id="d52"><label for="d52" class="rad">2</label>
        <input type="radio" name="d6" value="3" id="d53"><label for="d53" class="rad">3</label>
        <input type="radio" name="d6" value="4" id="d54"><label for="d54" class="rad">4</label>
        <input type="radio" name="d6" value="5" id="d55"><label for="d55" class="rad">5</label>
        <input type="radio" name="d6" value="6" id="d56"><label for="d56" class="rad">6</label>
        <input type="radio" name="d6" value="7" id="d57"><label for="d57" class="rad">7</label>
        <input type="radio" name="d6" value="8" id="d58"><label for="d58" class="rad">8</label>
        <input type="radio" name="d6" value="9" id="d59"><label for="d59" class="rad">9</label>
        <input type="radio" name="d6" value="10" id="d60"><label for="d60" class="rad">10</label>
        </div>

        <div class="aa37" style="display: none;">
        <p><span class="numer">2</span>Я часто боюсь сделать выбор, все время взвешиваю «за» и «против»</p>
        <input type="radio" name="d7" value="1" id="d61"><label for="d61" class="rad">1</label>
        <input type="radio" name="d7" value="2" id="d62"><label for="d62" class="rad">2</label>
        <input type="radio" name="d7" value="3" id="d63"><label for="d63" class="rad">3</label>
        <input type="radio" name="d7" value="4" id="d64"><label for="d64" class="rad">4</label>
        <input type="radio" name="d7" value="5" id="d65"><label for="d65" class="rad">5</label>
        <input type="radio" name="d7" value="6" id="d66"><label for="d66" class="rad">6</label>
        <input type="radio" name="d7" value="7" id="d67"><label for="d67" class="rad">7</label>
        <input type="radio" name="d7" value="8" id="d68"><label for="d68" class="rad">8</label>
        <input type="radio" name="d7" value="9" id="d69"><label for="d69" class="rad">9</label>
        <input type="radio" name="d7" value="10" id="d70"><label for="d70" class="rad">10</label>
        </div>

        <div class="aa38" style="display: none;">
        <p><span class="numer">3</span>Часто не разрешаю себе покупки, особенно если кто-то из близких себе в них отказывает</p>
        <input type="radio" name="d8" value="1" id="d71"><label for="d71" class="rad">1</label>
        <input type="radio" name="d8" value="2" id="d72"><label for="d72" class="rad">2</label>
        <input type="radio" name="d8" value="3" id="d73"><label for="d73" class="rad">3</label>
        <input type="radio" name="d8" value="4" id="d74"><label for="d74" class="rad">4</label>
        <input type="radio" name="d8" value="5" id="d75"><label for="d75" class="rad">5</label>
        <input type="radio" name="d8" value="6" id="d76"><label for="d76" class="rad">6</label>
        <input type="radio" name="d8" value="7" id="d77"><label for="d77" class="rad">7</label>
        <input type="radio" name="d8" value="8" id="d78"><label for="d78" class="rad">8</label>
        <input type="radio" name="d8" value="9" id="d79"><label for="d79" class="rad">9</label>
        <input type="radio" name="d8" value="10" id="d80"><label for="d80" class="rad">10</label>
        </div>

        <div class="aa39" style="display: none;">
        <p><span class="numer">4</span>Стараюсь не хвастаться покупками, чтобы не завидовали, часто оправдываюсь за покупки</p>
        <input type="radio" name="d9" value="1" id="d81"><label for="d81" class="rad">1</label>
        <input type="radio" name="d9" value="2" id="d82"><label for="d82" class="rad">2</label>
        <input type="radio" name="d9" value="3" id="d83"><label for="d83" class="rad">3</label>
        <input type="radio" name="d9" value="4" id="d84"><label for="d84" class="rad">4</label>
        <input type="radio" name="d9" value="5" id="d85"><label for="d85" class="rad">5</label>
        <input type="radio" name="d9" value="6" id="d86"><label for="d86" class="rad">6</label>
        <input type="radio" name="d9" value="7" id="d87"><label for="d87" class="rad">7</label>
        <input type="radio" name="d9" value="8" id="d88"><label for="d88" class="rad">8</label>
        <input type="radio" name="d9" value="9" id="d89"><label for="d89" class="rad">9</label>
        <input type="radio" name="d9" value="10" id="d90"><label for="d90" class="rad">10</label>
        </div>

        <div class="aa40" style="display: none;">
        <p><span class="numer">5</span>Не люблю, когда мне дарят подарки</p>
        <input type="radio" name="d10" value="1" id="d91"><label for="d91" class="rad">1</label>
        <input type="radio" name="d10" value="2" id="d92"><label for="d92" class="rad">2</label>
        <input type="radio" name="d10" value="3" id="d93"><label for="d93" class="rad">3</label>
        <input type="radio" name="d10" value="4" id="d94"><label for="d94" class="rad">4</label>
        <input type="radio" name="d10" value="5" id="d95"><label for="d95" class="rad">5</label>
        <input type="radio" name="d10" value="6" id="d96"><label for="d96" class="rad">6</label>
        <input type="radio" name="d10" value="7" id="d97"><label for="d97" class="rad">7</label>
        <input type="radio" name="d10" value="8" id="d98"><label for="d98" class="rad">8</label>
        <input type="radio" name="d10" value="9" id="d99"><label for="d99" class="rad">9</label>
        <input type="radio" name="d10" value="10" id="d100"><label for="d100" class="rad">10</label>
        <br><input type="button" value="ДАЛЕЕ" class="sled" onclick="check40()"></div>

        <div class="aa41" style="display: none;">
        <p><span class="numer">1</span>Не люблю никуда опаздывать и часто прихожу заранее</p>
        <input type="radio" name="e1" value="1" id="e1"><label for="e1" class="rad">1</label>
        <input type="radio" name="e1" value="2" id="e2"><label for="e2" class="rad">2</label>
        <input type="radio" name="e1" value="3" id="e3"><label for="e3" class="rad">3</label>
        <input type="radio" name="e1" value="4" id="e4"><label for="e4" class="rad">4</label>
        <input type="radio" name="e1" value="5" id="e5"><label for="e5" class="rad">5</label>
        <input type="radio" name="e1" value="6" id="e6"><label for="e6" class="rad">6</label>
        <input type="radio" name="e1" value="7" id="e7"><label for="e7" class="rad">7</label>
        <input type="radio" name="e1" value="8" id="e8"><label for="e8" class="rad">8</label>
        <input type="radio" name="e1" value="9" id="e9"><label for="e9" class="rad">9</label>
        <input type="radio" name="e1" value="10" id="e10"><label for="e10" class="rad">10</label>
        </div>


        <div class="aa42" style="display: none;">
        <p><span class="numer">2</span>Обычно демонстрирую силу, уверенность, что все знаю и все умею</p>
        <input type="radio" name="e2" value="1" id="e11"><label for="e11" class="rad">1</label>
        <input type="radio" name="e2" value="2" id="e12"><label for="e12" class="rad">2</label>
        <input type="radio" name="e2" value="3" id="e13"><label for="e13" class="rad">3</label>
        <input type="radio" name="e2" value="4" id="e14"><label for="e14" class="rad">4</label>
        <input type="radio" name="e2" value="5" id="e15"><label for="e15" class="rad">5</label>
        <input type="radio" name="e2" value="6" id="e16"><label for="e16" class="rad">6</label>
        <input type="radio" name="e2" value="7" id="e17"><label for="e17" class="rad">7</label>
        <input type="radio" name="e2" value="8" id="e18"><label for="e18" class="rad">8</label>
        <input type="radio" name="e2" value="9" id="e19"><label for="e19" class="rad">9</label>
        <input type="radio" name="e2" value="10" id="e20"><label for="e20" class="rad">10</label>
        </div>

        <div class="aa43" style="display: none;">
        <p><span class="numer">3</span>Я быстро схватываю ситуацию и демонстрирую, что уже разобрался в ней</p>
        <input type="radio" name="e3" value="1" id="e21"><label for="e21" class="rad">1</label>
        <input type="radio" name="e3" value="2" id="e22"><label for="e22" class="rad">2</label>
        <input type="radio" name="e3" value="3" id="e23"><label for="e23" class="rad">3</label>
        <input type="radio" name="e3" value="4" id="e24"><label for="e24" class="rad">4</label>
        <input type="radio" name="e3" value="5" id="e25"><label for="e25" class="rad">5</label>
        <input type="radio" name="e3" value="6" id="e26"><label for="e26" class="rad">6</label>
        <input type="radio" name="e3" value="7" id="e27"><label for="e27" class="rad">7</label>
        <input type="radio" name="e3" value="8" id="e28"><label for="e28" class="rad">8</label>
        <input type="radio" name="e3" value="9" id="e29"><label for="e29" class="rad">9</label>
        <input type="radio" name="e3" value="10" id="e30"><label for="e30" class="rad">10</label>
        </div>

        <div class="aa44" style="display: none;">
        <p><span class="numer">4</span>Требую от других полного принятия моих верований, часто категоричен в высказываниях</p>
        <input type="radio" name="e4" value="1" id="e31"><label for="e31" class="rad">1</label>
        <input type="radio" name="e4" value="2" id="e32"><label for="e32" class="rad">2</label>
        <input type="radio" name="e4" value="3" id="e33"><label for="e33" class="rad">3</label>
        <input type="radio" name="e4" value="4" id="e34"><label for="e34" class="rad">4</label>
        <input type="radio" name="e4" value="5" id="e35"><label for="e35" class="rad">5</label>
        <input type="radio" name="e4" value="6" id="e36"><label for="e36" class="rad">6</label>
        <input type="radio" name="e4" value="7" id="e37"><label for="e37" class="rad">7</label>
        <input type="radio" name="e4" value="8" id="e38"><label for="e38" class="rad">8</label>
        <input type="radio" name="e4" value="9" id="e39"><label for="e39" class="rad">9</label>
        <input type="radio" name="e4" value="10" id="e40"><label for="e40" class="rad">10</label>
        </div>

        <div class="aa45" style="display: none;">
        <p><span class="numer">5</span>В действиях люблю скорость, часто раздражаюсь от медленных людей</p>
        <input type="radio" name="e5" value="1" id="e41"><label for="e41" class="rad">1</label>
        <input type="radio" name="e5" value="2" id="e42"><label for="e42" class="rad">2</label>
        <input type="radio" name="e5" value="3" id="e43"><label for="e43" class="rad">3</label>
        <input type="radio" name="e5" value="4" id="e44"><label for="e44" class="rad">4</label>
        <input type="radio" name="e5" value="5" id="e45"><label for="e45" class="rad">5</label>
        <input type="radio" name="e5" value="6" id="e46"><label for="e46" class="rad">6</label>
        <input type="radio" name="e5" value="7" id="e47"><label for="e47" class="rad">7</label>
        <input type="radio" name="e5" value="8" id="e48"><label for="e48" class="rad">8</label>
        <input type="radio" name="e5" value="9" id="e49"><label for="e49" class="rad">9</label>
        <input type="radio" name="e5" value="10" id="e50"><label for="e50" class="rad">10</label>
        <br><input type="button" value="ДАЛЕЕ" class="sled" onclick="check45()"></div>

        <div class="aa46" style="display: none;">
        <p><span class="numer">1</span>Если ситуация развивается не по моему сценарию, часто раздражаюсь, становлюсь агрессивным, есть частые проблемы с терпением и терпимостью</p>
        <input type="radio" name="e6" value="1" id="e51"><label for="e51" class="rad">1</label>
        <input type="radio" name="e6" value="2" id="e52"><label for="e52" class="rad">2</label>
        <input type="radio" name="e6" value="3" id="e53"><label for="e53" class="rad">3</label>
        <input type="radio" name="e6" value="4" id="e54"><label for="e54" class="rad">4</label>
        <input type="radio" name="e6" value="5" id="e55"><label for="e55" class="rad">5</label>
        <input type="radio" name="e6" value="6" id="e56"><label for="e56" class="rad">6</label>
        <input type="radio" name="e6" value="7" id="e57"><label for="e57" class="rad">7</label>
        <input type="radio" name="e6" value="8" id="e58"><label for="e58" class="rad">8</label>
        <input type="radio" name="e6" value="9" id="e59"><label for="e59" class="rad">9</label>
        <input type="radio" name="e6" value="10" id="e60"><label for="e60" class="rad">10</label>
        </div>

        <div class="aa47" style="display: none;">
        <p><span class="numer">2</span>Часто мне тяжело жить в настоящем, на работе планирую отпуск, в отпуске думаю о работе</p>
        <input type="radio" name="e7" value="1" id="e61"><label for="e61" class="rad">1</label>
        <input type="radio" name="e7" value="2" id="e62"><label for="e62" class="rad">2</label>
        <input type="radio" name="e7" value="3" id="e63"><label for="e63" class="rad">3</label>
        <input type="radio" name="e7" value="4" id="e64"><label for="e64" class="rad">4</label>
        <input type="radio" name="e7" value="5" id="e65"><label for="e65" class="rad">5</label>
        <input type="radio" name="e7" value="6" id="e66"><label for="e66" class="rad">6</label>
        <input type="radio" name="e7" value="7" id="e67"><label for="e67" class="rad">7</label>
        <input type="radio" name="e7" value="8" id="e68"><label for="e68" class="rad">8</label>
        <input type="radio" name="e7" value="9" id="e69"><label for="e69" class="rad">9</label>
        <input type="radio" name="e7" value="10" id="e70"><label for="e70" class="rad">10</label>
        </div>

        <div class="aa48" style="display: none;">
        <p><span class="numer">3</span>Я слишком требователен к себе и другим, зачастую никому не даю достаточно времени</p>
        <input type="radio" name="e8" value="1" id="e71"><label for="e71" class="rad">1</label>
        <input type="radio" name="e8" value="2" id="e72"><label for="e72" class="rad">2</label>
        <input type="radio" name="e8" value="3" id="e73"><label for="e73" class="rad">3</label>
        <input type="radio" name="e8" value="4" id="e74"><label for="e74" class="rad">4</label>
        <input type="radio" name="e8" value="5" id="e75"><label for="e75" class="rad">5</label>
        <input type="radio" name="e8" value="6" id="e76"><label for="e76" class="rad">6</label>
        <input type="radio" name="e8" value="7" id="e77"><label for="e77" class="rad">7</label>
        <input type="radio" name="e8" value="8" id="e78"><label for="e78" class="rad">8</label>
        <input type="radio" name="e8" value="9" id="e79"><label for="e79" class="rad">9</label>
        <input type="radio" name="e8" value="10" id="e80"><label for="e80" class="rad">10</label>
        </div>

        <div class="aa49" style="display: none;">
        <p><span class="numer">4</span>Если есть подчиненные, то часто злюсь на них и часто делаю все сам</p>
        <input type="radio" name="e9" value="1" id="e81"><label for="e81" class="rad">1</label>
        <input type="radio" name="e9" value="2" id="e82"><label for="e82" class="rad">2</label>
        <input type="radio" name="e9" value="3" id="e83"><label for="e83" class="rad">3</label>
        <input type="radio" name="e9" value="4" id="e84"><label for="e84" class="rad">4</label>
        <input type="radio" name="e9" value="5" id="e85"><label for="e85" class="rad">5</label>
        <input type="radio" name="e9" value="6" id="e86"><label for="e86" class="rad">6</label>
        <input type="radio" name="e9" value="7" id="e87"><label for="e87" class="rad">7</label>
        <input type="radio" name="e9" value="8" id="e88"><label for="e88" class="rad">8</label>
        <input type="radio" name="e9" value="9" id="e89"><label for="e89" class="rad">9</label>
        <input type="radio" name="e9" value="10" id="e90"><label for="e90" class="rad">10</label>
        </div>

        <div class="aa50" style="display: none;">
        <p><span class="numer">5</span>Я часто трудоголик, люблю рассказывать и показывать всем как тяжело и много я работаю</p>
        <input type="radio" name="e10" value="1" id="e91"><label for="e91" class="rad">1</label>
        <input type="radio" name="e10" value="2" id="e92"><label for="e92" class="rad">2</label>
        <input type="radio" name="e10" value="3" id="e93"><label for="e93" class="rad">3</label>
        <input type="radio" name="e10" value="4" id="e94"><label for="e94" class="rad">4</label>
        <input type="radio" name="e10" value="5" id="e95"><label for="e95" class="rad">5</label>
        <input type="radio" name="e10" value="6" id="e96"><label for="e96" class="rad">6</label>
        <input type="radio" name="e10" value="7" id="e97"><label for="e97" class="rad">7</label>
        <input type="radio" name="e10" value="8" id="e98"><label for="e98" class="rad">8</label>
        <input type="radio" name="e10" value="9" id="e99"><label for="e99" class="rad">9</label>
        <input type="radio" name="e10" value="10" id="e100"><label for="e100" class="rad">10</label>
        <br><input type="submit" value="РЕЗУЛЬТАТ" id="button" class="sled2" onclick="check50(), testall(), check()"></div>
    </div>
   </form>




</div>

</div>

</div>

@include('psitest.includes.footer')

</div>
<script src = "{{ asset('js/script.js') }}"></script>

<script src = "{{ asset('js/testall.js') }}"></script>
<script src = "{{ asset('js/telo.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</body>
</html>
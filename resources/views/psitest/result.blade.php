<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Результат тестирования</title>
  <link href="/css/psitest_style.css" rel="stylesheet">
  <link href="/css/psitest_test_style.css" rel="stylesheet">
</head>
<body>
<div class="header">
    

@include('psitest.includes.header_top')  


    <div class="body_top_result">
      <div class="body_top_result_text">Результаты теста</div>
</div>


    <div class="headimg">

<div class="testallwrapper">
 <div class="testall">
     <div class="testall_wrapp_small" onclick="unij()" style="flex-direction: column; text-align: center;"><div class="testall_img"><img src="img/girl-a.png" alt="логотип"></div><div class="testall_text_travma">Униженный</div><div class="testall_wrapp_pecent" style="font-size: 50px; text-align: center;"><?php echo $unig; ?><div class="testall_percent">%</div></div></div>
     <div class="testall_wrapp_small" onclick="otverg()" style="flex-direction: column; text-align: center;"><div class="testall_img"><img src="img/girl-b.png" alt="логотип"></div><div class="testall_text_travma">Отвергнутый</div><div class="testall_wrapp_pecent" style="font-size: 50px; text-align: center;"><?php echo $otverg; ?><div class="testall_percent">%</div></div></div>
     <div class="testall_wrapp_small" onclick="pokinut()" style="flex-direction: column; text-align: center;"><div class="testall_img"><img src="img/girl-c.png" alt="логотип"></div><div class="testall_text_travma">Покинутый</div><div class="testall_wrapp_pecent" style="font-size: 50px; text-align: center;"><?php echo $pok; ?><div class="testall_percent">%</div></div></div>
     <div class="testall_wrapp_small" onclick="nespr()" style="flex-direction: column; text-align: center;"><div class="testall_img"><img src="img/girl-d.png" alt="логотип"></div><div class="testall_text_travma">Несправедливость</div><div class="testall_wrapp_pecent" style="font-size: 50px; text-align: center;"><?php echo $nespr; ?><div class="testall_percent">%</div></div></div>
     <div class="testall_wrapp_small" onclick="pred()" style="flex-direction: column; text-align: center;"><div class="testall_img"><img src="img/girl-e.png" alt="логотип"></div><div class="testall_text_travma">Предательство</div><div class="testall_wrapp_pecent" style="font-size: 50px; text-align: center;"><?php echo $pred; ?><div class="testall_percent">%</div></div></div></div></div>
 <div class="resultall">
     <br>

<div class="harak2">Обязательно к прочтению</div>
<div class="textresult">
 Перед вами своеобразный рейтинг психологических травм, которые вы получили в раннем детстве. В этом рейтинге, чем больше баллов, тем сильнее проявлена у вас психологическая травма.
 Таким образом на первом месте по силе та психотравма, которая набрала наибольшее количество баллов.
 <br><br><b>Психологическая травма</b> – это разрушение из-за события вашей картины мира в который гармонично было вписано ваше Я, где мир был хорошим, добрым, справедливым, заботящимся.
 При этом вы не смогли переварить это событие в следствии нехватки опыта, кругозора и недостаточном развитии, а так же рядом с вами не было никого осознанного, который распознал бы происходящее с вами и помог бы переварить это событие.
 <p>Психотравмы формируют ваш фундамент личности благодаря чему вы всю свою жизнь будете жить по сценариям психотравмы. Эти негативные сценарии работают по принципу маятника.
 Вас всю жизнь будут сопровождать одни и те же события по сути, но с разными действующими лицами. Например, с травмой Покинутого, вы всю жизнь будете переживать, что вас бросит.</p>
 <div class="harak3">Нажмите на человечков с названием травмы и получите более развернуое описание вашей травмы и негативного сценария.</div></div></div>

<div class="head30">
 <div class="head44">
     
     
     
     <div class="travma">
         
         <div class="nazvan">Травма униженного</div><br>
         
     </div>
     <div class="opis">
         <div class="opisglav"><br><br><b>В чем суть травмы?</b>
             <p class="textotstup">Человек ощущает отвращение к себе со стороны родителей, унижение или позор, считая что именно он плохой, не правильный, мерзкий и гадкий<br></p>
             
             <br><b>Кто обычно получает такую травму:</b>
                 <p class="textotstup">1. Испытывают чрезмерный контроль со стороны<br>
                     2. Постоянные запреты на двигаться как хочет или делать что то<br>
                         3. Публичные осуждения за действия или поведение<br></p><br>
                         <b>Какие выводы делает такая личность?</b>
                         <p class="textotstup">я не достоин и должен быть за это наказан, что бы получить одобрение<br></p><br>
<b>Как проявляет себя такой человек?:</b>
<p class="textotstup">действует в стиле мазохиста, подсознательно ищет способы облажаться, что бы наказать себя, возненавидеть<br></p><br>
<b>Программы:</b>
<p class="textotstup">1. Стремясь доказать свою надежность и солидность много взваливает на себя работы которую потянуть не в состоянии и закономерно лажает<br>
2. Старается как можно больше помогать другим что бы наложить на себя непомерные ограничения и обязанности<br>
3. Вытесняет свои истинные желание так как считает их постыдными<br>
4. Переносит внимание на других и чутко следит за их состоянием лишь бы не понимать свои истинные  желания<br>
5. Невыносимость критики<br>
6. Берет на себя вину других как способ быть хорошим<br>
7. Тяжело отстаивает свои границы так как чувствует вину и стыд<br>
8. Стремиться от внешнего мнимого контроля где из всех сил начинает фестивалить, много есть, много пить, после чего испытывает стыд и вину<br>
9. Бежит к свободе пытаясь выскочить из под контроля но лишь все глубже застревает в  контроле но с др стороны<br></p>
<p>Примеры проявления психотравмы:</p>
<p>Человек стремится компенсировать свои внутреннее состояние не достойного и униженного за счет покупки материальных ценностей. При этом любит всем демонстрировать эти покупки. Внутренне уверен, что купив себе вот тот мерседес он сразу станет уважаемым и достойным не понимая, что как раз наоборот у достойных людей появляются соответствующие атрибуты.</p>
<p>Формируется кривая жизненная стратегия - ПОКУПАТЬ.</p>
<p>Покупает, испытывает некую эйфорию на короткий промежуток времени, затем разочарование и стремление к еще более дорогому в надежде почувствовать себя лучше. Когда не получается покупать дорогое и показывать всем часто фантазирует какой он крутой. Отсюда очень боится критики по его состоянию, одежде, вещах. Внутри развивается ощущение ненависти к себе и совершаются попытки себя наказать за это если не получается создавать видимость успеха. Главный девиз - казаться правильным, достойным тем, кто одобряем в обществе.</p>
<p>Такой человек будет покупать любовь и будет уверен, что противоположный пол меркантилен.</p>
<p>Деньги будут приходить в большом количестве и также легко будут потеряны. Раз за разом возвращая человека в состояние униженного. Со временем это перерастет в выученную беспомощность, апатичные состояния, когда "мужик лежит на диване и ничего не делает".</p>
                        
</div>
         
     </div>
 </div>
</div>

<div class="head50">
 <div class="head44">
     
     
     <div class="travma">
     <div class="nazvan">Травма отвергнутого</div><br>
         
     </div>
     <div class="opis">
         <div class="opisglav"><br><br><b>В чем суть травмы?</b> 
             <p class="textotstup">Я нахожусь в полной зависимости от мамы, родителей, но меня выгоняют, отталкивают потому что я не такой, плохой, не похож на них, я ущербный и недостойный.</p>
             <br><b>Кто обычно получает такую травму:</b>
             <p class="textotstup">- ребенок не того пола<br>
             - нежданный ребенок<br>
             - отец или мать  ведут себя как не родные<br>
             - не принятие авторитетом в семье <br>
             - ребенок с физическими недостатками -например, толстый, маленький, неопрятный<br>
             - завели ребенка для галочки <br></p>
             <br><b>Какие выводы делает такой человек:</b>
             <p class="textotstup">1. я не имею право на само существование<br>
2. поменьше шевелиться и привлекать к себе внимание<br>
3. мне ничего не нужно лишь бы от меня не отказывались<br></p>

<br><b>Как проявляет себя такой человек:</b>
<p class="textotstup">1. Предпочитает не привязываться к материальным вещам, ибо они могут помешать ему убегать когда и куда вздумается. Кажется, будто он и вправду смотрит на все материальное сверху вниз. Он редко пользуется материальными вещами для удовольствия, полагая такое удовольствие поверхностным.  признает, что деньги необходимы, но радости они ему не приносят.<br>
2. Он считает, что должен терпеть до конца самые неприятные ситуации, словно у него нет права дать отпор; во всяком случае, он не видит вариантов спасения.<br>
3. Трудно высказать свое мнение, когда его не спрашивают: ему кажется, что собеседники усмотрят в этом конфронтацию и отвергнут его.<br></p>
<br><b>Программы:</b>
<p>1. Развивает веру в собственную второсортность<br></p>
<p class="textotstup">- не замечает свои преимущества<br>
- сравнивает себя с теми кто лучше подтверждая тем самым почему он должен быть отвергнут<br>
- денежный потолок<br>
- не верит что за его труд нужно много платить<br>
- если вдруг его оценивают и платят много денег - он старается как можно быстрее от них избавиться что бы не привлекать к себе внимание и не быть отвергнутым<br></p>
2. Отказ от борьбы и сопротивления<br>
<p class="textotstup">- знает чего хочет, но не решается об этом заявить так как боится слово нет<br>
- сам не говорит слово нет, из за чего на нем часто многие ездят<br></p>

3. Путает быть и делать - все время стремиться к совершенству - что бы прям вот не за что было придраться -любая работа занимает неоправданно много времени, за что его собственно и отвергают под итог<br>
<br>4. Псевдодуховность, отстраненность от материального, ставится выше духовность, деньги признаются, но не воспринимаются как источник удовольствия<br>
        
         </div>
         
     </div>
 </div>
</div>
<div class="head60">
 <div class="head44">
     
     
     
     <div class="travma">
     <div class="nazvan">Травма покинутого</div><br>
         
     </div>
     <div class="opis">
         <div class="opisglav"><br><br><b>В чем суть травмы?</b>
             <p class="textotstup">Я все время был окружен вниманием и зависим от родителей или окружения, а тут меня оставили одного, а я не понимаю и не знаю что мне делать и это произошло по моей вине я не то сказал, сделал, я нехороший и гадкий<br></p>
             
             <br><b>Кто обычно получает такую травму:</b>
             <p class="textotstup">1. Дети когда появляется новый ребенок и мама очень занята<br>
             2. Родители на работе и очень мало общаются с ребенком<br>
             3. Больницы где ребенок один<br>
             4. Когда отдают бабушке и не общаются<br>
             5. Когда сам предоставлен себе<br>
             6. Ребенок который потерялся<br>
             7. Ушел родитель, его смерть, уход любимого<br></p>
             <br><b>Какие выводы делает такая личность?<br></b>
             <p class="textotstup">я настолько плох и слаб, что мне нужна помощь, что бы меня пожалели, я ничего не могу сам добиться, вы от меня слишком много хотите, вы что не видите я жертва которая очень нуждается в вашей помощи, если я так буду себя вести, то тогда меня не бросят<br></p>
             <br><b>Как проявляет себя такой человек?:<br></b>
<p class="textotstup">Главный посыл - я жертва, эта личность склонна создавать себе проблемы что бы привлечь внимание к себе, изличше все драмматизирует, проблемы для него это не проблема, а способ завоевать внимание других, постоянно ощущает одиночество, зачастую старается бороться с ним играя в спасителя для кого то, взваливая не посильную ношу на себя сильно страдая и мучаясь, проблемы со спиной, если на встрече с таким человеком смотреть на часы это будет сильно ранить его, для него будет казаться что есть дела по важнее чем он<br></p>
<br><b>Программы:</b>
<p class="textotstup">1. Боится что либо делать в одиночку, ему постоянно нужна поддержка и одобрение<br>
2. Постоянно обращается за советами. но редко их использует так как по сути и сам знает, ему просто важна поддержка<br>
3. Уверен что если что то сделает сам без помощи других то наступит его изоляция чего он жутко боится<br>
4. Не замечает проблемы и недостатки партнера так как очень боится что тот уйдет, а в последующем испытывает страдания<br>
5. Тяжело переносит какие либо изменения для него это означает смерть<br>
6. Открывает душу другим людям и верит что несет ответственность за их счастье<br>
7. Тяжело дается когда кто то не любит его<br>
8. Болезненно воспринимает отказы<br></p>

         </div>
        
     </div>
 </div>
</div>
<div class="head70">
 <div class="head44">
     
     
     
     <div class="travma">
         <br>
         
     </div>
     <div class="opis">
         <div class="opisglav"><br>
         <div class="nazvan">Травма несправедливости</div>
         <br><b>В чем суть травмы?<br></b>
             <p class="textotstup">Слишком много от меня требуют и не позволяют мне быть самим собой, самовыразиться потому что я не такой, не приемлемый и не имею право на такое выражение себя<br></p>
             
             <br><b>Кто обычно получает такую травму:</b>
             <p class="textotstup">когда с ребенком вели холодно, не выражали себя  не проявляли чувства и не говорили о них<br></p>
             <br><b>Какие выводы делает такая личность?</b>
             <p class="textotstup">нужно отрезать себя, отгородить от испытываемых чувств и эмоций, нужно быть холодным и бесчувственным<br></p>
<br><b>Как проявляет себя такой человек?:</b>
<p class="textotstup">1. Любят скрещивать руки на груди лишь бы оставаться отстраненным и не чувствовать<br>
2. Добивается правды и справедливости любой ценой, естественно исходя из собственных представлений об этом<br>
3. Склонен к зависти - как же так он заслуживает меньше а получает больше чем я, при этом уверен когда ему везет то ему все завидуют<br>
4. Если кто то работает а он отдыхает он чувствует крайнюю несправедливость и свою непростительную вину<br></p>
<br><b>Программы:</b>
<p class="textotstup">1. Трудолюбив, но не просит помощи стараясь изображать безмятежность даже если куча проблем, работает через силу до полного изнеможения<br>
2. Внутренне боится начальников и авторитетов так как считает что ни всегда правы, поэтому часто бунтует<br>
3. Самое главное это заслужить - получить вознаграждение по заслугам при этом очень часто любит преувеличивать свои недостатки, но совершенно не любит когда так делает кто то другой<br>
4. Боится сделать выбор все время взвешивает достаточно ли он правильный справедливый<br>
5. Не разрешает себе покупки, особенно если кто то отказывает в  них себе, считает незаслуженными, перед покупкой должен найти обоснование что он действительно ее заслужил - часто из за этого вещи ломаются, портятся бьются<br>
6. Мысленно будет понимать что достоит покупки, но этому не будет хватать чувствования удовольствия от этого, а не вины<br>
7. Стараются скрыть покупки, траты, что бы не быть обвиненными в несправедливости, при этом старается из всех сил всем демонстрировать как он много работает, страдает, что бы что то получить<br>
8. Не любит удачу - все что он получает должно быть справедливо заслуженно, если вдруг что перепадает неожиданно, то старается избавиться как можно быстрее что бы не чувствовать себя должником<br>
9. Любят ныть и жаловаться что бы скрыть или оправдать свои доходы, по этим же мотивам помогают другим что бы иметь право на справедливое вознаграждение, кстати именно от них пошел миф о чуде благотворительности - именно так этот механизм у них и работает<br>
10. Не любят подарки когда им дарят<br></p>
             
         </div>
         
     </div>
 </div>
</div>
<div class="head80">
 <div class="head44">
     
     
     
     <div class="travma">
         <br>
         
     </div>
     <div class="opis">
         <div class="opisglav">
         <div class="nazvan">Травма предательства</div><br><br><b>В чем суть травмы?</b>
             <p class="textotstup">Я не разделяю себя с одним из родителей  и убежден что тот должен действовать исключительно в моих интересах, но меня предали в пользу другого потому что я расслабился, недостаточно контролировал<br></p>
             
             <br><b>Кто обычно получает такую травму:</b>
             <p class="textotstup">1. Папенькина, маменькина дочка, сыночек, когда вдруг не защищает интересы при наезде со стороны<br>
             2. Когда наблюдает как родитель одного с ним пола оказывается преданным другим родителем<br>
             3. Когда появляется второй ребенок и любимый родитель отстраняет<br></p>
             <br><b>Какие выводы делает такая личность:</b>
             <p class="textotstup">1. Это произошло из за меня, потому что я недостаточно контролировал ситуацию, не предвидел такой поворот событий<br>
2. Если я буду ответственным, внимательным, предвидеть события, угадывать настроения, то я буду тогда хорошим и меня не предадут<br></p>
<br><b>Как проявляет себя такой человек?:</b>
<p class="textotstup">1. Не любит никуда опаздывать, сам приходит раньше что бы не было неожиданностей<br>
2. Всячески демонстрирует силу, уверенность, что все знает, все контролирует<br>
3. Быстро схватывает ситуацию и демонстрирует что уже в ней разбирается<br>
4. Настолько не приемлет предательство, что собственные промахи вытесняет не замечает, любит врать<br>
5. Требует от других полного принятия его верований, категоричен в высказываниях<br>
6. В своих действиях любит скорость, раздражается от медленных людей<br>
7. Если события развиваются не по его сценарию становится агрессивным, явные проблемы с терпимостью и терпением<br>
8. Тяжело жить в настоящем, все время находится в будущем, на работе планирует отпуск, в отпуске думает о том как будет работать<br>
9. Слишком требователен к себе и другим, обычно не дает достаточно времени никому<br>
10. Если есть подчиненные то он злится на них и старается все делать самостоятельно<br></p>
<br><b>Программы:</b>
<p class="textotstup">1. Все старается делать сам крайне не терпим к своим помощникам и не доверяет им<br>
2. Трудоголик - из всех сил хочет что бы все знали что он делал, как много делал и как, тем самым демонстрирует свою ответственность , что на него можно положиться<br>
3. Любит вставить свои 5 копеек в чужой конфликт<br>
4. Часто занимается не своими делами лишь бы продемонстрировать свою надежность, ответственность, проявить свой контроль<br>
5. Новые идеи всегда вызывают скепсис<br>
6. Так как сам контролирует то и решения меняет с легкостью даже там где уже с кем то договорился не признавая это и вытесняя - вовсе это не предательство и обман<br>
7. Контролируют используя ложь и манипуляции<br>
8. Переживает за репутацию - ситуации в которых может пострадать его репутация крайне болезненны<br></p>
       
         </div>
         
     </div>
 </div>
</div>
@include('psitest.includes.footer')
</div>

<script src = "js/script.js"></script>
<script src = "js/testall.js"></script>
<script src = "js/telo.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</body>
</html>
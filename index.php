<?php
  session_start();
  include_once 'includes/dbconnect.php';
  include_once 'includes/logout.php'; 
  include_once 'input.php';
  include_once 'header.php'; 
?>
<!-- START SECTION ** HOME (SLIDER) -->
<section id="section-home">
<!-- BEGIN SLIDER -->
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
      <div class=" container menu">
        <div class="row">
            <div class="col-lg-2 col-xs-12">
                <!-- <span id="phoneMenu"> <i class="fa fa-align-justify"></i></span> -->
                <!-- <span id="logo" class="uppercase">UberDrive</span> -->
                <img id="logo" src="img/logo.png"></img>
            </div>
            <div class=" col-lg-offset-1 col-lg-6 col-sm-12 center">
            <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <ul class="nav navbar-nav uppercase">
                    <li role="presentation"><a  class="hvr-shutter-out-vertical" href="#section-home">Главная</a></li>
                    <li role="presentation"><a class="hvr-shutter-out-vertical" href="#section-about">О Uber</a></li>
                    <li role="presentation"><a class="hvr-shutter-out-vertical" href="#section-conditions">Требования</a></li>
                    <li role="presentation"><a class="hvr-shutter-out-vertical" href="#section-spec">Условия</a></li>
                    <li role="presentation"><a class="hvr-shutter-out-vertical" href="#section-registration">Регистрация</a></li>
                    <li role="presentation"><a class="hvr-shutter-out-vertical" href="#section-contact">Контакты</a></li>
                </ul>
                </div>
              </nav>
            </div>
            <div class="col-lg-3 col-sm-12 contact-phone-head">
            <div class="contact-group">
            <ul class="con-menu">
                <li><i class="fa fa-phone"></i>
                <a href="callto:+380633281234"> +38(063)6371351</a></li>
                <li><i class="fa fa-phone"></i>
                <a href="callto:+380968699857"> +38(096)8699857</a></li>
                <li><i class="fa fa-envelope-o"></i>
                <a href="mailto:ubercars@mail.ua">ubercars@mail.ua</a></li>
            </ul>
              <!-- <i id="showPhone" class="fa fa-angle-double-down"></i> -->
              </div>
            </div>
        </div>
    </div>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
  
    <!-- START first slide   -->
    <div class="item active item-1">
    <div class="promo-bg"></div>
      <img class="carousel-img" src="img/slider/slide1.jpg" alt="Uber">
      <div class="carousel-caption center">
        <span class="teaser">
          Стань водителем Uber
        </span>
        <span class="headingAbout">C приложением UBER Вы можете зарабатывать <br> около <strong>30.000 грн</strong> в месяц</span>
        <span class="headingAbout headingAbout-2">Свободный график работы | Много заказов | Гарантия дохода до 180 грн/час</span>
        <span class="btn btn-primary uppercase" data-toggle="modal" data-target="#JoinToUs">Подключиться <span class="glyphicon glyphicon-chevron-right"></span> </span> 
      </div>

    </div>
    <!-- END first slide -->
    <!-- START second slide   -->
    <div class="item item-2">
<div class="promo-bg"></div>
      <img class="carousel-img" src="img/slider/slide2.jpg" alt="...">
      <div class="carousel-caption center">
                <span class="teaser">
          Подключение к Uber
        </span>
        <span class="headingAbout">в Киеве!</span>
        <span class="headingAbout-2 headingAbout">Днепре | Одессе | Львове | Харькове</span>
        <span class="headingAbout-3 headingAbout">в течение дня без наличия юр. лица и лицензии</span>
        <span class="btn btn-primary uppercase" data-toggle="modal" data-target="#JoinToUs">Подключиться <span class="glyphicon glyphicon-chevron-right"></span> </span> 

      </div>
    </div>
  <!-- END second slide -->
  </div>
    

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
  <a class="arrow-down" href="#section-about">
  <span class=" glyphicon glyphicon-chevron-down" aria-hidden="true"></span>
  </a>
</div>
<!-- END SLIDER -->
</section>
<!-- END SECTION ** HOME (SLIDER) -->
<!-- START SECTION ** ABOUT UBER -->
<section id="section-about" class="section">
    <div class="container">
        <div class="row">
      <h2 class="center">
      <span class="headingAbout"> ПОЧЕМУ ВОДИТЕЛИ ВЫБИРАЮТ UBER? </span><br>
      <span class="teaserAbout">Ваш <strong> личный доход 30тыс. гривен </strong>
      нажатием одной кнопки.</span>
      </h2>
      <div class="col-lg-4 col-sm-12 iphone-columns">
      <div class="iphone-info-text">
      <i><strong>UBER</strong> — самое популярное мобильное приложение
       в мире, которое объединяет пассажиров с профессиональными водителями в считанные
        минуты.</i>
        </div>
      <ul class="iphone-list">
        <li class="iphone-list-item-1">
        <i class="icon ion-ios-nutrition-outline"></i>
          <div class="iphone-name">
            Бонусы водителям:
          </div>
          <div class="iphone-description">
            Все заработанные деньги, включая бонусы, еженедельно поступают Вам на банковскую карту! Пиковые 
            часы, тарифы в аэропорт, высокие бонусы и множество заказов позволяют зарабатывать больше, чем в 
            любых других службах такси.
          </div>
        </li>
        <li class="iphone-list-item-2 ">
        <i class="icon ion-clock"></i>
          <div class="iphone-name">
            Свободный график: 
          </div>
          <div class="iphone-description">
            Вы сами определяете, когда вам работать. Мы лишь даем рекомендации, в какие 
            дни и часы вы обеспечите себя наибольшим доходом.
          </div>
        </li>
      </ul>
        </div>
      <div class="col-lg-offset-4 col-lg-4 col-sm-12 iphone-columns">
      <div class="iphone-info-text">
      <i>Приложение позволяет в считанные минуты клиентам заказывать и оплачивать 
      банковской картой автомобиль с водителем.</i>
      </div>
      <ul class="iphone-list">
        <li class="iphone-list-item-3">
        <i class="icon ion-ios-pie-outline"></i>
          <div class="iphone-name">
            Низкая комиссия:
          </div>
          <div class="iphone-description">
            Комиссия партнера составляет всего 5% (+ 5% налог) от выручки и подразумевает выплату всех бонусов. 
          </div>
        </li>
        <li class="iphone-list-item-4">
        <i class="icon ion-happy-outline"></i>
          <div class="iphone-name">
            Гарантия выплат и налоговой чистоты:
          </div>
          <div class="iphone-description">
            Мы берем на себя юридические обязательства перед водителями и полностью освобождаем вас от уплаты налогов и взносов.
          </div>
        </li>
      </ul>
      </div>
        </div>
        <div class="row">
          <div class="col-lg-offset-4 col-lg-4 col-sm-12 center iphone-register">
            <span class="btn btn-primary uppercase" data-toggle="modal" data-target="#JoinToUs">Зарегистрироваться <span class="glyphicon glyphicon-chevron-right"></span> </span>
          </div>
        </div>
    </div>
</section>
<!-- END SECTION ** ABOUT UBER -->
<!-- START SECTION ** CONDITIONS-->
<section id="section-conditions" class="section">
    <div class="container">
        <div class="row">
            <h2 class="center">
            <span class="headingAbout uppercase"> Требования для работы в Uber</span><br>
            </h2>
            <div class="col-lg-6 col-sm-12">
              <h2><span class="teaserAbout">Требования работы с Uber:</span></h2>
              <ul class="ul-conditions ul-check">
                <li>Автомобиль иномарка четырёх- или  пяти- дверная не старше 2004 года.
                Без оклеек и рекламы. <a href="https://docs.google.com/spreadsheets/d/1Xf40nPzgk3-u8_WP2K0NF4p0cpCFQwS79eFLIEagR-0/edit" target="_blank">Список подходящих авто</a>.</li>
                <li>Водитель с личным или арендованным авто. Возраст от 21-го года.</li>
                <li>Стаж вождения от 3-х лет. Гражданин Украины.</li>
                <li>Наличие смартфона или планшета с 3G мобильным интернетом.</li>
              </ul>
            </div>
            <div class="col-lg-6 col-sm-12">
              <h2><span class="teaserAbout">Документы для подключения:</span></h2>
              <ul class="ul-conditions ul-check">
                <li>Паспорт гражданина Украины.</li>
                <li>Водительское удостоверение категории В (копия двух сторон).</li>
                <li>Техпаспорт на авто (копия с двух сторон).</li>
                <li>Действующий страховой полис ОСАГО (автоцивилка, копия).</li>
                <li>Фото автомобиля (сбоку спереди).</li>
                <li>Фото салона (заднего сидения авто).</li>
              </ul>
            </div>
        </div>
        <div class="row">
          <div class="col-lg-12 col-sm-12">
            <div class="quote">
              Для активации, не обязательно сканировать документы, достаточно просто 
              сфотографировать их в хорошем качестве и <span id="showAttachForm">отправить через форму
               на сайте</span> или на нашу почту <strong>ubercars@mail.ua</strong>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-offset-4 col-lg-4 col-sm-12 center iphone-register">
            <span class="btn btn-primary uppercase" data-toggle="modal" data-target="#JoinToUs">Зарегистрироваться <span class="glyphicon glyphicon-chevron-right"></span> </span>
          </div>
        </div>
        <div id="attachForm">
          <div class="row">
            <div class="col-lg-offset-3 col-lg-6">
              <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <label for="firstName" class="control-label"></label>
                    <input type="text" class="form-control" name="firstName" required="" placeholder="Имя">
                </div>
                <div class="form-group">
                  <label for="lastName" class="control-label"></label>
                    <input type="text" class="form-control" name="lastName" required="" placeholder="Фамилия">
                </div>
                <div class="form-group">
                  <label for="phone" class="control-label"></label>
                    <input type="text" class="form-control" name="phone" maxlength="10" required="" placeholder="телефон в формате 0991112233">
                </div>
                <div class="form-group">
                  <label for="car" class="control-label"></label>
                    <input type="text" class="form-control" name="car" required="" placeholder="марка, модель, год выпуска авто">
                </div>
                <div class="form-group">
                  <label for="email" class="control-label"></label>
                    <input type="email" class="form-control" name="email" required="" placeholder="Ваш Email">
                </div>
                <div class="form-group">
                  <label for="passWhoGive">Фото паспорта (страница кем выдан)</label>
                  <input type="file" required="" name="passWhoGive">
                </div>
                <div class="form-group">
                  <label for="passLastPhoto">Фото паспорта (страница с актуальным фото) </label>
                  <input type="file" required="" name="passLastPhoto">
                </div>
                <div class="form-group">
                  <label for="driveLicenseFirst">Фото водительских прав (лицевая)</label>
                  <input type="file" required="" name="driveLicenseFirst">
                </div>
                <div class="form-group">
                  <label for="driveLicenseSecond">Фото водительских прав (обратная)</label>
                  <input type="file" required="" name="driveLicenseSecond">
                </div>
                <div class="form-group">
                  <label for="techPassFirst">Фото техпаспорта на авто (лицевая)</label>
                  <input type="file" required="" name="techPassFirst">
                </div>
                <div class="form-group">
                  <label for="techPassSecond">Фото техпаспорта на авто (обратная)</label>
                  <input type="file" required="" name="techPassSecond">
                </div>
                <div class="form-group">
                  <label for="insurance">Фото страхового полиса ОСАГО</label>
                  <input type="file" required="" name="insurance">
                </div>
                <div class="form-group">
                  <label for="carPhoto">Фото вашего авто полубоком</label>
                  <input type="file" required="" name="carPhoto">
                </div>
                <div class="form-group">
                  <label for="license">Фото лицензии (если имеется)</label>
                  <input type="file" name="license">
                </div>
                <button type="submit" name="submit-scan" class="btn btn-primary uppercase">Отправить</button>
              </form>
            </div>
          </div>
        </div>
    </div>
</section>
<!-- END SECTION ** CONDITIONS-->
<!-- START SECTION ** SPECIFICATIONS -->
<section id="section-spec" class="section">
  <div class="container">
    <div class="row">
      <h2 class="center">
        <div class="headingAbout uppercase">Условия и Тарифы</div>
      </h2>
      <div class="col-lg-6 col-sm-12">
        <div class="teaserAbout">Тарифы Uber в Киеве</div>
        <ul class="ul-conditions ul-check">
          <li >Подача <strong>25 грн</strong> + Стоимость за км <strong>4.5 грн </strong> + Стоимость за мин <strong>0.4 грн</strong> </li>
          <li >(конечная стоимость поездки = подача авто + расстояние, 
          км + продолжительность поездки, мин) минимальная стоимость поездки 40 грн</li>
          <li >Водителям предусмотрена почасовая компенсация от 
          UBER: если водитель, выполняя от 1 поездки в час, зарабатывает сумму меньшую от 
          указанной в таблице — УБЕР компенсирует её в виде бонусов. Процент принятых заказов
           должен составлять не менее 80%</li>
        </ul>
      </div>
      <div class="col-lg-6 col-sm-12">
        <div class="teaserAbout">Почасовые выплаты</div>
        <img id="price" src="img/price.png">
      </div>
    </div>
    <div class="row">
      <div class="col-lg-offset-3 col-lg-6">
        <strong>Условия получения:</strong><br>
        <ol type="1">
          <li>Ваш рейтинг за неделю составляет не менее 4.65</li>
          <li>За неделю Вы были на линии не менее 15 часов</li>
          <li>В период действия тарифов 50-150 грн/час Вы осуществили не менее 1-й поездки в час</li>
          <li>В период действия тарифов 180 грн/час Вы осуществили не менее 1-й поездки за 50 минут</li>
        </ol>
      </div>
    </div>
  </div>
</section>
<!-- END SECTION ** SPECIFICATIONS  -->
<!-- START SECTION STEP-REGISTER -->
<section id="section-registration" class="section">
    <div class="container">
        <div class="row">
        <div class="col-lg-offset-5 col-lg-6 col-sm-12">
          <h2 class="">
            <span class="headingAbout uppercase">КАК НАЧАТЬ <br> ЗАРАБАТЫВАТЬ С UBER?</span><br>
            <span class="teaserAbout">Порядок подключения:</span>
            </h2>
            <ul class="steps-register">
              <li class="hvr-float-shadow" >
                  <span class="number-step">01</span>
                  <span class="text-step">
                    <strong>Оставляете заявку</strong>
                    на сайте или звоните по телефонам
                    <a href="callto:+380968699857"> +38(063)637-13-51 </a>
                    <a href="callto:+380968699857"> +38(096)869-98-57</a>
                  </span>
               </li>
              <li class="hvr-float-shadow" >
                <span class="number-step">02</span>
                <span class="text-step">
                  <strong>Проходите процедуру оформления у нас</strong>
                   в офисе в удобное для вас время.
               </span>
               </li>
              <li class="hvr-float-shadow" >
                <span class="number-step">03</span>
                <span class="text-step">
                  <strong>Проходите инструктаж</strong>
                   и получаете персональный доступ к приложению для получения заказов.
               </span>
               </li>
              <li class="hvr-float-shadow" >
                <span class="number-step">04</span>
                <span class="text-step">
                  <strong>Принимаете заказы</strong>
                   и начинаете зарабатывать еженедельно, получая отчеты о выполненных поездках.
               </span>
               </li>
            </ul>
                <span class="btn btn-primary uppercase" data-toggle="modal" data-target="#JoinToUs">Оставить заявку<span class="glyphicon glyphicon-chevron-right"></span> </span>
        </div>
        </div>
    </div>
</section>
<!-- END SECTION STEP-REGISTER -->
<!-- START SECTION ** CONTACT -->
<section id="section-contact" class="contact-wrap section"">
    <div class="container">
    <div class="row">
      <div class="col-lg-offset-3 col-lg-6 col-sm-12">
           <h2 class="center">
            <span class="headingAbout uppercase">Остались вопросы?</span><br>
            <span class="teaserAbout">
              Задайте их нашему менеджеру!
            </span>
          </h2>
      </div>
    </div>
        <div class="row">
            <div class="col-lg-4 col-sm-12">
              <div class="availableOn">
                <div class="available-header uppercase">
                  Приложение для водителя
                </div>
                <a href="https://play.google.com/store/apps/details?id=com.ubercab.driver" class="available-driver-android"></a>
                <a href="https://help.uber.com/ru/h/ba14dbf4-0e34-452b-ab0c-22f7d65b8d61" class="available-driver-iphone"></a>
              </div>
            </div>
            <div class="col-lg-4 center col-sm-12">
              <form id="questForm" action="" method="post" class="form-horizontal" role="form">
              <input type="text" class="form-control hidden" name="subject" required="required" value='message'>
              <div class="form-group">
                <textarea class="form-control" rows="4" name="text" required="required"  placeholder="Введите Ваше сообщение"></textarea>
                </div>
                <div class="form-group">
                  <label for="InputName">Имя</label>
                  <input type="text" class="form-control" required="required" name="name" placeholder="Введите Ваше имя:">
                </div>
                <div class="form-group">
                  <label for="InputPhone">Введите Ваш телефон:</label>
                  <input type="text" class="form-control" required="required" name="phone" placeholder="Введите Ваш телефон:">
                </div>
                <input type="submit" class="btn btn-primary" name="sendQuest" value="Отправить">
              </form>
            </div>
            <div class="col-lg-4 col-sm-12">
              <div class="availableOn">
                <div class="available-header uppercase">
                  Приложение для пассажира
                </div>
                <a href="https://play.google.com/store/apps/details?id=com.ubercab" class="available-passenger-android"></a>
                <a href="https://itunes.apple.com/us/app/uber/id368677368?mt=8&ct=Uber.com" class="available-passenger-iphone"></a>
              </div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION ** CONTACT -->
<!--START SECTION COPYRIGHT -->
<section class="copyright">
  <div class="container">
    <div class="row">
      <div class="col-lg-4">2016 UberCars&copy;</div>
      <div class="col-lg-offset-4 col-lg-4">
          <i class="fa fa-phone"></i>
          <a href="callto:+380633281234"> +380636371351</a>
          <i class="fa fa-phone"></i>
          <a href="callto:+380968699857"> +38(096)8699857</a>
          <i class="fa fa-envelope-o"></i>&nbsp;
          <a href="mailto:ubercars@mail.ua">ubercars@mail.ua</a>
      </div>
    </div>
  </div>
</section>
<!--END SECTION COPYRIGHT -->
<!-- START CALL BACK BUTTON -->
<section class="call">
<div class="feedToMe" >
  <div id="feedToMeMain" data-toggle="modal" data-target="#callBackModal" data-toggle="tooltip" data-placement="left" title="Заказать обратный звонок"></div>
</div>
</section>
<!-- END CALL BACK BUTTON -->
<!-- START MODAL WINDOW -->
<!-- start call back modal -->
<div class="modal fade" id="callBackModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close ion-android-close" data-dismiss="modal" aria-hidden="true"></button>
        <h4 class="modal-title" id="callBackModalLabel">У Вас есть вопросы? Мы Вам поможем!</h4>
      </div>
      <div class="modal-body">
      <p>Наш менеджер перезвонит вам в течение 30 минут и ответит на Все ваши вопросы. Это быстро и бесплатно!</p>
  <form role="form" id="callForm" action="" method="post">
      <input type="text" class="form-control hidden" name="subject" required="" value='callback'>
  <div class="form-group">
    <input type="text" class="form-control" name="name" required="" placeholder="Введите Ваше имя">
  </div>
  <div class="form-group">
    <input type="text" class="form-control" name="phone" maxlength="10" required="" placeholder="Введите Ваш телефон">
  </div>
      </div>
      <div class="modal-footer">
      <input type="submit" class="btn btn-primary" name="sendCall" value="Жду звонка">
      </div>
      </form>
    </div>
  </div>
</div>
<!-- end call back modal -->
<!-- start join to us modal -->
<div class="modal fade" id="JoinToUs" tabindex="-1" role="dialog" aria-labelledby="joinToUsModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close ion-android-close" data-dismiss="modal" aria-hidden="true"></button>
        <h4 class="modal-title" id="joinToUsModalLabel">ПОДКЛЮЧИТСЯ К UBER</h4>
      </div>
      <div class="modal-body">
      <p>Оставьте заявку и наш менеджер свяжется с вами в течение 30 минут</p>
        <form role="form" id="joinForm" action="" method="post">
        <input type="text" class="form-control hidden" name="subject" required="required" value='join'>
  <div class="form-group">
    <input type="text" class="form-control" name="name" required="" placeholder="Введите Ваше имя">
  </div>
  <div class="form-group">
    <input type="text" class="form-control" name="phone" maxlength="10" required="" placeholder="Введите Ваш телефон">
  </div>
  <div class="form-group">
  <textarea class="form-control" name="text" rows="3" required="" placeholder="Ваш автомобиль: марка, модель, год выпуска."></textarea>
  </div>
      </div>
      <div class="modal-footer">
      <input type="submit" class="btn btn-primary" name="sendJoin" value="Подать заявку">
      </div>
      </form>
    </div>
  </div>
</div>
<!-- end join to us modal -->
<!-- END MODAL WINDOW -->
<!-- GA -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-69866236-3', 'auto');
  ga('send', 'pageview');

</script>
<!-- GA -->
</body>
</html>


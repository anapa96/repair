<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Ремонт квартир</title>
  <link rel="stylesheet" href="css/normalize.css" class="css">
  <!--<link rel="stylesheet" href="css/slick.css">-->
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="css/style.css" class="css">

  <script src="https://api-maps.yandex.ru/2.1/?apikey=<c72f28e5-8321-4199-9f42-afdbf15d0e3b>&lang=ru_RU" type="text/javascript">
  </script>
</head>
<body>
  <nav class="navbar">
    <div class="container">
      <div class="navbar-block">
        <div class="navbar__logo">
          <img src="img/logo.png" alt="Логотип">
        </div>
        <!-- /.navbar__logo -->
        <div class="navbar__info">
          <div class="navbar__contacts">
            <span class="navbar__address">Калуга, Москва, МО</span>
            <a href="tel: +7 (495) 42-251-31" class="navbar__phone">+7 (495) 42-251-31</a>
          </div>
          <!-- /.navbar__contacts -->
          <button class="button navbar__button" id="button">Перезвоните мне</button>
        </div>
        <!-- /.navbar__info -->
      </div>
      <!-- /.navbar-block -->
    </div>
    <!-- /.container -->
  </nav>
  <!-- /.navbar -->
  
  <main>
    <section class="hero">
      <div class="container">
        <div class="hero-block">
          <div class="hero-text">
            <h1 class="hero-text__title increase-animated">
              Внутренняя отделка помещений "под ключ"
            </h1>
            <span class="hero-text__subtitle">
                с гарантией качества, прописанной в договоре
            </span>

            <ul class="hero-list">
              <li class="hero-list__item">
                <div class="hero-list__image">
                  <img src="img/hero/clock.png" alt="clock">
                </div>
                  <span class="hero-list__text">Точно соблюдаем сроки</span>
              </li>

              <li class="hero-list__item">
                <div class="hero-list__image">
                  <img src="img/hero/calculator.png" alt="calculator">
                </div>
                <span class="hero-list__text">Рассчитаем смету на работы<br> и материалы в день обращения</span>
              </li>

              <li class="hero-list__item">
                <div class="hero-list__image">
                  <img src="img/hero/paint-board.png" alt="paint-board">
                </div>
                <span class="hero-list__text">Предложим более 100 вариантов исполнения дизайна Вашего жилья</span>
              </li>
            </ul>
          </div>
          <!-- /.hero-text -->
          <div class="hero-image wow fadeInRight" data-wow-delay="0.2s">
            <img src="img/hero/hero-image.png" alt="План квартиры">
          </div>
          <!-- /.hero-image -->
        </div>
        <!-- /.hero-block -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /.hero -->

    <section class="offer section">
      <div class="container">
        <div class="offer-block wow slideInLeft" data-wow-delay="0.4s">
          <h2 class="section-title offer__title">Мы бесплатно разработаем дизайн-проект Вашего жилья и реализуем его!</h2>
          <!-- /.section-title -->
          <span class="section-subtitle offer__subtitle">Оставьте заявку на разработку бесплатного дизайн-проекта!</span>
          <!-- /.section-subtitle -->

          <form action="mail.php" method="POST" class="form offer__form" id="offer-form">
            <div class="offer__form-wrapper">
              <input type="text" name="username" class="input offer__input" placeholder="Ваше имя">
            </div>
            <div class="offer__form-wrapper">
              <input type="tel" name="phone" class="input offer__input phone" placeholder="Ваш телефон">
            </div>
            <button class="button offer__button wow fadeIn" data-wow-delay="1s">Получить бесплатный дизайн-проект</button>
          </form>
          <!-- /.form offer__form -->
          <div class="offer-feedback">
            <span class="offer-feedback__text wow fadeInLeft" data-wow-delay="1.4s">Наш менеджер перезвонит Вам<br> в течение 60 секунд</span>
            <span class="offer-feedback__text wow fadeInRight"data-wow-delay="1.4s">или перезвоните нам сами <br>
              <a class="offer-feedback__number" href="tel: +7 (495) 42-251-31" >+7 (495) 42-251-31</a>
            </span>
          </div>
          <!-- /.offer__feedback -->
        </div>
        <!-- /.offer-block -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /.offer -->
 

  <section class="section portfolio">
    <div class="container">
      <h2 class="section-title portfolio__title">Работая с 2007 года,<br> мы сделали более 500 ремонтов в квартирах и домах</h2>

   <!--   <div class="slider">
        <div class="slider__item"><img class="slider__image" src="img/portfolio/slider-1.jpg" alt="Пример выполненной работы 1"></div>
        <div class="slider__item"><img class="slider__image" src="img/portfolio/slider-2.jpg" alt="Пример выполненной работы 2"></div>
        <div class="slider__item"><img class="slider__image" src="img/portfolio/slider-3.jpg" alt="Пример выполненной работы 3"></div>
        <div class="slider__item"><img class="slider__image" src="img/portfolio/slider-1.jpg" alt="Пример выполненной работы 1"></div>
        <div class="slider__item"><img class="slider__image" src="img/portfolio/slider-2.jpg" alt="Пример выполненной работы 2"></div>
        <div class="slider__item"><img class="slider__image" src="img/portfolio/slider-3.jpg" alt="Пример выполненной работы 3"></div>
      </div>--

      <div class="arrows portfolio__arrows">
      
        <div class="arrows__left">
            <img src="img/portfolio/left-arrow.png" alt="" class="">
        </div>
        <div class="arrows__right">
            <img src="img/portfolio/right-arrow.png" alt="" class="">
        </div>
      </div> -->
      <div class="owl-carousel">
          <div class="slider__item"><img class="slider__image" src="img/portfolio/slider-1.jpg" alt="Пример выполненной работы 1"></div>
          <div class="slider__item"><img class="slider__image" src="img/portfolio/slider-2.jpg" alt="Пример выполненной работы 2"></div>
          <div class="slider__item"><img class="slider__image" src="img/portfolio/slider-3.jpg" alt="Пример выполненной работы 3"></div>
          <div class="slider__item"><img class="slider__image" src="img/portfolio/slider-1.jpg" alt="Пример выполненной работы 1"></div>
          <div class="slider__item"><img class="slider__image" src="img/portfolio/slider-2.jpg" alt="Пример выполненной работы 2"></div>
          <div class="slider__item"><img class="slider__image" src="img/portfolio/slider-3.jpg" alt="Пример выполненной работы 3"></div>
      </div>
      <!-- /.owl-carousel -->
    </div>
    <!-- /.container -->
  </section>
  <!-- /.section portfolio -->


  <section class="section price">
    <div class="container">
      <h2 class="section-title price__title">У нас очень гибкая система скидок на комплексные работы!</h2>
      <!-- /.section-title price__title -->
      <span class="section-subtitle price__subtitle">Прайс на наши услуги</span>
      <!-- /.section-subtitle price__subtitle -->

      <div class="cards">

        <div class="card price__card wow fadeInUp" data-wow-delay="0.1s">
          <div class="card__image"><img src="img/price/bathroom.jpg" alt=""></div>
          <!-- /.card__image -->
          <div class="card__text">
            <h4 class="card__title">Ремонт ванных комнат и с/у</h4>
            <!-- /.card__title -->
            <a href="#" class="card__link">Узнать цены</a>
            <!-- /.card__link -->
          </div>
          <!-- /.card__text -->
        </div>
        <!-- /.card -->

        <div class="card price__card wow fadeInUp" data-wow-delay="0.2s">
          <div class="card__image"><img src="img/price/living.jpg" alt=""></div>
          <!-- /.card__image -->
          <div class="card__text">
            <h4 class="card__title">Ремонт комнат и квартир</h4>
            <!-- /.card__title -->
            <a href="#" class="card__link">Узнать цены</a>
            <!-- /.card__link -->
          </div>
          <!-- /.card__text -->
        </div>
        <!-- /.card -->

        <div class="card price__card wow fadeInUp" data-wow-delay="0.3s">
          <div class="card__image"><img src="img/price/office.jpg" alt=""></div>
          <!-- /.card__image -->
          <div class="card__text">
            <h4 class="card__title">Отделка офисных помещений</h4>
            <!-- /.card__title -->
            <a href="#" class="card__link">Узнать цены</a>
            <!-- /.card__link -->
          </div>
          <!-- /.card__text -->
        </div>
        <!-- /.card -->


        <div class="card price__card wow fadeInUp" data-wow-delay="0.4s">
          <div class="card__image"><img src="img/price/bildings.jpg" alt=""></div>
          <!-- /.card__image -->
          <div class="card__text">
            <h4 class="card__title">Ремонт в новостройках</h4>
            <!-- /.card__title -->
            <a href="#" class="card__link">Узнать цены</a>
            <!-- /.card__link -->
          </div>
          <!-- /.card__text -->
        </div>
        <!-- /.card -->

        <div class="card price__card wow fadeInUp" data-wow-delay="0.5s">
          <div class="card__image"><img src="img/price/kitchen.jpg" alt=""></div>
          <!-- /.card__image -->
          <div class="card__text">
            <h4 class="card__title">Ремонт кухонь</h4>
            <!-- /.card__title -->
            <a href="#" class="card__link">Узнать цены</a>
            <!-- /.card__link -->
          </div>
          <!-- /.card__text -->
        </div>
        <!-- /.card -->

        <div class="card price__card wow fadeInUp">
          <div class="card__image"><img src="img/price/hauses.jpg" alt=""></div>
          <!-- /.card__image -->
          <div class="card__text">
            <h4 class="card__title">Ремонт дач и коттеджей</h4>
            <!-- /.card__title -->
            <a href="#" class="card__link">Узнать цены</a>
            <!-- /.card__link -->
          </div>
          <!-- /.card__text -->
        </div>
        <!-- /.card -->

      </div>
      <!-- /.cards -->
    </div>
    <!-- /.container -->
  </section>
  <!-- /.section price -->


  <div class="section steps">
    <div class="container">
      <h2 class="section-title steps__title">Наши специалисты готовы выехать на замер в любое удобное для Вас время</h2>
      <!-- /.section-title steps__title -->
      <span class="section-subtitle steps__subtitle">5 шагов до ремонта</span>
      <!-- /.section__subtitle steps__subtitle -->

      <div class="steps-block">
        <div class="step  wow fadeInDown" data-wow-delay="0.2s">
          <div class="step__image">
            <img src="img/steps/woman-with-headset.png">
          </div>
          <!-- /.step__image -->
          <p class="step__text">Вы звоните нам<br> или оставляете заявку</p>
          <!-- /.step__text -->
        </div>
        <!-- /.step -->
        <div class="step  wow fadeInDown" data-wow-delay="1s">
          <div class="step__image">
            <img src="img/steps/wall-clock.png">
          </div>
          <!-- /.step__image -->
          <p class="step__text">Согласуем удобное <br>для Вас время выезда специалиста на замер</p>
          <!-- /.step__text -->
        </div>
        <!-- /.step -->
        <div class="step  wow fadeInDown" data-wow-delay="1.8s">
          <div class="step__image">
            <img src="img/steps/money.png">
          </div>
          <!-- /.step__image -->
          <p class="step__text">Рассчитываем смету согласовываем <br>с Вами</p>
          <!-- /.step__text -->
        </div>
        <!-- /.step -->
        <div class="step  wow fadeInDown" data-wow-delay="2.6s">
          <div class="step__image">
            <img src="img/steps/folded-document-icon.png">
          </div>
          <!-- /.step__image -->
          <p class="step__text">Подписываем договор закупаем материал<br> по оптовым ценам</p>
          <!-- /.step__text -->
        </div>
        <!-- /.step -->
        <div class="step  wow fadeInDown" data-wow-delay="3.4s">
          <div class="step__image">
              <img src="img/steps/calendar.png">
          </div>
          <!-- /.step__image -->
          <p class="step__text">Выполняем ремонт<br> в указанные сроки</p>
          <!-- /.step__text -->
        </div>
        <!-- /.step -->
      </div>
      <!-- /.step-block -->
    </div>
    <!-- /.container -->
  </div>
  <!-- /.section steps -->
  <div class="section proffer">
    <div class="proffer__title-block">
      <div class="contaner">
        <h2 class="proffer__title">Ремонт обойдется Вам дешевле, так как<br>мы используем качественные материалы по оптовым ценам</h2>
      </div>
    </div>
    <div class="container">
    <div class="proffer-wrapper">
      
      <div class="proffer__item">
        <div class="proffer__image">
          <img src="img/proffer/proffer-1.jpg">
        </div>
        <p class="proffer__text">Поможем закупить все материалы <br>по оптовым ценам у проверенных <br>поставщиков</p>
      </div>

      <div class="proffer__item">
        <div class="proffer__image">
          <img src="img/proffer/proffer-2.jpg">
        </div>
        <p class="proffer__text">Мы дадим Вам <span class="proffer__text_bold">максимальные скидки </span><br>у наших партнеров для закупки материалов оптом</p>
      </div>

      <div class="proffer__item">
        <div class="proffer__image">
          <img src="img/proffer/proffer-3.jpg">
        </div>
        <p class="proffer__text">Все, что не сможете найти в городе - поможем заказать <span class="proffer__text_bold">у проверенных поставщиков</span></p>
      </div>
    </div>
    </div>
  </div>
  <!-- /.section proffer -->
  <div class="section guarantee">
    <div class="container">
      <h2 class="guarantee__title">Все наши гарантийные обязательства подробно и прозрачно описаны в договоре</h2>

      <div class="guarantee-wrapper">

        <div class="guarantee__item">
          <div class="guarantee__image">
            <img src="img/guarantee/guarantee-1.jpg" class="guarantee__scan">
          </div>
          <span class="guarantee__text">Гарантия на качество<br> выполняемых работ</span>
        </div>
        <!-- /.guarantee__item -->

        <div class="guarantee__item">
          <div class="guarantee__image">
            <img src="img/guarantee/guarantee-2.jpg" class="guarantee__scan">
          </div>
          <span class="guarantee__text">Гарантия на фиксированные цены. Виды работ и цены на них<br> прописаны в договоре</span>
        </div>
        <!-- /.guarantee__item -->

        <div class="guarantee__item">
          <div class="guarantee__image">
            <img src="img/guarantee/guarantee-3.jpg" class="guarantee__scan">
          </div>
          <span class="guarantee__text">Гарантия на точное соблюдение сроков и ответственность за их невыполнение</span>
        </div>
        <!-- /.guarantee__item -->
      </div>
    </div>
    <!-- /.container -->
  </div>
  <!-- /.section guarantee -->

  <section class="section brif">
    <div class="container">
      <div class="brif-block">
        <div class="interview brif__interview">
          <h3 class="interview__title">Мы можем озвучить Вам примерную стоимость работы и материалов по телефону</h3>
          <span class="interview__subtitle">Для этого нужно ответить на 4 вопроса:</span>

          <ul class="interview-list">

            <li class="interview-list__item">
              <span class="interview-list__counter">1</span> 
              <!-- /.interview-list__couner -->
              <span class="interview-list__text">Какова площадь помещения?</span> 
              <!-- /.intervier-list__text -->
            </li>
            <!-- /.interview-list__item -->

            <li class="interview-list__item">
              <span class="interview-list__counter">2</span> 
              <!-- /.interview-list__couner -->
              <span class="interview-list__text">У Вас новостройка или вторичное жилье?</span> 
              <!-- /.intervier-list__text --></li>
            <!-- /.interview-list__item -->

            <li class="interview-list__item">
              <span class="interview-list__counter">3</span>
               <!-- /.interview-list__couner -->
               <span class="interview-list__text">Где находится помещение, в котором будет производиться ремонт?</span> 
               <!-- /.intervier-list__text -->
              </li>
            <!-- /.interview-list__item -->
            
            <li class="interview-list__item">
              <span class="interview-list__counter">4</span> 
              <!-- /.interview-list__couner -->
              <span class="interview-list__text">Назначение помещения?</span> 
              <!-- /.intervier-list__text -->
            </li>
            <!-- /.interview-list__item -->

          </ul>
          <!-- /.interview-list -->
        </div>
        <!-- /.interview brif__interview -->
        <div class="brif__form">
          <h3 class="form__title">Оставьте заявку на бесплатный расчет ремонта по телефону</h3>
          <span class="form__subtitle">Для этого заполните форму ниже</span>

          <form class="form" action="mail.php" method="POST" id="brif-form">
            <input type="text" name="username" class="input brif__input" placeholder="Ваше имя">
            <input type="tel" name="phone" class="input brif__input phone" placeholder="Ваш телефон">
            <input type="email" name="email" class="input brif__input" placeholder="Ваш email">
            <button class="button brif__button">Рассчитать стоимость</button>
            <span class="form__description">Мы перезвоним Вам в течение 60 секунд</span>
          </form>
        </div>
        <!-- /.brif__form -->
      </div>
      <!-- /.brif-block -->
    </div>
    <!-- /.container -->
  </section>
  <!-- /.section brif -->
  
  </main>
  <div class="modal" id="modal">
    <div class="modal-dialog">
      <span class="modal-dialog__close" id="close">&#10006;</span>
      <h4 class="modal-dialog__title">Узнайте точную стоимость ремонта по телефону!</h4>
      <span class="modal-dialog__subtitle">Заполните поля ниже - мы свяжемся с Вами</span>
      <form action="mail.php" method="POST" id="modal-form">
        <input type="text" name="username" class="input modal-dialog__input" placeholder="Ваше имя">
        <input type="tel" name="phone" class="input modal-dialog__input phone" placeholder="Ваш телефон">
        <button class="button modal-dialog__button">Узнать стоимость</button>
      </form>
        <span class="modal-dialog__feedback-text">Или Вы можете перезвонить нам сами по телефону:   <br>  
          <a href="tel: +7 (8182) 42-51-31" class="modal-dialog__feedback-number">+7 (8182) 42-51-31</a>
        </span>
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->   
  <div id="top" class="button button-top">
    <img class="button-top__image" href="#" src="img/interface/top.png">
  </div>

  <div class="footer">
    <div class="map" id="map"></div>
    <!-- /.map -->
    <div class="container">
      <div class="contacts-block">
        <div class="contacts">
          <h3 class="contacts__title">Приезжайте к нам в гости! Проконсультируем Вас<br> по всем вопросам ремонта</h3>
        <ul class="contacts-list">
          <li class="contacts-list__item">
            <span class="contacts-list__icon">
              <img src="img/footer/map-placeholder.png">
            </span>
            <span class="contacts-list__text">г. Москва<br><span class="contacts-list__text_bold">ул. Ленинга, д. 10, корпус 2, оф. 308</span></span>
          </li>
          <li class="contacts-list__item">
            <span class="contacts-list__icon">
              <img src="img/footer/clock-with-white-face.png">
            </span>
            <span class="contacts-list__text">Режим работы:<br><span class="contacts-list__text_bold">с 9:00 до 18:00</span></span>
          </li>
          <li class="contacts-list__item">
            <span class="contacts-list__icon">
              <img src="img/footer/phone-call-button.png">
            </span>
            <span class="contacts-list__text"> Телефон:<br>
              <a href="tel:+7(495)42-251-31" class="contacts-list__link">+ 7 (495) 42-251-31</a>
            </span>
          </li>
        </ul>          
        </div>
        <!-- /.contacts -->
      </div>
      <!-- /.contacts-block -->
    </div>
    <!-- /.container -->
  </div>
  <!-- /.footer section -->

  <!--Подключение модального окна через JS-->
  <!-- <script src=js/main.js> </script>--->
  <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>

  <!--Подключение модального окна через jQuery-->
  <script src=js/modal.js> </script>

  <!--Slik слайдер-->
  <!--<script src="js/slick.min.js" class=""></script>
  <script src="js/slider.js"></script>-->

  <!--OWL слайдер-->
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/owlSlider.js"></script>
  
  <!--Анимация-->
  <script src="js/wow.min.js"></script>
  <script src="js/main-animation.js"></script>

  <!--Валидация форм-->
  <script src="js/jquery.validate.min.js"></script>
    <!--Маска--> 
  <script src="js/jquery.maskedinput.min.js"></script>
  <script src="js/main-validation.js"></script>

  <!--Карта-->
  <script src="js/map.js"></script>



 
 

</body>
</html> 
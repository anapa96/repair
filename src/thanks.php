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
              Спасибо за заявку, мы Вам перезвоним через 15 минут
            </h1>
          <!-- /.hero-text -->
          <!-- /.hero-image -->
        </div>
        <!-- /.hero-block -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /.hero -->

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
$(document).ready(function(){
  /*модальые окна*/
  const button=$('#button');
  const modal=$('#modal');
  const close=$('#close');

  button.on('click', function(){
    modal.addClass('modal_active');
    $('body').addClass('body_hidden'); 
  });
  close.on('click', function(){
    modal.removeClass('modal_active');  
    $('body').removeClass('body_hidden');   
  });

  $('#scan-1').on('click', function(){
    $('#evasion-1').addClass('evasion_active'); 
    $('body').addClass('body_hidden'); 
  });
  
  $('#scan-2').on('click', function(){
    $('#evasion-2').addClass('evasion_active');  
    $('body').addClass('body_hidden'); 
  });
  $('#scan-3').on('click', function(){
    $('#evasion-3').addClass('evasion_active');  
    $('body').addClass('body_hidden'); 
  });

  $('.evasion-dialog__close').on('click', function(){
    $('.evasion').removeClass('evasion_active');
    $('body').removeClass('body_hidden');   
  });

  /*Кнопка прокрутки*/
  const top_show = 150; // В каком положении полосы прокрутки начинать показ кнопки "Наверх"
  const delay = 1000; // Задержка прокрутки
  $(window).scroll(function () { // При прокрутке попадаем в эту функцию
    /* В зависимости от положения полосы прокрукти и значения top_show, скрываем или открываем кнопку "Наверх" */
    if ($(this).scrollTop() > top_show) $('#top').fadeIn();
    else $('#top').fadeOut();
 });
  $('#top').click(function () { // При клике по кнопке "Наверх" попадаем в эту функцию
    /* Плавная прокрутка наверх */
    $('body, html').animate({
      scrollTop: 0
    }, delay);
  });

/*подключение wow*/
  const wow =  new WOW({
    mobile: false
  });
  wow.init();
  /*OWL слайдер*/ 
  $(".owl-carousel").owlCarousel({
    loop: true,
    margin:30,
    nav:true,
    navText: ["<img src='img/portfolio/left-arrow.png'>", "<img src='img/portfolio/right-arrow.png'>"],
    responsive:{
        0:{
            items:1
        },
        320:{
            items:1,
            margin: 30
        },
        769:{
            items:2,
            margin: 30
        },
        992:{
            items:3,
            margin: 30
        }
    }
  });

});

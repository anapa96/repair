$(document).ready(function(){
  const button=$('#button');
  const modal=$('#modal');
  const close=$('#close');
  button.on('click', function(){
    modal.addClass('modal_active');
  });
  close.on('click', function(){
    modal.removeClass('modal_active');
  });

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

});
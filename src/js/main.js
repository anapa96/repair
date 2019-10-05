var button = document.querySelector('#button');
var modal= document.querySelector('#modal');
var close= document.querySelector('#close');

button.addEventListener('click', function(){
  modal.classList.add('modal_active');
  // первый аргумент - функция
  function second_passed() {
    modal.classList.remove('modal_active');
  }
  setTimeout(second_passed, 5000);
});

close.addEventListener('click', function(){
  modal.classList.remove('modal_active');
});


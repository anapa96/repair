const button = document.querySelector('#button');
const modal= document.querySelector('#modal');
const close= document.querySelector('#close');

button.addEventListener('click', function(){
  modal.classList.toggle('modal_active');
  setTimeout(function(){
    modal.classList.toggle('modal_active');
  }, 5000);

 /* function second_passed() {
    modal.classList.remove('modal_active');
  }
  setTimeout(second_passed, 5000);*/
});

close.addEventListener('click', function(){
  modal.classList.toggle('modal_active');
});


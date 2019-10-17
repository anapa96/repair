$(document).ready(function () {
const message= document.querySelector('#message');
const messageClose= document.querySelector('#message-close');

messageClose.addEventListener('click', function(){
  message.classList.toggle('message_active');
});

  /*Маска для телефона*/
  $('.phone').mask('+7 (999) 999-99-99');
  
  /*Валидация формы */
  $('#offer-form').validate({
    errorElement: "div",
    errorClass: "invalid-offer",
    rules: {
      username: {
        required: true,
        minlength: 2,
        maxlength:15
      },
      phone: {
        required: true
      },
    },
    messages: {
      username: {
        required: "Введите имя",
        minlength: jQuery.validator.format("Имя не менее {0} символов!"),
        maxlength: jQuery.validator.format("Имя не более {0} символов!")
      },
      phone: "Введите номер телефона"
    },
      submitHandler: function(form){
        $.ajax({
          type: "POST",
          url: "mail.php",
          data: $(form).serialize(),
          success: function (response){
            message.classList.toggle('message_active');
            $('.message-dialog__tilte').text(response);
            $('#offer-form')[0].reset(); 
          
        },
        error: function(jqXHR, textStatus, errorThrow){
          message.classList.toggle('message_active');
         $('.message-dialog__tilte').text(jqXHR + " " + textStatus);

        }
      });
      return false;
    }
  });

  $('#modal-form').validate({
    errorElement: "div",
    errorClass: "invalid",
    rules: {
      username: {
        required: true,
        minlength: 2,
        maxlength:15
      },
      phone: {
        required: true
      },
    },
    messages: {
      username: {
        required: "Введите имя",
        minlength: jQuery.validator.format("Имя не менее {0} символов!"),
        maxlength: jQuery.validator.format("Имя не более {0} символов!")
      },
        phone: "Введите номер телефона"
      },
    submitHandler: function(form){
        $.ajax({
          type: "POST",
          url: "mail.php",
          data: $(form).serialize(),
          success: function (response){
            message.classList.toggle('message_active');
            $('.message-dialog__tilte').text(response);
            $('#modal-form')[0].reset(); 
        },
        error: function(jqXHR, textStatus, errorThrow){
          message.classList.toggle('message_active');
          $('.message-dialog__tilte').text(jqXHR + " " + textStatus);
          
        }
      });
      return false;
    }
  });
      
  $('#brif-form').validate({
    errorElement: "div",
    errorClass: "invalid",
    rules: {
      username: {
        required: true,
        minlength: 2,
        maxlength:15
      },
      email: {
        required: true,
        email: true
      },
      phone: {
        required: true
      },
    },
    messages: {
      username: {
        required: "Введите имя",
        minlength: jQuery.validator.format("Имя не менее {0} символов!"),
        maxlength: jQuery.validator.format("Имя не более {0} символов!")
      },
      email: {
        required: "Введите E-mail",
        email: "Введите корректный E-mail"
      },
      phone: "Введите номер телефона"
    },
    submitHandler: function(form){
      $.ajax({
        type: "POST",
        url: "mail.php",
        data: $(form).serialize(),
        success: function (response){
          message.classList.toggle('message_active');
          $('.message-dialog__tilte').text(response);
        $('#brif-form')[0].reset(); 
      },
      error: function(jqXHR, textStatus, errorThrow){
        message.classList.toggle('message_active');
        $('.message-dialog__tilte').text(jqXHR + " " + textStatus);
      }
    });
    return false;
  }
  });


});
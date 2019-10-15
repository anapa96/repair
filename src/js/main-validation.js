$(document).ready(function () {
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
    }
  });

  /*Маска для телефона*/
  $('.phone').mask('+7 (999) 999-99-99');
});
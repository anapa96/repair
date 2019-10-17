$(document).ready(function () {
  $('#offer-form').on('submit', function name(event){
    event.preventDefault();
    $.ajax({
      type: "POST",
      url: "mail.php",
      data: $(this).serialize(),
      success: function (response){
        $('#offer-form__message').text(response);
        $('#offer-form')[0].reset(); 
      },
      error: function(jqXHR, textStatus, errorThrow){
        $('#offer-form__message').text(jqXHR + " " + textStatus);
      }
    });
  });
  $('#brif-form').on('submit', function name(event){
    event.preventDefault();
    $.ajax({
      type: "POST",
      url: "mail.php",
      data: $(this).serialize(),
      success: function (response){
        $('#brif-form__message').text(response);
        $('#brif-form')[0].reset(); 
      },
      error: function(jqXHR, textStatus, errorThrow){
        $('#brif-form__message').text(jqXHR + " " + textStatus);
      }
    });
  });
  $('#modal-form').on('submit', function name(event){
    event.preventDefault();
    $.ajax({
      type: "POST",
      url: "mail.php",
      data: $(this).serialize(),
      success: function (response){
        $('#modal-form__message').text(response);
        $('#modal-form')[0].reset(); 
      },
      error: function(jqXHR, textStatus, errorThrow){
        $('#modal-form__message').text(jqXHR + " " + textStatus);
      }
    });
  });
});
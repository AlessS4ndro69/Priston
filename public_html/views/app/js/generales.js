// Wait for the DOM to be ready
function validate() {
    
      var flag = 1;
      var first_name = $('#fname').val();
      var last_name = $('#lname').val();
      var dni = $('#dni').val();
      var city = $('#city').val();
      var phone = $('#phone').val();
      var recibo = $('#recibo').val();
  
      $(".error").remove();
  
      console.log(first_name);
      if (first_name.length < 1) {
        $('#fname').after('<h4 class="fs-subtitle">Completa este campo</h4>');
        flag = 0;
      }
      if (last_name.length < 1) {
        $('#lname').after('<h4 class="fs-subtitle">Completa este campo</h4>');
        flag = 0;
      }
      if (dni.length < 1) {
        $('#dni').after('<h4 class="fs-subtitle">Completa este campo</h4>');
        flag = 0;
      }/* else {
        var regEx = /^[A-Z0-9][A-Z0-9._%+-]{0,63}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/;
        var validEmail = regEx.test(email);
        if (!validEmail) {
          $('#email').after('<span class="error">Enter a valid email</span>');
        }
      }*/

      if (city.length < 1) {
        $('#city').after('<h4 class="fs-subtitle">Completa este campo</h4>');
        flag = 0;
      }
      if (phone.length < 1) {
        $('#phone').after('<h4 class="fs-subtitle">Completa este campo</h4>');
        flag = 0;
      }
      //if (password.length < 8) {
      //  $('#password').after('<span class="error">Password must be at least 8 characters long</span>');
      //}
      if(!recibo){
        $('#recibo').after('<h4 class="fs-subtitle">Completa tu recibo</h4>');
        flag = 0;
    }
      if(flag){goLogin();}
      
}


function __(id){
    return document.getElementById(id);
}

function redirection(){
    setTimeout( function() { window.location.href = "index.php"; }, 1000 );
}

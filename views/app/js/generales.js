// Wait for the DOM to be ready
function validate(nform) {
    
  var flag = 1;
  
  
      var first_name = $('#fname'+nform).val();
      //var last_name = $('#lname').val();
      var dni = $('#dnisuscribe'+nform).val();
      var city = $('#city'+nform).val();
      var phone = $('#phone'+nform).val();
      //var recibo = $('#recibo').val();
      var email = $('#email'+nform).val();
  
  
      
  
      $(".error").remove();
  
      if(flag)console.log("nform "+nform+"....");
      if (first_name.length < 1) {
        $('#fname'+nform).after('<h4 class="fs-subtitle">Completa este campo</h4>');
        console.log("bandera apagada firstana,");
        flag = 0;
      }
     
      if (dni.length < 1) {
        $('#dnisuscribe'+nform).after('<h4 class="fs-subtitle">Completa este campo</h4>');
        console.log("bandera apagada firstana,");
        flag = 0;
      }/* else {
        var regEx = /^[A-Z0-9][A-Z0-9._%+-]{0,63}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/;
        var validEmail = regEx.test(email);
        if (!validEmail) {
          $('#email').after('<span class="error">Enter a valid email</span>');
        }
      }*/

      if (email.length < 1) {
        
        $('#email'+nform).after('<h4 class="fs-subtitle">Completa este campo</h4>');
        console.log("bandera apagada firstana,");
        flag = 0;
      }/*else{
        var regEx = /^[A-Z0-9][A-Z0-9._%+-]{0,63}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/;
        var validEmail = regEx.test(email);
        if (!validEmail) {
          $('#email').after('<span class="error">Ingresa email valido</span>');
          flag=0;
        }
        
      }*/
      
      if (city.length < 1) {
        $('#city'+nform).after('<h4 class="fs-subtitle">Completa este campo</h4>');
        console.log("bandera apagada firstana,");
        flag = 0;
      }
      if (phone.length < 1) {
        $('#phone'+nform).after('<h4 class="fs-subtitle">Completa este campo</h4>');
        console.log("bandera apagada firstana,");
        flag = 0;
      }
      //if (password.length < 8) {
      //  $('#password').after('<span class="error">Password must be at least 8 characters long</span>');
      //}
      /*if(!recibo){
        $('#recibo').after('<h4 class="fs-subtitle">Completa tu recibo</h4>');
        flag = 0;
      }*/

      console.log(first_name);
      if(flag){
        console.log("bandera activa");
        goRegister(nform);
      }
      
}


function validate_login() {
    
  var flag = 1;
  var dni = $('#dni').val();
  var pass = $('#pass').val();

  $(".error").remove();

  console.log(dni);
 
  if (pass.length < 1) {
    $('#pass').after('<h4 class="fs-subtitle">Completa este campo</h4>');
    flag = 0;
  }
  if (dni.length < 1) {
    $('#dni').after('<h4 class="fs-subtitle">Completa este campo</h4>');
    flag = 0;
  }

  if(flag){goLogin();}
  
}


function __(id){
    return document.getElementById(id);
}
/*
function redirection(){
    setTimeout( function() { window.location.href = "index.php"; }, 1000 );
}*/

function autop(){
  var iframe = document.getElementById("myFrame");
  var iframeDoc = iframe.contentDocument || iframe.contentWindow.document;
  
  function handleIframeKeyUp(evt) {
      alert("Key up!");
  }
  
  if (typeof iframeDoc.addEventListener != "undefined") {
      iframeDoc.addEventListener("keyup", handleIframeKeyUp, false);
  } else if (typeof iframeDoc.attachEvent != "undefined") {
      iframeDoc.attachEvent("onkeyup", handleIframeKeyUp);
  }

}



function goLogin() {

      var connect, form, response, result, user, pass, sesion;

      userFirstName= document.getElementById('fname').value;
      userLastName= document.getElementById('lname').value;
      dni= document.getElementById('dni').value;
      phone= document.getElementById('phone').value;
      city= document.getElementById('city').value;
      recibo = document.getElementById('recibo').value;

      //sesion= document.getElementById('session_login').checked ? true: false;

      form= "user=" + userFirstName + " " + userLastName + "&dni=" + dni + "&phone=" + phone + "&city=" + city + "&recibo=" + recibo;

  //Si el navegador es muy viejo, se usa ActiveXObject... de resto, todos los navegadores usan XMLHttpRequest
      connect= window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');

  //Cuando haya un movimiento, petición, recepción o algo nuevo entre AJAX y PHP
      connect.onreadystatechange= function(){

        //Aquí todavía no se ha recibido información de PHP.. así que ponemos a esperar al usuario
        if(connect.readyState!= 4){
          result= ' <div class="alert alert-dismissible alert-warning">';
          result += '<button type="button" class="close" data-dismiss="alert">&times;</button>';
          result +=    '<h4>Espere!</h4>';
          result +=    '<p>Estamos procesando los datos. Solo tomará unos segundos...</p></div>';
          __('_AJAX_LOGIN_').innerHTML= result;
        }

        if(connect.readyState== 4 && connect.status== 200){

          //Si todo salió bien...
              if(connect.responseText== 1){
                result= ' <div class="alert alert-dismissible alert-Success">';
                result +=    '<h4>Conectado</h4>';
                result +=    '<p>Bienvenido usuario, te estamos redireccionando...</p></div>';
                __('_AJAX_LOGIN_').innerHTML= result;
                
                //if(mode=0){window.location.reload();}
                //if(mode=1){window.location.href='/OcrendBB/admin/home.html';}
              }
              else{
                __('_AJAX_LOGIN_').innerHTML= connect.responseText;
              }

        }


      }

  //Enviamos los datos tipo POST, le indicamos que tipo de codificación debe usar con el POST,
  //Enviamos el formulario (form)
      
      connect.open('POST', 'ajax.php?mode=login', true);     
      connect.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
      connect.send(form);


}


function runScriptLogin(event){
  // si la tecla presionada es igual al número ASCI de la tecla ENTER
  if(event.keyCode == 13){
    goLogin();
  }
}

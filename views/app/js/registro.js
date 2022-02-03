
function goRegister() {

    var connect, userFirstName, result,  dni, phone, city, email;
  
    userFirstName= document.getElementById('fname').value;
    
    dni= document.getElementById('dnisuscribe').value;
    phone= document.getElementById('phone').value;
    city= document.getElementById('city').value;
    //recibo = document.getElementById('recibo').value;
    email = document.getElementById('email').value;
  
    //sesion= document.getElementById('session_login').checked ? true: false;
  
    form= "user=" + userFirstName  + "&dni=" + dni + "&phone=" + phone + "&city=" + city + "&email=" + email;
    //form= "user=" + userFirstName + userLastName;
    console.log(form);
  //Si el navegador es muy viejo, se usa ActiveXObject... de resto, todos los navegadores usan XMLHttpRequest
    
    connect= window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
    console.log(connect.status);
    if(connect)console.log("existe connec");
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
              /*
              result = '<div class="container">';
              result+= '<div class="row">';
              
              result+='<div class="modal-dialog">';
              result+='<div class="modal-content">';
              result+='<div class="modal-header">';
                        
              result+='</div>';
              
              result+='<div class="modal-body">';
                              
              result+='<div class="thank-you-pop">';
              result+='<img src="http://goactionstations.co.uk/wp-content/uploads/2017/03/Green-Round-Tick.png" alt="">';
              result+='<h1 class="fs-title">Thank you!</h1>';
              result+='<h3 class="fs-subtitle"> Tu subscripción se realizo con exito</h3>';
              result+=          '<input type="button"  class="submit action-button" onclick=window.location.href="index.php?view=sala" value="Cerrar" />';
                                
              result+=        '</div>';
                                
              result+=      '</div>';
              result+='</div>';
              result+='</div>';
              result+='</div>';
              result+='</div>';
              __('_AJAX_LOGIN_').innerHTML= result;*/

              result='<div class="row">';
              result+='<div class="modal-dialog">';
              result+=    '<div class="modal-content">';
              result+=  '<div class="modal-body">';
            result+='<div class="thank-you-pop">';
            result +=               '<img src="http://goactionstations.co.uk/wp-content/uploads/2017/03/Green-Round-Tick.png" alt="">';
            result +=               '<h1 class="fs-title">Thank you!</h1>';
            result +=               '<h3 class="fs-subtitle"> Tu subscripción se realizo con exito </h3>';
            result +=               '<input type="button"  class="submit action-button"  value="Cerrar" onclick=window.location.href="index.php?view=sala" />';
                                    
            result +=             '</div>';
            result +='</div>';
            result +='</div>';
            result +='</div>';
            result +='</div>';

            __('_AJAX_LOGIN_').innerHTML= result;
            //window.location.reload();
            window.location.href='index.php?view=sala';
              console.log("devolvio 1");
              //window.location.reload();
              //window.location.href='index.php?view=sala';
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
    console.log("entro");
    
    
  
    connect.open('POST', 'ajax.php?mode=register', true);     
    connect.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    connect.send(form);
    if(connect.status == 0){
      console.log(connect.responseText);
    }
    
    //window.location.href='index.php?view=sala';
  }
  
  function runScriptLogin(event){
    // si la tecla presionada es igual al número ASCI de la tecla ENTER
    if(event.keyCode == 13){
      goRegister();
    }
  }
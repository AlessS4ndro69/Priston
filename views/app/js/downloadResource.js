



function abrir_recurso(element){
    var curso = element.innerHTML;
    console.log("entro");
    //window.location.href='downloadResource.php?course=' . curso;
    //window.location.href='downloadResource.php?course=' + curso ;
    window.location.href="ajax.php?mode=download?course=" + curso;
}   

function goDownload(element) {

    var curso = element.innerHTML;
  
    //sesion= document.getElementById('session_login').checked ? true: false;
    console.log(curso);
    form= "course=" + curso;
  
  //Si el navegador es muy viejo, se usa ActiveXObject... de resto, todos los navegadores usan XMLHttpRequest
    connect= window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
  
  //Cuando haya un movimiento, petición, recepción o algo nuevo entre AJAX y PHP
    connect.onreadystatechange= function(){
  
      //Aquí todavía no se ha recibido información de PHP.. así que ponemos a esperar al usuario
      if(connect.readyState!= 4){
        result= ' <div class="alert alert-dismissible alert-warning">';
        result += '<button type="button" class="close" data-dismiss="alert">&times;</button>';
        result +=    '<h4>Iniciando Descarga!</h4>';
        result +=    '<p>Solo tomará unos segundos...</p></div>';
        __('portada').innerHTML= result;
      }
  
      if(connect.readyState== 4 && connect.status== 200){
  
        //Si todo salió bien...
            if(connect.responseText!= 0){
              result= ' <div class="alert alert-dismissible alert-Success">';
              result +=    '<h4>Descarga exitosa!</h4></div>';
              
              
              //__('portada').innerHTML= result;
              
              console.log("devolvio 1");
              //window.location.reload();
              window.location.href=connect.responseText;
             //window.location.assign(connect.responseText);
             
              
              

              //if(mode=0){window.location.reload();}
              //if(mode=1){window.location.href='/OcrendBB/admin/home.html';}
            }
            else{
              //__('_AJAX_LOGIN_').innerHTML= connect.responseText;
              result= '<div class="alert alert-dismissible alert-danger">';
              result+= '<button type="button" class="close" data-dismiss="alert">x</button>';
              result+='<strong>Archivo no encontrado: </strong>';
              result+='En un momento, el profesor subira el material de trabajo.';
              result+='</div>';
              __('portada').innerHTML= result;
            }
  
      }
  
  
    }
  
  //Enviamos los datos tipo POST, le indicamos que tipo de codificación debe usar con el POST,
  //Enviamos el formulario (form)
    
    connect.open('POST', 'ajax.php?mode=download', true);     
    connect.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    connect.send(form);
    console.log(connect.status);
  
    
  }
  
  
  function runScriptLogin(event){
    // si la tecla presionada es igual al número ASCI de la tecla ENTER
    if(event.keyCode == 13){
      goLogin();
    }
  }
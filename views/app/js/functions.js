function pagination(pg){

    //pg = p+1
    form= "pg=" + pg;
    console.log("page " + pg);
    
  
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
        //__('_AJAX_LOGIN_').innerHTML= result;
      }
  
      if(connect.readyState== 4 && connect.status== 200){
  
        //Si todo salió bien...
        console.log(connect.status);
            if(connect.responseText != 0){
              //data = JSON.parse(connect.responseText);
              //data = decodeURI(data);
              //console.log(connect.responseText);
              //window.location.href='index.php?view=exercises';
              //view_courses(data);

            }
            else{
              
                //__('_AJAX_LOGIN_').innerHTML= connect.responseText;
                console.log("peor caso");
              
              
            }
  
      }
  
    }
    connect.open('POST', 'index.php?view=ejerciciosresueltosporcurso&course='+course+'&pg='+pg, true);     
    connect.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    connect.send(form);
    console.log(connect.status);
    
  
    
  }
  function view_courses(d){
    data = d;
    //alert(data);
    let canva= document.getElementById("exercises");
    for (i =1;i<4;i++){
        
        let d1 = document.createElement("div"); d1.setAttribute("class",'class="col-lg-4 py-3"');
        let d2 = document.createElement('div'); d2.className = 'card';
        let header = document.createElement('div'); header.className = 'header';
        let d3 = document.createElement('div'); d3.className = 'post-thumb';
        let h5 = document.createElement('h5'); h5.className = 'post-title';
        let a = document.createElement('a'); a.innerHTML = data[i]['course'] + " - " + data[i]['theme'];

        let body = document.createElement('div'); body.className = 'body';
        let d4 = document.createElement('div'); d4.innerHTML = decodeURIComponent(data[i]['link']);
        let d5 = document.createElement('div'); d5.className = 'post-date';
        let a1 = document.createElement('a'); a1.innerHTML = data[i]['sentence'];

        d1.appendChild(d2);
        d2.appendChild(header);
        d2.appendChild(body);
        header.appendChild(d3);
        header.appendChild(h5); h5.appendChild(a);
        body.appendChild(d4);
        body.appendChild(d5); d5.appendChild(a1);    


    
        canva.append(d1);
    }
  } 


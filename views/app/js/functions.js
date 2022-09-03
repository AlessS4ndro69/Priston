
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


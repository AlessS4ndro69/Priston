import * as THREE from "./assets/js/three.module.js";
import { OrbitControls } from "./assets/js/OrbitControls.js";

var ranking ;
var form = "points=3";

var aumentar = function(cube, course, id) {
  cube.scale.z+=0.010;
  cube.position.z-=0.005;
    //console.log(geometry.getAttribute('position').array);
    //// ---------------- AJAX PARA CONSULTAR EL RANKING DE CURSOS ---------- //////
  form = "points=3&course="+course+"&id="+id;
  //Si el navegador es muy viejo, se usa ActiveXObject... de resto, todos los navegadores usan XMLHttpRequest
  var connect= window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');

  //Cuando haya un movimiento, petición, recepción o algo nuevo entre AJAX y PHP
  connect.onreadystatechange= function(){

    //Aquí todavía no se ha recibido información de PHP.. así que ponemos a esperar al usuario
    if(connect.readyState!= 4){
      var result= ' <div class="alert alert-dismissible alert-warning">';
      result += '<button type="button" class="close" data-dismiss="alert">&times;</button>';
      result +=    '<h4>Espere!</h4>';
      result +=    '<p>Estamos procesando los datos. Solo tomará unos segundos...</p></div>';
      __('_AJAX_LOGIN_').innerHTML= result;
    }

    if(connect.readyState== 4 && connect.status== 200){

      //Si todo salió bien...
          if(connect.responseText != 0){
            
            ranking = JSON.parse(connect.responseText);
            console.log(ranking);
            //console.log(ranking[0]["curso"]);
            //console.log(ranking[0]["puntaje"]);
            console.log(ranking.length);
            scene.clear();
            for (let i = 0 ; i < ranking.length ; i++){
              
              let x = i*2-7;
              let label = makeText(x, 20, ranking[i]["curso"], ranking[i]["puntaje"]);
              //const c = new THREE.Mesh(new THREE.BoxGeometry(1,1,ranking[i]["puntaje"] * 0.001), material);
              //c.position.x = x; // para distribuir los boxes
              //group.add(c);
              scene.add(label);
            }
            scene.add(group);
          }
    }
  }

  //Enviamos los datos tipo POST, le indicamos que tipo de codificación debe usar con el POST,
  //Enviamos el formulario (form)

  connect.open('POST', 'ajax.php?mode=votacion', true);     
  connect.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
  connect.send(form);
  console.log(connect.status);      
}

var connect= window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');

//Cuando haya un movimiento, petición, recepción o algo nuevo entre AJAX y PHP
connect.onreadystatechange= function(){

  //Aquí todavía no se ha recibido información de PHP.. así que ponemos a esperar al usuario
  if(connect.readyState!= 4){
    var result= ' <div class="alert alert-dismissible alert-warning">';
    result += '<button type="button" class="close" data-dismiss="alert">&times;</button>';
    result +=    '<h4>Espere!</h4>';
    result +=    '<p>Estamos procesando los datos. Solo tomará unos segundos...</p></div>';
    __('_AJAX_LOGIN_').innerHTML= result;
  }

  if(connect.readyState== 4 && connect.status== 200){

    //Si todo salió bien...
        if(connect.responseText != 0){
          
          ranking = JSON.parse(connect.responseText);
          console.log(ranking);
          //console.log(ranking[0]["curso"]);
          //console.log(ranking[0]["puntaje"]);
          console.log(ranking.length);

          for (let i = 0 ; i < ranking.length ; i++){
            let button = document.createElement("button");
            button.type= 'button';
            button.innerText = ranking[i]["curso"];
            //button.setAttribute('onclick','aumentar();'); // for FF
            button.onclick = function() {aumentar(group.children[i] , ranking[i]["curso"],i);}; // for IE
            button.className="btn btn-primary";
            let li = document.createElement("li");
            li.appendChild(button);
            a.appendChild(li);
            let x = i*2-7;
            let label = makeText(x, 20, ranking[i]["curso"], ranking[i]["puntaje"]);
            const c = new THREE.Mesh(new THREE.BoxGeometry(1,1,ranking[i]["puntaje"] * 0.003), material);
            c.position.x = x; // para distribuir los boxes
            group.add(c);
            scene.add(label);
          }
          scene.add(group);
        }
  }
  
}

//Enviamos los datos tipo POST, le indicamos que tipo de codificación debe usar con el POST,
//Enviamos el formulario (form)

connect.open('POST', 'ajax.php?mode=ranking', true);     
connect.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
connect.send(form);
console.log(connect.status);    




//creating scene
var scene = new THREE.Scene();
scene.background = new THREE.Color(0xA8E3EF);

//add camera
var camera = new THREE.PerspectiveCamera(
    75,
    window.innerWidth/window.innerHeight
);

//renderer
let canvas = document.getElementById("canvas");
var renderer = new THREE.WebGLRenderer({canvas : canvas});
//renderer.domElement = canvas;
//renderer.setSize(window.innerWidth, window.innerHeight);        
let a= document.getElementById("courses");  // modificar el nombre fecha

let courses = ["Raz. Matemático","Algebra","Trigonometría","Aritmética","Geometría","Psicotécnico","Matemática I", "Cálculo"]

const geometry = new THREE.BoxGeometry(1,1,1.5);
const group = new THREE.Group();
camera.position.z = 9;
var material = new THREE.MeshBasicMaterial({color: 0x5670F9, wireframe: false});
const cube = new THREE.Mesh(geometry, material);


const bodyRadiusTop = .4;
const bodyRadiusBottom = .2;
const bodyHeight = 2;
const bodyRadialSegments = 6;
const bodyGeometry = new THREE.CylinderBufferGeometry(
bodyRadiusTop, bodyRadiusBottom, bodyHeight, bodyRadialSegments);

const headRadius = bodyRadiusTop * 0.8;
const headLonSegments = 12;
const headLatSegments = 5;
const headGeometry = new THREE.SphereBufferGeometry(
    headRadius, headLonSegments, headLatSegments);

const labelGeometry = new THREE.PlaneBufferGeometry(1, 1);




//animation
var controls = new OrbitControls(camera, renderer.domElement);

controls.maxDistance = 10;
controls.zoomSpeed = 0.5;



/*
//// ------   estamos creando un paralelepipedo desde cero ----/////
var vertices = geometry.getAttribute('position').array;
const geo = new THREE.BufferGeometry();

geo.setAttribute( 'position', new THREE.BufferAttribute( vertices, 3 ) );

const mesh = new THREE.Mesh( geo, material );
scene.add(mesh);
//renderer.render(scene, camera);
//////  ------ fin de la creacion del paralelepipedo desde cero -----   ////
*/

///* ////// ------------- texto con textura canvas ------- ///////////////////
function makeLabelCanvas(size, name, rank) {
    const borderSize = 2;
    const ctx = document.createElement('canvas').getContext('2d');
    const font =  `${size}px bold sans-serif`;
    ctx.font = font;
    // measure how long the name will be
    const doubleBorderSize = borderSize * 2;
    const width = ctx.measureText(name).width + doubleBorderSize;
    const height = size + doubleBorderSize;
    ctx.canvas.width = width;
    ctx.canvas.height = height*8;
   
    // need to set font again after resizing canvas
    ctx.font = font;
    ctx.textBaseline = 'middle';
   
    ctx.fillStyle = 'white';
    ctx.rotate( Math.PI / 2); 
    ctx.fillRect(0, 0,height*5 , width*5);
    ctx.fillStyle = 'blue';
    
    /// aca se da la escritura
    ctx.fillText(name, borderSize+20, borderSize-30);  
    ctx.fillText(rank, borderSize+50, borderSize-10);     
    return ctx.canvas;
  }

function makeText(x, size, name, rank) {
    const canvas = makeLabelCanvas(size, name, rank);
    const texture = new THREE.CanvasTexture(canvas);
    // because our canvas is likely not a power of 2
    // in both dimensions set the filtering appropriately.
    texture.minFilter = THREE.LinearFilter;
    texture.wrapS = THREE.ClampToEdgeWrapping;
    texture.wrapT = THREE.ClampToEdgeWrapping;
   
    const labelMaterial = new THREE.MeshBasicMaterial({
      map: texture,
      side: THREE.DoubleSide,
      transparent: true,
    });
    /*
    const bodyMaterial = new THREE.MeshPhongMaterial({
      color,
      flatShading: true,
    });*/
   
    const root = new THREE.Object3D();
    root.position.x = x;
    
  

   /*
    const body = new THREE.Mesh(bodyGeometry, bodyMaterial);
    root.add(body);
    body.position.y = bodyHeight / 2;
   
    const head = new THREE.Mesh(headGeometry, bodyMaterial);
    root.add(head);
    head.position.y = bodyHeight + headRadius * 1.1;
   */
    const label = new THREE.Mesh(labelGeometry, labelMaterial);
    root.add(label);
//    label.rotation.x = THREE.MathUtils.degToRad();
    label.position.y = -0.4;
    label.position.x = 0.6;
    label.position.z = 0.6;
   
    // if units are meters then 0.01 here makes size
    // of the label into centimeters.
    const labelBaseScale = 0.02;
    label.scale.x = canvas.width  * labelBaseScale;
    label.scale.y = canvas.height * labelBaseScale;
   
    //scene.add(root);
    return root;
  }
  //makeText(-0, 32, 'Green Machine', 'green');

/// ------------- final de texto con textura en canvas ------//////////
var animate = function(){
    requestAnimationFrame(animate);
    renderer.render(scene, camera);
    
}
animate();


group.rotation.x += THREE.MathUtils.degToRad(90);

//renderer.render(scene, camera);




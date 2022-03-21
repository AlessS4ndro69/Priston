import * as THREE from "./assets/js/three.module.js";
import { OrbitControls } from "./assets/js/OrbitControls.js";

//creating scene
var scene = new THREE.Scene();
scene.background = new THREE.Color(0xA8E3EF);

//add camera
var camera = new THREE.PerspectiveCamera(
    75,
    window.innerWidth/window.innerHeight
);

//renderer
var renderer = new THREE.WebGLRenderer();
renderer.setSize(window.innerWidth, window.innerHeight);        
let div = document.createElement("div");
document.body.appendChild(div);
div.appendChild(renderer.domElement)
//console.log(document);


//add geometry
var geometry = new THREE.BoxGeometry(1,1,3);
var material = new THREE.MeshBasicMaterial({color: 0x5670F9, wireframe: false});
var cube1 = new THREE.Mesh(geometry, material);
var cube2 = cube1.clone();
var cube3 = cube1.clone();
var cube4 = cube1.clone();
var cube5 = cube1.clone();
var cube6 = cube1.clone();
var cube7 = cube1.clone();
cube1.position.x=-6;
cube2.position.x=-4;
cube3.position.x=-2;
cube4.position.x=0;
cube5.position.x=2;
cube6.position.x=4;
cube7.position.x=6;
//var cube2 = new THREE.Mesh(geometry, material);

//scene.add(cube);
//scene.add(cube2);

camera.position.z = 9;
// desde acaaaaaaaaa ------------


const geometry3 = new THREE.CylinderGeometry( 5, 5, 5, 5, 15, 5, 30 );

// create the skin indices and skin weights manually
// (typically a loader would read this data from a 3D model for you)

const position = geometry3.attributes.position;


const group = new THREE.Group();
group.add( cube1 );
group.add( cube2 );
group.add( cube3 );
group.add( cube4 );
group.add( cube5 );
group.add( cube6 );
group.add( cube7 );


scene.add( group );

//scene.add(cube2);
// hasta acaaaaaaaaa ------------------

//animation
var controls = new OrbitControls(camera, renderer.domElement);
controls.minDistance = 8;
controls.maxDistance = 10;
controls.enableDamping = true;
controls.maxPolarAngle = Math.PI/3;

var animate = function(){
    requestAnimationFrame(animate);
    renderer.render(scene, camera);

}
animate();


group.rotation.x += THREE.MathUtils.degToRad(90);

renderer.render(scene, camera);



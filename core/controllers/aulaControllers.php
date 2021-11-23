<?php

$conexion= new Datos_modelo();
$conexion->Conectar();

//echo $pass;

$dni = $_SESSION['app_usuario'];
$course = $_GET['course'];

$sql="SELECT * FROM estudiante WHERE (estudiante_dni='$dni') LIMIT 1";
$result= $conexion->get_1datos($sql);
$name= $result['estudiante_nombre'];
//if($result) echo "existe";


$sql="SELECT * FROM grabacion WHERE (grabacion_curso='$course')";
$grabaciones= $conexion->get_datos($sql);



include(HTML_DIR . 'aula.php');

?>
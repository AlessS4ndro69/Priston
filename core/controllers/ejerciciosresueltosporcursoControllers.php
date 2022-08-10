<?php

$conexion= new Datos_modelo();
$conexion->Conectar();


/*
$dni = $_SESSION['app_usuario'];


$sql="SELECT * FROM estudiante WHERE (estudiante_dni='$dni') LIMIT 1";
$result= $conexion->get_1datos($sql);
$name= $result['estudiante_nombre'];
*/

#$course = $_GET['course'];
#$sql="SELECT * FROM bancoEjercicios WHERE (bancoEjercicios_course='$course')";
$course = $_GET['course'];
$sql="SELECT * FROM bancoEjercicios WHERE (bancoEjercicios_course='$course')";
$exercises= $conexion->get_datos($sql);

include(HTML_DIR . 'ejerciciosResueltosPorCurso.php');

?>
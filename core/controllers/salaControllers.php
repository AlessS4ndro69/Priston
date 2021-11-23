<?php

$conexion= new Datos_modelo();
$conexion->Conectar();

//echo $pass;

$dni = $_SESSION['app_usuario'];

$sql="SELECT * FROM estudiante WHERE (estudiante_dni='$dni') LIMIT 1";
$result= $conexion->get_1datos($sql);
$name= $result['estudiante_nombre'];
//if($result) echo "existe";


$sql="SELECT * FROM grabacion ";
$grabaciones= $conexion->get_datos($sql);



include(HTML_DIR . 'sala.php');

?>
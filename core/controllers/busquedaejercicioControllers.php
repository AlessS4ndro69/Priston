<?php

$conexion= new Datos_modelo();
$conexion->Conectar();


//$sql = "SELECT DISTINCT bancoEjercicios_course FROM bancoEjercicios";



if(isset($_POST['string']))
    $_SESSION['string'] = $_POST['string'];

$string = $_SESSION['string'];

$sql = "SELECT * FROM `academia_priston`.`bancoejercicios` WHERE (CONVERT(`bancoEjercicios_id` USING utf8) LIKE '%$string%' 
    OR CONVERT(`bancoEjercicios_course` USING utf8) LIKE '%$string%' 
    OR CONVERT(`bancoEjercicios_theme` USING utf8) LIKE '%$string%' 
    OR CONVERT(`bancoEjercicios_link` USING utf8) LIKE '%$string%' 
    OR CONVERT(`bancoEjercicios_enunciado` USING utf8) LIKE '%$string%')";


$exercises = $conexion->get_datos($sql);

include(HTML_DIR . 'busquedaEjercicio.php');


?>
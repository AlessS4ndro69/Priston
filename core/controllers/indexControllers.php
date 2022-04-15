
<?php
$db= new PDO('mysql:host=127.0.0.1; dbname=academia_priston', 'root', 'merino');
//$db= new PDO('mysql:host=157.90.212.15; dbname=academia_priston', 'academia_root', 'J]L4@OhpN-ac');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$db->exec('SET CHARACTER SET utf8');

$conexion= new Datos_modelo();
$conexion->Conectar();



$sql="SELECT grabacion_frame FROM grabacion";
$sql2="SELECT grabacion_pdf FROM grabacion WHERE grabacion_valoracion = 1";
$sql3="SELECT * FROM votacion_seminario";
$frame= $conexion->get_datos($sql);
$n = rand(0, count($frame));
$pdf = $conexion->get_datos($sql2);


include('html/index/index.php');

<?php
$db= new PDO('mysql:host=127.0.0.1; dbname=academia_priston', 'root', 'merino');
//$db= new PDO('mysql:host=157.90.212.15; dbname=academia_priston', 'academia_root', 'J]L4@OhpN-ac');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$db->exec('SET CHARACTER SET utf8');

$conexion= new Datos_modelo();
$conexion->Conectar();



$sql="SELECT grabacion_frame FROM grabacion";
$sql2="SELECT grabacion_pdf FROM grabacion";
$frame= $conexion->get_datos($sql);
$pdf = $conexion->get_datos($sql2);

$n = rand(0, count($frame));



include('html/index/index.php');
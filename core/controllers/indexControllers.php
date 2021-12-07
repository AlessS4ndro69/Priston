
<?php
$db= new PDO('mysql:host=127.0.0.1; dbname=academia_priston', 'root', 'merino');
//$db= new PDO('mysql:host=51.79.72.238; dbname=academia_priston', 'academia_root', 'sCYs+8(wnHQ45:xYfxd+3ABY5');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$db->exec('SET CHARACTER SET utf8');

$conexion= new Datos_modelo();
$conexion->Conectar();

//echo $pass;


$sql="SELECT grabacion_frame FROM grabacion";
$frame= $conexion->get_datos($sql);
//echo var_dump($frame);
$n = rand(0, 2);
//echo $frame[0]["grabacion_frame"];

//if($result) echo "existe";



include('html/index/index.php');
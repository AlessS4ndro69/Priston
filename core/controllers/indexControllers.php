
<?php
$db= new PDO('mysql:host=127.0.0.1; dbname=academia_priston', 'root', 'merino');
//$db= new PDO('mysql:host=51.79.72.238; dbname=academia_priston', 'academia_root', 'sCYs+8(wnHQ45:xYfxd+3ABY5');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$db->exec('SET CHARACTER SET utf8');



include('html/index/index.php');
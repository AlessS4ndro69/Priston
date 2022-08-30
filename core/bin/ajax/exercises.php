<?php

$conexion= new Datos_modelo();
$conexion->Conectar();


$sql = "SELECT DISTINCT bancoEjercicios_course FROM bancoEjercicios";

$courses = $conexion->get_datos($sql);
if(isset($courses)){
    $numberCourses = count($courses);
    

            
    for ($j = 0; $j < $numberCourses; $j++){
    
        $course=$courses[$j]['bancoEjercicios_course'];
        
        $sql="SELECT * FROM bancoEjercicios WHERE (bancoEjercicios_course='$course')";
        $exercises= $conexion->get_datos($sql);
        $numberExercises = count($exercises);

        for ($i = 0 ; $i <= $numberExercises ; $i++){
                if(!isset($exercises[$i])) continue;       //////// VERIFICAR POR QUE HAY REGISTROS  NULOS  O BORRADOS
                $data[] = array(
                    "course" =>  ( $exercises[$i]['bancoEjercicios_course']),
                     "sentence" => ($exercises[$i]['bancoEjercicios_enunciado']),
                     "theme" =>( $exercises[$i]['bancoEjercicios_theme']),
                     "link" =>  ($exercises[$i]['bancoEjercicios_link'])
                );
                
        }



        
        
    }
    // for ($i = 0 ; $i <= 3 ; $i++){
    //     // $data[] = array(
    //     //     "id" => $i,
    //     //      "link" => $i+10000 
    //     // );
        
    // }        
    //var_dump($exercisesLinkEmbed);
    $data = json_encode($data);
    echo $data;
}
else{
    echo 0;
}









    
    
?>
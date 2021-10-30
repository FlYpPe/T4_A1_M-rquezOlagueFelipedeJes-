<?php
// funciones 

 function promedio1($vector){

    $res = 0;
    $promedio = 0;
    echo "<h1>" . "Vector" . "</h1>";
    $contador = 0;
    $contador2 = 0;
    foreach ($vector as $nombre => $calificacion) {
        $contador = $contador + 1;
        echo $nombre;
        foreach($calificacion as $calif){
            $res = $res + $calif;
            $contador2 +=1;
            echo " - " . $calif . "  ";
        }
        $res = $res/$contador2;
        echo "<br>";
        $contador2 = 0;
        $promedio = $promedio + $res;
        $res = 0;
        
}
    $promedio = $promedio / $contador;
  
    
    return $promedio;
}

function promedio2($vector){

    $res = 0;
    $promedio = 0;
    $contador = 0;
    $contador2 = 0;
    foreach ($vector as $nombre => $calificacion) {
        $contador = $contador + 1;
        echo '<br>' . $nombre . ': ';
        foreach($calificacion as $calif){
            $res = $res + $calif;
            $contador2 +=1;
           
        }
        $res = $res/$contador2;
        echo $res;
        $contador2 = 0;
        $promedio = $promedio + $res;
        $res = 0;
        
}
}
function promedio3($vector){

    $res = 0;
    $promedio = 0;
    $contador = 0;
    $contador2 = 0;
    $materia1 = 0;
    $materia2 = 0;
    $materia3 = 0;
    $materia4 = 0;
    $materia5 = 0;
    $materia6 = 0;
    
    foreach ($vector as $nombre => $calificacion) {
        

         
        foreach($calificacion as $Materia => $num){
        if ($contador2 == $contador) {
                
                $res = $res + $num;
            }

            if ($contador2 == 0) {
                $materia1 = $materia1 + $num;
            }elseif ($contador2 == 1) {
                $materia2 = $materia2 + $num;
            }elseif ($contador2 == 2) {
                $materia3 = $materia3 + $num;
            }elseif ($contador2 == 3) {
                $materia4 = $materia4 + $num;
            }elseif ($contador2 == 4) {
                $materia5 = $materia5 + $num;
            }elseif ($contador2 == 5) {
                $materia6 = $materia6 + $num;
            }

            $contador2 +=1;
           
        }
        $contador = $contador + 1;
        $res = $res;
        $contador2 = 0;
        $promedio = $promedio + $res;

        $res = 0;
        
    }

    echo '<br> Español: ' . $materia1/$contador;
    echo '<br> Matematicas: ' . $materia2/$contador;
    echo '<br> Ciencias: ' . $materia3/$contador;
    echo '<br> Historia: ' . $materia4/$contador;
    echo '<br> Sociales: ' . $materia5/$contador;
    echo '<br> Deportes: ' . $materia6/$contador;

    $promedio = $promedio / $contador;

}

function mejorProm($vector){

    $res = 0;
    $promedio = 0;
    $contador = 0;
    $contador2 = 0;
    $nomb;
    foreach ($vector as $nombre => $calificacion) {
        $contador = $contador + 1;
        foreach($calificacion as $calif){
            $res = $res + $calif;
            $contador2 +=1;
        }
        $res = $res/$contador2;
       
        $contador2 = 0;
        if ($promedio <= $res) {
            $promedio = $res;
            $nomb = $nombre;
        }
        
        $res = 0;
        
}
    
    
    return $nomb . ' : ' . $promedio;
}

function impresion($vector){

    $res = 0;
    $promedio = 0;
    echo "<h1>" . "Vector con promedios" . "</h1>";
    $contador = 0;
    $contador2 = 0;
    foreach ($vector as $nombre => $calificacion) {
        $contador = $contador + 1;
        echo $nombre;
        foreach($calificacion as $calif){
            $res = $res + $calif;
            $contador2 +=1;
            echo " - " . $calif . "  ";
        }
        $res = $res/$contador2;
        echo ' -  Promedio : '. $res . "<br>";
        $contador2 = 0;
        $promedio = $promedio + $res;
        $res = 0;
        
}
    $promedio = $promedio / $contador;
  
    
    return $promedio;
}

function promediosAltos($vector){

    $res = 0;
    $promedio = 0;
    $contador = 0;
    $contador2 = 0;
    foreach ($vector as $nombre => $calificacion) {
        $contador = $contador + 1;
      
        foreach($calificacion as $calif){
            $res = $res + $calif;
            $contador2 +=1;
        }
        $res = $res/$contador2;
        
        $contador2 = 0;
        $promedio = $promedio + $res;
        $res = 0;
        
}
    $promedio = $promedio / $contador;
  
     $promedioTotal = $promedio;

     $res = 0;
     $promedio = 0;
     $contador = 0;
     $contador2 = 0;
     foreach ($vector as $nombre => $calificacion) {
         $contador = $contador + 1;
         foreach($calificacion as $calif){
             $res = $res + $calif;
             $contador2 +=1;
         }
         $res = $res/$contador2;
         
         if ($promedioTotal <= $res) {
            echo "<br>";
            echo $nombre;
        }
         $contador2 = 0;
         $promedio = $promedio + $res;
         $res = 0;
         
 }


}

//vector
$vectorPromedios = array(
    "Alumno 1" => array("Español"=> 70, "Matemáticas"=> 80,"Ciencias"=> 85,"Historia"=> 90,"Sociales"=> 95,"Deportes"=> 100),
    
    "Alumno 2" => array("Español"=> 70, "Matemáticas"=> 80,"Ciencias"=> 85,"Historia"=> 90,"Sociales"=> 95,"Deportes"=> 100),
    
    "Alumno 3" =>array("Español"=> 70, "Matemáticas"=> 80,"Ciencias"=> 85,"Historia"=> 90,"Sociales"=> 95,"Deportes"=> 100),
    
    "Alumno 4" => array("Español"=> 70, "Matemáticas"=> 80,"Ciencias"=> 90,"Historia"=> 90,"Sociales"=> 95,"Deportes"=> 100),
    
    "Alumno 5" => array("Español"=> 70, "Matemáticas"=> 80,"Ciencias"=> 85,"Historia"=> 90,"Sociales"=> 95,"Deportes"=> 100),
    
    "Alumno 6" => array("Español"=> 70, "Matemáticas"=> 80,"Ciencias"=> 85,"Historia"=> 90,"Sociales"=> 95,"Deportes"=> 100),
    
    "Alumno 7" => array("Español"=> 70, "Matemáticas"=> 80,"Ciencias"=> 85,"Historia"=> 90,"Sociales"=> 95,"Deportes"=> 100),
    
    "Alumno 8" =>array("Español"=> 70, "Matemáticas"=> 80,"Ciencias"=> 85,"Historia"=> 90,"Sociales"=> 95,"Deportes"=> 100),
    
    "Alumno 9" => array("Español"=> 70,"Matemáticas"=> 80,"Ciencias"=> 85,"Historia"=> 90,"Sociales"=> 95,"Deportes"=> 100),
    
    "Alumno 10" => array("Español"=> 90, "Matemáticas"=> 80,"Ciencias"=> 85,"Historia"=> 90,"Sociales"=> 95,"Deportes"=> 100),
);

    echo '<br>'.'Promedio general: ' . promedio1($vectorPromedios) . '<br>';
    echo '<br>'.'Promedio por alumno: ' ;  promedio2($vectorPromedios);
    echo '<br>' ;
    echo '<br>'.'Promedio Por materia: ';
    promedio3($vectorPromedios);
    echo '<br>' ;
    echo '<br>'.'Mejor promedio: ' . mejorProm($vectorPromedios);
    echo '<br>' ;
    echo '<br> Alumnos encima de el promedio' ;
    promediosAltos($vectorPromedios);
    impresion($vectorPromedios);
    
?>
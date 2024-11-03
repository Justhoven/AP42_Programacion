<!DOCTYPE html>
<html>
<head>
    <title>Actividad 2</title>
</head>
<body>
    <h1>Funciones array</h1>
<?php

$array = [3, 5, 6, 3, 6, 7, 5];

for($i=0; $i<count($array); $i++){
    for($j=$i+1; $j<count($array); $j++){
        if($array[$i] == $array[$j]){
            echo "El número " . $array[$i] . " en la posición $i ";
            echo "se repite en en la posición " . $j . "<br>";
        }
    }
}

?>

</body>
</html>
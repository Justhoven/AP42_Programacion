<!DOCTYPE html>
<html>
<head>
    <title>Actividad 4</title>
</head>
<body>
    <h1>Funciones array</h1>
<?php

$array = [1, 2, 3, 4, 5, 6, 7, 8];
$numeros = [
    [],
    []
];

for($i=0; $i<count($array); $i++){
    if($array[$i]%2 == 0){
        array_push($numeros[0], $array[$i]);            
    } else{
        array_push($numeros[1], $array[$i]);
    }
}


var_dump($numeros);


?>

</body>
</html>
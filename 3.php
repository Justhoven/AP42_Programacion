<!DOCTYPE html>
<html>
<head>
    <title>Actividad 3</title>
</head>
<body>
    <h1>Funciones array</h1>
<?php

$array = [1, 2, 3, 4, 5, 6, 7, 8];
$pares = [];
$impares = [];

for($i=0; $i<count($array); $i++){
    if($array[$i]%2 == 0){
        $pares[] = $array[$i];
    } else {
        $impares[] = $array[$i];
    }
}

echo "Los números pares son:<br>";
foreach($pares as $value){
    echo $value . "<br>";
}
echo "<br>Los números impares son:<br>";
foreach($impares as $value){
    echo $value . "<br>";
}
?>

</body>
</html>
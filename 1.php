<!DOCTYPE html>
<html>
<head>
    <title>Actividad 1</title>
</head>
<body>
    <h1>Funciones array</h1>
<?php

$array = [1, 2, 3, 4, 5];
$invertido = [];

var_dump($array);

$invertido = array_reverse($array);

var_dump($invertido);

?>

</body>
</html>
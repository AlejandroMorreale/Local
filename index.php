<?php
require_once('Rectangulo.php'); 
require_once('Triangulo.php'); 

$MiRectangulo = new Rectangulo(2,2);
$MiTriangulo = new Triangulo(5,8);
//echo  $MiRectangulo -> ladoDos;

echo $MiRectangulo -> CalcularDatos();

echo $MiTriangulo -> CalcularDatos();

echo $MiTriangulo -> ToString();
?>	
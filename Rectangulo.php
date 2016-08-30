<?php
require_once('C:\xampp\htdocs\ClaseDos\FigurasGeometricas.php'); 

  class Rectangulo {
	private $ladoUno;
	private $ladoDos;

	function Rectangulo($lado1,$lado2){
		 $this->ladoUno = $lado1;
		 $this->ladoDos = $lado2;
	}

	function CalcularDatos(){    	
     	return $this->ladoUno * $this->ladoDos;    	
	}
}
?>
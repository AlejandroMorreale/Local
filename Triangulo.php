<?php
	require_once('C:\xampp\htdocs\ClaseDos\FigurasGeometricas.php'); 

	class Triangulo
	{
		private $altura;
		private $base;

		function Triangulo($altura,$base){
			$this->altura = $altura;
			$this->base = $base; 
		}	

		function CalcularDatos(){
			return ($this->base * $this->altura)/2;
		}

		function Dibujar(){
			
		}
	}
?>
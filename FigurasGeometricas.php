<?php
abstract class FigurasGeometricas {
  
    protected $_color; 
    protected $_perimetro;
    protected $_superficie;

    function FigurasGeometricas() { }

    public function GetColor() {
        return $this->_color;
    }
    public function SetColor($color) {
        $this->_color = $color;
    }
   
    abstract public function Dibujar();
    abstract protected function CalcularDatos();
    public function ToString(){}
}
?>
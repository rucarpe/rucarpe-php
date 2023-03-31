<?php

/*  
# Definir una clase y sus métodos
# 
*/
class Coche {

    // Propiedades de la clase Coche
    public $color = "Rojo";
    public $marca = "Audi";
    public $modelo = "A3";
    public $velocidad_max = 190;
    public $hp = 105;
    public $puertas = 5;

    // Métodos (Funciones) de la clase Coche
    public function getColor() {
        // Acceder a la propiedad indicada $this
        return $thist->color;
    }
    // Cambiar los métodos
    public function setColor($color) {
        // Le cambiamos el color a la popiedad de la clase Coche
        $this->color = "Negro";
    }
}

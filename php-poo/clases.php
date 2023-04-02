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

    // DEFINIR (CREAR) MÉTODOS (Funciones) de la clase Coche
    public function getColor() {
        // Acceder a la propiedad indicada $this
        return $this->color;
    }
    // Cambiar valores a los métodos
    // Es necesario pasarle el parámetro
            // ## set no se suele usar en la difinición de una clase
    public function setColor($color) {
        // Le cambiamos el color a la popiedad de la clase Coche
        $this->color = "Negro";
    }

    // Función public function atributo (parametro-variable){}
    public function getModelo() {
        return $this->modelo = "A4";
    }

    // MÉTODO PARA ACELERAR EL COCHE
    public function acelerar() {
        $this->velocidad_max++;
    }
    // MÉTODO PARA FRENAR EL COCHE
    public function frenar() {
        $this->velocidad_max--;
    }

    public function getVelocidad_max() {
        return $this->velocidad_max;
    }

} // Fin clase Coche

// Crear objeto / Instanciar la clase
$coche = new Coche();
$coche2 = new Coche();

// Acceder a los métodos de la clase de forma separada de cada objeto.
echo $coche->getVelocidad_max();
echo "<br>";
// 
$coche ->acelerar();
$coche ->acelerar();
$coche ->acelerar();
$coche ->acelerar();
$coche ->acelerar();
echo "<br>";
echo $coche->getVelocidad_max();
echo "<br>";
var_dump($coche);
echo "<br>";
var_dump($coche2);
?>
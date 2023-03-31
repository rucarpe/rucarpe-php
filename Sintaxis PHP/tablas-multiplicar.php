<?php

if (isset($_GET['numero'])){
    // Para cambiar el tipo de dato recibido por GET usaremos lo que se llama Castear (int) indicando el tipo de dato. - Casting.
        $numero = (int)$_GET['numero'];
    } else{
        $numero = 1;
    }

    //Tabla de multiplicar con bucle FOR
    for($tabla =1; $tabla <=10; $tabla++) {
      echo ("$numero x $tabla =".($numero*$tabla)."<br>");
    }
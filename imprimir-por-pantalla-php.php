<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf8">
        <title>Imprimir por pantalla con PHP</title>

    </head>

    <body>
        <h1>Imprimir por pantalla con PHP</h1>
        <p>Php es un lenguaje de programación para trabajar en del lado del servidor,
            así que el código que escribamos no se mostrará por pantalla.
            El navegador lo interpretará y lo devolverá en forma de HTML si las instrucciones así lo indican.</p>
    
        <p>También documentaremos nuestro código con comentarios que no serán ejecutados por el navegador.
            Lo haremos con de la siguiente forma: /**/, #, o //
        </p>
    <?php
        echo "Esto es un texto impreso con un echo de PHP <hr>";

        echo '<h2>Mi lista de juegos favoritos en 2021</h2>';
        echo 
        '<ul>
            <li>Escape From Tarkov</li>
            <li>Age Of Empires II</li>
        </ul>';
        /*Se puede imprimir código HTML dentro de un echo con comillas dobles y simples*/


        /* Se concatenan elementos con un punto */
        echo 'Texto 1 '.' texto 2 concatenado'.'<br>';
    ?>
    </body>

    <!-- Podemos usar un atajo para abrir y cerrar PHP e imprimir un echo.
    Vamos a crear una variable y a concatenarla con un echo de la siguiente forma -->
    <?php 
    $variable = '200';
    ?>
    <hr>
    
    <?='Aquí llamamos a la siguiente variable para indicar que su valor es '.$variable?>
<html>
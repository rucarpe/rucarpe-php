<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos de datos en PHP</title>
</head>
<body>
    <section class="main-section">
        <h1>Tipos de datos en PHP</h1>
        <article class="first-article">
            <ul>
                <li>Números enteros/int/integer -> Son números enteros, sin decimales.</li>
                <li>Números de coma flotante/decimales/float/double -> Son los números con decimales.</li>
                <li>Cadenas de texto/strings.</li>
                <li>Valor booleano/1-0/true or false.</li>
                <li>Array/colección de datos.</li>
                <li>Objetos -> Son un conjunto de datos y funciones independientes.</li>
            </ul>
            <p> Para conocer el tipo de dato que tiene una variable se usa la función:
                echo gettype($variable);</p>

            <p>Para "debugear" variables usamos la función:
                var_dump($variable);
            </p>
            <p>*Notas en los comentarios del código. Click derecho y consulta el código fuente. </p>
            <!-- El servidor usará la herramienta que tenga para debugear y mostrará dónde se encuentra declarada
            la variable, el contenido, la longitud de carácteres... En el caso de Wamp Server utiliza la
            herramienta xdebug -->
        </article>
    </section>

    <p>- Declaramos la variable $nombre y la llamamos con un var_dump, el resultado es el siguiente.</p>
    
        <?php
            $nombre = "Rubén";
            var_dump($nombre); 
        ?>
    <p>- Dentro de una variable de tipo string con comillas dobles "", podemos imprimir por pantalla el simbolo
        $ de declaración de una variable. Incluso mostrar el valor de otra variable. Sin embargo, si usaramos
        comillas simples '', no podríamos mostrar ni el simbolo $ ni el valor de otra variable. Para ello,
        ya deberiamos usar la concatenación. Dependerá de las necesidades usar un método u otro.
    </p>
    <p>- Para poder imprimir una comilla doble dentro de un string de PHP se ha de usar \" <br>
        Al colocar la barra php no lo interpreta como instrucción.
    </p>
    
</body>
</html>
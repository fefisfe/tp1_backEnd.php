<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabajo Practico 1 - Back End - PHP</title>
</head>
<body>
    <h1>1. Imprima por pantalla: “Hola mundo”.</h1>
    <?php
    echo "<br>";
    echo "Hola Mundo";
    echo "<br>";
    ?>
    <h1>2. Cargue en una variable la cadena de caracteres “Hola mundo” y
         luego la imprima por pantalla
    </h1>

    <?php

    echo "<br>";
    $saludo = "Hola Mundo";
    echo $saludo;
    echo "<br>";

    ?>

    <h1>3. Crear dos variables enteras y mostrar por pantalla, la suma, la resta, 
        la multiplicación, la división
        entera y el resto de la división entera.
    </h1>

    <?php

      echo "<br>";
      $d = 15;
      $e = 5;
      echo "<br>";
      $suma = $d + $e;
      echo "<br>";
      echo $suma;
      echo "<br>";
      $resta = $d - $e;
      echo "<br>";
      echo $resta;
      echo "<br>";
      $multiplicacion = $d * $e;
      echo "<br>";
      echo $multiplicacion;
      echo "<br>";
      $division = $d / $e;
      echo "<br>";
      echo $division;
      echo "<br>";
      $resto = $d % $e;
      echo "<br>";
      echo $resto;

    ?>

    <h1>4. Realizar la transformación de grados Celsius a Fahrenheit, para el valor 20°C y luego lo imprima por
        pantalla.
    </h1>

    <?php
    
     echo "<br>";
    $celcius = 20;
    echo ($celcius * 9/5) + 32;
    echo "<br>";

    ?>

<h1>5. Implementar algoritmos que permitan:</h1>

<h3>a- Calcular el perímetro y el área de un rectángulo, dado que su base es 18cm y su altura 12cm.</h3>

<?php

 echo "<br>";
 $base = 18;
 $altura = 12;
 echo $perimetro =  2 * (18 + 12);
 echo "<br>";

?>

<h3>b- Calcular el perímetro y el área de un círculo dado que su radio es de 30cm.</h3>

<?php

echo "<br>";
$radio = 3.14 * (20 * 20);
echo $radio;
echo "<br>";

?>

</body>
</html>
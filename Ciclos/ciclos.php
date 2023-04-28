
<?php

//                           Ejercicio N-1

/*
for ($i = 1; $i <= 10; $i++) {
    echo $i . " ";
  }
*/

//                           Ejercicio N-2

/*
$suma = 0;


for ($i = 1; $i <= 20; $i++) {
  $suma += $i;
}


if ($suma == 210) {
  echo "210 como esperado";
} else {
  echo "por?" . $suma;
}

*/


//                           Ejercicio N-3

/*
$n = 10;

$cero = 0;
$uno = 1;


$suma = $cero + $uno;
echo "$cero $uno ";
for ($i = 2; $i < $n; $i++) {
  $otro = $cero + $uno;
  $suma += $otro;
  echo "$otro ";
  list($cero, $uno) = array($uno, $otro);
}

echo "La suma de los primeros $n términos es: $suma";
*/




//                           Ejercicio N-4

/*
$entre = array();

for ($i = 0; $i < 10; $i++) {
  echo "Ingresa el número ", ($i+1), ": ";
  $entre[$i] = (int)readline();
}

$suma = array_sum($entre);


$promedio = $suma / count($entre);


echo "La suma: ", $suma, "\n";
echo "El promedio: ", $promedio;
*/



//                           Ejercicio N-5


/*
echo "Ingrese número entero: ";
$num = (int)readline();


echo "Tabla de multiplicar de ", $num, ":\n";
for ($i = 1; $i <= 10; $i++) {
  echo $num, " x ", $i, " = ", $num*$i, "\n";
}
*/


//                           Ejercicio N-6



// de 1 a 5, lo mismo pero al revez, for anidado, /n que cambie de linea, no olvidar el contador, 1-for controla el número de filas, 2-for asteriscos por fila.

/*
for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= $i; $j++) {
      echo "*";
    }
    echo "\n";
  }
  
  // de 4 a 1
  for ($i = 4; $i >= 1; $i--) {
    for ($j = 1; $j <= $i; $j++) {
      echo "*";
    }
    echo "\n";
  }

*/



/*
echo "Ingresa un número entero: ";
$numero = (int)readline();


echo "Tabla de multiplicar de ", $numero, ":\n";
for ($i = 1; $i <= 10; $i++) {
  echo $numero, " x ", $i, " = ", $numero*$i, "\n";
}
*/

?>
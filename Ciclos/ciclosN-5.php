<?php

//                           Ejercicio N-5


echo "Ingrese número entero: ";
$num = (int)readline();
echo "Tabla de multiplicar de ", $num, ":\n";
for ($i = 1; $i <= 10; $i++) {
  echo $num, " x ", $i, " = ", $num*$i, "\n";
}



?>
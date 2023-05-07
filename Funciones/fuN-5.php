<!DOCTYPE html>
<html>
<head>
    <title>SM</title>

    <!-- cree una funcion que lea el metodo fibonacci hasta el numero de la escala que un usuario escriba y 
    al llegar a ese numeor pare
    -->

</head>
<body>
    <h3>entre un numero de la escala</h3>

    <form method="post" action="">

        <label for="num">Número:</label>
        <input type="number" name="num" id="num" required><br>


        <input type="submit" value="Escala">
    </form>



    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $n = $_POST["num"];
        

        function fibonacci($n) {
            $Seq = array(0, 1);  // primeros dos números :)
        
/* Explicacion de esta cosa que esta re XD no olvidar: count($Seq) devuelve la cantidad de elementos en el array $Seq.
$Seq[count($Seq) - 1] accede al último elemento de la secuencia de Fibonacci.
$Seq[count($Seq) - 2] accede al penúltimo elemento de la secuencia de Fibonacci.
$elOtro es la suma del último elemento y el penúltimo elemento de la secuencia de Fibonacci.
$Seq[] = $nextNumber agrega el nuevo número al final del array $Seq, ampliando así la secuencia de Fibonacci.
El bucle while se repite hasta que el último número de la secuencia sea menor que el 
número especificado $n
*/
            while ($Seq[count($Seq) - 1] < $n) {
                $elOtro = $Seq[count($Seq) - 1] + $Seq[count($Seq) - 2];
                $Seq[] = $elOtro;
            }
        
            // Eliminar el último número si excede del número
            if ($Seq[count($Seq) - 1] > $n) {
                array_pop($Seq);
            }
        
            return $Seq;
        }

                echo "Secuencia de Fibonacci hasta el número $n:<br>";

// foreach recorre todos los valores que la  funcion le tira y almacena estos numeritos en $n hasta que se acabe el bucle
            foreach (fibonacci($n) as $n) {
                echo $n . "<br>";
        }

    }

    ?>
</body>
</html>
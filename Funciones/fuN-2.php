<!DOCTYPE html>
<html>
<head>
    <title>SM</title>

    <!-- Una  función  que  reciba  cinco  números  enteros  como argumentos y devuelva el resultado de sumar 
    los cinco números. Asigna el resultado de una invocación a la función con los números 2, 5, 1, 8, 10 a una 
    variable de nombre $temporaly muestra el resultado.
    -->

</head>
<body>
    <h1>entre números</h1>

    <!-- El atributo method se establece en "post",  lo que indica que los datos del formulario se enviarán utilizando 
    el método POST al procesar el formulario en el servidor. El atributo action está vacío el formulario se enviará a
     la pagina osea si misma.-->

    <form method="post" action="">

    <!-- for para llamarlo por el id, required para que los obligen-->
        <label for="num1">Número 1:</label>
        <input type="number" name="num1" id="num1" required><br>
        
        <label for="num2">Número 2:</label>
        <input type="number" name="num2" id="num2" required><br>
        
        <label for="num3">Número 3:</label>
        <input type="number" name="num3" id="num3" required><br>
        
        <label for="num4">Número 4:</label>
        <input type="number" name="num4" id="num4" required><br>
        
        <label for="num5">Número 5:</label>
        <input type="number" name="num5" id="num5" required><br>
        
        <!--value para lo de adentro del input-->
        <input type="submit" value="Calcular suma">
    </form>



    <?php

// el if se asugura  ($_SERVER["REQUEST_METHOD"] == "POST") que el formulario sea igual a post para luego hacer lo del if
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

//  obtiene el valor del campo de entrada con el nombre "num1" del arreglo $_POST y lo asigna a la variable $num. 
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $num3 = $_POST["num3"];
        $num4 = $_POST["num4"];
        $num5 = $_POST["num5"];
        
// Definir la función para sumar los cinco números
    function num($num1, $num2, $num3, $num4, $num5) {
        $suma = $num1 + $num2 + $num3 + $num4 + $num5;
        return $suma;
    }

        echo "la suma de sus numeros puestos: " . num($num1, $num2, $num3, $num4, $num5) . "<br>";
        

// Asignar el resultado de la suma a la variable $temporal
        $temporal = num($num1, $num2, $num3, $num4, $num5) + 2 + 5 + 1 + 8 + 10;

// Mostrar el resultado
        echo "El resultado de la suma grande es: $temporal";

    }

    ?>
</body>
</html>
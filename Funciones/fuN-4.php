<!DOCTYPE html>
<html>
<head>
    <title>SM</title>

    <!-- Diseñar una función que muestre sí un número es par o impar.
    -->

</head>
<body>

    <form method="post" action="">

    <!-- for para llamarlo por el id, required para que los obligen-->
        <label for="num">Número:</label>
        <input type="number" name="num" id="num" required><br>
        
        <!--value para lo de adentro del input-->
        <input type="submit" value="que es?">
    </form>



    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $numero = $_POST["num"];
        
        function verificarParImpar($numero) {
            if ($numero % 2 == 0) {
                echo "El número $numero es par.";
            } else {
                echo "El número $numero es impar.";
            }
        }

        verificarParImpar($numero);
    }
    ?>
</body>
</html>
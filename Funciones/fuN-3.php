<!DOCTYPE html>
<html>
<head>
    <title>SM</title>

    <!-- Una función que reciba como parámetros el valor del radio de la base y la altura  de  un  
    cilindro  y  devuelva  el  volumen  del  cilindro,  teniendo  en cuenta  que  el  volumen  de  
    un  cilindro  se  calcula  como  Volumen  = númeroPi   *radio   *   radio   *   Altura,siendo   
    númeroPi   =   3.1416 aproximadamenteo usa la constante de PI.
    -->

</head>
<body>

    <form method="post" action="">

    <!-- for para llamarlo por el id, required para que los obligen-->
        <label for="radio">radio:</label>
        <input type="number" name="radio" id="radio" required><br>
        
        <label for="alt">altura:</label>
        <input type="number" name="alt" id="alt" required><br>
        
    <!--value para lo de adentro del input-->
        <input type="submit" value="Calcular">
    </form>



    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $radio = $_POST["radio"];
        $altura = $_POST["alt"];
        

    function vol($radio, $altura) {
        $numeroPi = pi();
// pow = potencia
        $volumen = $numeroPi * pow($radio, 2) * $altura;
        return $volumen;
    }

        echo "El volumen del cilindro con radio $radio y altura $altura es: " . vol($radio, $altura);

    }

    ?>
</body>
</html>
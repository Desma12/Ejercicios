<!DOCTYPE html>
<html>
<head>
    <title>SM</title>

    <!-- Desarrollar  una  función  que  calcule  el  IVA  aplicable  a  un  producto,  la función 
    debe recibir el total del producto y el IVA para aplicar, sino no se pasa un IVA, por defecto 
    deberá tener 10%.
    -->

</head>
<body>

    <form method="post" action="">

        <label for="num1">precio producto</label>
        <input type="number" name="pro" id="pro" required><br>
        
        <label for="IVA">IVA</label>
        <input type="number" name="IVA" id="IVA" required><br>
        
        

        <input type="submit" value="Calcular suma">
    </form>



    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $pro = $_POST["pro"];
        $IVA = $_POST["IVA"];
    
    function calcularIVA($pro, $IVA = 10) {
        $ivaAplicable = ($pro * $IVA) / 100;
        return $ivaAplicable;
    }

    echo "El precio del producto es: $pro pesos<br>";
    echo "El IVA aplicable es: $IVA%<br>";

// no se debe poner el = 10 al llamar la funcion o si no esta re mal ajsjas
    echo "El precio total con IVA es: " . ($pro + calcularIVA($pro, $IVA)) . " pesos";
}



    ?>
</body>
</html>
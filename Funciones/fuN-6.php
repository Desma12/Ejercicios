<!DOCTYPE html>
<html>
<head>
    <title>SM</title>

    <!-- Crear  una  funciónque  retorne  el  nombre  del  mes  a  partir  de  un número entre 1 y 12.
    -->

</head>
<body>

    <form method="post" action="">

    <!-- for para llamarlo por el id, required para que los obligen-->
        <label for="num">numero del mes</label>
        <input type="num" name="num" id="num" required><br>  

        <input type="submit" value="Calcular suma">
    </form>



    <?php


    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $num = $_POST["num"];

        function mes($num) {
            $nombreMes = "";
            
            switch ($num) {
                case 1:
                    $nombreMes = "Enero";
                    break;
                case 2:
                    $nombreMes = "Febrero";
                    break;
                case 3:
                    $nombreMes = "Marzo";
                    break;
                case 4:
                    $nombreMes = "Abril";
                    break;
                case 5:
                    $nombreMes = "Mayo";
                    break;
                case 6:
                    $nombreMes = "Junio";
                    break;
                case 7:
                    $nombreMes = "Julio";
                    break;
                case 8:
                    $nombreMes = "Agosto";
                    break;
                case 9:
                    $nombreMes = "Septiembre";
                    break;
                case 10:
                    $nombreMes = "Octubre";
                    break;
                case 11:
                    $nombreMes = "Noviembre";
                    break;
                case 12:
                    $nombreMes = "Diciembre";
                    break;
                default:
                    $nombreMes = "Mes inválido";
                    break;
            }
            
            return $nombreMes;
        }

        echo "El número $num corresponde al mes de: " . mes($num);

    }

    ?>
</body>
</html>
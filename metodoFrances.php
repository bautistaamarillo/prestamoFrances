<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de Amortización - Resultado</title>
</head>
<body>
    <h1>Tabla de Amortización - Método Francés</h1>
    <?php
    $capitalTotal=$_POST["capitalTotal"];
    $tasaInteres=$_POST["tasaInteres"] / 100; //Obtengo directamente el porcentaje;
    $cantidadCuotas=$_POST["cantidadCuotas"];
    $periodicidad=$_POST["periodicidad"];
 
    ?>
</body>
</html>



<!-- 
calcular un préstamo en php con reglamento frances para mañana
datos de entrada el capital, tasa de interés y cantidad de cuotas y periodicidad
capital 1000 intereses 20% cuotas 12 periodo mensual
 *tabla de amortización es lo que tengo que mostrar*
 TNA = taza nominal anual
 método francés proporción decreciente en el capital y ascendente en el interés


 -->
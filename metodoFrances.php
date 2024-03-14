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
    $capital = $_POST['capitalTotal'];
    $interes = $_POST['tasaInteres'] / 100; // PASO A PORCENTAJE EL INTERES
    $cuotas = $_POST['cantidadCuotas'];

 // CALCULO LA CUOTA FIJA, QUE LUEGO COMPARO CON EL INTERES PAGO Y EL CAPITAL PAGO (DEBE SER IGUAL) 
    $cuota_fija = $capital * ($interes / (1 - pow(1 + $interes, -$cuotas)));

 //INICIALIZO EL SALDO PENDIENTE, CONCIDERO EL CAPITAL TOTAL
    $saldo_pendiente = $capital;

    ///////////////////////////////////////////////////////
    echo "<table border='1'>
            <tr>
                <th>Cuota</th>
                <th>Capital Pendiente</th>
                <th>Dinero Pagado</th>
                <th>Interés</th>
                <th>Capital</th>
            </tr>";

            //LOGICA A RESOLVER

        echo "<tr>
                <td>$numeroCuota</td>
                <td>$saldoPendiente</td>
                <td>$cuotaFija</td>
                <td>$interesPago</td>
                <td>$capitalPago</td>
            </tr>";
    
    echo "</table>";
     ///////////////////////////////////////////////////////
    ?>
</body>
</html>


<!-- 
calcular un préstamo en php con reglamento frances para mañana
datos de entrada el capital, tasa de interés y cantidad de cuotas y periodicidad
capital 1000 intereses 20% cuotas 12 periodo mensual
 *tabla de amortización es lo que tengo que mostrar*
 TNA = taza nominal anual

 -->
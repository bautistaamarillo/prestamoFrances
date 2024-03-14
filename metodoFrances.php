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
    $interes = $_POST['tasaInteres']/100; 
    $cuotas = $_POST['cantidadCuotas'];

    // $totalInteres = $interes * 100 / $capital;

 // CALCULO LA CUOTA FIJA, CONSIDERANDO LA SIGUIENTE FORMULA 
 // C = V / (1-(1+i))^N)/i) donde C es la cuota, V el capital total, N el numero de cuotas y i el interes.
    // $cuota_fija = (($capital / (1-(1+$interes))**$cuotas)/$totalInteres);


    // $cuota_fija = $capital * ($interes/$cuotas)/1-pow(1+($interes/$cuotas),(-$cuotas));

    $cuota_fija = $capital * (($interes/$cuotas)/(1-pow(1+($interes/$cuotas),(-$cuotas))));

 //INICIALIZO EL SALDO PENDIENTE, CONCIDERO EL CAPITAL TOTAL
    $saldo_pendiente = $capital;

    
    ///////////////////////////////////////////////////////
    echo "<table border='1'>
            <tr>
                <th>Nº Cuota</th>
                <th>Cuota Fija</th>
                <th>Capital Pendiente</th>
                <th>Dinero Pagado</th>
                <th>Interés</th>
                <th>Capital</th>
            </tr>";

            echo "<tr>
                <td>0</td>
                <td>$cuota_fija</td>
                <td>$saldo_pendiente</td> 
                <td>0</td>
                <td>0</td>
                <td>0</td>
            </tr>";

    for ($i = 1; $i <= $cuotas; $i++) {
        $auxIntereses = $interes * $cuotas;
        $interesesPagos = $deudaActual * $auxIntereses;
        $amortizacion = $cuota_fija - $interesesPagos;
        $deudaActual = $capital - $amortizacion;

        $saldo_pendiente = $saldo_pendiente - $cuota_fija; //FALTANTE PARA TERMINAR DE ACREDITAR


        echo "<tr>
                <td>$i</td>
                <td>$cuota_fija</td>
                <td>$deudaActual</td> 
                <td>$cuota_fija</td>
                <td>$interesesPagos</td>
                <td>$amortizacion</td>
            </tr>";
    }
    
    echo "</table>";
    
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
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

 // CALCULO LA CUOTA FIJA, CONSIDERANDO LA FORMULA DE AMORTIZACION.

    
    // $cuotaAux = $capital * (($interes/$cuotas)/(1-pow(1+($interes/$cuotas),(-$cuotas))));
    // $cuota_fija = round($cuotaAux); //REDONDEO EL NUMERO


    $cuotaDeudor = $capital*(($interes)/ ( 1-pow((1+$interes) , ($cuotas)*-1) )); // Calcular Amortizacion
    $cuotaDeudor = round($cuotaDeudor);
    //INICIALIZO EL SALDO PENDIENTE, CONCIDERO EL CAPITAL TOTAL
    $saldo_inicial = $capital;
    $inicioOperacion = $capital - $cuotaDeudor;
    $inicioOperacion = round( $inicioOperacion);


    // var_dump($saldo_inicial);
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
                <td>$cuotaDeudor</td>
                <td>$capital</td> 
                <td>0</td>
                <td>0</td>
                <td>0</td>
            </tr>";
    for ($i = 1; $i <= $cuotas; $i++) {

        $intereses = $saldo_inicial * $interes;
        $intereses = round($intereses);

        $abonoActual = $cuotaDeudor - $intereses;
        $abonoActual = round($abonoActual);

        $saldoRestante = $saldo_inicial - $abonoActual;
        $saldoRestante = round($saldoRestante);


        echo "<tr>
                <td>$i</td>
                <td>$cuotaDeudor</td>
                <td>$saldo_inicial</td> 
                <td>$abonoActual</td>
                <td>$intereses</td>
                <td>$saldoRestante</td>
            </tr>";
            $saldo_inicial = $saldoRestante;
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
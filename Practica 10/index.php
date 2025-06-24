<?php
    // Salario bruto = horas * pago por hora
    // Descuento = Salario bruto * %/ 100
    // Salario neto = Salario bruto - Descuento

    //Jefe $450
    //Administrativo $350
    //Operario $250
    //Practicante $150

    $empleado = $_POST['empleado'];
    $horas = $_POST['horas'];
    $categoria = $_POST['categoria'];

    if ($categoria == 'jefe') {
        $pagoPorHora = 450;
        $descuento = 0.10; // 10%
    } elseif ($categoria == 'administrativo') {
        $pagoPorHora = 350;
        $descuento = 0.12; // 12%
    } elseif ($categoria == 'operario') {
        $pagoPorHora = 250;
        $descuento = 0.15; // 15%
    } elseif ($categoria == 'practicante') {
        $pagoPorHora = 150;
        $descuento = 0.20; // 20%
    } else {
        echo "Empleado no reconocido.";
        exit;
    }

    // Calcular salario bruto, descuento y salario neto
    $salarioBruto = $horas * $pagoPorHora;
    $descuento = $salarioBruto * $descuento;
    $salarioNeto = $salarioBruto - $descuento;
    
    // Mostrar resultados
    echo "<h1>Resultados del cálculo de salario</h1>";
    echo "<p>Empleado: $empleado</p>";
    echo "<p>Salario Bruto: $" . number_format($salarioBruto, 2) . "</p>";
    echo "<p>Descuento: $" . number_format($descuento, 2) . "</p>";
    echo "<p>Salario Neto: $" . number_format($salarioNeto, 2) . "</p>";

   
?>
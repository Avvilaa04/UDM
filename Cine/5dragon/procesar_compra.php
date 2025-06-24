<?php
$nombre = $_POST['nombre']; 
$edad = $_POST['edad'];
$tipo_funcion = $_POST['tipo_funcion'];
$cantidad_boletos = $_POST['cantidad_boletos'];

// El checkbox 'estudiante_credencial' solo se envía si está marcado.
// Si no se envía, su valor será null, por lo que verificamos si existe.
$es_estudiante_con_credencial = isset($_POST['estudiante_credencial']) && $_POST['estudiante_credencial'] === 'si';


// Definir el precio base por tipo de función
$precio_base_boleto = 0;
switch ($tipo_funcion) {
    case '2D':
        $precio_base_boleto = 55;
        break;
    case '3D':
        $precio_base_boleto = 70;
        break;
    case 'IMAX':
        $precio_base_boleto = 90; 
        break;
    case 'VIP':
        $precio_base_boleto = 120; 
        break;
    default:
        $precio_base_boleto = 55; 
        break;
}

// Calcular el descuento basado en la edad y si es estudiante
$descuento_porcentaje = 0; 

// - Estudiante: 15% (si la edad está entre 12 y 26 y marcó el checkbox)
// - Adulto mayor (>=65): 25%
// - Niño (<12): 20%

if ($es_estudiante_con_credencial && $edad >= 12 && $edad <= 26) {
    $descuento_porcentaje = 0.15; // 15% de descuento para estudiantes
} elseif ($edad >= 65) {
    $descuento_porcentaje = 0.25; // 25% de descuento para adulto mayor
} elseif ($edad < 12) {
    $descuento_porcentaje = 0.20; // 20% de descuento para niño
}

// Calcular el precio del boleto con descuento
$precio_boleto_con_descuento = $precio_base_boleto * (1 - $descuento_porcentaje);

//  Calcular el total a pagar
$total_a_pagar = $precio_boleto_con_descuento * $cantidad_boletos;

// Mostrar los resultados al usuario
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resumen de Compra</title>
    <link rel="stylesheet" href="style.css"> <style>
        /* Estilos adicionales para esta página si es necesario */
        .summary-container {
            max-width: 800px;
            margin: 40px auto;
            padding: 30px;
            background-color: #f9f9f9;
            border-radius: 8px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            text-align: center;
        }
        .summary-container h2 {
            color: #333;
            margin-bottom: 25px;
        }
        .summary-details {
            text-align: left;
            margin: 0 auto;
            max-width: 400px;
            line-height: 1.8;
            font-size: 1.1em;
        }
        .summary-details p strong {
            display: inline-block;
            width: 150px; /* Alinea los dos puntos */
        }
        .total-price {
            margin-top: 30px;
            font-size: 1.5em;
            color: #28a745; /* Color verde para el total */
            font-weight: bold;
        }
        .back-button {
            display: inline-block;
            margin-top: 30px;
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-size: 1em;
        }
        .back-button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <header class="header">
        <nav class="navbar">
            <h1>Estelar Films</h1>
            <ul>
                <li><a href="index.html">Menú</a></li>
                <li><a href="Peliculas.html">Películas</a></li>
                <li><a href="Alimentos.html">Alimentos</a></li>
                <li><a href="acerca.html">Acerca de nosotros</a></li>
            </ul>
        </nav>
        <div class="search-container">
            <input type="text" placeholder="Buscar...">
            <button type="submit">Buscar</button>
        </div>
        <img src="/Cine/img/logo.png" alt="Logo" class="logo">
    </header>

    <main>
        <div class="summary-container">
            <h2>¡Gracias por tu compra, <?php echo $nombre; ?>!</h2>
            <div class="summary-details">
                <p>
                    <strong>Edad:</strong> 
                    <?php echo $edad; ?> años
                </p>
                <p>
                    <strong>Tipo de Función:</strong> 
                    <?php echo $tipo_funcion; ?>
                </p>
                <p>
                    <strong>Cantidad de Boletos:</strong> 
                    <?php echo $cantidad_boletos; ?>
                </p>
                <p>
                    <strong>Precio Base por Boleto:</strong> $
                    <?php echo number_format($precio_base_boleto, 2); ?>
                </p>
                
                <?php if ($descuento_porcentaje > 0): ?>
                    <p>
                        <strong>Descuento Aplicado:</strong> 
                        <?php echo ($descuento_porcentaje * 100); ?>%
                    </p>
                    <p>
                        <strong>Precio con Descuento por Boleto:</strong> $
                        <?php echo number_format($precio_boleto_con_descuento, 2); ?>
                    </p>
                <?php else: ?>
                    <p>
                        <strong>Descuento Aplicado:</strong> Ninguno
                    </p>

                <?php endif; ?>
            </div>
            <div class="total-price">
                <p><strong>Total a Pagar:</strong> $
                <?php echo number_format($total_a_pagar, 2); ?>
            </p>
            </div>
            <a href="/Cine/index.html" class="back-button">Volver a Películas</a>
        </div>
    </main>

</body>
</html>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Tabla de Multiplicar</title>
</head>
<body>
    <h2>Ingresa un número para ver sus tablas de multiplicar</h2>
    <form method="post">
        <input type="number" name="numero" required>
        <input type="submit" value="Mostrar Tabla">
    </form>

    <?php
   if($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = $_POST["numero"];

        echo "<h3>Tabla del $numero:</h3>";
        echo "<ul>";
        for ($i = 1; $i <= 10; $i++) {
            $resultado = $numero * $i;
            echo "<li>$numero x $i = $resultado</li>";
        }
        echo "</ul>";
    }
    ?>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

    <!-- Tablas de multiplicar con while -->
    <h2>Tablas de Multiplicar con While</h2>
    <form method="post">
        <input type="number" name="numero_while" required>
        <input type="submit" value="Mostrar Tabla">
    </form>
  /*<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero_while = $_POST["numero_while"];
        $i = 1;

        echo "<h3>Tabla del $numero_while:</h3>";
        while ($i <= 10) {
            echo "<p>$numero_while x $i = " . ($numero_while * $i) . "</p>";
            $i++;
        }
    }
?>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>



<!-- Tablas de multiplicar con DO WHILE -->
<h2>Tablas de Multiplicar con Do While</h2>
<form method="post">
    <input type="number" name="numero_do_while" required>
    <input type="submit" value="Mostrar Tabla">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero_do_while = $_POST["numero_do_while"];
    $i = 1;

    echo "<h3>Tabla del $numero_do_while:</h3>";
    do {
        echo "<p>$numero_do_while x $i = " . ($numero_do_while * $i) . "</p>";
        $i++;
    } while ($i <= 10);
}
?>
</body>
</html>

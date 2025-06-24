<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calificaciones</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            margin: 0;
            padding: 20px;
            box-sizing: border-box;
        }

        .Formulario {
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            margin-bottom: 20px;
        }

        .Formulario label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #333;
        }

        .Formulario input[type="text"],
        .Formulario input[type="number"],
        .Formulario select {
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .Formulario input[type="radio"] {
            margin-right: 5px;
        }

        .Formulario button {
            background-color: #007bff;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            width: 100%;
            transition: background-color 0.3s ease;
        }

        .Formulario button:hover {
            background-color: #0056b3;
        }

        .resultado {
            background-color: #e9ecef;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            margin-top: 20px;
            border-left: 5px solid #28a745;
        }

        .resultado strong {
            color: #333;
        }
    </style>
</head>
<body>
    <div class="Formulario">
        <form action="" method="post">
<!--Nombre -->           
            <label for="Nombre">Nombre de alumno: </label>
            <input type="text" name="name" id="name">
<!--Radio -->
    <label for="Genero">Genero: </label><br>
    <label>
        <input type="radio" name="Genero" value="Hombre">
        Hombre
    </label><br>
    <label>
        <input type="radio" name="Genero" value="Mujer">
        Mujer
    </label><br>
        <label>
        <input type="radio" name="Otros" value="Otros">
        Otros
    </label><br><br>

<!--Materias -->
        <label for="Materias">Materias: </label>
        <select name="Opciones" id="Opciones">
            <option value="Materias">--Elija Una materia--</option>
            <option value="Matematicas">Matematicas</option>
            <option value="Español">Español</option>
            <option value="Fisica">Fisica</option>
            <option value="programacion">Programacion</option>
        </select><br><br>

<!--Calificaciones -->
        <label for="1er Parcial">1er Parcial: </label>
        <input type="Number" name="Primer" id="Primer" placeholder="54.."><br>
        <label for="2do Parcial">2do Parcial: </label>
        <input type="Number" name="Segundo" id="Segundo"><br>
        <label for="3er Parcial">3er Parcial: </label>
        <input type="Number" name="Tercer" id="Tercer"><br>

<!--Boton -->
        <button type="submit" name="btn">Enviar</button>
        </form>
    </div>

<?php
if (isset($_POST['name']) 
&& isset($_POST['Opciones']) 
&& isset($_POST['Primer'])
&& isset($_POST['Segundo'])
&& isset($_POST['Tercer'])
&& isset($_POST['Genero'])){

    $name = $_POST['name'];
    $op = $_POST["Opciones"];
    $primer = (int)$_POST["Primer"];
    $segundo = (int)$_POST["Segundo"];
    $tercero = (int)$_POST["Tercer"];
    $genero = $_POST["Genero"];
    
    $promedio = number_format(($primer + $segundo + $tercero) / 3, 2);
    
    if($promedio <= 69){
        $status = "Reprobado";
    }else if($promedio >= 70 && $promedio <= 95 ){
        $status = "Ordinario";
    }else if($promedio >= 96){
        $status = "Exento";
    }
    
    echo '<div class="resultado">';
    echo "<strong>Resultado de Evaluacion:</strong><br><br>";
    echo "<strong>Nombre:</strong> $name<br>";
    echo "<strong>Genero:</strong> $genero<br>";
    echo "<strong>Materia:</strong> $op<br>";
    echo "<strong>Calificaciones:</strong> $primer, $segundo, $tercero<br>";
    echo "<strong>Promedio:</strong> $promedio<br>";
    echo "<strong>Estatus:</strong> $status<br>";
    echo '</div>';
}
?>
</body>
</html>
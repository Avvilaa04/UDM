<?php
    $resultado="";
    $num1=$_POST['num1'];
    $num2=$_POST['num2'];

    $operacion=$_POST['operaciones'];

    if($_SERVER["REQUEST_METHOD"]=="POST" && isset($_POST["Calcular"])){
        switch ($operacion){
        case '2':
            $resultado = $num1 + $num2;
            echo $resultado;
            break;
        case '3':
            $resultado = $num1 - $num2;
            echo $resultado;
            break;
        case '4':
            $resultado = $num1 * $num2;
            echo $resultado;
            break;
        case '5':
            if($num2 != 0){
                $resultado = $num1 / $num2;
                echo $resultado;
        }
    }
}
?>
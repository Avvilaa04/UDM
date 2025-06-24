<?php
$a = 90;
$b = 80;    
$c = 70;

$promedio = $a + $b + $c / 3;

if($promedio >= 96){
    echo "Tu calificacion es". $promedio ." y estas Excento";
}else if($promedio >=70 && $promedio <=95){
    echo "Aprobado";
}elseif($promedio <=69){
    echo "Reprobado";
}
?>
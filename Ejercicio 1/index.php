<?php
$edad = 25;
if($edad <= 13)
{
    echo "Eres un niño";
}else if($edad >= 14 && $edad <= 17)
{
    echo "Eres un adolescente";
}else if($edad >= 18 && $edad <= 25)
{
    echo "Eres un joven adulto";
}else if($edad >= 26 && $edad <= 59)
{
    echo "Eres un adulto";
}else if($edad >= 60)
{
    echo "Eres un tercera edad";
}
?>
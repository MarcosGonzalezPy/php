<?php
$valor1= $_POST['valor1'];
$valor2= $_POST['valor2'];
$operacion = $_POST['operacion'];
if($operacion=='suma'){
    echo $valor1+$valor2;
}else {
    echo $valor1-$valor2;
}
?>
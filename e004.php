<?php
define("Hola", "Super hola");
define('Mundo', 'Super mundo');
define("numero", 20);

echo Hola;
/** Error porque la clave del define es case sensitive **/
//echo hola; 
echo "<br>".Mundo;
echo "<br>".numero;
?>
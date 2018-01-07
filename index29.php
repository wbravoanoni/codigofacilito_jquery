<?php



$arreglo= array(
"nombre"    => $_GET["nombre"],
"apellido1" => $_GET["apellido1"],
"apellido2" => $_GET["apellido2"]
);

echo json_encode($arreglo);




?>
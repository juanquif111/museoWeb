<?php

require "../class/Datos.php";
require "../class/conectar.php";

header('Access-Control-Allow-Origin: *');
$json = file_get_contents("php://input");
$json = json_decode($json);

$bd = new Conectar();
$sql = "insert into persona(CC,tipoID,nombre,apellido,telefono,email,fecnac) "
        . "values (?,?,?,?,?,?,?);";

$conn = $bd->getMysqli();
$smtp = $conn->prepare($sql);
$smtp->bind_param("sssssss", $json->numero, $json->tipo, $json->nombre,$json->apellido, $json->telefono, $json->correo, $json->fecha);

$res[] = Array();
if ($smtp->execute()) {
    $res["success"] = "ok";
} else {
    $res["success"] = "no";
}

$smtp->close();
$conn->close();
echo json_encode($res);




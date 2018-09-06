<?php

require "../class/Datos.php";
require "../class/conectar.php";

header('Access-Control-Allow-Origin: *');
$json = file_get_contents("php://input");
$json = json_decode($json);

$bd = new Conectar();
$sql = "update persona set CC = ?,tipoID=?,nombre=?,apellido=?,telefono=?,email=?,fecnac=? where ID=?";
$conn = $bd->getMysqli();
$smtp = $conn->prepare($sql);
$smtp->bind_param("sssssssi", $json->numero, $json->tipo, $json->nombre,$json->apellido, $json->telefono, $json->correo, $json->fecha,$json->ID);

$res[] = Array();
if ($smtp->execute()) {
    $res["success"] = "ok";
} else {
    $res["success"] = "no";
}

$smtp->close();
$conn->close();
echo json_encode($res);



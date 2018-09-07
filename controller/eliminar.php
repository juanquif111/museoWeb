<?php

require "../class/Datos.php";
require "../class/conectar.php";

header('Access-Control-Allow-Origin: *');
$json = file_get_contents("php://input");
$json = json_decode($json);

$bd = new Conectar();
$sql = "delete from persona where ID = ?;";

$conn = $bd->getMysqli();
$smtp = $conn->prepare($sql);
$smtp->bind_param("i", $json->ID);

$res[] = Array();
if ($smtp->execute()) {
    $res["success"] = "ok";
} else {
    $res["success"] = "no";
}

$smtp->close();
$conn->close();
echo json_encode($res);




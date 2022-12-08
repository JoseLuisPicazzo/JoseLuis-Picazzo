<?php
require("./conexion.php");
require("./cors.php");

$data = json_decode(file_get_contents('php://input'), true);

$name = $data['Productos'];
$price = $data['Monto'];
$quantity = $data['Descripcion'];

$conexion = new Conexion();
$db = $conexion->getConexion();
$query = "INSERT INTO productos (Productos, Monto, Descripcion) VALUES (:name,:price,:quantity)";
$statement = $db->prepare($query);
$statement->bindParam(":name", $name);
$statement->bindParam(":price", $price);
$statement->bindParam(":quantity", $quantity);
$result = $statement->execute();
if($result){
   return "successfully";
}
 return "error!";
?>
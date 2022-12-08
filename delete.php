<?php
require("./conexion.php");
    $data = json_decode(file_get_contents('php://input'), true);  
       $id = $data['id_p'];
       $conexion = new Conexion();
       $db = $conexion->getConexion();
       $query = "DELETE FROM Productos WHERE id_p=:id";
       $statement = $db->prepare($query);
       $statement->bindParam(':id', $id);
       $result = $statement->execute();
       if($result){
         return "removed";
       }
       return "error!";
?>
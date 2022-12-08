<?php
        class Controller{
            public function GetProductos(){
                try{
                    $list = array();
                    $conexion = new Conexion();
                    $db = $conexion-> getConexion();
                    $query = "SELECT * FROM productos";
                    $statement = $db->prepare($query);
                    $statement->execute();

                    while ($row = $statement->fetch()){
                        $list[] = array(
                            "Productos"=>$row['Productos'],
                            "Descripcion"=>$row['Descripcion'],
                            "Monto" =>$row['Monto']);

                    }
                    return $list;
                }
                catch(PDOException $e){
                    echo "Error";

                }
            }

            public function addProduct($data){
                try{
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
            
                } 
                catch (PDOException $e) {
                    echo "¡Error!: " . $e->getMessage() . "<br/>";
                }
            }
        }
    ?>
<?php
    class conexion{

    public static function getConexion(){
        $server = "localhost";
        $db = "ejemplophp1";
        $user =  "root";
        $password = "Panke121018?";

        try{
            $conn = new PDO("mysql:host=$server;dbname=$db",$user,$password);
       }
        catch(PDOException $exp){
            echo("No se logro conectar correctamente");
        }
        return  $conn;
     }
    }
?>
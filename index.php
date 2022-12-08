<?php
require_once('conexion.php');
require_once('Controller.php');

$methodHTTP = $_SERVER['REQUEST_METHOD'];

switch($methodHTTP){
    case 'GET':
        if(empty($_GET)){
            $ctl = new Controller();
            $data = $ctl->GetProductos();
            echo json_encode([$data]);
        }
        else{
            $data = $_GET;
            $ctl = new Controller();
            $result = $ctl->GetProductos($data);
            echo json_encode([$data]); 
        }

        break;
    case 'POST':
      $data = json_decode(file_get_contents('php://input'), true);
      $ctl = new Controller();
      $result = $ctl->addProduct($data);
      echo json_encode(["data"=>$result]);
      break;
}
?>
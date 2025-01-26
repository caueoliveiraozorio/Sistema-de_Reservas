<?php
require_once __DIR__. "/../controller/reservasController.php";

$reservasController = new UserController();

if ($_SERVER["REQUEST_METHOD"]=='POST'){
    switch($_GET["reserva"]){
        case 'listareservas':
            $usuario_id = $_POST['usuario_id'];
            $espaco_id = $_POST['espaco_id'];
            $data_reserva = $_POST['data_reserva'];
            $hora_inicio = $_POST['hora_inicio'];
            $hora_fim = $_POST['hora_fim'];


            if(!(empty($usuario_id) || empty($espaco_id) || empty($data_reserva) || empty($hora_inicio) || empty($hora_fim))){
                $resposta = $reservasController->createUser($usuario_id, $espaco_id, $data_reserva, $hora_inicio, $hora_fim);
                if($resposta){
                    header("Location:../view/usuario/index.php");
                }
            }
            break;

        default:
            echo 'nao achei nenhuma das opções';
            break;
    }
}

?>
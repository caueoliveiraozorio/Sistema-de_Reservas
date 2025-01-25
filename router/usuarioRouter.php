<?php
require_once __DIR__. "/../controller/usuarioController.php";

$usuarioController = new UserController();

if ($_SERVER["REQUEST_METHOD"]=='POST'){
    switch($_GET["acao"]){
        case 'cadastrarUsuario':
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $telefone = $_POST['telefone'];


            if(!(empty($nome) || empty($email) || empty($telefone))){
                $resposta = $usuarioController->createUser($nome,$email,$telefone);
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
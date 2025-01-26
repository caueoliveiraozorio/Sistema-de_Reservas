<?php

require_once __DIR__ . "/../config/db/database.php";


class UserController{
    private $conn;

    public function __construct()
    {
        $objDb = new Database;
        $this-> conn = $objDb->connect();
    }

    public function GetAllUser(){
        try{
            $sql = "SELECT * FROM usuarios"; 
            $db = $this -> conn -> prepare($sql);
            $db-> execute();
            $user = $db->fetchAll(PDO::FETCH_ASSOC);
            return $user;
        }
        catch (\Exception $th){
            return $th -> getMessage();
        }
    }

public function createUser($nome,$email,$telefone){
    try {
        $sql = "INSERT INTO usuarios (nome,email,telefone) VALUES (:nome, :email,:telefone)";
        $db = $this->conn->prepare($sql);
        $db->bindParam(":nome", $nome);
        $db->bindParam(":email", $email);
        $db->bindParam(":telefone", $telefone);
        if ($db->execute()){
            return true;
        }else{
                return false;
        }
        } catch (\Exception $th){

        }
    }
    
    public function GetAllUser(){
        try{
            $sql = "SELECT * FROM reservas"; 
            $db = $this -> conn -> prepare($sql);
            $db-> execute();
            $user = $db->fetchAll(PDO::FETCH_ASSOC);
            return $user;
        }
        catch (\Exception $th){
            return $th -> getMessage();
        }
    }
    public function createUser($usuario_id, $espaco_id, $data_reserva, $hora_inicio, $hora_fim){
        try {
            $sql = "INSERT INTO reservas (usuario_id, espaco_id, data_reserva, hora_inicio,hora_fim ) VALUES (:usuario_id, :espaco_id, :data_reserva, :hora_inicio, :hora_fim)";
            $db = $this->conn->prepare($sql);
            $db->bindParam(":usuario_id", $usuario_id);
            $db->bindParam(":espaco_id", $espaco_id);
            $db->bindParam(":data_reserva", $data_reserva);
            $db->bindParam(":hora_inicio", $hora_inicio);
            $db->bindParam(":hora_fim", $hora_fim);
            if ($db->execute()){
                return true;
            }else{
                    return false;
            }
            } catch (\Exception $th){
    
            }    
}




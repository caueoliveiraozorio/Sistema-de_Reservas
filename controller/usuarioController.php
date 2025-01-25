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
    

}




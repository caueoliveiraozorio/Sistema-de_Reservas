<?php

$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'sistema_reservas';

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}


$conn->query("CREATE TABLE IF NOT EXISTS espacos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    tipo VARCHAR(255),
    capacidade INT,
    descricao TEXT
)");

$conn->query("CREATE TABLE IF NOT EXISTS usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    telefone VARCHAR(15)
)");

$conn->query("CREATE TABLE IF NOT EXISTS reservas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario_id INT,
    espaco_id INT,
    data_reserva DATE,
    hora_inicio TIME,
    hora_fim TIME,
    FOREIGN KEY (usuario_id) REFERENCES usuarios(id),
    FOREIGN KEY (espaco_id) REFERENCES espacos(id)
)");
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Reservas</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; padding: 0; }
        .container { max-width: 800px; margin: auto; padding: 20px; }
        nav { background: #333; padding: 10px; }
        nav a { color: white; margin-right: 10px; text-decoration: none; }
        nav a:hover { text-decoration: underline; }
    </style>
</head>
<body>
<nav>
    <a href="index.php">Início</a>
    <a href="espacos.php">Espaços</a>
    <a href="usuarios.php">Usuários</a>
    <a href="reservas.php">Reservas</a>
</nav>
<div class="container">
    <h1>Bem-vindo ao Sistema de Reservas</h1>
    <p>Use o menu acima para navegar entre as funcionalidades do sistema.</p>
</div>
</body>
</html>

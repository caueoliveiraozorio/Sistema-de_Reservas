<!-- izabela -->
<?php
include 'conexao.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];

    $conn->query("INSERT INTO usuarios (nome, email, telefone) VALUES ('$nome', '$email', '$telefone')");
    header('Location: usuarios.php');
}

$usuarios = $conn->query("SELECT * FROM usuarios");
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciar Usuários</title>
</head>
<body>
<h1>Usuários</h1>
<form method="POST">
    <input type="text" name="nome" placeholder="Nome do usuário" required>
    <input type="email" name="email" placeholder="E-mail" required>
    <input type="text" name="telefone" placeholder="Telefone">
    <button type="submit">Adicionar</button>
</form>
<h2>Lista de Usuários</h2>
<ul>
    <?php while ($usuario = $usuarios->fetch_assoc()) { ?>
        <li><?= $usuario['nome'] ?> - <?= $usuario['email'] ?></li>
    <?php } ?>
</ul>
</body>
</html>

<!-- lucas -->

<?php
include 'conexao.php'; 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    $tipo = $_POST['tipo'];
    $capacidade = $_POST['capacidade'];
    $descricao = $_POST['descricao'];

    $conn->query("INSERT INTO espacos (nome, tipo, capacidade, descricao) VALUES ('$nome', '$tipo', $capacidade, '$descricao')");
    header('Location: espacos.php'); // professor disse que esta errado nesse lugar aqui tente mudar
}

$espacos = $conn->query("SELECT * FROM espacos");
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciar Espaços</title>
</head>
<body>
<h1>Espaços</h1>
<form method="POST">
    <input type="text" name="nome" placeholder="Nome do espaço" required>
    <input type="text" name="tipo" placeholder="Tipo do espaço">
    <input type="number" name="capacidade" placeholder="Capacidade">
    <textarea name="descricao" placeholder="Descrição"></textarea>
    <button type="submit">Adicionar</button>
</form>
<h2>Lista de Espaços</h2>
<ul>
    <?php while ($espaco = $espacos->fetch_assoc()) { ?>
        <li><?= $espaco['nome'] ?> - <?= $espaco['tipo'] ?> - <?= $espaco['capacidade'] ?> pessoas</li>
    <?php } ?>
</ul>
</body>
</html>

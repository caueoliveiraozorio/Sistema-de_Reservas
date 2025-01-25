<?php

$TituloBotao = "Cadastrar";
$usuario = [
    "id" => "",
    "nome" => "",
    "email" => "",
    "telefone" => ""
  ];
  

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="<?php echo "../../router/usuarioRouter.php?acao=cadastrarUsuario"?>" method = "POST">
    <input type="hidden" name="IdUsuario" value ="<?php echo $usuario['id']?>">
    <input type="text" name="nome" value ="<?php echo $usuario['nome']?>">
    <input type="email" name="email" value ="<?php echo $usuario['email']?>">
    <input type="telefone" name="telefone" value ="<?php echo $usuario['telefone']?>">
    <button type="submit"><?php echo $TituloBotao ?></button>
  </form>
</body>
</html>
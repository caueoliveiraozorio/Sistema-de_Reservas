<?php
require_once __DIR__ . "../../../controller/usuarioController.php";
$userController = new UserController();

$usuario = $userController->GetAllUser();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="../cadastrarUsuario/index.php"><button>Cadastrar</button></a>
    <table border = '1'>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Senha</th>
                <th>Ações</th>
                
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($usuario as $item){
            ?>

                    <tr>
                        <td> <?php echo $item ['id'] ?></td>
                        <td> <?php echo $item ['nome'] ?></td>
                        <td> <?php echo $item ['email'] ?></td>
                        <td> <?php echo $item ['telefone'] ?></td>
                        <!-- <td> <a href="../cadastrar/index.php?id=<?php echo $item["id"] ?>"><button>Editar</button></a>
                        <form action="../../backend/router/userRouter.php?acao=deletar" method = "POST">
                            <input type="hidden" name="IdUsuario" value ="<?php echo $item['id']?>">
                            <button type="submit">Delete</button>
                        </form> -->
                    </td>
    
                    </tr>
            <?php
                }
            ?>
        </tbody>
    </table>
</body>
</html>
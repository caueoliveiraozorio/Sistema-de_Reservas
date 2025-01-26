<?php

$TituloBotao = "Cadastrar";
$reservas = [
    "id" => "",
    "usuario_id" => "",
    "espaco_id" => "",
    "data_reserva" => "",
    "hora_inicio" => "",
    "hora_fim" => ""
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
 server para cadastrar uma reserva ??? 
  <form action="<?php echo "../../router/usuarioreservasRouter.php?acao=cadastrarReserva"?>" method = "POST"> 
    <input type="hidden" name="IdReservas" value ="<?php echo $reservas['id']?>">


    <input type="text" name="usuario_id" value ="<?php echo $reservas['usuario_id']?>">
    <input type="email" name="espaco_id" value ="<?php echo $reservas['espaco_id']?>">


    
    <input type="date" name="data_reserva" value ="<?php echo $reservas['data_reserva']?>">
    <input type="time" name="hora_inicio" value ="<?php echo $reservas['hora_inicio']?>">
    <input type="time" name="hora_fim" value ="<?php echo $reservas['hora_fim']?>">
  </form>
</body>
</html>
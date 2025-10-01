<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Saudação pelo horário</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<form method="post">
    Digite o horário (0-23): 
    <input type="time" name="horario">
    <button type="submit">Enviar</button>

<div id="saudacao">

<?php

if (isset($_POST['horario'])) {
    $horario = $_POST['horario'];

if($horario>= 6 && $horario < 12){
    echo "Bom dia!<br>";
}elseif($horario >= 12 && $horario < 18){
    echo "Boa tarde!<br>";
}elseif($horario >= 18 && $horario < 24){
    echo "Boa noite!<br>";
}else {
    echo "Boa madrugada!<br>";
    }
}
?>
</div>
</form>
</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Saudação pelo horário</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div id="saudacao">

<?php

// Define o fuso horário do servidor, ajuste se necessário
date_default_timezone_set('America/Sao_Paulo');

// Pega a hora atual do servidor
$horaAtual = date("H"); // retorna a hora no formato 24h (0-23)

// Exibe a saudação de acordo com a hora
if ($horaAtual >= 6 && $horaAtual < 12) {
    echo "Bom dia!<br>";
} elseif ($horaAtual >= 12 && $horaAtual < 18) {
    echo "Boa Tarde!<br>";
} elseif ($horaAtual >= 18 && $horaAtual < 24) {
    echo "Boa Noite!<br>";
} else {
    echo "Boa Madrugada!<br>";
}

// Mostra a hora

echo "Agora são " . date("H:i") . " horas";

?>
</div>
</form>
</body>
</html>
<?php

$nome = $_POST['nome'] ?? '';
$email = $_POST['email'] ?? '';
$telefone = $_POST['telefone'] ?? '';
$mensagem = $_POST['mensagem'] ?? '';

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Orçamento Recebido</title>
</head>
<body>

<h1>Solicitação Recebida</h1>

<p><strong>Nome:</strong> <?php echo $nome; ?></p>
<p><strong>E-mail:</strong> <?php echo $email; ?></p>
<p><strong>Telefone:</strong> <?php echo $telefone; ?></p>
<p><strong>Mensagem:</strong> <?php echo $mensagem; ?></p>

</body>
</html>
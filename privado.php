<?php
//inicia ou disponibiliza a sessão
session_start();

//Superglobal do php que armazena os dados de sessão
$usuarioLogado = $_SESSION['usuario'] ?? null;

if(empty($usuarioLogado)){
    return header('location: login.php');
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <h1>Privado: Somente com login e senha</h1>
        <?php if(!empty($usuarioLogado)): ?>
        <p>Bem vindo primeiro usuario logado: <?= $usuarioLogado ?></p>
        <?php endif ?>  
</body>
</html>
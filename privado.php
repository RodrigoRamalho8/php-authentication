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
        <p>
            <a href="index.php">Home</a>
            <a href="login.php">Login</a>
            <a href="privado.php">Privado</a>
            <a href="logout.php">Logout</a>
        </p>

        <h1>Privado: Somente com login e senha</h1>
        <?php if(!empty($usuarioLogado)): ?>
            <p>Bem vindo primeiro usuario logado: <?= $usuarioLogado ?>
            <p>Seu perfil no sistema é: <?= $_SESSION['perfil'] ?></p>

            <?php if($_SESSION['perfil'] === 'Administrador'): ?>
                <button>Exclusivo adm</button>
            <?php endif ?>  
        <?php endif ?>  
</body>
</html>
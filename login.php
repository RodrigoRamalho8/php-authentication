
<?php
session_start();

if($_SERVER['REQUEST_METHOD'] === 'POST'){

    $emailForm = $_POST['email'];
    $senhaForm = $_POST['senha'];

    if(!empty($emailForm) && !empty($senhaForm)){

        $emailCorreto = 'adm@mail.com';
        $senhaCorreta = password_hash('123', PASSWORD_BCRYPT);
        $perfil = 'Administrador';

        if($emailForm === $emailCorreto && password_verify($senhaForm, $senhaCorreta)){

            $_SESSION['usuario'] = $emailForm;
            $_SESSION['perfil'] = $perfil;

            header('Location: privado.php');

        }
        

    }
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



        <h1>Login: Todos podem acessar</h1>



        <form action="login.php" method="POST">

            <label for="">Email</label>
            <input type="text" name="email">

            
            <label for="">Senha</label>
            <input type="text" name="senha">

            <button>Entrar</button>

        </form>
</body>
</html>
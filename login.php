
<?php
session_start();

if($_SERVER['REQUEST_METHOD'] === 'POST'){

    $emailForm = $_POST['email'];
    $senhaForm = $_POST['senha'];

    if(!empty($emailForm) && !empty($senhaForm)){

        $emailCorreto = 'adm@mail.com';
        $senhaCorreta = '123';

        if($emailForm === $emailCorreto && $senhaForm === $senhaCorreta){

            $_SESSION['usuario'] = $emailForm;

            var_dump($_SESSION['usuario']);

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
<?php

session_start();


session_unset();

//Invalidar e remover a sessão no PHP
session_destroy();


header('Location: index.php');

?>
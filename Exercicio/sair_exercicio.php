<?php

session_start();

unset($_SESSION['usuarioNome']);
header('Location: entrar_exercicio.php');

?>
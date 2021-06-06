<?php

$servidor = "locolhost";
$usuario = "root";
$senha = "";
$banco = "cursophp";

try {
    
    $conn = new PDO ("mysql:host-$servidor;dpname-$banco", $usuario, $senha);
    
    $conn ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connection successfully";
    
} catch (PDOException $exc) {
    
    echo "Connection failed: ".$exc->getMessage();
    
}



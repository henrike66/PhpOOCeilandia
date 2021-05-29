<?php


require './Animal.php';
require './Boi.php';
require './Cachorro.php';
require './Gato.php';
//require './Felinos.php';

$boi = new Boi ();
$gato = new Gato ();
$cachorro = new Cachorro ();

//$boi -> emitirSom(); 
//$gato -> emitirSom(); 
//$cachorro -> emitirSom(); 


$animais = array ($boi, $gato, $cachorro);

foreach ($animais as $value) {
    
    $value -> emitirSom();
    
}


cachorro::correr();
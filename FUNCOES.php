<?php declare(strict_types=1);

//
//function exibirMensagem(){
//    
//    echo "<h2>Olá</h2>";
//    
//}
//
////exibirMensagem();
//
//function nomeFamilia($primeiroNome){
//    
//    echo "$primeiroNome Leonidas <br>";
//    
//      
//}
//
//nomeFamilia("Carlos");
//nomeFamilia("João");
//nomeFamilia("Henrique");
//nomeFamilia("Leilane");
//


//function soma (int $valor1, int $valor2){
//    
//    $result = $valor1 + $valor2;
//    
//    return $result;
//    
//}
//
////$result = soma(10, 10);
//
//echo "O resultado da soma é:".soma(10, 10);

//valores variavel com retorno inteiro

function soma (float $valor1, float $valor2): int{
    
    $result = $valor1 + $valor2;
    
    return (int)$result;
    
}

//$result = soma(10, 10);

echo "O resultado da soma é:".soma(10.6, 10.8);
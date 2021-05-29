
<?php

// Verifica se algo foi postado
//                    if (!empty($_POST)) {
//                        // <input type="text" name="nome">
//                        echo 'Início da Lista de numeros: ' . $_POST['valor1'] . '<br>';
//
//                        // <input type="email" name="email">
//                        echo 'Fim da Lista de numeros: ' . $_POST['valor2'] . '<br>';
//
//                        echo "Segue a lista numerica abaixo:";
//                    }
//
//                    $inicio = $_POST['valor1'];
//                    $fim = $_POST['valor2'];
//
//                    do {
//                        echo "<dl><li>$inicio</lis><br></dl>";
//                        $inicio++;
//                    } while ($inicio <= $fim);
//                    
//                    
//                    questão 2
//                    
////                    
//                    if (!empty($_POST)) {
//                        // <input type="text" name="nome">
//                        echo 'Numero: ' . $_POST['numero'] . '<br><br><br>';
//
//                        echo "TABUADA:<br><br><br>";
//                    }
//
//                    $tabuada = $_POST['numero'];
//                    
//                    
//                    for ($i=1; $i <=10; $i++){
//                        
//                        echo '<br>'."$tabuada x $i = ".$tabuada * $i;
//                        
//                    }
                    
//                    outra opção:
//                    
//                    $primeiro = $tabuada * 1;
//                    $segundo = $tabuada * 2;
//                    $terceiro = $tabuada * 3;
//                    $quarto = $tabuada * 4;
//                    $quinto = $tabuada * 5;
//                    $sexto = $tabuada * 6;
//                    $setimo = $tabuada * 7;
//                    $oitavo = $tabuada * 8;
//                    $nono = $tabuada * 9;
//                    $decimo = $tabuada * 10;
//                    
//                    echo "$tabuada x 1 = ". $primeiro. "<br>";
//                    echo "$tabuada x 2 = ". $segundo. "<br>";
//                    echo "$tabuada x 3 = ". $terceiro. "<br>";
//                    echo "$tabuada x 4 = ". $quarto. "<br>";
//                    echo "$tabuada x 5 = ". $quinto. "<br>";
//                    echo "$tabuada x 6 = ". $sexto. "<br>";
//                    echo "$tabuada x 7 = ". $setimo. "<br>";
//                    echo "$tabuada x 8 = ". $oitavo. "<br>";
//                    echo "$tabuada x 9 = ". $nono. "<br>";
//                    echo "$tabuada x 10 = ". $decimo. "<br>";
//                   
//                    questão 3
//                    
//$contador = 100;
//
//echo "Os números ímpares de 100 a 200 são :";
//while ($contador <=200){
//  if ($contador %2 ==1) {
//  echo '<ul><li>'.$contador.'</li></ul>';
//  
//  }
// $contador++;
//}
//                    questão 4


//if (!empty($_GET)) {
//    $num1 = $_GET["nota1"];
//    $num2 = $_GET["nota2"];
//
//    $media = ($num1 + $num2) / 2;
//
//    echo "Resultado Final do Curso<br><br>";
//    echo "Média: $media";
//}


//                    questão 5

//if (!empty($_GET)) {
//    $num1 = $_GET["numero1"];
//    $num2 = $_GET["numero2"];
//    $num3 = $_GET["numero3"];
//    $num4 = $_GET["numero4"];
//    $num5 = $_GET["numero5"];
//}
//
//$numero = array ("$num1","$num2","$num3","$num4","$num5");
//
//rsort($numero);
//
//echo "<h3 style = 'color:DodgerBlue'>O maior numero informado:</h3>";
//echo max ($numero). "<br><br>";
//
//echo "<h3 style = 'color:red'>O menor numero informado:</h3>";
//echo min ($numero). "<br><br>";
//
//
//echo "<h3>Numeros informados</h3>";
//
//foreach ($numero as $value) {
//    
//    echo "Numero informado: ";
//    echo "$value <br>";
//    
//    
//}

//Exercício (for)
//
//if (!empty($_POST)) {
//
//    echo 'Numero: ' . $_POST['fatorial'] . '<br>';
//
//    echo "Segue a Fatoração:";
//}
//
//$fat = $_POST['fatorial'];
//
//
//
//for ($i = 1; $i<=$fat; $i++){
//    
//
//    echo '<br>'."$fat x $i = ".$fat *= $i;
//}


//Exercício com arrays:

//Questão 1

//if (!empty($_GET)) {
//    
//    echo "Primeiro numero selecionado:".$_GET['um']."<br>";
//    echo "Primeiro numero selecionado:".$_GET['dois']."<br>";
//    echo "Primeiro numero selecionado:".$_GET['tres']."<br>";
//    echo "Primeiro numero selecionado:".$_GET['quatro']."<br>";
//    echo "Primeiro numero selecionado:".$_GET['cinco']."<br>";
//    echo "Primeiro numero selecionado:".$_GET['seis']."<br>";
//    echo "Primeiro numero selecionado:".$_GET['sete']."<br>";
//    echo "Primeiro numero selecionado:".$_GET['oito']."<br>";
//    echo "Primeiro numero selecionado:".$_GET['nove']."<br>";
//    echo "Primeiro numero selecionado:".$_GET['dez']."<br><br><br>";
//    
//    echo "Segue a soma dos valores: <br>";
//    
//}
//
//
//$um = $_GET['um'];
//$dois = $_GET['dois'];
//$tres = $_GET['tres'];
//$quatro = $_GET['quatro'];
//$cinco = $_GET['cinco'];
//$seis = $_GET['seis'];
//$sete = $_GET['sete'];
//$oito = $_GET['oito'];
//$nove = $_GET['nove'];
//$dez = $_GET['dez'];
//
//
//$valores = array ("$um", "$dois", "$tres", "$quatro", "$cinco", "$seis", "$sete", "$oito", "$nove", "$dez");
//
//echo array_sum($valores)."<br><br><br>";
//
//echo "Segue a media: <br>";
//echo array_sum($valores)/10;

//Questão 2

//if (!empty($_GET)) {
//    
//    echo "Primeiro valores informado:".$_GET['um']."<br>";
//    echo "Primeiro valores informado:".$_GET['dois']."<br>";
//    echo "Primeiro valores informado:".$_GET['tres']."<br>";
//    echo "Primeiro valores informado:".$_GET['quatro']."<br>";
//    echo "Primeiro valores informado:".$_GET['cinco']."<br><br><br>";
//    
//    echo "Segue o valor maximo informado: <br>";
//    
//}
//
//
//$um = $_GET['um'];
//$dois = $_GET['dois'];
//$tres = $_GET['tres'];
//$quatro = $_GET['quatro'];
//$cinco = $_GET['cinco'];
//
//
//
//$num = array ("$um", "$dois", "$tres", "$quatro", "$cinco");
//
//echo max($num);


//Questão 3

//
//if (!empty($_GET)) {
//    
//    echo "<b>Nome: </b>".$_GET['pessoa1']."<br>"."<b>Idade: </b>".$_GET['um']."<br><br><br>";
//    echo "<b>Nome: </b>".$_GET['pessoa2']."<br>"."<b>Idade: </b>".$_GET['dois']."<br><br><br>";
//    echo "<b>Nome: </b>".$_GET['pessoa3']."<br>"."<b>Idade: </b>".$_GET['tres']."<br><br><br>";
//    echo "<b>Nome: </b>".$_GET['pessoa4']."<br>"."<b>Idade: </b>".$_GET['quatro']."<br><br><br>";
//    echo "<b>Nome: </b>".$_GET['pessoa5']."<br>"."<b>Idade: </b>".$_GET['cinco']."<br><br><br>";
//
//}
//
//
//$um = $_GET['um'];
//$dois = $_GET['dois'];
//$tres = $_GET['tres'];
//$quatro = $_GET['quatro'];
//$cinco = $_GET['cinco'];
//
//
//
//$num = array ("$um", "$dois", "$tres", "$quatro", "$cinco");
//
//Questão 4




//if (!empty($_GET)) {
//    
//    echo "<h2>Lista de nomes informados:</h2>";
//    
//    echo "<b>Nome: </b>".$_GET['fulano1']."<br>";
//    echo "<b>Nome: </b>".$_GET['fulano2']."<br>";
//    echo "<b>Nome: </b>".$_GET['fulano3']."<br>";
//    echo "<b>Nome: </b>".$_GET['fulano4']."<br>";
//    echo "<b>Nome: </b>".$_GET['fulano5']."<br>";
//
//}
//
//
//$um = $_GET['fulano1'];
//$dois = $_GET['fulano2'];
//$tres = $_GET['fulano3'];
//$quatro = $_GET['fulano4'];
//$cinco = $_GET['fulano5'];
//
//$pessoas = array ("$um", "$dois", "$tres", "$quatro", "$cinco");
//rsort($pessoas);
//
//echo "<h2>Lista de nomes na ordem decrescente:</h2>";
//
//foreach ($pessoas as $value) {
//    
//    
//    
//    echo "<ul><li>Nome informado: $value</li></ul>";
//   
//    
//}
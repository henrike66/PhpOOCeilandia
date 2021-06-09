<?php



if ( isset ( $_POST [ 'Acao' ])) {
    
    $Acao = filter_input ( INPUT_POST, 'Acao', FILTER_SANITIZE_SPECIAL_CHARS );
} elseif ( isset ( $_GET [ 'Acao' ])) {
    $Acao = entrada_filtro ( INPUT_GET, 'Acao', FILTER_SANITIZE_SPECIAL_CHARS );
} else {
    $Acao = "" ;
}

if ( isset ( $_POST [ 'cod' ])) {
    $cod = filter_input ( INPUT_POST, 'cod', FILTER_SANITIZE_SPECIAL_CHARS );
} elseif ( isset ( $_GET [ 'cod' ])) {
    $cod = filter_input ( INPUT_GET, 'cod', FILTER_SANITIZE_SPECIAL_CHARS );
} else {
    $cod = 0 ;
}

if ( isset ( $_POST [ 'nome' ])) {
    $nome = filter_input ( INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS );
} elseif ( isset ( $_GET [ 'nome' ])) {
    $nome = filter_input ( INPUT_GET, 'nome', FILTER_SANITIZE_SPECIAL_CHARS );
} else {
    $nome = "" ;
}

if ( isset ( $_POST [ 'idade' ])) {
    $idade = filter_input ( INPUT_POST, 'idade', FILTER_SANITIZE_SPECIAL_CHARS );
} elseif ( isset ( $_GET [ 'idade' ])) {
    $idade = filter_input ( INPUT_GET, 'idade', FILTER_SANITIZE_SPECIAL_CHARS );
} else {
    $idade = "" ;
}

if ( isset ( $_POST [ 'fone' ])) {
    $fone = filter_input ( INPUT_POST, 'fone', FILTER_SANITIZE_SPECIAL_CHARS );
} elseif ( isset ( $_GET [ 'fone' ])) {
    $fone = filter_input ( INPUT_GET, 'fone', FILTER_SANITIZE_SPECIAL_CHARS );
} else {
    $fone = "" ;
}

if ( isset ( $_POST [ 'cidade' ])) {
    $cidade = filter_input ( INPUT_POST, 'cidade', FILTER_SANITIZE_SPECIAL_CHARS );
} elseif ( isset ( $_GET [ 'cidade' ])) {
    $cidade = filter_input ( INPUT_GET, 'cidade', FILTER_SANITIZE_SPECIAL_CHARS );
} else {
    $cidade = "" ;
}
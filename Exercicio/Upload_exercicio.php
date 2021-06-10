<?php //



//$target_dir = "uploads/"; // definir o diretório onde será salvo como fotos
//$target_file = $target_dir.basename ( $_FILES [ "fileToUpload" ] [ "name" ]); // obter o caminho da foto salva
//$uploadOk = 1 ;
//$imageFileType = strtolower ( pathinfo ( $target_file , PATHINFO_EXTENSION )); // obtem a extensão do arquivo
//// Checando se é uma imagem real ou falsa
//if ( isset ( $_POST [ "enviar" ])) {
//    $check = getimagesize ( $_FILES [ "fileToUpload" ] [ "tmp_name" ]);
//    if ( $check !== false ) {
//        echo  "O arquivo é uma imagem -" . $check [ "mime" ]. "." ;
//        $uploadOk = 1 ;
//    } else {
//        echo  "O Arquivo não é uma imagem aceita." ;
//        $uploadOk = 0 ;
//    }
//}
//
//// checar se o arquivo já existe
//if ( file_exists ( $target_file )) {
//    echo  "Desculpe, o arquivo já existe." ;
//    $uploadOk = 0 ;
//}
//
//// Checar o tamanho do arquivo em 500kb
//if ( $_FILES [ "fileToUpload" ] [ "size" ]> 500000 ) {
//    echo  "Desculpe, seu arquivo ultrapassou o limite." ;
//    $uploadOk = 0 ;
//}
//
//// Extensões aceitas para o upload
//if ( $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
//    echo  "Desculpe, somente JPG, JPEG, PNG e GIF são aceitas." ;
//    $uploadOk = 0 ;
//}
//
//// Verifique se $ uploadOk está definido como 0 por um erro
//if ( $uploadOk == 0 ) {
//    echo  "Desculpe, seu arquivo não foi carregado." ;
//// se tudo estiver ok, tente fazer o upload do arquivo
//} else {
//    if ( move_uploaded_file ( $_FILES [ "fileToUpload" ] [ "tmp_name" ], $target_file )) {
//        echo  "O Arquivo" . htmlspecialchars ( basename ( $_FILES [ "fileToUpload" ] [ "name" ])). "carregado." ;
//    } else {
//        echo  "Desculpe, erro ao tentar realizar o upload" ;
//    }
//}
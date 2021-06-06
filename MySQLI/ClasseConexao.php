<?php


class ClasseConexao {

    public function conectaDB(){
        
        try {
            $conn = new mysqli("localhost", "root", "", "novo_php");
            return $conn;
            
        } catch (Exception $exc) {
            return $exc->getMessage();
        }
        
    }
    
}

<?php

abstract class ClasseConexao {

    protected function conectaDB(){
        
        try {
            $con = new mysqli("localhost", "root", "", "novo_php");
            return $con;
            
        } catch (Exception $erro) {
            return $erro->getMessage();
        }
        
    }
    
}

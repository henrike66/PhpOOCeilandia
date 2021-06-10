<?php

require 'ClassBanco.php';

class ClassCrud extends ClassBanco {

//    Atributos
    
    private $Crud;
    private $Contador;
    private $Resultado;

    
    

       private function countParametros($Parametros){
       $this->Contador = count($Parametros);
    }
    
    
//    Preparação declarativas
    
    
    private function preparedStatements($Query, $Tipo, $Parametros){
        
        
        $this->countParametros($Parametros);
        $con = $this->conectaDB();
        $this->Crud = $con->prepare($Query);
        if ($this->Contador > 0){
            $CallParametros = array();
            foreach ($Parametros as $Key => $Parametro){
                $CallParametros[$Key] = &$Parametros[$Key];
                
            }
            
//            Novo elementos do array
            array_unshift($CallParametros, $Tipo);
            call_user_func_array(array($this->Crud, 'bind_param'), $CallParametros);
            
        }
        
        $this->Crud->execute();
        $this->Resultado = $this->Crud->get_result();
               
    }
    

    

    
//    Metodo de seleção
    
    public function selectDB($Campo, $Tabela, $Condicao, $Tipo, $Parametros){
        
        $this->preparedStatements("Select {$Campo} from {$Tabela} {$Condicao}", $Tipo, $Parametros);
        return $this->Resultado;
    
}

    public function insertDB($Tabela, $Condicao, $Tipo, $Parametros){
        
        $this->preparedStatements("insert into {$Tabela} values ({$Condicao})", $Tipo, $Parametros);
        return $this->Crud;
        
    }

//    metodo para deletar


    public function deleteDB($Tabela, $Condicao, $Tipo, $Parametros){
        
        $this->preparedStatements("delete from {$Tabela} where {$Condicao}", $Tipo, $Parametros);
        return $this->Crud;
        
    }
    
//    Metodo atualizar
    
    public function updateDB($Tabela, $Set, $Condicao, $Tipo, $Parametros){
        
        $this->preparedStatements("update {$Tabela} set {$Set} where {$Condicao}", $Tipo, $Parametros);
        return $this->Crud;
        
    }
    
//   Metodo para autenticar o usuario
    
    public function validarUser($user, $pass){
        
        $usuario = $this->conectaDB()->real_escape_string($user);
        $senha = $this->conectaDB()->real_escape_string($pass);
//        $senha = md5($senha);
        
        $sql = "SELECT * FROM usuarios WHERE usuario = '$usuario' && senha='$senha' LIMIT 1";
        
        $result = $this->conectaDB()->query($sql);
        $resultado = $result->fetch_assoc();
        
        if(empty($resultado)){
            
            $_SESSION['loginErro'] = "Usuário ou senha inválido";
            header("Location: entrar_exercicio.php");
        }elseif (isset($resultado)) {
            
            $_SESSION['usuarioNome'] = $resultado ['nome'];
            header("Location: index_exercicio.php");
        }
        
    }

}

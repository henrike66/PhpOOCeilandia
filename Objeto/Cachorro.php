<?php


class cachorro implements Animal {

    
    public function emitirSom(){
        
        echo self::correr();
        echo "O cachorro late auau <br>";
        
    }

    public static function correr(){
        
        echo "O cachorro corre a 60 km/h <br>";
    }
}

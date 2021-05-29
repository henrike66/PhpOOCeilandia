<!DOCTYPE html>
<html>
<body>



<?php


abstract class Carro {
  public $name;
  public function __construct($name) {
    $this->name = $name;
  }
  abstract public function intro() : string; 
}

class Audi extends Carro {
  public function intro() : string {
    return "Choose German quality! I'm an $this->name!"; 
  }
}

class Volvo extends Carro {
  public function intro() : string {
    return "Proud to be Swedish! I'm a $this->name!"; 
  }
}

class Citroen extends Carro {
  public function intro() : string {
    return "French extravagance! I'm a $this->name!"; 
  }
}

?>

</body>
</html>

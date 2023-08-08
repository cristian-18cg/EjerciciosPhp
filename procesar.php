<?php
class Operaciones
{

 public $valor1;
 public $valor2;
 public $result;

public function __construct($valor1, $valor2)
{
    $this->valor1=$valor1;
    $this->valor2=$valor2;
}

public function getdatos(){
    return $this->valor1;
}
public function getdatos2(){
    return $this->valor2;
}
public function getSumaFirst(){
    $result=$this->valor1 + $this->valor2;
    return $result;
}

public function getMultiplicacionFirst(){
    $result=$this->valor1 * $this->valor2;
    return $result;
}
public function getDivisionFirst(){
    $result=$this->valor1 / $this->valor2;
    return $result;
}
public function getPotenciaFirst(){
    $result=$this->valor1 ** $this->valor2;
    return $result;
}
public function getRestaFirst(){
    $result=$this->valor1 - $this->valor2;
    return $result;
}
public function getporcentaje(){
    $result=$this->valor1 - $this->valor2;
    return $result;
}

}


class Promedio{
    public $valor1;
    public $valor2;
    public $valor3;
    public $valor4;
    public $valor5;
    public $valor6;
    public $valor7;
    public $valor8;
    public $valor9;
    public $valor10;
    public $result2;
    
   public function __construct($valor1, $valor2,$valor3,$valor4,$valor5,$valor6,$valor7,$valor8,$valor9,$valor10)
   {
       $this->valor1=$valor1;
       $this->valor2=$valor2;
       $this->valor1=$valor3;
       $this->valor2=$valor4;
       $this->valor1=$valor5;
       $this->valor2=$valor6;
       $this->valor1=$valor7;
       $this->valor2=$valor8;
       $this->valor1=$valor9;
       $this->valor2=$valor10;
   } 

   public function getprome(){
    $result2=$this->valor1 + $this->valor2 +$this->valor3 + $this->valor4+$this->valor5 + $this->valor6 + $this->valor7 + $this->valor8 + $this->valor9 +$this->valor10;
    $result2=$result2/10;
    return $result2;
}


}
?>
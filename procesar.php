<?php
class Operaciones
{

    public $valor1;
    public $valor2;
    public $result;

    public function __construct($valor1, $valor2)
    {
        $this->valor1 = $valor1;
        $this->valor2 = $valor2;
    }

    public function getdatos()
    {
        return $this->valor1;
    }
    public function getdatos2()
    {
        return $this->valor2;
    }
    public function getSumaFirst()
    {
        $result = $this->valor1 + $this->valor2;
        return $result;
    }

    public function getMultiplicacionFirst()
    {
        $result = $this->valor1 * $this->valor2;
        return $result;
    }
    public function getDivisionFirst()
    {
        $result = $this->valor1 / $this->valor2;
        return $result;
    }
    public function getPotenciaFirst()
    {
        $result = $this->valor1 ** $this->valor2;
        return $result;
    }
    public function getRestaFirst()
    {
        $result = $this->valor1 - $this->valor2;
        return $result;
    }
    public function getporcentaje()
    {
        $result = ($this->valor1 * $this->valor2) / 100;
        return $result;
    }
    public function getModulo()
    {
        $result = $this->valor1 % $this->valor2;
        return $result;
    }
    public function getAreaCirculo()
    {
        $result = pi() * pow($this->valor1, 2);
        return $result;
    }
    public function getCelcuisaFarenheit()
    {
        $result = ($this->valor1 * 9 / 5) + 32;
        return $result;
    }
    public function getareatriangulo()
    {
        $result = ($this->valor1 * $this->valor2) / 2;
        return $result;
    }

    public function getarearectangulo()
    {
        $result = $this->valor1 *  4;
        return $result;
    }
    public function getnumnat()
    {
        $N = $this->valor1; // Cambia el valor de N según tus necesidades

        $suma = 0;
        for ($i = 1; $i <= $N; $i++) {
            $suma += $i;
        }
        $result = $suma;
        return $result;
    }
    public function getraiz()
    {
        $result = sqrt($this->valor1);
        return $result;
    }
}


class Promedio
{
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
    public $discriminante;
    public function __construct($valor1, $valor2, $valor3, $valor4, $valor5, $valor6, $valor7, $valor8, $valor9, $valor10)
    {
        $this->valor1 = $valor1;
        $this->valor2 = $valor2;
        $this->valor3 = $valor3;
        $this->valor4 = $valor4;
        $this->valor5 = $valor5;
        $this->valor6 = $valor6;
        $this->valor7 = $valor7;
        $this->valor8 = $valor8;
        $this->valor9 = $valor9;
        $this->valor10 = $valor10;
    }

    public function getprome()
    {
        $result2 = $this->valor1 + $this->valor2 + $this->valor3 + $this->valor4 + $this->valor5 + $this->valor6 + $this->valor7 + $this->valor8 + $this->valor9 + $this->valor10;
        $result2 = $result2 / 10;
        return $result2;
    }
    public function ecuacioncua()
    {
        $discriminante = pow($this->valor3, 2) - 4 * $this->valor1 * $this->valor3;
        if ($discriminante > 0) {
            $raiz1 = (-$this->valor3 + sqrt($discriminante)) / (2 * $this->valor1);
            $raiz2 = (-$this->valor3 - sqrt($discriminante)) / (2 * $this->valor1);
            return ("<p>Las raíces son x₁ = $raiz1 y x₂ = $raiz2</p>");
        } elseif ($discriminante == 0) {
            $raiz = -$this->valor3 / (2 * $this->valor1);
            return ("<p>La raíz doble es x = $raiz</p>");
        } else {
            return ("<p>La ecuación no tiene raíces reales.</p>");
        }
    }
}

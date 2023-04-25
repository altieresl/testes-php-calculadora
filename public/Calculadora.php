<?php

class Calculadora {
    public function soma($x, $y) {
        return $x + $y;
    }

    public function subtracao($x, $y) {
        return $x - $y;
    }
    public function multiplicacao($x, $y) {
        return $x * $y;
    }
    public function divisao($x, $y) {
        try {
            if ($y == 0)
                throw new Exception("Não é possível efetuar divisão por 0");
            else 
                return $x / $y;
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
}

?>
<?php

use PHPUnit\Framework\TestCase;
require_once "public/Calculadora.php";

final class CalculadoraTeste extends TestCase
{
    public function testes(): void
    {
        $calculadora = new Calculadora;

        $resultado = $calculadora->soma(5, 4);
        $this->assertSame(9, $resultado);

        $resultado = $calculadora->soma(-5, 3);
        $this->assertSame(-2, $resultado);

        $resultado = $calculadora->subtracao(-20, -4);
        $this->assertSame(-16, $resultado);
        
        $resultado = $calculadora->multiplicacao(5, 4);
        $this->assertSame(20, $resultado);
        
        $resultado = $calculadora->divisao(3, 0);
        $this->assertSame("Não é possível efetuar divisão por 0", $resultado);

        $resultado = $calculadora->divisao(0, 5);
        $this->assertSame(0, $resultado);
    }
}
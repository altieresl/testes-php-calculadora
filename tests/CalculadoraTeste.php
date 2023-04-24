<?php

use PHPUnit\Framework\TestCase;
require_once "public/Calculadora.php";

final class CalculadoraTeste extends TestCase
{
    public function testGreetsWithName(): void
    {
        $calculadora = new Calculadora;

        $soma = $calculadora->soma(5, 4);

        $this->assertSame(9, $soma);
    }
}
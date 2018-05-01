<?php

use PHPUnit\Framework\TestCase;
require 'CalculadoraDeImpostos.php';

class CalculadoraDeImpostosTest extends TestCase
{
  public function testCalculadoraReturnNumber()
  {
    $calculadora = new CalculadoraDeImpostos();
    $orcamento = new Orcamento(1000, 5);
    $imposto = $calculadora->calcula($orcamento, 'ICPP');

    $this->assertInternalType('float', $imposto);
  }

  public function testICPPApply5PercentOfTaxAboutTheValueWhenValueIsLessThan500()
  {
    $calculadora = new CalculadoraDeImpostos();
    $orcamento = new Orcamento(400, 5);
    $calculated = $calculadora->calcula($orcamento, 'ICPP');

    $this->assertEquals(20, $calculated);
  }

  public function testICPPApply7PercentOfTaxAboutTheValueWhenValueIsBiggerThan500()
  {
    $calculadora = new CalculadoraDeImpostos();
    $orcamento = new Orcamento(1000, 5);
    $calculated = $calculadora->calcula($orcamento, 'ICPP');
    $this->assertEquals(70, $calculated);
  }

  public function testIKCVApply10PercentOfTaxAboutTheValueWhenValueIsBiggerThan500AndHasMoreThan5Itens()
  {
    $calculadora = new CalculadoraDeImpostos();
    $orcamento = new Orcamento(1000, 8);
    $calculated = $calculadora->calcula($orcamento, 'IKCV');
    $this->assertEquals(100, $calculated);
  }

  public function testIKVCApply6PercentOfTaxAboutTheValueWhenValueIsLessThan500()
  {
    $calculadora = new CalculadoraDeImpostos();
    $orcamento = new Orcamento(400, 2);
    $calculated = $calculadora->calcula($orcamento, 'IKCV');
    $this->assertEquals(24, $calculated);
  }
}
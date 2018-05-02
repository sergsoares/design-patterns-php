<?php

use PHPUnit\Framework\TestCase;
require 'CalculadoraDeImpostos.php';
require 'Imposto.php';
require 'TemplateDeImpostoCondicional.php';
require 'IKCV.php';
require 'ICPP.php';

class CalculadoraDeImpostosTest extends TestCase
{
  public function testCalculadoraReturnNumber()
  {
    $calculadora = new CalculadoraDeImpostos();
    $orcamento = new Orcamento(1000, 5);
    $imposto = new ICPP();
    $calculated = $calculadora->calcula($orcamento, $imposto);

    $this->assertInternalType('float', $calculated);
  }

  public function testICPPApply5PercentOfTaxAboutTheValueWhenValueIsLessThan500()
  {
    $calculadora = new CalculadoraDeImpostos();
    $orcamento = new Orcamento(400, 5);
    $imposto = new ICPP();
    $calculated = $calculadora->calcula($orcamento, $imposto);

    $this->assertEquals(20, $calculated);
  }

  public function testICPPApply7PercentOfTaxAboutTheValueWhenValueIsBiggerThan500()
  {
    $calculadora = new CalculadoraDeImpostos();
    $orcamento = new Orcamento(1000, 5);
    $imposto = new ICPP();
    $calculated = $calculadora->calcula($orcamento, $imposto);
    $this->assertEquals(70, $calculated);
  }

  public function testIKCVApply10PercentOfTaxAboutTheValueWhenValueIsBiggerThan500AndHasMoreThan5Itens()
  {
    $calculadora = new CalculadoraDeImpostos();
    $orcamento = new Orcamento(1000, 8);
    $imposto = new IKCV();
    $calculated = $calculadora->calcula($orcamento, $imposto);
    $this->assertEquals(100, $calculated);
  }

  public function testIKVCApply6PercentOfTaxAboutTheValueWhenValueIsLessThan500()
  {
    $calculadora = new CalculadoraDeImpostos();
    $orcamento = new Orcamento(400, 2);
    $imposto = new IKCV();
    $calculated = $calculadora->calcula($orcamento, $imposto);
    $this->assertEquals(24, $calculated);
  }
}
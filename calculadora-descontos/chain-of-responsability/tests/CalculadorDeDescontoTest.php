<?php

require 'CalculadoraDeDesconto.php';
use PHPUnit\Framework\TestCase;

class CalculadorDeDescontoTest extends TestCase
{

  public function testCalculaReturn0wihtOrcamentoWithoutItens()
  {
    $calculadora = new CalculadoraDeDesconto();
    $orcamento = new Orcamento('Sergio');
    $this->assertEquals(0, $calculadora->calcula($orcamento));
  }

  public function testCalculaReturnWith10PercentOfDiscountWhenOrcamentoHas10Itens()
  {
    $calculadora = new CalculadoraDeDesconto();
    $orcamento = new Orcamento('Paulo');

    foreach(range(0,4) as $number){
      $item = new Item('Mesa', 100);
      $orcamento->adicionaItem($item);
    }

    $valorTotalComDesconto = $calculadora->calcula($orcamento);

    $this->assertEquals(450, $valorTotalComDesconto);
  }

  public function testCalculaReturnValeuWithoutDiscountWithOneItemLessThan200()
  {
    $calculadora = new CalculadoraDeDesconto();
    $orcamento = new Orcamento('Carlos');
    $item = new Item('Casa', 150);
    $orcamento->adicionaItem($item);

    $valorTotal = $calculadora->calcula($orcamento);

    $this->assertEquals(150, $valorTotal);
  }

  public function testCalculaReturnWithDiscountWhenPrecoTotalBiggerThan1500()
  {
    $calculadora = new CalculadoraDeDesconto();
    $orcamento = new Orcamento('Pedro');
    $item = new Item('Casa', 1500);
    $orcamento->adicionaItem($item);

    $valorComDesconto = $calculadora->calcula($orcamento);

    $this->assertEquals(1200, $valorComDesconto);
  }

}
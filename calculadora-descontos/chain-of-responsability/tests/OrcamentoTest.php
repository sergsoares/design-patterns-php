<?php

require 'Orcamento.php';
use PHPUnit\Framework\TestCase;

class OrcamentoTest extends TestCase
{

  public function testConstructOrcamentoObject()
  {
    $orcamento = new Orcamento('Sergio');
    $this->assertEquals($orcamento->cliente, 'Sergio');
  }

  public function testGetItemReturnAnArray()
  {
    $orcamento = new Orcamento('Sergio');
    $this->assertEmpty($orcamento->getItens());
  }

  public function testAdicionaItemAddToInternalArray()
  {
    $orcamento = new Orcamento('Sergio');
    $item = new Item('Sergio', 321);

    $orcamento->adicionaItem($item);

    $this->assertCount(1, $orcamento->getItens());
  }

  public function testGetPrecoTotalReturnSumOfItensValue()
  {
    $orcamento = new Orcamento('Sergio');
    $item = new Item('Joao', 300);
    $item2 = new Item('Joao', 400);
    $orcamento->adicionaItem($item);
    $orcamento->adicionaItem($item2);

    $this->assertEquals(700,$orcamento->getPrecoTotal());
  } 

}
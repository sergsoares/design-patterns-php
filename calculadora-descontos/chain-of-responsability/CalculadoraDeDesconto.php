<?php

require 'InterfaceDesconto.php';
require 'DescontoOrcamentoAcima1500.php';
require 'DescontoOrcamentoMais5Itens.php';
require 'SemDesconto.php';

class CalculadoraDeDesconto
{
  public function calcula(Orcamento $orcamento): float
  {
    $descontoAcima1500 = new DescontoOrcamentoAcima1500();
    $descontoMais5Itens = new DescontoOrcamentoMais5Itens($orcamento);
    $semDesconto = new SemDesconto();

    $descontoAcima1500->setProximo($descontoMais5Itens);
    $descontoMais5Itens->setProximo($semDesconto);

    return $descontoAcima1500->desconta($orcamento);
  }
}
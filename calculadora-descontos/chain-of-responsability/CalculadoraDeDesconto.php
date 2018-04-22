<?php

require 'InterfaceDesconto.php';
require 'DescontoOrcamentoAcima1500.php';
require 'DescontoOrcamentoMais5Itens.php';
require 'DescontoOrcamentoComLapisECaneta.php';
require 'SemDesconto.php';

class CalculadoraDeDesconto
{
  public function calcula(Orcamento $orcamento): float
  {
    $descontoAcima1500 = new DescontoOrcamentoAcima1500();
    $descontoMais5Itens = new DescontoOrcamentoMais5Itens();
    $descontoComLapisECaneta = new DescontoOrcamentoComLapisECaneta();
    $semDesconto = new SemDesconto();

    $descontoMais5Itens->setProximo($descontoAcima1500);
    $descontoAcima1500->setProximo($descontoComLapisECaneta);
    $descontoComLapisECaneta->setProximo($semDesconto);

    return $descontoMais5Itens->desconta($orcamento);
  }
}
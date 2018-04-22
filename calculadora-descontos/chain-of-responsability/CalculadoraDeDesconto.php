<?php

require 'DescontoOrcamentoAcima1500.php';
require 'DescontoOrcamentoMais5Itens.php';

class CalculadoraDeDesconto
{
  public function calcula(Orcamento $orcamento): float
  {
    $descontoAcima1500 = new DescontoOrcamentoAcima1500();
    $desconto = $descontoAcima1500->desconta($orcamento);

    if($desconto == 0) {
      $descontoMais5Itens = new DescontoOrcamentoMais5Itens($orcamento);
      $desconto = $descontoMais5Itens->desconta($orcamento);
    }

    if($desconto == 0) {
      return $orcamento->getPrecoTotal();
    }

    return $desconto;

  }
}
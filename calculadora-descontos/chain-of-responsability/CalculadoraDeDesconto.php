<?php

class CalculadoraDeDesconto
{
  public function calcula(Orcamento $orcamento): float
  {
    if($orcamento->getPrecoTotal() >= 1500) {
      return $orcamento->getPrecoTotal() * 0.8;
    }

    if(count($orcamento->getItens()) >= 5 ) {
      return $orcamento->getPrecoTotal() * 0.9;
    }

    return $orcamento->getPrecoTotal();

  }
}
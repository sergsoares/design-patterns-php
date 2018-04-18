<?php

class CalculadorDeDescontos
{
  public function calculaDescontos(Orcamento $orcamento)
  {
    if(count($orcamento->getItens()) > 2) {
      return $orcamento->precoTotal() * 0.1;
    } elseif ($orcamento->precoTotal() > 1500) {
      return $orcamento->precoTotal * 0.3;
    }

    return 0;
  }
}
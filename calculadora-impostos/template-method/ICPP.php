<?php

class ICPP extends TemplateDeImpostoCondicional
{
  public function deveUsarTaxaMaxima(Orcamento $orcamento)
  {
    return $orcamento->valor < 500;
  }

  public function taxaMaxima(Orcamento $orcamento)
  {
    return $orcamento->valor * 0.05;
  }

  public function taxaMinima(Orcamento $orcamento)
  {
    return $orcamento->valor * 0.07;
  }
}
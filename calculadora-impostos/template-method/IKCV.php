<?php

class IKCV extends TemplateDeImpostoCondicional
{
  public function deveUsarTaxaMaxima(Orcamento $orcamento)
  {
    return $orcamento->valor > 500 && $orcamento->itens > 5;
  }

  public function taxaMaxima(Orcamento $orcamento)
  {
    return $orcamento->valor * 0.10;
  }

  public function taxaMinima(Orcamento $orcamento)
  {
    return $orcamento->valor * 0.06;
  } 
}
<?php

abstract class TemplateDeImpostoCondicional implements Imposto
{
  public function calcula(Orcamento $orcamento): float
  {
    if($this->deveUsarTaxaMaxima($orcamento)) {
      return $this->taxaMaxima($orcamento);
    } else {
      return $this->taxaMinima($orcamento);
    }
  }

  public abstract function deveUsarTaxaMaxima(Orcamento $orcamento);
  public abstract function taxaMaxima(Orcamento $orcamento);
  public abstract function taxaMinima(Orcamento $orcamento);
}
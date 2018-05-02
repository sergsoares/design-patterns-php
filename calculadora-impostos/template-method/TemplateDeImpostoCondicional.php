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

  protected abstract function deveUsarTaxaMaxima(Orcamento $orcamento);
  protected abstract function taxaMaxima(Orcamento $orcamento);
  protected abstract function taxaMinima(Orcamento $orcamento);
}
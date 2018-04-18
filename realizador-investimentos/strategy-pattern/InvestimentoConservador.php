<?php

class InvestimentoConservador implements Investimento
{
  public function obtemInvestimento($saldo)
  {
    return $saldo * 1.008;
  }
}
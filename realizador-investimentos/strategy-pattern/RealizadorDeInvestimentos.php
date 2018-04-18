<?php

class RealizadorDeInvestimentos
{
  public function realizaInvestimento($saldo, Investimento $investimentoEscolhido)
  {
    return $investimentoEscolhido->obtemInvestimento($saldo);
  }
}

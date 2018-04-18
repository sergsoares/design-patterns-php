<?php

class InvestimentoModerado implements Investimento 
{
  public function obtemInvestimento($saldo)
  {
    $escolhido = mt_rand(1,100) > 30;

  }
}
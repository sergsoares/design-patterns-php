<?php

class RealizadorDeInvestimentos
{

  // "CONSERVADOR", que sempre retorna 0.8% do valor investido;
  public function realizaInvestimentoConservador($saldoConta)
  { 
    return $saldoConta * 1.008;
  }

  // "MODERADO", que tem 50% de chances de retornar 2.5%, e 50% de chances de retornar 0.7%;
  public function realizaInvestimentoModerado($saldoConta)
  {
    $escolhido = mt_rand(1,100) > 50;
    $taxa = $escolhido ? 1.025 : 1.007;

    echo 'TAXA: ' . $taxa . PHP_EOL;
    return $saldoConta * $taxa;
  }

  // "ARROJADO", que tem 20% de chances de retornar 5%, 30% de chances de retornar 3%, e 50% de chances de retornar 0.6%.
  public function realizaInvestimentoArrojado($saldoConta)
  {
    $escolhido = mt_rand(1,100);
    echo 'ESCOLHIDO: ' . $escolhido. PHP_EOL;

    if($escolhido >= 50)
    {
      return $saldoConta * 1.006;
    } 
    
    if($escolhido > 20 && $escolhido < 50)
    {
      return $saldoConta * 1.03;
    }

    if($escolhido <= 20)
    {
      return $saldoConta * 1.05;
    }
  }
}

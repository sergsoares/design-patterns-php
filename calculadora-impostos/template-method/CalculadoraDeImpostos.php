<?php

require 'Orcamento.php';

class CalculadoraDeImpostos
{
  function calcula(Orcamento $orcamento, string $tipo)
  {
    if($tipo == 'ICPP') {
      if($orcamento->valor < 500) {
        return $orcamento->valor * 0.05;
      } else {
        return $orcamento->valor * 0.07;
      }
    } elseif($tipo == 'IKCV') {
      if($orcamento->valor > 500 && $orcamento->itens > 5) {
        return $orcamento->valor * 0.10;
      } else {
        return $orcamento->valor * 0.06;
      }
    }
    return $orcamento->valor;
  }
}
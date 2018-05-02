<?php

class IKCV implements Imposto
{
  public function calcula(Orcamento $orcamento): float
  {
      if($orcamento->valor > 500 && $orcamento->itens > 5) {
        return $orcamento->valor * 0.10;
      } else {
        return $orcamento->valor * 0.06;
      }
  }
}
<?php

class ICPP implements Imposto
{
  public function calcula(Orcamento $orcamento): float
  {
      if($orcamento->valor < 500) {
        return $orcamento->valor * 0.05;
      } else {
        return $orcamento->valor * 0.07;
      }
  } 
}
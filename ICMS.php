<?php
class ICMS 
{
  public function calcula(Orcamento $orcamento)
  {
    return $orcamento->getValor() * 0.02;
  }
}
?>
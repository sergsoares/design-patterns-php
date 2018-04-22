<?php

class SemDesconto implements InterfaceDesconto
{

  protected $proximo;

  public function desconta(Orcamento $orcamento):float {
    return $orcamento->getPrecoTotal();
  }

  public function setProximo($proximo) {
  }
}
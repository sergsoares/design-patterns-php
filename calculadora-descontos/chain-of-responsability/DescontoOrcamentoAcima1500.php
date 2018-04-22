<?php

class DescontoOrcamentoAcima1500 implements InterfaceDesconto
{

  protected $proximo;

  public function desconta(Orcamento $orcamento): float {
    if($orcamento->getPrecoTotal() >= 1500) {
      return $orcamento->getPrecoTotal() * 0.8;
    } else {
      return $this->proximo->desconta($orcamento);
    }
  }

  public function setProximo(InterfaceDesconto $proximo) {
    $this->proximo = $proximo;
  }
}
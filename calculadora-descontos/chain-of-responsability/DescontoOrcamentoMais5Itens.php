<?php

class DescontoOrcamentoMais5Itens implements InterfaceDesconto
{
  protected $proximo;

  public function desconta(Orcamento $orcamento): float {
    if(count($orcamento->getItens()) >= 5 ) { 
      return $orcamento->getPrecoTotal() * 0.9;
    } else {
      return $this->proximo->desconta($orcamento);
    }
  }

  public function setProximo(InterfaceDesconto $proximo) {
    $this->proximo = $proximo;
  }
}
<?php

class DescontoOrcamentoComLapisECaneta implements InterfaceDesconto
{
  protected $proximo;

  public function desconta(Orcamento $orcamento): float {
    if($this->existe('Lapis', $orcamento) && $this->existe('Caneta', $orcamento)) {
      return $orcamento->getPrecoTotal() * 0.95; 
    }

    return $this->proximo->desconta($orcamento);
  }

  public function setProximo(InterfaceDesconto $proximo) {
    $this->proximo = $proximo;
  }

  private function existe(string $nomeItem, Orcamento $orcamento) {
    foreach($orcamento->getItens() as $item) {
      if($item->nome == $nomeItem) {
        return true; 
      }
    }

    return false;
  }
}
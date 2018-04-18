<?php

class Orcamento
{
  protected $itens = [];

  public function precoTotal()
  {
    $total = 0;
    foreach($this->itens as $item) {
      $total += $item->getValor(); 
    }
    return $total;
  }

  public function getItens()
  {
    return $this->itens;
  }

  public function adicionaItem(Item $item)
  {
    array_push($this->itens, $item);
  }
}
<?php

require 'Item.php';

class Orcamento
{
  public $cliente;
  protected $itens = [];

  public function __construct(string $cliente)
  {
    $this->cliente = $cliente;
  }

  public function getItens(): array
  {
    return $this->itens;
  }

  public function adicionaItem(Item $item)
  {
    array_push($this->itens, $item);
  }

  public function getPrecoTotal(): float 
  {
    $total = 0.0;
    foreach($this->itens as $item){
      $total += $item->valor;
    }

    return $total;
  }

}
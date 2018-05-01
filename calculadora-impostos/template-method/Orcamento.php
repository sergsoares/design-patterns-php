<?php

class Orcamento 
{
  var $valor;
  var $itens;

  public function __construct(float $valor, int $itens) {
    $this->valor = $valor;
    $this->itens = $itens;
  }
}
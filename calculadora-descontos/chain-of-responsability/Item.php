<?php

class Item { 
  var $nome; 
  var $valor; 

  public function __construct(string $nome, int $valor)
  {
    $this->nome = $nome;
    $this->valor = $valor;
  }

}
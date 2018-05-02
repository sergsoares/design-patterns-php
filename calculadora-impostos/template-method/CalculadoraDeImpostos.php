<?php

require 'Orcamento.php';

class CalculadoraDeImpostos
{
  function calcula(Orcamento $orcamento, Imposto $imposto)
  {
    return $imposto->calcula($orcamento);
  }
}
<?php

class ISS {
  function calcula(Orcamento $orcamento) 
  {
    return $orcamento->getValor() * 0.09;
  }
}

?>
<?php

interface InterfaceDesconto
{
  public function desconta(Orcamento $orcamento): float; 
  public function setProximo(InterfaceDesconto $proximoDesconto);
}
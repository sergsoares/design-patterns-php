<?php

class Calculadora
{
    public function calcula(Orcamento $orcamento, $imposto) 
    {
        return $imposto->calcula($orcamento);
    }
}
?>
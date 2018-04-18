<?php

require 'Orcamento.php';
require 'Item.php';
require 'CalculadorDeDescontos.php';


$sofa = new Item('Sofa', 500);
$geladeira = new Item('geladeira', 200);
$mesa = new Item('mesa', 300);

$orcamento = new Orcamento();
$orcamento->adicionaItem($sofa);
$orcamento->adicionaItem($geladeira);
$orcamento->adicionaItem($mesa);
$precoTotal= $orcamento->precoTotal();

$calcularImposto = new CalculadorDeDescontos();
$desconto = $calcularImposto->calculaDescontos($orcamento);

echo 'DESCONTO - ' . $desconto . PHP_EOL;
echo 'PRECO TOTAL - ' . $precoTotal . PHP_EOL;
echo 'PRECO FINAL - ' . ($precoTotal - $desconto) . PHP_EOL;
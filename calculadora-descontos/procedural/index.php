<?php

/*
Nosso orçamento pode receber um desconto de acordo com o tipo da venda que será efetuada. Por exemplo, se o cliente comprou mais de 5 ítens, ele recebe 10% de desconto; se ele fez uma compra casada de alguns produtos, recebe 5% de desconto, e assim por diante.
*/ 

$quantidadeItens = 3;
$valor = 600;
$desconto = 0;

function calculaDesconto($quantidadeItens, $valor) {
  if ($quantidadeItens > 5) {
    return $valor * 0.1;
  } else if($valor > 500 ) {
    return $valor * 0.05; 
  }
}

$total = $valor - calculaDesconto($quantidadeItens, $valor);

echo $total;

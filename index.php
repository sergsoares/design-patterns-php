<?php

require 'Calculadora.php';
require 'Orcamento.php';
require 'ICMS.php';
require 'ISS.php';
require 'INSS.php';

$orcamento = new Orcamento(500);
$calculadora = new Calculadora();

echo $calculadora->calcula($orcamento, new ISS());
echo PHP_EOL;
echo $calculadora->calcula($orcamento, new INSS());
echo PHP_EOL;
echo $calculadora->calcula($orcamento, new ICMS());
?>

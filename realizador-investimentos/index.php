<?php

require 'RealizadorDeInvestimentos.php';

$realizadorDeInvestimentos = new RealizadorDeInvestimentos();

$saldoAtual = 500;
$saldoComInvestimento = $realizadorDeInvestimentos->realizaInvestimentoConservador($saldoAtual);
echo $saldoComInvestimento . PHP_EOL;


$saldoAtual = 100;
$saldoComInvestimento = $realizadorDeInvestimentos->realizaInvestimentoModerado($saldoAtual);
echo $saldoComInvestimento . PHP_EOL;


$saldoAtual = 1000;
$saldoComInvestimento = $realizadorDeInvestimentos->realizaInvestimentoArrojado($saldoAtual);
echo $saldoComInvestimento . PHP_EOL;
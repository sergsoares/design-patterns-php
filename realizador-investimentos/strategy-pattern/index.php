<?php

require 'RealizadorDeInvestimentos.php';
require 'Investimento.php';
require 'InvestimentoConservador.php';
require 'InvestimentoModerado.php';

$saldo = '1000';
$service = new RealizadorDeInvestimentos();

$investimento = new InvestimentoConservador();
$saldoAtual = $service->realizaInvestimento($saldo, $investimento);

echo $saldoAtual;
echo PHP_EOL;

$investimento = new InvestimentoModerado();
$saldoAtual = $service->realizaInvestimento($saldo, $investimento);

echo $saldoAtual;
echo PHP_EOL;

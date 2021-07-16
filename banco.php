<?php

require_once 'src/contas.php';
require_once 'src/titular.php';
require_once 'src/CPF.php';

$primeiraConta = new Conta(new Titular(new CPF('12345678910'), 'Nathália Borges'));
$primeiraConta->depositar(500);
$primeiraConta->sacar(300);

$CPFCliente2 = new cpf('12352216879');
$Cliente2 = new Titular($CPFCliente2, 'José Carlos Pereira Borges');
$segundaConta = new Conta ($Cliente2);


echo $segundaConta->recuperaNomeTitular() . PHP_EOL;
echo $segundaConta->recuperaCPFTitular() . PHP_EOL;

echo "1 de " . Conta::recuperaNumeroDeContas() . " conta(s) ativa(s) na banco." . PHP_EOL;
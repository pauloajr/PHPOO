<?php

require 'src/Conta.php';

$conta = new Conta();

$conta->nome = "Paulo";
$conta->numero = "122515";
$conta->saldo = 0.00;

$contaB = new Conta();
$contaB->nome = "Joao";
$contaB->numero = "111111";
$conta->saldo = 0.00;

$conta->depositar(10.00);

var_dump($conta);
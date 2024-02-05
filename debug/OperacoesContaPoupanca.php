<?php

require __DIR__.'/../vendor/autoload.php';

use App\Simulacao\TipoConta\ContaPoupanca; 
use App\Simulacao\Contratos\DadosContaBancariaInterface;
use App\Simulacao\Contratos\OperacoesContaBancariaInterface;

function exibirDados(DadosContaBancariaInterface $contaBancaria)
{
    echo $contaBancaria->getNomeTitular();
    echo PHP_EOL;

    echo $contaBancaria->getAgencia();
    echo PHP_EOL;

    echo $contaBancaria->getConta();
    echo PHP_EOL;

    echo $contaBancaria->getRG();
    echo PHP_EOL;

    echo $contaBancaria->getCPF();
    echo PHP_EOL;
}

function exibirOperacoes(OperacoesContaBancariaInterface $contaBancaria)
{
    echo $contaBancaria->tipoConta();
    echo PHP_EOL;

    echo $contaBancaria->deposito(0);
    echo PHP_EOL;

    echo $contaBancaria->saque(0);
    echo PHP_EOL;

    echo $contaBancaria->saldo();
    echo PHP_EOL;
}

$contaBancaria = new ContaPoupanca('João', '125425859-7', '245896321-85', '12546','1234',5000);

exibirDados($contaBancaria);
exibirOperacoes($contaBancaria);
<?php

require __DIR__.'/../vendor/autoload.php';

use App\Simulacao\TipoConta\ContaCorrente;
use App\Simulacao\Contratos\DadosContaBancariaInterface;
use App\Simulacao\Contratos\OperacoesContaBancariaInterface;

function exibirDados(DadosContaBancariaInterface $contaBancaria)
{
    echo $contaBancaria->getNomeTitular();
    echo PHP_EOL;

    echo $contaBancaria->getAgencia();
    echo PHP_EOL;

    echo $contaBancaria->getConta();

    echo $contaBancaria->getRG();
    echo PHP_EOL;

    echo $contaBancaria->getCPF();
    echo PHP_EOL;
}

function exibirOperacoes(OperacoesContaBancariaInterface $contaBancaria)
{
    echo $contaBancaria->tipoConta();
    echo PHP_EOL;

    echo $contaBancaria->deposito(200);
    echo PHP_EOL;

    echo $contaBancaria->saque(60);
    echo PHP_EOL;

    echo $contaBancaria->saldo();
    echo PHP_EOL;
}

$contaBancaria = new ContaCorrente ('Cintia', '12564-6', '59846-69','12345','123',3000);

exibirDados($contaBancaria);
exibirOperacoes($contaBancaria);
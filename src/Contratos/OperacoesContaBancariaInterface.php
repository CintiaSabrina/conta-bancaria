<?php


declare(strict_types=1);

namespace App\Simulacao\Contratos;

interface OperacoesContaBancariaInterface
{
    public function tipoConta():string;
    public function saldo():string;
    public function deposito(float $deposito):string;
    public function saque(float $saque):string;
}
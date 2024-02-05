<?php

declare(strict_types=1);
namespace App\Simulacao\TipoConta;
use App\Simulacao\ContaBancaria;

class ContaCorrente extends ContaBancaria
{
    const TIPO_CONTA = 'Conta Corrente';
    function __construct(
        string $nomeTitular, 
        string $RG, 
        string $CPF,
        string $conta,
        string $agencia,
        float $saldo,
    )
    {
        parent:: __construct(
            $nomeTitular,
            $RG,
            $CPF,
            $conta,
            $agencia,
            $saldo,
        );
    }

    public function tipoConta(): string
    {
        return 'Tipo de conta: '. self::TIPO_CONTA;
    }

    public function saldo(): string
    {
        return 'Saldo: '. $this->saldo;
    }
}
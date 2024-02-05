<?php

declare(strict_types=1);

namespace App\Simulacao;

use App\Simulacao\Contratos\DadosContaBancariaInterface;
use App\Simulacao\Contratos\OperacoesContaBancariaInterface;

abstract class ContaBancaria implements DadosContaBancariaInterface, OperacoesContaBancariaInterface
{
    protected $nomeTitular;
    protected $RG;
    protected $CPF;
    protected $conta;
    protected $agencia;
    protected $saldo;

    function __construct(
        string $nomeTitular,
        string $RG,
        string $CPF,
        string $conta,
        string $agencia,
        float $saldo,
    ) {
        $this->nomeTitular = $nomeTitular;
        $this->RG = $RG;
        $this->CPF = $CPF;
        $this->agencia = $agencia;
        $this->conta = $conta;
        $this->saldo = $saldo;
    }

    public function getNomeTitular(): string
    {
        return 'Nome: ' . $this->nomeTitular;
    }

    public function getRG(): string
    {
        return 'RG: ' . $this->RG;
    }
    public function getCPF(): string
    {
        return 'CPF: ' . $this->CPF;
    }

    public function getAgencia(): string
    {
        return 'Agência: ' . $this->agencia;
    }

    public function getConta(): string
    {
        return 'Conta: ' . $this->conta;
    }

    public function deposito(float $deposito): string
    {
        if ($deposito > 0) {
            $this->saldo += $deposito;
            return 'Seu deposito foi no valor de: ' . $deposito . ' reais.';
        } else {
            return '';
        }
    }

    public function saque(float $saque): string
    {
        if ($saque > 0) {
            $this->saldo -= $saque;
            return 'Saque de ' . $saque . ' efetuado com sucesso.';
        }else{
            return '';
        }
        // $this->saldo -= $saque;
        // return 'Saque de ' . $saque . ' efetuado com sucesso.';
    }

    //funcoes abstratas

    public abstract function tipoConta(): string;
    public abstract function saldo(): string;
}

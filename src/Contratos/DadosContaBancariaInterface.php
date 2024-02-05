<?php

declare(strict_types=1);

namespace App\Simulacao\Contratos;

interface DadosContaBancariaInterface
{
    public function getNomeTitular(): string;
    public function getRG(): string;
    public function getCPF(): string;
    public function getConta(): string;
    public function getAgencia(): string;
}

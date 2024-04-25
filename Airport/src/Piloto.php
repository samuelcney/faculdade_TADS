<?php

namespace Samucney\Airport;

class Piloto extends Tripulante
{
    private int $horasVoo;
    private Cidade $baseOperacao;

    public function __construct(string $nome, int $idade, string $nacionalidade, int $horasVoo, Cidade $baseOperacao, float $salario, string $alcunha)
    {
        $this->horasVoo = $horasVoo;
        $this->baseOperacao = $baseOperacao;
        parent::__construct($nome, $idade, $nacionalidade, $salario, $alcunha);
    }

    public function getHorasVoo(): int
    {
        return $this->horasVoo;
    }


    public function getBaseOperacao(): Cidade
    {
        return $this->baseOperacao;
    }

    public function executarTarefa(): string{
        return "Pilotar e comandar aeronave.";
    }
}

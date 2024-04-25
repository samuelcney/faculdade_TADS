<?php
namespace Samucney\Airport;

class Comissario extends Tripulante
{
    private array $idiomas;
    private bool $treinamentoEmergencia;
    private int $anosExperiencia;

    public function __construct(string $nome, int $idade, string $nacionalidade,bool $treinamentoEmergencia, int $anosExperiencia, float $salario, string $alcunha)
    {
        $this->treinamentoEmergencia = $treinamentoEmergencia;
        $this->anosExperiencia = $anosExperiencia;
        $this->idiomas = [];
        parent::__construct($nome, $idade, $nacionalidade, $salario, $alcunha);
    }

    public function getIdiomas(): array
    {
        return $this->idiomas;
    }

    public function getTreinamentoEmergencia(): bool
    {
        return $this->treinamentoEmergencia;
    }

    public function getAnosExperiencia(): int
    {
        return $this->anosExperiencia;
    }

    public function addIdiomas(string $idioma): void
    {
        array_push($this->idiomas, $idioma);
    }

    public function executarTarefa(): string{
        return "Atender e servir os passageiros.";
    }
}

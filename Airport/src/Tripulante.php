<?php
namespace Samucney\Airport;

class Tripulante extends Pessoa
{
    private float $salario;
    private string $alcunha;

    public function __construct(string $nome, int $idade, string $nacionalidade, float $salario, string $alcunha)
    {
        $this->salario = $salario;
        $this->alcunha = $alcunha;
        parent::__construct($nome, $idade, $nacionalidade);
    }

    public function getSalario(): float
    {
        return $this->salario;
    }

    public function getAlcunha(): string
    {
        return $this->alcunha;
    }

    public function executarTarefa(): string{
        return "Executa tarefas à bordo do vôo.";
    }
}

<?php
namespace Samucney\Airport;

class Passageiro extends Pessoa
{   
    private Bagagem $bagagem;
    private int $numeroAssento;

    public function __construct(string $nome, int $idade,string $nacionalidade, Bagagem $bagagem)
    {
        parent::__construct($nome, $idade, $nacionalidade);
        $this->bagagem = $bagagem;
    }

    public function getBagagem(): Bagagem
    {
        return $this->bagagem;
    }

    public function setNumeroAssento(int $numeroAssento): void
    {
        $this->numeroAssento = $numeroAssento;
    }

    public function getNumeroAssento(): int{
        return $this->numeroAssento;
    }

    public function executarTarefa(): string{
        return "Fazer check-in e se dirigir à aeronave.";
    }
}

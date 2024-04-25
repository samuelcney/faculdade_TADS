<?php

namespace Samucney\Airport;

class Pessoa
{
    private string $nome;
    private int $idade;
    private string $nacionalidade;

    public function __construct(
        string $nome,
        int $idade,
        string $nacionalidade
    ) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->nacionalidade = $nacionalidade;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getIdade(): int
    {
        return $this->idade;
    }

    public function getNacionalidade(): string
    {
        return $this->nacionalidade;
    }

    public function executarTarefa(): string
    {
        return "Executando tarefa designada.";  
    }
}

<?php
namespace Samucney\Airport;
class Aeronave
{   
    
    private string $modelo;
    private string $imagem; //teste para o HTML
    private int $capacidade;
    private string $status;
    private PorteAeronave $porte;
    

    public function __construct(string $modelo, string $imagem, int $capacidade, PorteAeronave $porte)
    {
        $this->modelo = $modelo;
        $this->imagem = $imagem;
        $this->capacidade = $capacidade;
        $this->porte = $porte;
    }

    public function setStatus(string $status)
    {
        if (
            $status == 'Ativo' |
            $status == 'Manutenção' |
            $status == 'Inativo'
        ) $this->status = $status;
    }

    public function getModelo(): string
    {
        return $this->modelo;
    }

    public function getImagem(): string
    {
        return $this->imagem;
    }

    public function getCapacidade(): int
    {
        return $this->capacidade;
    }

    public function getStatus(): string
    {
        return $this->status ?? 'Inválido';
    }

    public function getPorte(): PorteAeronave{
        return $this->porte;
    }
}

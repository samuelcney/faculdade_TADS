<?php

namespace Samucney\Airport;

class Aeroporto
{
    private string $nome;
    private string $endereco;
    private string $codigoICAO;
    private string $codigoIATA;
    private Cidade $cidade;
    private float $longitude;
    private float $latitude;



    public function __construct(string $nome, Cidade $cidade, string $endereco, string $codigoICAO, string $codigoIATA)
    {
        $this->nome = $nome;
        $this->cidade = $cidade;
        $this->endereco = $endereco;
        $this->codigoICAO = $codigoICAO;
        $this->codigoIATA = $codigoIATA;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getEndereco(): string
    {
        return $this->endereco;
    }

    public function getCodICAO(): string
    {
        return $this->codigoICAO;
    }

    public function getCodIATA(): string
    {
        return $this->codigoIATA;
    }

    public function getCidade(): Cidade
    {
        return $this->cidade;
    }

    public function getLongitude(): float
    {
        return $this->longitude;
    }

    public function getLatitude(): float
    {
        return $this->latitude;
    }

    public function setLongitude(float $longitude):void
    {
        $this->longitude = $longitude;  
    }
    public function setLatitude(float $latitude):void
    {
        $this->latitude = $latitude;    
    }
}

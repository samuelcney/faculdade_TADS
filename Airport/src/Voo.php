<?php

namespace Samucney\Airport;

class Voo
{
    private int $numeroVoo;
    private Aeroporto $origem;
    private Aeroporto $destino;
    private Aeronave $aviao;
    private array $passageiros;
    private array $tripulantes;
    private float $distancia;
    private float $tempoVoo;

    public function __construct(int $numeroVoo, Aeroporto $origem, Aeroporto $destino, Aeronave $aviao)
    {
        $this->numeroVoo = $numeroVoo;
        $this->origem = $origem;
        $this->destino = $destino;
        $this->aviao = $aviao;
        $this->passageiros = [];
        $this->tripulantes = [];
    }

    public function addPassageiros(Passageiro $passageiro):void
    {
        array_push($this->passageiros, $passageiro);
    }

    public function addTripulantes(Tripulante $tripulante):void
    {
        array_push($this->tripulantes, $tripulante);
    }

    public function getNumeroVoo(): int
    {
        return $this->numeroVoo;
    }

    public function getOrigem(): Aeroporto
    {
        return $this->origem;
    }

    public function getDestino(): Aeroporto
    {
        return $this->destino;
    }

    public function getAviao(): Aeronave
    {
        return $this->aviao;
    }

    public function getPassageiros(): array
    {
        return $this->passageiros;
    }

    public function getTripulantes():array
    {
        return $this->tripulantes;
    }
    public function calcularDistancia():float
    {
        // Raio da Terra em km
        $raioTerra = 6371;
        // Converte graus para radianos
        $lat1 = deg2rad($this->getOrigem()->getLatitude());
        $lon1 = deg2rad($this->getOrigem()->getLongitude());
        $lat2 = deg2rad($this->getDestino()->getLatitude());
        $lon2 = deg2rad($this->getDestino()->getLongitude());
    
        // Diferença de latitudes e longitudes
        $dLat = $lat2 - $lat1;
        $dLon = $lon2 - $lon1;
    
        // Fórmula de Haversine 
        $a = sin($dLat/2) * sin($dLat/2) + cos($lat1) * cos($lat2) * sin($dLon/2) * sin($dLon/2);
        $c = 2 * atan2(sqrt($a), sqrt(1-$a));
        $this->distancia = $raioTerra * $c;

        return $this->distancia; //Peguei o calcúlo da internet para usar como base.
    }

    public function calcularTempoVoo():float
    {
        $velocidadeMediaAvioes = 900; //definir velocidade padrão para as aeronaves comerciais.
        $this->tempoVoo = $this->distancia/$velocidadeMediaAvioes;
        return $this->tempoVoo;
    }
}


<?php
namespace Samucney\Airport;

class Bagagem
{

    private float $peso;
    private int $qntMalas;

    public function __construct(
        float $peso, 
        int $malas
        ){
        $this->qntMalas = $malas; 
        $this->peso = $peso; 
    }

    public function getPeso() :float
    {
        return $this->peso;
    }

    public function getMalas() :int
    {
        return $this->qntMalas;
    }
}
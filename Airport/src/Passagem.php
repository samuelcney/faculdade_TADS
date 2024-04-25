<?php

namespace Samucney\Airport;

class Passagem
{
    private Passageiro $passageiro;
    private Voo $voo;

    public function __construct(Passageiro $passageiro, Voo $voo)
    {
        $this->passageiro = $passageiro;
        $this->voo = $voo;
    }

    public function getPassageiro(): Passageiro
    {
        return $this->passageiro;
    }

    public function getVoo(): Voo
    {
        return $this->voo;
    }

    public function fazerCheckin()
    {
        $this->voo->addPassageiros($this->passageiro);
        $this->passageiro->setNumeroAssento(rand(1, $this->voo->getAviao()->getCapacidade()));
        
        return 
        "\n--------------------------------------------\n"
        .'Check-in:'."\n".
        'N° Vôo: '.$this->voo->getNumeroVoo()."\n"
        .'Passageiro: '.$this->passageiro->getNome()."\n"
        .'N° Assento: '.$this->passageiro->getNumeroAssento().
        "\n--------------------------------------------\n";
    }
}

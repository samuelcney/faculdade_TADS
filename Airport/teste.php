<?php

namespace Samucney\Airport;
require_once 'Aeronave.php';

$aeronave1 = new Aeronave('Boeing 767 Delta','imgs\B767.jpg',375, PorteAeronave::PorteGrande);
$aeronave1->setStatus('Ativo'); 

$aeronave2 = new Aeronave('Embraer E-195 Azul','imgs\E195.jpg',124, PorteAeronave::PortePequeno);
$aeronave2->setStatus('Manutenção'); 

$aeronave3 = new Aeronave('Boing 737 Gol','imgs\B737.jpg',230, PorteAeronave::PorteMedio);
$aeronave3->setStatus('Ativo');

$aeronave4 = new Aeronave('Bombardier CRJ 100 Lufthansa','imgs\CRJ100.jpg',230, PorteAeronave::PorteMedio);
$aeronave4->setStatus('Inativo');

$aeronave5 = new Aeronave('Boing 727 Varig','imgs\B727.jpg',189, PorteAeronave::PortePequeno);
$aeronave5->setStatus('Ativo');

$aeronave6 = new Aeronave('Airbus A330 Azul','imgs\A330.jpg',335, PorteAeronave::PorteGrande);
$aeronave6->setStatus('Ativo');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Airplanes</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <header>
        <span>
            <h1 class="logo"><i>Airlines</i></h1>
        </span>
        <span>
            <a class="links" href="index.php">Aeronaves</a>
            <a class="links" href="">Aeroportos</a>
            <a class="links" href="indexVoo.php">Voos</a>
        </span>
    </header>
    <main>
    <div class="avioes">
        <img class="ship" src=<?=$aeronave1->getImagem() ?>>
        <h2>Modelo: <?= $aeronave1->getModelo()?></h2>
        <h2>Capacidade: <?= $aeronave1->getCapacidade()?></h2>
        <h2 class=<?= $aeronave1->getStatus()?>>Status: <?= $aeronave1->getStatus()?></h2>
    </div>

    <div class="avioes">
        <img class="ship" src=<?=$aeronave2->getImagem() ?>>
        <h2>Modelo: <?= $aeronave2->getModelo()?></h2>
        <h2>Capacidade: <?= $aeronave2->getCapacidade()?></h2>
        <h2 class=<?= $aeronave2->getStatus()?>>Status: <?= $aeronave2->getStatus()?></h2>
    </div>

    <div class="avioes">
        <img class="ship" src=<?=$aeronave3->getImagem() ?>>
        <h2>Modelo: <?= $aeronave3->getModelo()?></h2>
        <h2>Capacidade: <?= $aeronave3->getCapacidade()?></h2>
        <h2 class=<?= $aeronave3->getStatus()?>>Status: <?= $aeronave3->getStatus()?></h2>
    </div>

    <div class="avioes">
        <img class="ship" src=<?=$aeronave4->getImagem() ?>>
        <h2>Modelo: <?= $aeronave4->getModelo()?></h2>
        <h2>Capacidade: <?= $aeronave4->getCapacidade()?></h2>
        <h2 class=<?= $aeronave4->getStatus()?>>Status: <?= $aeronave4->getStatus()?></h2>
    </div>

    <div class="avioes">
        <img class="ship" src=<?=$aeronave5->getImagem() ?>>
        <h2>Modelo: <?= $aeronave5->getModelo()?></h2>
        <h2>Capacidade: <?= $aeronave5->getCapacidade()?></h2>
        <h2 class=<?= $aeronave5->getStatus()?>>Status: <?= $aeronave5->getStatus()?></h2>
    </div>

    <div class="avioes">
        <img class="ship" src=<?=$aeronave6->getImagem() ?>>
        <h2>Modelo: <?= $aeronave6->getModelo()?></h2>
        <h2>Capacidade: <?= $aeronave6->getCapacidade()?></h2>
        <h2 class=<?= $aeronave6->getStatus()?>>Status: <?= $aeronave6->getStatus()?></h2>
    </div>
    </main>
</body>
</html>
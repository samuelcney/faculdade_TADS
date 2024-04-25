<?php
namespace Samucney\Airport;

require_once 'vendor/autoload.php';

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

$RioDeJaneiro = new Cidade('Rio de Janeiro','RJ');
$Joinville = new Cidade('Joinville','SC');
$PortoVelho = new Cidade('Porto Velho','RO');
$Uberaba = new Cidade('Uberaba','MG');

$aeroporto1 = new Aeroporto('Aeroporto Santos Dumont', $RioDeJaneiro,'Praça Senador Salgado Filho, s/nº Centro', 'SBRJ', 'SDU');
$aeroporto1->setLatitude(-22.910176712985347);
$aeroporto1->setLongitude(-43.164440317528424);


$aeroporto2 = new Aeroporto('Aeroporto de Joinville',$Joinville, 'Avenida Santos Dumont, 9.000
Bairro Aventureiro', 'SBJV', 'JOI');
$aeroporto2->setLatitude(-26.225242126805966);
$aeroporto2->setLongitude(-48.80264759120894);

$aeroporto3 = new Aeroporto('Aeroporto de Uberaba', $Uberaba,'Av. Nenê Sabino 2.706','SBUR','UBA');
$aeroporto3->setLatitude(-19.7652673303037);
$aeroporto3->setLongitude(-47.961776858831115);

$aeroporto4 = new Aeroporto('Aeroporto Internacional de Porto Velho',$PortoVelho,'Av. Lauro Sodré, s/n','SBPV','PVH');
$aeroporto4->setLatitude(-8.713969996522284);
$aeroporto4->setLongitude(-63.898405889725645);


$passageiro1 = new Passageiro('José Da Silva', 45, 'Brasileiro', new Bagagem(4.5, 3));
$passageiro2 = new Passageiro('Márcio Pereira', 34, 'Brasileiro', new Bagagem(2.75, 1));
$passageiro3 = new Passageiro('Diego Fernandez', 23, 'Boliviano', new Bagagem(3.06, 2));
$passageiro4 = new Passageiro('John Linus', 40, 'Norte-Americano', new Bagagem(2.44, 1));

$comissario1 = new Comissario('Julia Lima', 29, 'Brasileira', true, 6, 3000, 'S/N');
$comissario1->addIdiomas('Português');
$comissario1->addIdiomas('Inglês');
$comissario1->addIdiomas('Italiano');

echo 'Idiomas de '.$comissario1->getNome().': | ';
foreach($comissario1->getIdiomas() as $idiomas) {
    echo $idiomas.' | ';
}

$piloto1 = new Piloto('Hamilton Neves', 45, 'Brasileiro', 550, $RioDeJaneiro, 8000, 'Comd Hamilton');

$voo1 = new Voo(1345, $aeroporto1, $aeroporto2, $aeronave3);
$voo2 = new Voo(1346, $aeroporto4, $aeroporto2, $aeronave1);
$voo3 = new Voo(1676, $aeroporto1, $aeroporto4, $aeronave4);

$voo1->addTripulantes($piloto1);
$voo1->addTripulantes($comissario1);

$passagem1 = new Passagem($passageiro1, $voo1);
$passagem2 = new Passagem($passageiro2, $voo1);
$passagem3 = new Passagem($passageiro3, $voo2);
$passagem4 = new Passagem($passageiro4, $voo3);	

$avioes =  array($aeronave1,$aeronave2,$aeronave3,$aeronave4,$aeronave5,$aeronave6);
$aeroportos = array($aeroporto1,$aeroporto2,$aeroporto3,$aeroporto4);

echo '------------------------------------------' . "\n";

echo 'Aeroportos cadastrados:' ."\n";
foreach($aeroportos as $infos){
    echo '->'.$infos->getNome() . "\n";
} 
echo "\n";
echo 'Aeronaves cadastradas: ' ."\n";
foreach($avioes as $infos){
    echo '->'.$infos->getModelo() .' - '.$infos->getStatus()."\n";
}

$voos = array($voo1,$voo2,$voo3);

foreach($voos as $voo){
    echo "\n".'Distância entre '.$voo->getOrigem()->getNome().' e '.$voo->getDestino()->getNome().' = '.number_format($voo->calcularDistancia(), 2, '.', '').' Km'."\n";
    echo 'Tempo de Voo: '.number_format($voo->calcularTempoVoo(), 2, '.', '')."\n";
}

$passagens = array($passagem1, $passagem2, $passagem3, $passagem4);

foreach($passagens as $passagem)
{
    echo $passagem->fazerCheckin();
}

echo 'Passageiros do Voo N° '.$voo1->getNumeroVoo()."\n";
foreach($voo1->getPassageiros() as $passageiro){
    echo $passageiro->getNome().";\n";
}

echo "\n";

echo 'Tripulantes do Voo N° '.$voo1->getNumeroVoo()."\n";
foreach($voo1->getTripulantes() as $tripulantes){
    echo $tripulantes->getNome().' - '.$tripulantes->getAlcunha().";\n";
}












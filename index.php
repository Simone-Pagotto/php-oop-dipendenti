<?php

require_once('dipendenti.php');

$myPersona = new Persona('Simone','Pagotto','SMNPGT');
echo $myPersona->to_string();
var_dump($myPersona); 

$myImpiegato = new Impiegato('Simone','Pagotto','SMNPGT','001', 1000);
echo $myImpiegato->to_string();
var_dump($myImpiegato);

$myImpiegatoSalariato = new ImpiegatoSalariato('Simone','Pagotto','SMNPGT','001',220,80);
/* echo $myImpiegatoSalariato->to_string(); */
var_dump($myImpiegatoSalariato);
echo $myImpiegatoSalariato->calcola_compenso();

$myImpiegatoAOre = new ImpiegatoSalariato('Simone','Pagotto','SMNPGT','001',140,5);
/* echo $myImpiegatoAOre->to_string(); */
var_dump($myImpiegatoAOre);
echo $myImpiegatoAOre->calcola_compenso();

/* $myProgetto = new Progetto('sito',2000);
var_dump($myProgetto); */

$myImpiegatoSuCommissione = new ImpiegatoSuCommissione('Simone','Pagotto','SMNPGT','001');
/* echo $myImpiegatoAOre->to_string(); */
var_dump($myImpiegatoSuCommissione);
echo $myImpiegatoSuCommissione->calcola_compenso();

?>
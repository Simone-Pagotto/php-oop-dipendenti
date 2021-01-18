<?php

require_once('dipendenti.php');

$myPersona = new Persona('Simone','Pagotto','SMNPGT');
echo $myPersona->to_string();
var_dump($myPersona); 

$myImpiegato = new Impiegato('Simone','Pagotto','SMNPGT','001', 1000);
var_dump($myImpiegato);

$myImpiegatoSalariato = new ImpiegatoSalariato('Simone','Pagotto','SMNPGT','001',220,80);
var_dump($myImpiegatoSalariato);
echo $myImpiegatoSalariato->calcola_compenso();
?>